<?php

namespace Rixl\Sdk\Organizations\Item;

use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Rixl\Sdk\Organizations\Item\ApiKeys\ApiKeysRequestBuilder;
use Rixl\Sdk\Organizations\Item\Projects\ProjectsRequestBuilder;

/**
 * Builds and executes requests for operations under /organizations/{org_id}
*/
class WithOrg_ItemRequestBuilder extends BaseRequestBuilder 
{
    /**
     * The apiKeys property
    */
    public function apiKeys(): ApiKeysRequestBuilder {
        return new ApiKeysRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The projects property
    */
    public function projects(): ProjectsRequestBuilder {
        return new ProjectsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Instantiates a new WithOrg_ItemRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/organizations/{org_id}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

}
