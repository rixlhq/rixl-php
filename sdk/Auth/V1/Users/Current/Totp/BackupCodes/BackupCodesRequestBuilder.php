<?php

namespace Rixl\Sdk\Auth\V1\Users\Current\Totp\BackupCodes;

use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Rixl\Sdk\Auth\V1\Users\Current\Totp\BackupCodes\Regenerate\RegenerateRequestBuilder;

/**
 * Builds and executes requests for operations under /auth/v1/users/current/totp/backup-codes
*/
class BackupCodesRequestBuilder extends BaseRequestBuilder 
{
    /**
     * The regenerate property
    */
    public function regenerate(): RegenerateRequestBuilder {
        return new RegenerateRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Instantiates a new BackupCodesRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/auth/v1/users/current/totp/backup-codes');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

}
