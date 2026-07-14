<?php

namespace Rixl\Sdk\Auth\V1\Passkey\Login\Begin;

use Exception;
use Http\Promise\Promise;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;
use Rixl\Sdk\Models\Auth\V1\PasskeyBeginResponse;
use Rixl\Sdk\Models\Auth\V1\PasskeyLoginBeginRequest;

/**
 * Builds and executes requests for operations under /auth/v1/passkey/login/begin
*/
class BeginRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Instantiates a new BeginRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/auth/v1/passkey/login/begin');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * PasskeyLoginBegin
     * @param PasskeyLoginBeginRequest $body options and credential carry the WebAuthn ceremony payloads verbatim as JSON (the browser credential API consumes them as-is), so they are opaque bytes.
     * @param BeginRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<PasskeyBeginResponse|null>
     * @throws Exception
    */
    public function post(PasskeyLoginBeginRequest $body, ?BeginRequestBuilderPostRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPostRequestInformation($body, $requestConfiguration);
        return $this->requestAdapter->sendAsync($requestInfo, [PasskeyBeginResponse::class, 'createFromDiscriminatorValue'], null);
    }

    /**
     * PasskeyLoginBegin
     * @param PasskeyLoginBeginRequest $body options and credential carry the WebAuthn ceremony payloads verbatim as JSON (the browser credential API consumes them as-is), so they are opaque bytes.
     * @param BeginRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPostRequestInformation(PasskeyLoginBeginRequest $body, ?BeginRequestBuilderPostRequestConfiguration $requestConfiguration = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = $this->urlTemplate;
        $requestInfo->pathParameters = $this->pathParameters;
        $requestInfo->httpMethod = HttpMethod::POST;
        if ($requestConfiguration !== null) {
            $requestInfo->addHeaders($requestConfiguration->headers);
            $requestInfo->addRequestOptions(...$requestConfiguration->options);
        }
        $requestInfo->tryAddHeader('Accept', "application/json");
        $requestInfo->setContentFromParsable($this->requestAdapter, "application/json", $body);
        return $requestInfo;
    }

    /**
     * Returns a request builder with the provided arbitrary URL. Using this method means any other path or query parameters are ignored.
     * @param string $rawUrl The raw URL to use for the request builder.
     * @return BeginRequestBuilder
    */
    public function withUrl(string $rawUrl): BeginRequestBuilder {
        return new BeginRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
