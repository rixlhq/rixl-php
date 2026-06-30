<?php

namespace Rixl\Sdk\Auth\V1\Memberships;

use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Rixl\Sdk\Auth\V1\Memberships\Active\ActiveRequestBuilder;
use Rixl\Sdk\Auth\V1\Memberships\Item\WithOrgItemRequestBuilder;
use Rixl\Sdk\Auth\V1\Memberships\Pending\PendingRequestBuilder;

/**
 * Builds and executes requests for operations under /auth/v1/memberships
*/
class MembershipsRequestBuilder extends BaseRequestBuilder 
{
    /**
     * The active property
    */
    public function active(): ActiveRequestBuilder {
        return new ActiveRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The pending property
    */
    public function pending(): PendingRequestBuilder {
        return new PendingRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Gets an item from the Rixl/Sdk.auth.v1.memberships.item collection
     * @param string $orgId Membership/organization ID
     * @return WithOrgItemRequestBuilder
    */
    public function byOrgId(string $orgId): WithOrgItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['orgId'] = $orgId;
        return new WithOrgItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Instantiates a new MembershipsRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/auth/v1/memberships');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

}
