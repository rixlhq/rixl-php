<?php

namespace Rixl\Sdk\Feeds\V1\Projects\Item\Feeds;

use Exception;
use Http\Promise\Promise;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;
use Rixl\Sdk\Feeds\V1\Projects\Item\Feeds\Item\WithFeed_ItemRequestBuilder;
use Rixl\Sdk\Models\Feeds\V1\Feed;
use Rixl\Sdk\Models\Feeds\V1\ListFeedsResponse;

/**
 * Builds and executes requests for operations under /feeds/v1/projects/{project_id}/feeds
*/
class FeedsRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Gets an item from the Rixl/Sdk.feeds.v1.projects.item.feeds.item collection
     * @param string $feed_id Unique identifier of the item
     * @return WithFeed_ItemRequestBuilder
    */
    public function byFeed_id(string $feed_id): WithFeed_ItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['feed_id'] = $feed_id;
        return new WithFeed_ItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Instantiates a new FeedsRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/feeds/v1/projects/{project_id}/feeds{?pagination%2Elimit*,pagination%2Eoffset*}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * ListFeeds
     * @param FeedsRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<ListFeedsResponse|null>
     * @throws Exception
    */
    public function get(?FeedsRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        return $this->requestAdapter->sendAsync($requestInfo, [ListFeedsResponse::class, 'createFromDiscriminatorValue'], null);
    }

    /**
     * CreateFeed
     * @param FeedsPostRequestBody $body The request body
     * @param FeedsRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<Feed|null>
     * @throws Exception
    */
    public function post(FeedsPostRequestBody $body, ?FeedsRequestBuilderPostRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPostRequestInformation($body, $requestConfiguration);
        return $this->requestAdapter->sendAsync($requestInfo, [Feed::class, 'createFromDiscriminatorValue'], null);
    }

    /**
     * ListFeeds
     * @param FeedsRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?FeedsRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = $this->urlTemplate;
        $requestInfo->pathParameters = $this->pathParameters;
        $requestInfo->httpMethod = HttpMethod::GET;
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
     * CreateFeed
     * @param FeedsPostRequestBody $body The request body
     * @param FeedsRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPostRequestInformation(FeedsPostRequestBody $body, ?FeedsRequestBuilderPostRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * @return FeedsRequestBuilder
    */
    public function withUrl(string $rawUrl): FeedsRequestBuilder {
        return new FeedsRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
