<?php

namespace Rixl\Sdk\Media\V1;

use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Rixl\Sdk\Media\V1\Images\ImagesRequestBuilder;
use Rixl\Sdk\Media\V1\Languages\LanguagesRequestBuilder;
use Rixl\Sdk\Media\V1\Projects\ProjectsRequestBuilder;
use Rixl\Sdk\Media\V1\Videos\VideosRequestBuilder;

/**
 * Builds and executes requests for operations under /media/v1
*/
class V1RequestBuilder extends BaseRequestBuilder 
{
    /**
     * The images property
    */
    public function images(): ImagesRequestBuilder {
        return new ImagesRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The languages property
    */
    public function languages(): LanguagesRequestBuilder {
        return new LanguagesRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The projects property
    */
    public function projects(): ProjectsRequestBuilder {
        return new ProjectsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The videos property
    */
    public function videos(): VideosRequestBuilder {
        return new VideosRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Instantiates a new V1RequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/media/v1');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

}
