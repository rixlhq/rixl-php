<?php

namespace Rixl\Sdk\Auth\V1\Users\Current\Totp;

use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Rixl\Sdk\Auth\V1\Users\Current\Totp\Delete\DeleteRequestBuilder;
use Rixl\Sdk\Auth\V1\Users\Current\Totp\Setup\SetupRequestBuilder;
use Rixl\Sdk\Auth\V1\Users\Current\Totp\Status\StatusRequestBuilder;
use Rixl\Sdk\Auth\V1\Users\Current\Totp\Verify\VerifyRequestBuilder;

/**
 * Builds and executes requests for operations under /auth/v1/users/current/totp
*/
class TotpRequestBuilder extends BaseRequestBuilder 
{
    /**
     * The deletePath property
    */
    public function deletePath(): DeleteRequestBuilder {
        return new DeleteRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The setup property
    */
    public function setup(): SetupRequestBuilder {
        return new SetupRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The status property
    */
    public function status(): StatusRequestBuilder {
        return new StatusRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The verify property
    */
    public function verify(): VerifyRequestBuilder {
        return new VerifyRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Instantiates a new TotpRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/auth/v1/users/current/totp');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

}
