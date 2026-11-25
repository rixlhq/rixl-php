<?php

namespace Rixl\Sdk\Auth\V1\Organizations\Item\ConvertToTeam;

use Exception;
use Http\Promise\Promise;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;
use Rixl\Sdk\Models\Auth\V1\ConvertToTeamOrganizationResponse;
use Rixl\Sdk\Models\Google\Rpc\Status;

/**
 * Builds and executes requests for operations under /auth/v1/organizations/{org_-id}/convert-to-team
*/
class ConvertToTeamRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Instantiates a new ConvertToTeamRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/auth/v1/organizations/{org_%2Did}/convert-to-team');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * ConvertToTeamOrganization
     * @param ConvertToTeamRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<ConvertToTeamOrganizationResponse|null>
     * @throws Exception
    */
    public function post(?ConvertToTeamRequestBuilderPostRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPostRequestInformation($requestConfiguration);
        $errorMappings = [
                'XXX' => [Status::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [ConvertToTeamOrganizationResponse::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * ConvertToTeamOrganization
     * @param ConvertToTeamRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPostRequestInformation(?ConvertToTeamRequestBuilderPostRequestConfiguration $requestConfiguration = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = $this->urlTemplate;
        $requestInfo->pathParameters = $this->pathParameters;
        $requestInfo->httpMethod = HttpMethod::POST;
        if ($requestConfiguration !== null) {
            $requestInfo->addHeaders($requestConfiguration->headers);
            $requestInfo->addRequestOptions(...$requestConfiguration->options);
        }
        $requestInfo->tryAddHeader('Accept', "application/json");
        return $requestInfo;
    }

    /**
     * Returns a request builder with the provided arbitrary URL. Using this method means any other path or query parameters are ignored.
     * @param string $rawUrl The raw URL to use for the request builder.
     * @return ConvertToTeamRequestBuilder
    */
    public function withUrl(string $rawUrl): ConvertToTeamRequestBuilder {
        return new ConvertToTeamRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
