<?php

namespace Rixl\Sdk\Posts\V1\Projects\Item;

use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Rixl\Sdk\Posts\V1\Projects\Item\Feeds\FeedsRequestBuilder;
use Rixl\Sdk\Posts\V1\Projects\Item\Posts\PostsRequestBuilder;

/**
 * Builds and executes requests for operations under /posts/v1/projects/{project_id}
*/
class WithProject_ItemRequestBuilder extends BaseRequestBuilder 
{
    /**
     * The feeds property
    */
    public function feeds(): FeedsRequestBuilder {
        return new FeedsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The posts property
    */
    public function posts(): PostsRequestBuilder {
        return new PostsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Instantiates a new WithProject_ItemRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/posts/v1/projects/{project_id}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

}
