<?php

namespace Rixl\Sdk\Platform\ApiKeys;

use Exception;
use Http\Promise\Promise;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;
use Rixl\Sdk\Models\Apikeysv1\CreateApiKeyResponse;
use Rixl\Sdk\Models\Apikeysv1\ListApiKeysResponse;
use Rixl\Sdk\Models\Types\CreateAPIKeyRequest;
use Rixl\Sdk\Platform\ApiKeys\Item\WithKeyItemRequestBuilder;

/**
 * Builds and executes requests for operations under /platform/api-keys
*/
class ApiKeysRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Gets an item from the Rixl/Sdk.platform.apiKeys.item collection
     * @param string $keyId API key ID
     * @return WithKeyItemRequestBuilder
    */
    public function byKeyId(string $keyId): WithKeyItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['keyId'] = $keyId;
        return new WithKeyItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Instantiates a new ApiKeysRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/platform/api-keys{?limit*,offset*}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Get all API keys for a specific organization
     * @param ApiKeysRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<ListApiKeysResponse|null>
     * @throws Exception
    */
    public function get(?ApiKeysRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        return $this->requestAdapter->sendAsync($requestInfo, [ListApiKeysResponse::class, 'createFromDiscriminatorValue'], null);
    }

    /**
     * Create a new API key for a project in the authenticated organization
     * @param CreateAPIKeyRequest $body API key creation request
     * @param ApiKeysRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<CreateApiKeyResponse|null>
     * @throws Exception
    */
    public function post(CreateAPIKeyRequest $body, ?ApiKeysRequestBuilderPostRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPostRequestInformation($body, $requestConfiguration);
        return $this->requestAdapter->sendAsync($requestInfo, [CreateApiKeyResponse::class, 'createFromDiscriminatorValue'], null);
    }

    /**
     * Get all API keys for a specific organization
     * @param ApiKeysRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?ApiKeysRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * Create a new API key for a project in the authenticated organization
     * @param CreateAPIKeyRequest $body API key creation request
     * @param ApiKeysRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPostRequestInformation(CreateAPIKeyRequest $body, ?ApiKeysRequestBuilderPostRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * @return ApiKeysRequestBuilder
    */
    public function withUrl(string $rawUrl): ApiKeysRequestBuilder {
        return new ApiKeysRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
