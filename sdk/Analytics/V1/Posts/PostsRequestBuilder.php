<?php

namespace Rixl\Sdk\Analytics\V1\Posts;

use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Rixl\Sdk\Analytics\V1\Posts\Item\WithPost_ItemRequestBuilder;

/**
 * Builds and executes requests for operations under /analytics/v1/posts
*/
class PostsRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Gets an item from the Rixl/Sdk.analytics.v1.posts.item collection
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
        parent::__construct($requestAdapter, [], '{+baseurl}/analytics/v1/posts');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

}
