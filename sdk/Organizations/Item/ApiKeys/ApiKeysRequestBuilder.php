<?php

namespace Rixl\Sdk\Organizations\Item\ApiKeys;

use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Rixl\Sdk\Organizations\Item\ApiKeys\V1\V1RequestBuilder;

/**
 * Builds and executes requests for operations under /organizations/{org_id}/api-keys
*/
class ApiKeysRequestBuilder extends BaseRequestBuilder 
{
    /**
     * The v1 property
    */
    public function v1(): V1RequestBuilder {
        return new V1RequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Instantiates a new ApiKeysRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/organizations/{org_id}/api-keys');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

}
