<?php

namespace Rixl\Sdk\Platform\Auth\V1\Refresh;

use Exception;
use Http\Promise\Promise;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;
use Rixl\Sdk\Models\Platformauth\V1\RefreshPlatformTokenRequest;
use Rixl\Sdk\Models\Platformauth\V1\TokenResponse;

/**
 * Builds and executes requests for operations under /platform/auth/v1/refresh
*/
class RefreshRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Instantiates a new RefreshRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/platform/auth/v1/refresh');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * RefreshPlatformToken
     * @param RefreshPlatformTokenRequest $body The request body
     * @param RefreshRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<TokenResponse|null>
     * @throws Exception
    */
    public function post(RefreshPlatformTokenRequest $body, ?RefreshRequestBuilderPostRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPostRequestInformation($body, $requestConfiguration);
        return $this->requestAdapter->sendAsync($requestInfo, [TokenResponse::class, 'createFromDiscriminatorValue'], null);
    }

    /**
     * RefreshPlatformToken
     * @param RefreshPlatformTokenRequest $body The request body
     * @param RefreshRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPostRequestInformation(RefreshPlatformTokenRequest $body, ?RefreshRequestBuilderPostRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * @return RefreshRequestBuilder
    */
    public function withUrl(string $rawUrl): RefreshRequestBuilder {
        return new RefreshRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
