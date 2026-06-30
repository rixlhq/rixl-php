<?php

namespace Rixl\Sdk\Media\V1\Projects\Item\Videos\Item\AudioTracks;

use Exception;
use Http\Promise\Promise;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;
use Rixl\Sdk\Media\V1\Projects\Item\Videos\Item\AudioTracks\Item\WithTrackItemRequestBuilder;
use Rixl\Sdk\Media\V1\Projects\Item\Videos\Item\AudioTracks\Language\LanguageRequestBuilder;
use Rixl\Sdk\Media\V1\Projects\Item\Videos\Item\AudioTracks\Upload\UploadRequestBuilder;
use Rixl\Sdk\Models\Videosv1\DeleteResult;
use Rixl\Sdk\Models\Videosv1\ListAudioTracksResponse;

/**
 * Builds and executes requests for operations under /media/v1/projects/{projectId}/videos/{videoId}/audio-tracks
*/
class AudioTracksRequestBuilder extends BaseRequestBuilder 
{
    /**
     * The language property
    */
    public function language(): LanguageRequestBuilder {
        return new LanguageRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The upload property
    */
    public function upload(): UploadRequestBuilder {
        return new UploadRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Gets an item from the Rixl/Sdk.media.v1.projects.item.videos.item.audioTracks.item collection
     * @param string $trackId Audio track ID
     * @return WithTrackItemRequestBuilder
    */
    public function byTrackId(string $trackId): WithTrackItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['trackId'] = $trackId;
        return new WithTrackItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Instantiates a new AudioTracksRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/media/v1/projects/{projectId}/videos/{videoId}/audio-tracks');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Deletes all audio tracks for a video.
     * @param AudioTracksRequestBuilderDeleteRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<DeleteResult|null>
     * @throws Exception
    */
    public function delete(?AudioTracksRequestBuilderDeleteRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toDeleteRequestInformation($requestConfiguration);
        return $this->requestAdapter->sendAsync($requestInfo, [DeleteResult::class, 'createFromDiscriminatorValue'], null);
    }

    /**
     * Returns a video's audio tracks within a project, including for private media. Requires project access.
     * @param AudioTracksRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<ListAudioTracksResponse|null>
     * @throws Exception
    */
    public function get(?AudioTracksRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        return $this->requestAdapter->sendAsync($requestInfo, [ListAudioTracksResponse::class, 'createFromDiscriminatorValue'], null);
    }

    /**
     * Deletes all audio tracks for a video.
     * @param AudioTracksRequestBuilderDeleteRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toDeleteRequestInformation(?AudioTracksRequestBuilderDeleteRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * Returns a video's audio tracks within a project, including for private media. Requires project access.
     * @param AudioTracksRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?AudioTracksRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * @return AudioTracksRequestBuilder
    */
    public function withUrl(string $rawUrl): AudioTracksRequestBuilder {
        return new AudioTracksRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
