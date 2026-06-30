<?php

namespace Rixl\Sdk\Auth\V1\Blog\Broadcast;

use Exception;
use Http\Promise\Promise;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;
use Rixl\Sdk\Models\Authv1\SendBlogBroadcastResponse;
use Rixl\Sdk\Models\Gateway\SendBlogBroadcastBody;

/**
 * Builds and executes requests for operations under /auth/v1/blog/broadcast
*/
class BroadcastRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Instantiates a new BroadcastRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/auth/v1/blog/broadcast');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Triggers a blog newsletter broadcast to all subscribers. Internal endpoint guarded by the service API key (X-Api-Key); called by the blog-publishing pipeline.
     * @param SendBlogBroadcastBody $body Broadcast payload
     * @param BroadcastRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<SendBlogBroadcastResponse|null>
     * @throws Exception
    */
    public function post(SendBlogBroadcastBody $body, ?BroadcastRequestBuilderPostRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPostRequestInformation($body, $requestConfiguration);
        return $this->requestAdapter->sendAsync($requestInfo, [SendBlogBroadcastResponse::class, 'createFromDiscriminatorValue'], null);
    }

    /**
     * Triggers a blog newsletter broadcast to all subscribers. Internal endpoint guarded by the service API key (X-Api-Key); called by the blog-publishing pipeline.
     * @param SendBlogBroadcastBody $body Broadcast payload
     * @param BroadcastRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPostRequestInformation(SendBlogBroadcastBody $body, ?BroadcastRequestBuilderPostRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * @return BroadcastRequestBuilder
    */
    public function withUrl(string $rawUrl): BroadcastRequestBuilder {
        return new BroadcastRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
