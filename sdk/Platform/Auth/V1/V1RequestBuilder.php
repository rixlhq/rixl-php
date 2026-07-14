<?php

namespace Rixl\Sdk\Platform\Auth\V1;

use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Rixl\Sdk\Platform\Auth\V1\Refresh\RefreshRequestBuilder;
use Rixl\Sdk\Platform\Auth\V1\Token\TokenRequestBuilder;

/**
 * Builds and executes requests for operations under /platform/auth/v1
*/
class V1RequestBuilder extends BaseRequestBuilder 
{
    /**
     * The refresh property
    */
    public function refresh(): RefreshRequestBuilder {
        return new RefreshRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The token property
    */
    public function token(): TokenRequestBuilder {
        return new TokenRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Instantiates a new V1RequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/platform/auth/v1');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

}
