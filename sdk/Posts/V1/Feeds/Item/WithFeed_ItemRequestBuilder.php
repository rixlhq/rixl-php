<?php

namespace Rixl\Sdk\Posts\V1\Feeds\Item;

use Exception;
use Http\Promise\Promise;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;
use Rixl\Sdk\Models\Posts\V1\ListPostsResponse;
use Rixl\Sdk\Posts\V1\Feeds\Item\Creators\CreatorsRequestBuilder;
use Rixl\Sdk\Posts\V1\Feeds\Item\Item\WithPost_ItemRequestBuilder;

/**
 * Builds and executes requests for operations under /posts/v1/feeds/{feed_id}
*/
class WithFeed_ItemRequestBuilder extends BaseRequestBuilder 
{
    /**
     * The creators property
    */
    public function creators(): CreatorsRequestBuilder {
        return new CreatorsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Gets an item from the Rixl/Sdk.posts.v1.feeds.item.item collection
     * @param string $post_id Unique identifier of the item
     * @return WithPost_ItemRequestBuilder
    */
    public function byPost_id(string $post_id): WithPost_ItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['post_id'] = $post_id;
        return new WithPost_ItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Instantiates a new WithFeed_ItemRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/posts/v1/feeds/{feed_id}{?creatorId*,pagination%2Elimit*,pagination%2Eoffset*,projectId*}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * ListPosts
     * @param WithFeed_ItemRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<ListPostsResponse|null>
     * @throws Exception
    */
    public function get(?WithFeed_ItemRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        return $this->requestAdapter->sendAsync($requestInfo, [ListPostsResponse::class, 'createFromDiscriminatorValue'], null);
    }

    /**
     * ListPosts
     * @param WithFeed_ItemRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?WithFeed_ItemRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * Returns a request builder with the provided arbitrary URL. Using this method means any other path or query parameters are ignored.
     * @param string $rawUrl The raw URL to use for the request builder.
     * @return WithFeed_ItemRequestBuilder
    */
    public function withUrl(string $rawUrl): WithFeed_ItemRequestBuilder {
        return new WithFeed_ItemRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
