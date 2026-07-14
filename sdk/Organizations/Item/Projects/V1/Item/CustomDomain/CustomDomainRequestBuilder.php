<?php

namespace Rixl\Sdk\Organizations\Item\Projects\V1\Item\CustomDomain;

use Exception;
use Http\Promise\Promise;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;
use Rixl\Sdk\Models\Project\V1\Project;

/**
 * Builds and executes requests for operations under /organizations/{org_id}/projects/v1/{project_id}/custom-domain
*/
class CustomDomainRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Instantiates a new CustomDomainRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/organizations/{org_id}/projects/v1/{project_id}/custom-domain');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * RemoveCustomDomain
     * @param CustomDomainRequestBuilderDeleteRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<Project|null>
     * @throws Exception
    */
    public function delete(?CustomDomainRequestBuilderDeleteRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toDeleteRequestInformation($requestConfiguration);
        return $this->requestAdapter->sendAsync($requestInfo, [Project::class, 'createFromDiscriminatorValue'], null);
    }

    /**
     * SetCustomDomain
     * @param CustomDomainPutRequestBody $body The request body
     * @param CustomDomainRequestBuilderPutRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<Project|null>
     * @throws Exception
    */
    public function put(CustomDomainPutRequestBody $body, ?CustomDomainRequestBuilderPutRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPutRequestInformation($body, $requestConfiguration);
        return $this->requestAdapter->sendAsync($requestInfo, [Project::class, 'createFromDiscriminatorValue'], null);
    }

    /**
     * RemoveCustomDomain
     * @param CustomDomainRequestBuilderDeleteRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toDeleteRequestInformation(?CustomDomainRequestBuilderDeleteRequestConfiguration $requestConfiguration = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = $this->urlTemplate;
        $requestInfo->pathParameters = $this->pathParameters;
        $requestInfo->httpMethod = HttpMethod::DELETE;
        if ($requestConfiguration !== null) {
            $requestInfo->addHeaders($requestConfiguration->headers);
            $requestInfo->addRequestOptions(...$requestConfiguration->options);
        }
        $requestInfo->tryAddHeader('Accept', "application/json");
        return $requestInfo;
    }

    /**
     * SetCustomDomain
     * @param CustomDomainPutRequestBody $body The request body
     * @param CustomDomainRequestBuilderPutRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPutRequestInformation(CustomDomainPutRequestBody $body, ?CustomDomainRequestBuilderPutRequestConfiguration $requestConfiguration = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = $this->urlTemplate;
        $requestInfo->pathParameters = $this->pathParameters;
        $requestInfo->httpMethod = HttpMethod::PUT;
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
     * @return CustomDomainRequestBuilder
    */
    public function withUrl(string $rawUrl): CustomDomainRequestBuilder {
        return new CustomDomainRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
