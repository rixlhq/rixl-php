<?php

namespace Rixl\Sdk\Media\V1\Projects\Item\Videos\Item;

use Exception;
use Http\Promise\Promise;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;
use Rixl\Sdk\Media\V1\Projects\Item\Videos\Item\AudioTracks\AudioTracksRequestBuilder;
use Rixl\Sdk\Media\V1\Projects\Item\Videos\Item\Chapters\ChaptersRequestBuilder;
use Rixl\Sdk\Media\V1\Projects\Item\Videos\Item\Subtitles\SubtitlesRequestBuilder;
use Rixl\Sdk\Media\V1\Projects\Item\Videos\Item\Thumbnail\ThumbnailRequestBuilder;
use Rixl\Sdk\Media\V1\Projects\Item\Videos\Item\Upload\UploadRequestBuilder;
use Rixl\Sdk\Media\V1\Projects\Item\Videos\Item\Visibility\VisibilityRequestBuilder;
use Rixl\Sdk\Models\Videosv1\DeleteResult;
use Rixl\Sdk\Models\Videosv1\GetVideoResponse;

/**
 * Builds and executes requests for operations under /media/v1/projects/{projectId}/videos/{videoId}
*/
class WithVideoItemRequestBuilder extends BaseRequestBuilder 
{
    /**
     * The audioTracks property
    */
    public function audioTracks(): AudioTracksRequestBuilder {
        return new AudioTracksRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The chapters property
    */
    public function chapters(): ChaptersRequestBuilder {
        return new ChaptersRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The subtitles property
    */
    public function subtitles(): SubtitlesRequestBuilder {
        return new SubtitlesRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The thumbnail property
    */
    public function thumbnail(): ThumbnailRequestBuilder {
        return new ThumbnailRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The upload property
    */
    public function upload(): UploadRequestBuilder {
        return new UploadRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The visibility property
    */
    public function visibility(): VisibilityRequestBuilder {
        return new VisibilityRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Instantiates a new WithVideoItemRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/media/v1/projects/{projectId}/videos/{videoId}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Deletes a video from a project.
     * @param WithVideoItemRequestBuilderDeleteRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<DeleteResult|null>
     * @throws Exception
    */
    public function delete(?WithVideoItemRequestBuilderDeleteRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toDeleteRequestInformation($requestConfiguration);
        return $this->requestAdapter->sendAsync($requestInfo, [DeleteResult::class, 'createFromDiscriminatorValue'], null);
    }

    /**
     * Returns a single video within a project, including private media. Requires project access.
     * @param WithVideoItemRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<GetVideoResponse|null>
     * @throws Exception
    */
    public function get(?WithVideoItemRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        return $this->requestAdapter->sendAsync($requestInfo, [GetVideoResponse::class, 'createFromDiscriminatorValue'], null);
    }

    /**
     * Deletes a video from a project.
     * @param WithVideoItemRequestBuilderDeleteRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toDeleteRequestInformation(?WithVideoItemRequestBuilderDeleteRequestConfiguration $requestConfiguration = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = $this->urlTemplate;
        $requestInfo->pathParameters = $this->pathParameters;
        $requestInfo->httpMethod = HttpMethod::DELETE;
        if ($requestConfiguration !== null) {
            $requestInfo->addHeaders($requestConfiguration->headers);
            $requestInfo->addRequestOptions(...$requestConfiguration->options);
        }
        $requestInfo->tryAddHeader('Accept', "application/json");
        return $requestInfo;
    }

    /**
     * Returns a single video within a project, including private media. Requires project access.
     * @param WithVideoItemRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?WithVideoItemRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * @return WithVideoItemRequestBuilder
    */
    public function withUrl(string $rawUrl): WithVideoItemRequestBuilder {
        return new WithVideoItemRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
