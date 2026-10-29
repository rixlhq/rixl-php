<?php

namespace Rixl\Sdk\Webhooks\V1\Projects\Item\Endpoints;

use Exception;
use Http\Promise\Promise;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;
use Rixl\Sdk\Models\Webhooks\V1\CreateEndpointResponse;
use Rixl\Sdk\Models\Webhooks\V1\ListEndpointsResponse;
use Rixl\Sdk\Webhooks\V1\Projects\Item\Endpoints\Item\WithEndpoint_ItemRequestBuilder;

/**
 * Builds and executes requests for operations under /webhooks/v1/projects/{project_id}/endpoints
*/
class EndpointsRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Gets an item from the Rixl/Sdk.webhooks.v1.projects.item.endpoints.item collection
     * @param string $endpoint_id The endpoint_id path parameter.
     * @return WithEndpoint_ItemRequestBuilder
    */
    public function byEndpoint_id(string $endpoint_id): WithEndpoint_ItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['endpoint_id'] = $endpoint_id;
        return new WithEndpoint_ItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Instantiates a new EndpointsRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/webhooks/v1/projects/{project_id}/endpoints{?pagination%2Elimit*,pagination%2Eoffset*}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * ListEndpoints
     * @param EndpointsRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<ListEndpointsResponse|null>
     * @throws Exception
    */
    public function get(?EndpointsRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        return $this->requestAdapter->sendAsync($requestInfo, [ListEndpointsResponse::class, 'createFromDiscriminatorValue'], null);
    }

    /**
     * CreateEndpoint registers a new HTTPS endpoint and returns its signing secret exactly once. Store it; only a rotation returns a secret again.
     * @param EndpointsPostRequestBody $body The request body
     * @param EndpointsRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<CreateEndpointResponse|null>
     * @throws Exception
    */
    public function post(EndpointsPostRequestBody $body, ?EndpointsRequestBuilderPostRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPostRequestInformation($body, $requestConfiguration);
        return $this->requestAdapter->sendAsync($requestInfo, [CreateEndpointResponse::class, 'createFromDiscriminatorValue'], null);
    }

    /**
     * ListEndpoints
     * @param EndpointsRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?EndpointsRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * CreateEndpoint registers a new HTTPS endpoint and returns its signing secret exactly once. Store it; only a rotation returns a secret again.
     * @param EndpointsPostRequestBody $body The request body
     * @param EndpointsRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPostRequestInformation(EndpointsPostRequestBody $body, ?EndpointsRequestBuilderPostRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * @return EndpointsRequestBuilder
    */
    public function withUrl(string $rawUrl): EndpointsRequestBuilder {
        return new EndpointsRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
