<?php

namespace Rixl\Sdk\Auth\V1\Invitations;

use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Rixl\Sdk\Auth\V1\Invitations\Accept\AcceptRequestBuilder;
use Rixl\Sdk\Auth\V1\Invitations\Decline\DeclineRequestBuilder;
use Rixl\Sdk\Auth\V1\Invitations\Lookup\LookupRequestBuilder;

/**
 * Builds and executes requests for operations under /auth/v1/invitations
*/
class InvitationsRequestBuilder extends BaseRequestBuilder 
{
    /**
     * The accept property
    */
    public function accept(): AcceptRequestBuilder {
        return new AcceptRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The decline property
    */
    public function decline(): DeclineRequestBuilder {
        return new DeclineRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The lookup property
    */
    public function lookup(): LookupRequestBuilder {
        return new LookupRequestBuilder($this->pathParameters, $this->requestAdapter);
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
