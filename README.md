# rixl-php

PHP client for the [RIXL](https://rixl.com) API.

[![Packagist](https://img.shields.io/packagist/v/rixl/sdk.svg)](https://packagist.org/packages/rixl/sdk)

## Install

```bash
composer require rixl/sdk
```

Requires PHP 8.2+. The Kiota PHP runtime (HTTP, serializers) is pulled in transitively.

## Quick start

```php
<?php
require __DIR__ . '/vendor/autoload.php';

use Rixl\Sdk\RixlClient;
use Microsoft\Kiota\Authentication\ApiKeyAuthenticationProvider;
use Microsoft\Kiota\Authentication\KeyLocation;
use Microsoft\Kiota\Http\GuzzleRequestAdapter;

$auth = new ApiKeyAuthenticationProvider(
    'YOUR_RIXL_API_KEY', 'X-API-Key', KeyLocation::Header
);
$adapter = new GuzzleRequestAdapter($auth);
$client = new RixlClient($adapter);

$image = $client->images()->byImageId('PS5IMKoFLm')->get()->wait();
echo $image->getId() . "\n";
```

Default base URL: `https://api.rixl.com`. Override with `$adapter->setBaseUrl(...)`.

## Resources

```php
// Feeds
$posts = $client->feeds()->byFeedId('FD4y3QB38S')->get()->wait();

// Images — list, get, delete
$page  = $client->images()->get()->wait();
$image = $client->images()->byImageId('PS5IMKoFLm')->get()->wait();
$client->images()->byImageId('PS5IMKoFLm')->delete()->wait();

// Videos
$videos = $client->videos()->get()->wait();
$video  = $client->videos()->byVideoId('VI9VXQxWXQ')->get()->wait();
```

Upload (init → PUT bytes to presigned URL → complete) and pagination follow the same pattern as the other RIXL SDKs.

## Errors

API errors (400/401/403/404/500) are thrown as `Rixl\Sdk\Models\Github_com_rixlhq_api_internal_errors\ErrorResponse` exceptions; catch and inspect `getCode()` / `getError()`.

## Support

Open an issue at [github.com/rixlhq/rixl-php](https://github.com/rixlhq/rixl-php/issues).
