<?php

namespace Rixl\Sdk\Webhooks\V1\Projects\Item\Endpoints\Item\RotateSecret;

use Exception;
use Http\Promise\Promise;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;
use Rixl\Sdk\Models\Webhooks\V1\RotateEndpointSecretResponse;

/**
 * Builds and executes requests for operations under /webhooks/v1/projects/{project_id}/endpoints/{endpoint_id}/rotate-secret
*/
class RotateSecretRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Instantiates a new RotateSecretRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/webhooks/v1/projects/{project_id}/endpoints/{endpoint_id}/rotate-secret');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * RotateEndpointSecret installs a fresh signing secret. For 24h deliveries are signed with both the old and the new secret so consumers can migrate.
     * @param RotateSecretRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<RotateEndpointSecretResponse|null>
     * @throws Exception
    */
    public function post(?RotateSecretRequestBuilderPostRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPostRequestInformation($requestConfiguration);
        return $this->requestAdapter->sendAsync($requestInfo, [RotateEndpointSecretResponse::class, 'createFromDiscriminatorValue'], null);
    }

    /**
     * RotateEndpointSecret installs a fresh signing secret. For 24h deliveries are signed with both the old and the new secret so consumers can migrate.
     * @param RotateSecretRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPostRequestInformation(?RotateSecretRequestBuilderPostRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * @return RotateSecretRequestBuilder
    */
    public function withUrl(string $rawUrl): RotateSecretRequestBuilder {
        return new RotateSecretRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
