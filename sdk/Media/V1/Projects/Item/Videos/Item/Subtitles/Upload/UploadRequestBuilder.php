<?php

namespace Rixl\Sdk\Media\V1\Projects\Item\Videos\Item\Subtitles\Upload;

use Exception;
use Http\Promise\Promise;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;
use Rixl\Sdk\Media\V1\Projects\Item\Videos\Item\Subtitles\Upload\Complete\CompleteRequestBuilder;
use Rixl\Sdk\Models\Gateway\InitTrackUploadBody;
use Rixl\Sdk\Models\Videosv1\TrackUploadInit;

/**
 * Builds and executes requests for operations under /media/v1/projects/{projectId}/videos/{videoId}/subtitles/upload
*/
class UploadRequestBuilder extends BaseRequestBuilder 
{
    /**
     * The complete property
    */
    public function complete(): CompleteRequestBuilder {
        return new CompleteRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Instantiates a new UploadRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/media/v1/projects/{projectId}/videos/{videoId}/subtitles/upload');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Initiates one or more subtitle uploads for a video.
     * @param InitTrackUploadBody $body Subtitles to upload
     * @param UploadRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<TrackUploadInit|null>
     * @throws Exception
    */
    public function post(InitTrackUploadBody $body, ?UploadRequestBuilderPostRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPostRequestInformation($body, $requestConfiguration);
        return $this->requestAdapter->sendAsync($requestInfo, [TrackUploadInit::class, 'createFromDiscriminatorValue'], null);
    }

    /**
     * Initiates one or more subtitle uploads for a video.
     * @param InitTrackUploadBody $body Subtitles to upload
     * @param UploadRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPostRequestInformation(InitTrackUploadBody $body, ?UploadRequestBuilderPostRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * @return UploadRequestBuilder
    */
    public function withUrl(string $rawUrl): UploadRequestBuilder {
        return new UploadRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
