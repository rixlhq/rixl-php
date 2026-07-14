<?php

namespace Rixl\Sdk\Auth\V1\Memberships\Item\Members\Item;

use Exception;
use Http\Promise\Promise;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;
use Rixl\Sdk\Auth\V1\Memberships\Item\Members\Item\Policies\PoliciesRequestBuilder;
use Rixl\Sdk\Auth\V1\Memberships\Item\Members\Item\Role\RoleRequestBuilder;
use Rixl\Sdk\Models\Google\Protobuf\EscapedEmpty;

/**
 * Builds and executes requests for operations under /auth/v1/memberships/{org_-id}/members/{member_-id}
*/
class Member_ItemRequestBuilder extends BaseRequestBuilder 
{
    /**
     * The policies property
    */
    public function policies(): PoliciesRequestBuilder {
        return new PoliciesRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The role property
    */
    public function role(): RoleRequestBuilder {
        return new RoleRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Instantiates a new Member_ItemRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/auth/v1/memberships/{org_%2Did}/members/{member_%2Did}{?user%2EactorId*}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * RemoveMember
     * @param Member_ItemRequestBuilderDeleteRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<EscapedEmpty|null>
     * @throws Exception
    */
    public function delete(?Member_ItemRequestBuilderDeleteRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toDeleteRequestInformation($requestConfiguration);
        return $this->requestAdapter->sendAsync($requestInfo, [EscapedEmpty::class, 'createFromDiscriminatorValue'], null);
    }

    /**
     * RemoveMember
     * @param Member_ItemRequestBuilderDeleteRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toDeleteRequestInformation(?Member_ItemRequestBuilderDeleteRequestConfiguration $requestConfiguration = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = $this->urlTemplate;
        $requestInfo->pathParameters = $this->pathParameters;
        $requestInfo->httpMethod = HttpMethod::DELETE;
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
     * @return Member_ItemRequestBuilder
    */
    public function withUrl(string $rawUrl): Member_ItemRequestBuilder {
        return new Member_ItemRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
