<?php

namespace Rixl\Sdk\Auth\V1\Memberships\Item\Members\Item\Role;

use Exception;
use Http\Promise\Promise;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;
use Rixl\Sdk\Models\Auth\V1\MembershipMutation;

/**
 * Builds and executes requests for operations under /auth/v1/memberships/{org_-id}/members/{member_-id}/role
*/
class RoleRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Instantiates a new RoleRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/auth/v1/memberships/{org_%2Did}/members/{member_%2Did}/role');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * UpdateMemberRole
     * @param RolePatchRequestBody $body The request body
     * @param RoleRequestBuilderPatchRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<MembershipMutation|null>
     * @throws Exception
    */
    public function patch(RolePatchRequestBody $body, ?RoleRequestBuilderPatchRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPatchRequestInformation($body, $requestConfiguration);
        return $this->requestAdapter->sendAsync($requestInfo, [MembershipMutation::class, 'createFromDiscriminatorValue'], null);
    }

    /**
     * UpdateMemberRole
     * @param RolePatchRequestBody $body The request body
     * @param RoleRequestBuilderPatchRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPatchRequestInformation(RolePatchRequestBody $body, ?RoleRequestBuilderPatchRequestConfiguration $requestConfiguration = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = $this->urlTemplate;
        $requestInfo->pathParameters = $this->pathParameters;
        $requestInfo->httpMethod = HttpMethod::PATCH;
        if ($requestConfiguration !== null) {
            $requestInfo->addHeaders($requestConfiguration->headers);
            $requestInfo->addRequestOptions(...$requestConfiguration->options);
        }
        $requestInfo->tryAddHeader('Accept', "application/json");
        $requestInfo->setContentFromParsable($this->requestAdapter, "application/json", $body);
        return $requestInfo;
    }

    /**
     * Returns a request builder with the provided arbitrary URL. Using this method means any other path or query parameters are ignored.
     * @param string $rawUrl The raw URL to use for the request builder.
     * @return RoleRequestBuilder
    */
    public function withUrl(string $rawUrl): RoleRequestBuilder {
        return new RoleRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
