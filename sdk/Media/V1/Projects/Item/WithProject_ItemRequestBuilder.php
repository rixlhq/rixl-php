<?php

namespace Rixl\Sdk\Media\V1\Projects\Item;

use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Rixl\Sdk\Media\V1\Projects\Item\Images\ImagesRequestBuilder;
use Rixl\Sdk\Media\V1\Projects\Item\Videos\VideosRequestBuilder;

/**
 * Builds and executes requests for operations under /media/v1/projects/{project_id}
*/
class WithProject_ItemRequestBuilder extends BaseRequestBuilder 
{
    /**
     * The images property
    */
    public function images(): ImagesRequestBuilder {
        return new ImagesRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The videos property
    */
    public function videos(): VideosRequestBuilder {
        return new VideosRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Instantiates a new WithProject_ItemRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/media/v1/projects/{project_id}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

}
