<?php

namespace Rixl\Sdk\Auth\V1\Logout;

use Exception;
use Http\Promise\Promise;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;
use Rixl\Sdk\Models\Auth\V1\LogoutRequest;
use Rixl\Sdk\Models\Google\Protobuf\EscapedEmpty;

/**
 * Builds and executes requests for operations under /auth/v1/logout
*/
class LogoutRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Instantiates a new LogoutRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/auth/v1/logout');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Logout
     * @param LogoutRequest $body The request body
     * @param LogoutRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<EscapedEmpty|null>
     * @throws Exception
    */
    public function post(LogoutRequest $body, ?LogoutRequestBuilderPostRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPostRequestInformation($body, $requestConfiguration);
        return $this->requestAdapter->sendAsync($requestInfo, [EscapedEmpty::class, 'createFromDiscriminatorValue'], null);
    }

    /**
     * Logout
     * @param LogoutRequest $body The request body
     * @param LogoutRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPostRequestInformation(LogoutRequest $body, ?LogoutRequestBuilderPostRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * @return LogoutRequestBuilder
    */
    public function withUrl(string $rawUrl): LogoutRequestBuilder {
        return new LogoutRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
