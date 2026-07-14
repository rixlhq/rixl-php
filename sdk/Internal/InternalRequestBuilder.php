<?php

namespace Rixl\Sdk\Internal;

use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Rixl\Sdk\Internal\Images\ImagesRequestBuilder;
use Rixl\Sdk\Internal\Videos\VideosRequestBuilder;

/**
 * Builds and executes requests for operations under /internal
*/
class InternalRequestBuilder extends BaseRequestBuilder 
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
     * Instantiates a new InternalRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/internal');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

}
