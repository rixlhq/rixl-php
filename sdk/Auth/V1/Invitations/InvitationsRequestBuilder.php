<?php

namespace Rixl\Sdk\Auth\V1\Invitations;

use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Rixl\Sdk\Auth\V1\Invitations\Item\WithTokenItemRequestBuilder;

/**
 * Builds and executes requests for operations under /auth/v1/invitations
*/
class InvitationsRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Gets an item from the Rixl/Sdk.auth.v1.invitations.item collection
     * @param string $token Unique identifier of the item
     * @return WithTokenItemRequestBuilder
    */
    public function byToken(string $token): WithTokenItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['token'] = $token;
        return new WithTokenItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Instantiates a new InvitationsRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/auth/v1/invitations');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

}
