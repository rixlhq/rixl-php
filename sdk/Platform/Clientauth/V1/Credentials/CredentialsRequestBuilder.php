<?php

namespace Rixl\Sdk\Platform\Clientauth\V1\Credentials;

use Exception;
use Http\Promise\Promise;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;
use Rixl\Sdk\Models\Clientauth\V1\CreateClientCredentialRequest;
use Rixl\Sdk\Models\Clientauth\V1\CreateClientCredentialResponse;
use Rixl\Sdk\Models\Clientauth\V1\ListClientCredentialsResponse;
use Rixl\Sdk\Platform\Clientauth\V1\Credentials\Item\WithCredential_ItemRequestBuilder;

/**
 * Builds and executes requests for operations under /platform/clientauth/v1/credentials
*/
class CredentialsRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Gets an item from the Rixl/Sdk.platform.clientauth.v1.credentials.item collection
     * @param string $credential_id Unique identifier of the item
     * @return WithCredential_ItemRequestBuilder
    */
    public function byCredential_id(string $credential_id): WithCredential_ItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['credential_id'] = $credential_id;
        return new WithCredential_ItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Instantiates a new CredentialsRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/platform/clientauth/v1/credentials{?orgId*,pagination%2Elimit*,pagination%2Eoffset*}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * ListClientCredentials
     * @param CredentialsRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<ListClientCredentialsResponse|null>
     * @throws Exception
    */
    public function get(?CredentialsRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        return $this->requestAdapter->sendAsync($requestInfo, [ListClientCredentialsResponse::class, 'createFromDiscriminatorValue'], null);
    }

    /**
     * CreateClientCredential
     * @param CreateClientCredentialRequest $body The request body
     * @param CredentialsRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<CreateClientCredentialResponse|null>
     * @throws Exception
    */
    public function post(CreateClientCredentialRequest $body, ?CredentialsRequestBuilderPostRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPostRequestInformation($body, $requestConfiguration);
        return $this->requestAdapter->sendAsync($requestInfo, [CreateClientCredentialResponse::class, 'createFromDiscriminatorValue'], null);
    }

    /**
     * ListClientCredentials
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
     * CreateClientCredential
     * @param CreateClientCredentialRequest $body The request body
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
