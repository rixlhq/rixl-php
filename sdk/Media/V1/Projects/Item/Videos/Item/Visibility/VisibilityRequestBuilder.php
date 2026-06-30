<?php

namespace Rixl\Sdk\Media\V1\Projects\Item\Videos\Item\Visibility;

use Exception;
use Http\Promise\Promise;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;
use Rixl\Sdk\Models\Gateway\UpdateVisibilityBody;
use Rixl\Sdk\Models\Videosv1\GetVideoResponse;

/**
 * Builds and executes requests for operations under /media/v1/projects/{projectId}/videos/{videoId}/visibility
*/
class VisibilityRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Instantiates a new VisibilityRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/media/v1/projects/{projectId}/videos/{videoId}/visibility');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Updates a video's visibility (public, unlisted, or private). Requires project access.
     * @param UpdateVisibilityBody $body Visibility
     * @param VisibilityRequestBuilderPutRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<GetVideoResponse|null>
     * @throws Exception
    */
    public function put(UpdateVisibilityBody $body, ?VisibilityRequestBuilderPutRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPutRequestInformation($body, $requestConfiguration);
        return $this->requestAdapter->sendAsync($requestInfo, [GetVideoResponse::class, 'createFromDiscriminatorValue'], null);
    }

    /**
     * Updates a video's visibility (public, unlisted, or private). Requires project access.
     * @param UpdateVisibilityBody $body Visibility
     * @param VisibilityRequestBuilderPutRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPutRequestInformation(UpdateVisibilityBody $body, ?VisibilityRequestBuilderPutRequestConfiguration $requestConfiguration = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = $this->urlTemplate;
        $requestInfo->pathParameters = $this->pathParameters;
        $requestInfo->httpMethod = HttpMethod::PUT;
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
