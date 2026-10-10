<?php

namespace Rixl\Sdk\Posts\V1\Projects\Item\Feeds\Item\Posts;

use Exception;
use Http\Promise\Promise;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;
use Rixl\Sdk\Models\Posts\V1\CreatePostResponse;
use Rixl\Sdk\Models\Posts\V1\ListPostsResponse;
use Rixl\Sdk\Posts\V1\Projects\Item\Feeds\Item\Posts\Creators\CreatorsRequestBuilder;
use Rixl\Sdk\Posts\V1\Projects\Item\Feeds\Item\Posts\Item\WithPost_ItemRequestBuilder;
use Rixl\Sdk\Posts\V1\Projects\Item\Feeds\Item\Posts\Upload\UploadRequestBuilder;

/**
 * Builds and executes requests for operations under /posts/v1/projects/{project_id}/feeds/{feed_id}/posts
*/
class PostsRequestBuilder extends BaseRequestBuilder 
{
    /**
     * The creators property
    */
    public function creators(): CreatorsRequestBuilder {
        return new CreatorsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The upload property
    */
    public function upload(): UploadRequestBuilder {
        return new UploadRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Gets an item from the Rixl/Sdk.posts.v1.projects.item.feeds.item.posts.item collection
     * @param string $post_id Unique identifier of the item
     * @return WithPost_ItemRequestBuilder
    */
    public function byPost_id(string $post_id): WithPost_ItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['post_id'] = $post_id;
        return new WithPost_ItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Instantiates a new PostsRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/posts/v1/projects/{project_id}/feeds/{feed_id}/posts{?creator_id*,pagination%2Elimit*,pagination%2Eoffset*}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * ListPosts
     * @param PostsRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<ListPostsResponse|null>
     * @throws Exception
    */
    public function get(?PostsRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        return $this->requestAdapter->sendAsync($requestInfo, [ListPostsResponse::class, 'createFromDiscriminatorValue'], null);
    }

    /**
     * CreatePost
     * @param PostsPostRequestBody $body The request body
     * @param PostsRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<CreatePostResponse|null>
     * @throws Exception
    */
    public function post(PostsPostRequestBody $body, ?PostsRequestBuilderPostRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPostRequestInformation($body, $requestConfiguration);
        return $this->requestAdapter->sendAsync($requestInfo, [CreatePostResponse::class, 'createFromDiscriminatorValue'], null);
    }

    /**
     * ListPosts
     * @param PostsRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?PostsRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * CreatePost
     * @param PostsPostRequestBody $body The request body
     * @param PostsRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPostRequestInformation(PostsPostRequestBody $body, ?PostsRequestBuilderPostRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * @return PostsRequestBuilder
    */
    public function withUrl(string $rawUrl): PostsRequestBuilder {
        return new PostsRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
