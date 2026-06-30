<?php

namespace Rixl\Sdk\Platform\Clientauth\Credentials;

use Exception;
use Http\Promise\Promise;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;
use Rixl\Sdk\Models\Clientauthv1\CreateClientCredentialResponse;
use Rixl\Sdk\Models\Clientauthv1\ListClientCredentialsResponse;
use Rixl\Sdk\Models\Types\CreateClientCredentialRequest;
use Rixl\Sdk\Platform\Clientauth\Credentials\Item\WithCredentialItemRequestBuilder;

/**
 * Builds and executes requests for operations under /platform/clientauth/credentials
*/
class CredentialsRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Gets an item from the Rixl/Sdk.platform.clientauth.credentials.item collection
     * @param string $credentialId Client credential ID
     * @return WithCredentialItemRequestBuilder
    */
    public function byCredentialId(string $credentialId): WithCredentialItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['credentialId'] = $credentialId;
        return new WithCredentialItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Instantiates a new CredentialsRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/platform/clientauth/credentials{?limit*,offset*}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * List client credentials for the specified organization
     * @param CredentialsRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<ListClientCredentialsResponse|null>
     * @throws Exception
    */
    public function get(?CredentialsRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        return $this->requestAdapter->sendAsync($requestInfo, [ListClientCredentialsResponse::class, 'createFromDiscriminatorValue'], null);
    }

    /**
     * Create a new client credential for the authenticated organization
     * @param CreateClientCredentialRequest $body Client credential creation request
     * @param CredentialsRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<CreateClientCredentialResponse|null>
     * @throws Exception
    */
    public function post(CreateClientCredentialRequest $body, ?CredentialsRequestBuilderPostRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPostRequestInformation($body, $requestConfiguration);
        return $this->requestAdapter->sendAsync($requestInfo, [CreateClientCredentialResponse::class, 'createFromDiscriminatorValue'], null);
    }

    /**
     * List client credentials for the specified organization
     * @param CredentialsRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?CredentialsRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * Create a new client credential for the authenticated organization
     * @param CreateClientCredentialRequest $body Client credential creation request
     * @param CredentialsRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPostRequestInformation(CreateClientCredentialRequest $body, ?CredentialsRequestBuilderPostRequestConfiguration $requestConfiguration = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = $this->urlTemplate;
        $requestInfo->pathParameters = $this->pathParameters;
        $requestInfo->httpMethod = HttpMethod::POST;
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
     * @return CredentialsRequestBuilder
    */
    public function withUrl(string $rawUrl): CredentialsRequestBuilder {
        return new CredentialsRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
