<?php

namespace Rixl\Sdk\Auth\V1\Organizations\Item;

use Exception;
use Http\Promise\Promise;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;
use Rixl\Sdk\Auth\V1\Organizations\Item\AuditEvents\AuditEventsRequestBuilder;
use Rixl\Sdk\Auth\V1\Organizations\Item\Avatar\AvatarRequestBuilder;
use Rixl\Sdk\Auth\V1\Organizations\Item\ConvertToTeam\ConvertToTeamRequestBuilder;
use Rixl\Sdk\Auth\V1\Organizations\Item\Domain\DomainRequestBuilder;
use Rixl\Sdk\Auth\V1\Organizations\Item\Invitations\InvitationsRequestBuilder;
use Rixl\Sdk\Auth\V1\Organizations\Item\Members\MembersRequestBuilder;
use Rixl\Sdk\Auth\V1\Organizations\Item\Policies\PoliciesRequestBuilder;
use Rixl\Sdk\Auth\V1\Organizations\Item\TransferOwnership\TransferOwnershipRequestBuilder;
use Rixl\Sdk\Models\Auth\V1\Organization;
use Rixl\Sdk\Models\Google\Rpc\Status;

/**
 * Builds and executes requests for operations under /auth/v1/organizations/{org_id}
*/
class WithOrg_ItemRequestBuilder extends BaseRequestBuilder 
{
    /**
     * The auditEvents property
    */
    public function auditEvents(): AuditEventsRequestBuilder {
        return new AuditEventsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The avatar property
    */
    public function avatar(): AvatarRequestBuilder {
        return new AvatarRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The convertToTeam property
    */
    public function convertToTeam(): ConvertToTeamRequestBuilder {
        return new ConvertToTeamRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The domain property
    */
    public function domain(): DomainRequestBuilder {
        return new DomainRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The invitations property
    */
    public function invitations(): InvitationsRequestBuilder {
        return new InvitationsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The members property
    */
    public function members(): MembersRequestBuilder {
        return new MembersRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The policies property
    */
    public function policies(): PoliciesRequestBuilder {
        return new PoliciesRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The transferOwnership property
    */
    public function transferOwnership(): TransferOwnershipRequestBuilder {
        return new TransferOwnershipRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Instantiates a new WithOrg_ItemRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/auth/v1/organizations/{org_id}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * GetOrganization
     * @param WithOrg_ItemRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<Organization|null>
     * @throws Exception
    */
    public function get(?WithOrg_ItemRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                'XXX' => [Status::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [Organization::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * UpdateOrganization
     * @param WithOrg_PatchRequestBody $body The request body
     * @param WithOrg_ItemRequestBuilderPatchRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<Organization|null>
     * @throws Exception
    */
    public function patch(WithOrg_PatchRequestBody $body, ?WithOrg_ItemRequestBuilderPatchRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPatchRequestInformation($body, $requestConfiguration);
        $errorMappings = [
                'XXX' => [Status::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [Organization::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * GetOrganization
     * @param WithOrg_ItemRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?WithOrg_ItemRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = $this->urlTemplate;
        $requestInfo->pathParameters = $this->pathParameters;
        $requestInfo->httpMethod = HttpMethod::GET;
        if ($requestConfiguration !== null) {
            $requestInfo->addHeaders($requestConfiguration->headers);
            $requestInfo->addRequestOptions(...$requestConfiguration->options);
        }
        $requestInfo->tryAddHeader('Accept', "application/json");
        return $requestInfo;
    }

    /**
     * UpdateOrganization
     * @param WithOrg_PatchRequestBody $body The request body
     * @param WithOrg_ItemRequestBuilderPatchRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPatchRequestInformation(WithOrg_PatchRequestBody $body, ?WithOrg_ItemRequestBuilderPatchRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * @return WithOrg_ItemRequestBuilder
    */
    public function withUrl(string $rawUrl): WithOrg_ItemRequestBuilder {
        return new WithOrg_ItemRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
