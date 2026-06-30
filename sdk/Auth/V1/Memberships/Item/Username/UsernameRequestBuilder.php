<?php

namespace Rixl\Sdk\Auth\V1\Memberships\Item\Username;

use Exception;
use Http\Promise\Promise;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;
use Rixl\Sdk\Models\Authv1\UpdateOrgUsernameResponse;
use Rixl\Sdk\Models\Gateway\UpdateOrgUsernameBody;

/**
 * Builds and executes requests for operations under /auth/v1/memberships/{orgId}/username
*/
class UsernameRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Instantiates a new UsernameRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/auth/v1/memberships/{orgId}/username');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Updates the unique username handle of the specified organization.
     * @param UpdateOrgUsernameBody $body New username
     * @param UsernameRequestBuilderPutRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<UpdateOrgUsernameResponse|null>
     * @throws Exception
    */
    public function put(UpdateOrgUsernameBody $body, ?UsernameRequestBuilderPutRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPutRequestInformation($body, $requestConfiguration);
        return $this->requestAdapter->sendAsync($requestInfo, [UpdateOrgUsernameResponse::class, 'createFromDiscriminatorValue'], null);
    }

    /**
     * Updates the unique username handle of the specified organization.
     * @param UpdateOrgUsernameBody $body New username
     * @param UsernameRequestBuilderPutRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPutRequestInformation(UpdateOrgUsernameBody $body, ?UsernameRequestBuilderPutRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * @return UsernameRequestBuilder
    */
    public function withUrl(string $rawUrl): UsernameRequestBuilder {
        return new UsernameRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
