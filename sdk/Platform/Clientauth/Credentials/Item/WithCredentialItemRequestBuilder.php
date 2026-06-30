<?php

namespace Rixl\Sdk\Platform\Clientauth\Credentials\Item;

use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Rixl\Sdk\Platform\Clientauth\Credentials\Item\Revoke\RevokeRequestBuilder;

/**
 * Builds and executes requests for operations under /platform/clientauth/credentials/{credentialId}
*/
class WithCredentialItemRequestBuilder extends BaseRequestBuilder 
{
    /**
     * The revoke property
    */
    public function revoke(): RevokeRequestBuilder {
        return new RevokeRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Instantiates a new WithCredentialItemRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/platform/clientauth/credentials/{credentialId}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

}
