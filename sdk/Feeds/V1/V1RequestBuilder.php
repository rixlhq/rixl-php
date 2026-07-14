<?php

namespace Rixl\Sdk\Feeds\V1;

use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Rixl\Sdk\Feeds\V1\Projects\ProjectsRequestBuilder;

/**
 * Builds and executes requests for operations under /feeds/v1
*/
class V1RequestBuilder extends BaseRequestBuilder 
{
    /**
     * The projects property
    */
    public function projects(): ProjectsRequestBuilder {
        return new ProjectsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Instantiates a new V1RequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/feeds/v1');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

}
