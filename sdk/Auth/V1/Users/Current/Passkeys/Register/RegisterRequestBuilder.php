<?php

namespace Rixl\Sdk\Auth\V1\Users\Current\Passkeys\Register;

use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Rixl\Sdk\Auth\V1\Users\Current\Passkeys\Register\Begin\BeginRequestBuilder;
use Rixl\Sdk\Auth\V1\Users\Current\Passkeys\Register\Finish\FinishRequestBuilder;

/**
 * Builds and executes requests for operations under /auth/v1/users/current/passkeys/register
*/
class RegisterRequestBuilder extends BaseRequestBuilder 
{
    /**
     * The begin property
    */
    public function begin(): BeginRequestBuilder {
        return new BeginRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The finish property
    */
    public function finish(): FinishRequestBuilder {
        return new FinishRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Instantiates a new RegisterRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/auth/v1/users/current/passkeys/register');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

}
