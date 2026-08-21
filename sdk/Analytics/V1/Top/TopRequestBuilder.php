<?php

namespace Rixl\Sdk\Analytics\V1\Top;

use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Rixl\Sdk\Analytics\V1\Top\Feeds\FeedsRequestBuilder;
use Rixl\Sdk\Analytics\V1\Top\Images\ImagesRequestBuilder;
use Rixl\Sdk\Analytics\V1\Top\Posts\PostsRequestBuilder;
use Rixl\Sdk\Analytics\V1\Top\Videos\VideosRequestBuilder;

/**
 * Builds and executes requests for operations under /analytics/v1/top
*/
class TopRequestBuilder extends BaseRequestBuilder 
{
    /**
     * The feeds property
    */
    public function feeds(): FeedsRequestBuilder {
        return new FeedsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The images property
    */
    public function images(): ImagesRequestBuilder {
        return new ImagesRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The posts property
    */
    public function posts(): PostsRequestBuilder {
        return new PostsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The videos property
    */
    public function videos(): VideosRequestBuilder {
        return new VideosRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Instantiates a new TopRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/analytics/v1/top');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

}
