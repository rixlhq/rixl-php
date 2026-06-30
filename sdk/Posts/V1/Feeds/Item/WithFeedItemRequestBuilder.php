<?php

namespace Rixl\Sdk\Posts\V1\Feeds\Item;

use Exception;
use Http\Promise\Promise;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;
use Rixl\Sdk\Models\Postsv1\ListPostsResponse;
use Rixl\Sdk\Posts\V1\Feeds\Item\Creators\CreatorsRequestBuilder;
use Rixl\Sdk\Posts\V1\Feeds\Item\Item\WithPostItemRequestBuilder;

/**
 * Builds and executes requests for operations under /posts/v1/feeds/{feedId}
*/
class WithFeedItemRequestBuilder extends BaseRequestBuilder 
{
    /**
     * The creators property
    */
    public function creators(): CreatorsRequestBuilder {
        return new CreatorsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Gets an item from the Rixl/Sdk.posts.v1.feeds.item.item collection
     * @param string $postId Post ID
     * @return WithPostItemRequestBuilder
    */
    public function byPostId(string $postId): WithPostItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['postId'] = $postId;
        return new WithPostItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Instantiates a new WithFeedItemRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/posts/v1/feeds/{feedId}{?limit*,offset*}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Public, unauthenticated listing of posts in a feed, with pagination.
     * @param WithFeedItemRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<ListPostsResponse|null>
     * @throws Exception
    */
    public function get(?WithFeedItemRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        return $this->requestAdapter->sendAsync($requestInfo, [ListPostsResponse::class, 'createFromDiscriminatorValue'], null);
    }

    /**
     * Public, unauthenticated listing of posts in a feed, with pagination.
     * @param WithFeedItemRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?WithFeedItemRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * @return WithFeedItemRequestBuilder
    */
    public function withUrl(string $rawUrl): WithFeedItemRequestBuilder {
        return new WithFeedItemRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
