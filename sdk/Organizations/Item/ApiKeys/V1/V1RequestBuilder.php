<?php

namespace Rixl\Sdk\Organizations\Item\ApiKeys\V1;

use Exception;
use Http\Promise\Promise;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;
use Rixl\Sdk\Models\Apikeys\V1\CreateApiKeyResponse;
use Rixl\Sdk\Models\Apikeys\V1\ListApiKeysResponse;
use Rixl\Sdk\Organizations\Item\ApiKeys\V1\Item\WithKey_ItemRequestBuilder;

/**
 * Builds and executes requests for operations under /organizations/{org_id}/api-keys/v1
*/
class V1RequestBuilder extends BaseRequestBuilder 
{
    /**
     * Gets an item from the Rixl/Sdk.organizations.item.apiKeys.v1.item collection
     * @param string $key_id Unique identifier of the item
     * @return WithKey_ItemRequestBuilder
    */
    public function byKey_id(string $key_id): WithKey_ItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['key_id'] = $key_id;
        return new WithKey_ItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Instantiates a new V1RequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/organizations/{org_id}/api-keys/v1{?pagination%2Elimit*,pagination%2Eoffset*}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * ListApiKeys
     * @param V1RequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<ListApiKeysResponse|null>
     * @throws Exception
    */
    public function get(?V1RequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        return $this->requestAdapter->sendAsync($requestInfo, [ListApiKeysResponse::class, 'createFromDiscriminatorValue'], null);
    }

    /**
     * CreateApiKey
     * @param V1PostRequestBody $body The request body
     * @param V1RequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<CreateApiKeyResponse|null>
     * @throws Exception
    */
    public function post(V1PostRequestBody $body, ?V1RequestBuilderPostRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPostRequestInformation($body, $requestConfiguration);
        return $this->requestAdapter->sendAsync($requestInfo, [CreateApiKeyResponse::class, 'createFromDiscriminatorValue'], null);
    }

    /**
     * ListApiKeys
     * @param V1RequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?V1RequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * CreateApiKey
     * @param V1PostRequestBody $body The request body
     * @param V1RequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPostRequestInformation(V1PostRequestBody $body, ?V1RequestBuilderPostRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * @return V1RequestBuilder
    */
    public function withUrl(string $rawUrl): V1RequestBuilder {
        return new V1RequestBuilder($rawUrl, $this->requestAdapter);
    }

}
