<?php

namespace Rixl\Sdk\Posts\V1\Projects\Item\Feeds\Item;

use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Rixl\Sdk\Posts\V1\Projects\Item\Feeds\Item\Posts\PostsRequestBuilder;

/**
 * Builds and executes requests for operations under /posts/v1/projects/{project_id}/feeds/{feed_id}
*/
class WithFeed_ItemRequestBuilder extends BaseRequestBuilder 
{
    /**
     * The posts property
    */
    public function posts(): PostsRequestBuilder {
        return new PostsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Instantiates a new WithFeed_ItemRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/posts/v1/projects/{project_id}/feeds/{feed_id}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

}
