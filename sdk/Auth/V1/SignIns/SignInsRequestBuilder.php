<?php

namespace Rixl\Sdk\Auth\V1\SignIns;

use Exception;
use Http\Promise\Promise;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;
use Rixl\Sdk\Auth\V1\SignIns\Item\WithSign_in_ItemRequestBuilder;
use Rixl\Sdk\Auth\V1\SignIns\RevokeOthers\RevokeOthersRequestBuilder;
use Rixl\Sdk\Models\Auth\V1\ListSignInsResponse;
use Rixl\Sdk\Models\Google\Rpc\Status;

/**
 * Builds and executes requests for operations under /auth/v1/sign-ins
*/
class SignInsRequestBuilder extends BaseRequestBuilder 
{
    /**
     * The revokeOthers property
    */
    public function revokeOthers(): RevokeOthersRequestBuilder {
        return new RevokeOthersRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Gets an item from the Rixl/Sdk.auth.v1.signIns.item collection
     * @param string $sign_in_id Unique identifier of the item
     * @return WithSign_in_ItemRequestBuilder
    */
    public function bySign_in_id(string $sign_in_id): WithSign_in_ItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['sign_in_id'] = $sign_in_id;
        return new WithSign_in_ItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Instantiates a new SignInsRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/auth/v1/sign-ins');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Lists the caller's sign-ins, most recently used first.
     * @param SignInsRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<ListSignInsResponse|null>
     * @throws Exception
    */
    public function get(?SignInsRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                'XXX' => [Status::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [ListSignInsResponse::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Lists the caller's sign-ins, most recently used first.
     * @param SignInsRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?SignInsRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * @return SignInsRequestBuilder
    */
    public function withUrl(string $rawUrl): SignInsRequestBuilder {
        return new SignInsRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
