<?php

namespace Rixl\Sdk\Organizations\Item\Projects\V1\Item\VideoQuality;

use Exception;
use Http\Promise\Promise;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;
use Rixl\Sdk\Models\Project\V1\Project;

/**
 * Builds and executes requests for operations under /organizations/{org_id}/projects/v1/{project_id}/video-quality
*/
class VideoQualityRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Instantiates a new VideoQualityRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/organizations/{org_id}/projects/v1/{project_id}/video-quality');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * UpdateVideoQuality
     * @param VideoQualityPatchRequestBody $body The request body
     * @param VideoQualityRequestBuilderPatchRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<Project|null>
     * @throws Exception
    */
    public function patch(VideoQualityPatchRequestBody $body, ?VideoQualityRequestBuilderPatchRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPatchRequestInformation($body, $requestConfiguration);
        return $this->requestAdapter->sendAsync($requestInfo, [Project::class, 'createFromDiscriminatorValue'], null);
    }

    /**
     * UpdateVideoQuality
     * @param VideoQualityPatchRequestBody $body The request body
     * @param VideoQualityRequestBuilderPatchRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPatchRequestInformation(VideoQualityPatchRequestBody $body, ?VideoQualityRequestBuilderPatchRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * @return VideoQualityRequestBuilder
    */
    public function withUrl(string $rawUrl): VideoQualityRequestBuilder {
        return new VideoQualityRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
