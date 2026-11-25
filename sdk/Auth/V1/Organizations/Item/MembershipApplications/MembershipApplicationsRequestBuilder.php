<?php

namespace Rixl\Sdk\Auth\V1\Organizations\Item\MembershipApplications;

use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Rixl\Sdk\Auth\V1\Organizations\Item\MembershipApplications\Item\WithUser_ItemRequestBuilder;

/**
 * Builds and executes requests for operations under /auth/v1/organizations/{org_-id}/membership-applications
*/
class MembershipApplicationsRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Gets an item from the Rixl/Sdk.auth.v1.organizations.item.membershipApplications.item collection
     * @param string $user_id Unique identifier of the item
     * @return WithUser_ItemRequestBuilder
    */
    public function byUser_id(string $user_id): WithUser_ItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['user_id'] = $user_id;
        return new WithUser_ItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Instantiates a new MembershipApplicationsRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/auth/v1/organizations/{org_%2Did}/membership-applications');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

}
