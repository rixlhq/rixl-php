<?php

namespace Rixl\Sdk\Auth\V1\Memberships;

use Exception;
use Http\Promise\Promise;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;
use Rixl\Sdk\Auth\V1\Memberships\Active\ActiveRequestBuilder;
use Rixl\Sdk\Auth\V1\Memberships\Item\Org_ItemRequestBuilder;
use Rixl\Sdk\Models\Auth\V1\ListMembershipsResponse;

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
     * Gets an item from the Rixl/Sdk.auth.v1.memberships.item collection
     * @param string $org_Id Unique identifier of the item
     * @return Org_ItemRequestBuilder
    */
    public function byOrg_Id(string $org_Id): Org_ItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['org_%2Did'] = $org_Id;
        return new Org_ItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Instantiates a new MembershipsRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/auth/v1/memberships{?limit*,offset*,state*,user%2EuserId*}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * ListMemberships
     * @param MembershipsRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<ListMembershipsResponse|null>
     * @throws Exception
    */
    public function get(?MembershipsRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        return $this->requestAdapter->sendAsync($requestInfo, [ListMembershipsResponse::class, 'createFromDiscriminatorValue'], null);
    }

    /**
     * ListMemberships
     * @param MembershipsRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?MembershipsRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = $this->urlTemplate;
        $requestInfo->pathParameters = $this->pathParameters;
        $requestInfo->httpMethod = HttpMethod::GET;
        if ($requestConfiguration !== null) {
            $requestInfo->addHeaders($requestConfiguration->headers);
            if ($requestConfiguration->queryParameters !== null) {
                $requestInfo->setQueryParameters($requestConfiguration->queryParameters);
            }
            $requestInfo->addRequestOptions(...$requestConfiguration->options);
        }
        $requestInfo->tryAddHeader('Accept', "application/json");
        return $requestInfo;
    }

    /**
     * Returns a request builder with the provided arbitrary URL. Using this method means any other path or query parameters are ignored.
     * @param string $rawUrl The raw URL to use for the request builder.
     * @return MembershipsRequestBuilder
    */
    public function withUrl(string $rawUrl): MembershipsRequestBuilder {
        return new MembershipsRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
