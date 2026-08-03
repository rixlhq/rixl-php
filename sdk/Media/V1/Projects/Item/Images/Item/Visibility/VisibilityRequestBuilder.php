<?php

namespace Rixl\Sdk\Media\V1\Projects\Item\Images\Item\Visibility;

use Exception;
use Http\Promise\Promise;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;
use Rixl\Sdk\Models\Images\V1\UpdateImageVisibilityResponse;

/**
 * Builds and executes requests for operations under /media/v1/projects/{project_id}/images/{image_id}/visibility
*/
class VisibilityRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Instantiates a new VisibilityRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/media/v1/projects/{project_id}/images/{image_id}/visibility');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * UpdateImageVisibility
     * @param VisibilityPatchRequestBody $body The request body
     * @param VisibilityRequestBuilderPatchRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<UpdateImageVisibilityResponse|null>
     * @throws Exception
    */
    public function patch(VisibilityPatchRequestBody $body, ?VisibilityRequestBuilderPatchRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPatchRequestInformation($body, $requestConfiguration);
        return $this->requestAdapter->sendAsync($requestInfo, [UpdateImageVisibilityResponse::class, 'createFromDiscriminatorValue'], null);
    }

    /**
     * UpdateImageVisibility
     * @param VisibilityPatchRequestBody $body The request body
     * @param VisibilityRequestBuilderPatchRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPatchRequestInformation(VisibilityPatchRequestBody $body, ?VisibilityRequestBuilderPatchRequestConfiguration $requestConfiguration = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = $this->urlTemplate;
        $requestInfo->pathParameters = $this->pathParameters;
        $requestInfo->httpMethod = HttpMethod::PATCH;
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
     * @return VisibilityRequestBuilder
    */
    public function withUrl(string $rawUrl): VisibilityRequestBuilder {
        return new VisibilityRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
