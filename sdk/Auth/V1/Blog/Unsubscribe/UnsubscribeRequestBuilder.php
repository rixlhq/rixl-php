<?php

namespace Rixl\Sdk\Auth\V1\Blog\Unsubscribe;

use Exception;
use Http\Promise\Promise;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;
use Rixl\Sdk\Auth\V1\Blog\Unsubscribe\Email\EmailRequestBuilder;
use Rixl\Sdk\Models\Google\Protobuf\EscapedEmpty;

/**
 * Builds and executes requests for operations under /auth/v1/blog/unsubscribe
*/
class UnsubscribeRequestBuilder extends BaseRequestBuilder 
{
    /**
     * The email property
    */
    public function email(): EmailRequestBuilder {
        return new EmailRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Instantiates a new UnsubscribeRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/auth/v1/blog/unsubscribe{?userId*}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * UnsubscribeBlog
     * @param UnsubscribeRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<EscapedEmpty|null>
     * @throws Exception
    */
    public function post(?UnsubscribeRequestBuilderPostRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPostRequestInformation($requestConfiguration);
        return $this->requestAdapter->sendAsync($requestInfo, [EscapedEmpty::class, 'createFromDiscriminatorValue'], null);
    }

    /**
     * UnsubscribeBlog
     * @param UnsubscribeRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPostRequestInformation(?UnsubscribeRequestBuilderPostRequestConfiguration $requestConfiguration = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = $this->urlTemplate;
        $requestInfo->pathParameters = $this->pathParameters;
        $requestInfo->httpMethod = HttpMethod::POST;
        if ($requestConfiguration !== null) {
            $requestInfo->addHeaders($requestConfiguration->headers);
            if ($requestConfiguration->queryParameters !== null) {
                $requestInfo->setQueryParameters($requestConfiguration->queryParameters);
            }
            $requestInfo->addRequestOptions(...$requestConfiguration->options);
        }
        $requestInfo->tryAddHeader('Accept', "application/json");
        return $requestInfo;
    }

    /**
     * Returns a request builder with the provided arbitrary URL. Using this method means any other path or query parameters are ignored.
     * @param string $rawUrl The raw URL to use for the request builder.
     * @return UnsubscribeRequestBuilder
    */
    public function withUrl(string $rawUrl): UnsubscribeRequestBuilder {
        return new UnsubscribeRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
