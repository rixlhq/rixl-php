# Rixl PHP SDK

[![Packagist](https://img.shields.io/packagist/v/rixl/sdk.svg)](https://packagist.org/packages/rixl/sdk)

The official PHP client for the [Rixl](https://rixl.com) API.

Rixl handles the media side of your product — uploading and delivering images
and videos, organising them into feeds and posts, and reporting on how people
engage with them. It also covers the account layer around that: users and
organisations, sign-in, subscriptions and invoices. This SDK gives you all of it
from PHP, as a fluent request builder per path and a class for every request and
response body.

Requires PHP 8.2 or later.

## Installation

```bash
composer require rixl/sdk
```

That pulls in the Kiota runtime the generated code is built on — the
abstractions, the Guzzle transport and the JSON, form, text and multipart
serializers.

## Getting started

You build a client out of two pieces: something that authenticates requests, and
a request adapter that sends them. Then you point the adapter at the API.

Kiota's PHP runtime ships no API-key provider, so write one — it is a single
method:

```php
<?php

use Http\Promise\FulfilledPromise;
use Http\Promise\Promise;
use Microsoft\Kiota\Abstractions\Authentication\AuthenticationProvider;
use Microsoft\Kiota\Abstractions\RequestInformation;

final class ApiKeyProvider implements AuthenticationProvider
{
    public function __construct(private string $apiKey) {}

    public function authenticateRequest(
        RequestInformation $request,
        array $additionalAuthenticationContext = []
    ): Promise {
        $request->addHeader('X-API-Key', $this->apiKey);

        return new FulfilledPromise($request);
    }
}
```

Then:

```php
<?php
require __DIR__ . '/vendor/autoload.php';

use Microsoft\Kiota\Http\GuzzleRequestAdapter;
use Rixl\Sdk\RixlClient;

$adapter = new GuzzleRequestAdapter(new ApiKeyProvider(getenv('RIXL_API_KEY')));
$adapter->setBaseUrl('https://api.rixl.com');

$client = new RixlClient($adapter);

$page = $client->media()->v1()->projects()
    ->byProject_id(getenv('RIXL_PROJECT_ID'))
    ->images()
    ->get()
    ->wait();

foreach ($page->getImages() as $image) {
    echo $image->getId(), "\n";
}
```

The adapter has no base URL of its own, so `setBaseUrl` is not optional — call
it before you make a request, and point it somewhere else when you are testing
against another environment.

Every call returns a promise. `->wait()` blocks and gives you the parsed
response, or throws.

## Authentication

There are two ways to identify yourself, and they answer different questions.

### API keys — your backend calling as itself

An API key represents your organisation. Use it for work your own systems do:
importing a catalogue, running a nightly report, reconciling invoices. Keep it
out of source control and read it from the environment, as above.

The key travels as the `X-API-Key` header. Anyone holding it can do anything
your organisation can, so it belongs on a server — never in anything you ship to
users.

### Client credentials — acting on behalf of one of your users

If you are building on top of Rixl and your own users each need their own slice
of it, use client credentials. You exchange a client ID and secret for a
short-lived token scoped to a single end user, so one customer can never read
another's media.

Create the credential with an API-key client. The secret comes back once:

```php
use Rixl\Sdk\Models\Clientauth\V1\CreateClientCredentialRequest;

$request = new CreateClientCredentialRequest();
$request->setName('Production backend');
$request->setOrgId($orgId);

$created = $client->platform()->clientauth()->v1()->credentials()
    ->post($request)
    ->wait();

echo $created->getCredential()->getClientId(), "\n";
echo $created->getClientSecret(), "\n";
```

Then mint a token per user. `subject` is your own identifier for that person —
whatever your database calls them:

```php
use Rixl\Sdk\Models\Clientauth\V1\MintClientTokenRequest;

$mint = new MintClientTokenRequest();
$mint->setClientId(getenv('RIXL_CLIENT_ID'));
$mint->setClientSecret(getenv('RIXL_CLIENT_SECRET'));
$mint->setSubject($user->id);
$mint->setProjectId(getenv('RIXL_PROJECT_ID'));
$mint->setTtlMinutes(15);

$token = $client->platform()->clientauth()->v1()->token()->post($mint)->wait();
```

Tokens last at most 15 minutes and there is no refresh token — when one expires
you mint another. Nothing in the SDK does that for you, so wrap the mint call in
an `AccessTokenProvider` and let the bearer provider ask for a token whenever it
needs one:

```php
use Microsoft\Kiota\Abstractions\Authentication\BaseBearerTokenAuthenticationProvider;

$userAdapter = new GuzzleRequestAdapter(
    new BaseBearerTokenAuthenticationProvider($tokenProvider)
);
$userAdapter->setBaseUrl('https://api.rixl.com');

$userClient = new RixlClient($userAdapter);
```

`AccessTokenProvider` has two methods. `getAuthorizationTokenAsync()` is where
you return `getAccessToken()` from a mint call — as a promise — and cache it
until `getExpiresAt()`, and `getAllowedHostsValidator()` can return
`new AllowedHostsValidator()` to allow every host. Tokens go out as
`Authorization: Bearer`.

Credentials are managed through the same builder you created them with:
`credentials()->get()` lists them and
`credentials()->byCredential_id($id)->revoke()->post()` kills one. Revoking
stops new tokens immediately; ones already issued die within 15 minutes.

### Public endpoints

Some reads need no credentials at all — fetching a public image or video,
reading a public feed, listing supported languages, and the sign-in flows under
`/auth/v1`. Point an anonymous provider at those:

```php
use Microsoft\Kiota\Abstractions\Authentication\AnonymousAuthenticationProvider;

$adapter = new GuzzleRequestAdapter(new AnonymousAuthenticationProvider());
$adapter->setBaseUrl('https://api.rixl.com');
$client = new RixlClient($adapter);

$image = $client->media()->v1()->images()->byImage_id($imageId)->get()->wait();
$languages = $client->media()->v1()->languages()->get()->wait();
$feed = $client->posts()->v1()->feeds()->byFeed_id($feedId)->get()->wait();
```

Mind the difference between the two image paths: `media()->v1()->images()` is
the public read, while
`media()->v1()->projects()->byProject_id($id)->images()` is the authenticated
collection you list, upload to and delete from.

## What you can do

Every area of the API is a method on the client, and the path you type mirrors
the URL.

**Media** — `$client->media()->v1()`. `images()` and `videos()` for public
reads, and `projects()->byProject_id($id)` for everything else: listing,
uploading, deleting, visibility, plus `audioTracks()`, `chapters()` and
`subtitles()` on a video. `languages()` lists what you can localise into.

**Content** — `$client->posts()->v1()` for posts and feeds,
`$client->feeds()->v1()->projects()->byProject_id($id)->feeds()` for feed
configuration, and `$client->organizations()->byOrg_id($id)->projects()` for the
projects everything else hangs off. That is why so many calls take a project ID.

**Analytics** — `$client->analytics()->v1()`: `dashboard()`, `events()`,
`posts()`, `videos()`, `feeds()`, `funnels()`, `retention()`, `realtime()`,
`top()`. Track events and read back engagement, playback and live activity.

**Billing** — `$client->billing()->v1()`: `plans()`, `subscription()`,
`invoices()`, `paymentMethods()`, `checkout()`, `storageUsage()`,
`bandwidthUsage()`, `tax()`, `address()`.

**Accounts** — `$client->auth()->v1()`: `register()`, `login()`, `token()`,
`users()`, `passkey()`, `password()`, `providers()`, `memberships()`,
`policies()`, `email()`, `blog()`. Sign-in flows including passkeys and TOTP,
organisation membership and roles, and transactional email.

**Platform** — `$client->platform()` for `auth()->v1()` and
`clientauth()->v1()`, and `$client->organizations()->byOrg_id($id)->apiKeys()`
for API keys.

`$client->internal()` is storage-callback plumbing that Rixl calls itself. You
should not need it.

## Working with resources

Builders compose the same way everywhere, so once you have used one you have
used all of them. Reads and deletes:

```php
$images = $client->media()->v1()->projects()->byProject_id($projectId)->images();

$page = $images->get()->wait();
$images->byImage_id($imageId)->delete()->wait();
```

Calls that send data take a generated body class with setters:

```php
use Rixl\Sdk\Media\V1\Projects\Item\Images\Upload\UploadPostRequestBody;

$body = new UploadPostRequestBody();
$body->setName('photo.jpg');
$body->setProjectId($projectId);

$upload = $images->upload()->post($body)->wait();
```

Everything is nullable. A field you never set is left out of the request rather
than sent empty, and a field the API omits comes back as `null` — check before
you use it.

## Uploading files

Uploads happen in two steps. You ask Rixl for a URL, then send the bytes
straight to storage — they never pass through the API, so large files stay fast:

```php
use GuzzleHttp\Client;

$upload = $images->upload()->post($body)->wait();

(new Client())->put($upload->getUploadUrl(), [
    'body' => fopen('photo.jpg', 'r'),
    'headers' => ['Content-Type' => 'image/jpeg'],
]);
```

Videos work the same way through `videos()->upload()`, except the response gives
you two URLs — `getVideoUploadUrl()` for the file and `getPosterUploadUrl()` for
its poster image.

There is no "finish" call to make. Storage tells Rixl when the object lands and
the image or video becomes available on its own.

## Pagination

List calls take a limit and an offset, set through the request configuration:

```php
use Rixl\Sdk\Media\V1\Projects\Item\Images\ImagesRequestBuilderGetQueryParameters;
use Rixl\Sdk\Media\V1\Projects\Item\Images\ImagesRequestBuilderGetRequestConfiguration;

$limit = 50;
$offset = 0;

while (true) {
    $config = new ImagesRequestBuilderGetRequestConfiguration(
        queryParameters: new ImagesRequestBuilderGetQueryParameters($limit, $offset)
    );

    $page = $images->get($config)->wait();
    if (empty($page->getImages())) {
        break;
    }

    foreach ($page->getImages() as $image) {
        echo $image->getId(), "\n";
    }

    $offset += $limit;
}
```

Nothing pages for you — ask for the next offset yourself. The API returns a
total alongside each page, but the PHP models do not expose it, so stop when a
page comes back short.

## Handling errors

Anything that is not a 2xx is thrown as
`Microsoft\Kiota\Abstractions\ApiException`, which carries the status code and
the response headers:

```php
use Microsoft\Kiota\Abstractions\ApiException;

try {
    $image = $client->media()->v1()->images()->byImage_id($imageId)->get()->wait();
} catch (ApiException $e) {
    fwrite(STDERR, "rixl returned {$e->getResponseStatusCode()}\n");
    throw $e;
}
```

What the codes mean:

| Status | What happened | What to do |
| --- | --- | --- |
| 400 | The request was malformed or failed validation | Fix the request; retrying will not help |
| 401 | The key or token is missing, expired or invalid | Check the credential |
| 403 | The credential is valid but not allowed to do this | Check what it is permitted to do |
| 404 | No such resource, or it belongs to another organisation | Check the ID and the project |
| 429 | You are going too fast | Back off and retry |
| 5xx | Something broke on our side | Retry with backoff |

Connection failures and timeouts surface as Guzzle exceptions, not as
`ApiException`.

## Timeouts

Requests go out through whatever Guzzle client you hand the adapter, so timeouts
stay yours to control:

```php
use GuzzleHttp\Client;

$adapter = new GuzzleRequestAdapter(
    new ApiKeyProvider(getenv('RIXL_API_KEY')),
    null,
    null,
    new Client(['timeout' => 30])
);
$adapter->setBaseUrl('https://api.rixl.com');
```

Guzzle's handler stack on that client is also where middleware goes if you want
tracing headers on every outbound request.

## Versioning

This package follows [SemVer](https://semver.org/spec/v2.0.0.html). New API
resources arrive in minor releases; renamed or removed operations only in major
ones. If an upgrade breaks you unexpectedly, please open an issue — we would
rather hear about it.

## Support

Bugs and feature requests:
[github.com/rixlhq/rixl-php/issues](https://github.com/rixlhq/rixl-php/issues).
