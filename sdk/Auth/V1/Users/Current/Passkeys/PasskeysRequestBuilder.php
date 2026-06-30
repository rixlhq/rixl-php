<?php

namespace Rixl\Sdk\Auth\V1\Users\Current\Passkeys;

use Exception;
use Http\Promise\Promise;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;
use Rixl\Sdk\Auth\V1\Users\Current\Passkeys\Item\PasskeysItemRequestBuilder;
use Rixl\Sdk\Auth\V1\Users\Current\Passkeys\Register\RegisterRequestBuilder;
use Rixl\Sdk\Models\Authv1\ListPasskeysResponse;

/**
 * Builds and executes requests for operations under /auth/v1/users/current/passkeys
*/
class PasskeysRequestBuilder extends BaseRequestBuilder 
{
    /**
     * The register property
    */
    public function register(): RegisterRequestBuilder {
        return new RegisterRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Gets an item from the Rixl/Sdk.auth.v1.users.current.passkeys.item collection
     * @param string $id Passkey ID
     * @return PasskeysItemRequestBuilder
    */
    public function byId(string $id): PasskeysItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['id'] = $id;
        return new PasskeysItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Instantiates a new PasskeysRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/auth/v1/users/current/passkeys');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Returns all passkeys registered to the authenticated user.
     * @param PasskeysRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<ListPasskeysResponse|null>
     * @throws Exception
    */
    public function get(?PasskeysRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        return $this->requestAdapter->sendAsync($requestInfo, [ListPasskeysResponse::class, 'createFromDiscriminatorValue'], null);
    }

    /**
     * Returns all passkeys registered to the authenticated user.
     * @param PasskeysRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?PasskeysRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * @return PasskeysRequestBuilder
    */
    public function withUrl(string $rawUrl): PasskeysRequestBuilder {
        return new PasskeysRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
