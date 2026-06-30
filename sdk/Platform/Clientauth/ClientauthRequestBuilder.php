<?php

namespace Rixl\Sdk\Platform\Clientauth;

use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Rixl\Sdk\Platform\Clientauth\Credentials\CredentialsRequestBuilder;
use Rixl\Sdk\Platform\Clientauth\Token\TokenRequestBuilder;

/**
 * Builds and executes requests for operations under /platform/clientauth
*/
class ClientauthRequestBuilder extends BaseRequestBuilder 
{
    /**
     * The credentials property
    */
    public function credentials(): CredentialsRequestBuilder {
        return new CredentialsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The token property
    */
    public function token(): TokenRequestBuilder {
        return new TokenRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Instantiates a new ClientauthRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/platform/clientauth');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

}
