<?php

namespace Rixl\Sdk\Organization;

use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Rixl\Sdk\Organization\Item\WithOrgItemRequestBuilder;

/**
 * Builds and executes requests for operations under /organization
*/
class OrganizationRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Gets an item from the Rixl/Sdk.organization.item collection
     * @param string $orgId Organization ID
     * @return WithOrgItemRequestBuilder
    */
    public function byOrgId(string $orgId): WithOrgItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['orgId'] = $orgId;
        return new WithOrgItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Instantiates a new OrganizationRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/organization');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

}
