<?php

namespace Rixl\Sdk\Auth\V1\Providers;

use Exception;
use Http\Promise\Promise;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;
use Rixl\Sdk\Auth\V1\Providers\Connect\ConnectRequestBuilder;
use Rixl\Sdk\Auth\V1\Providers\Item\WithProviderItemRequestBuilder;
use Rixl\Sdk\Models\Authv1\ListProvidersResponse;

/**
 * Builds and executes requests for operations under /auth/v1/providers
*/
class ProvidersRequestBuilder extends BaseRequestBuilder 
{
    /**
     * The connect property
    */
    public function connect(): ConnectRequestBuilder {
        return new ConnectRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Gets an item from the Rixl/Sdk.auth.v1.providers.item collection
     * @param string $provider Provider name
     * @return WithProviderItemRequestBuilder
    */
    public function byProvider(string $provider): WithProviderItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['provider'] = $provider;
        return new WithProviderItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Instantiates a new ProvidersRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/auth/v1/providers');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Returns the list of social providers connected to the authenticated user's account.
     * @param ProvidersRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<ListProvidersResponse|null>
     * @throws Exception
    */
    public function get(?ProvidersRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        return $this->requestAdapter->sendAsync($requestInfo, [ListProvidersResponse::class, 'createFromDiscriminatorValue'], null);
    }

    /**
     * Returns the list of social providers connected to the authenticated user's account.
     * @param ProvidersRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?ProvidersRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * Returns a request builder with the provided arbitrary URL. Using this method means any other path or query parameters are ignored.
     * @param string $rawUrl The raw URL to use for the request builder.
     * @return ProvidersRequestBuilder
    */
    public function withUrl(string $rawUrl): ProvidersRequestBuilder {
        return new ProvidersRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
