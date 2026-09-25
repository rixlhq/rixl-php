<?php

namespace Rixl\Sdk\Media\V1\Projects\Item\Videos\Item\AudioTracks;

use Exception;
use Http\Promise\Promise;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;
use Rixl\Sdk\Media\V1\Projects\Item\Videos\Item\AudioTracks\Item\WithTrack_ItemRequestBuilder;
use Rixl\Sdk\Media\V1\Projects\Item\Videos\Item\AudioTracks\Language\LanguageRequestBuilder;
use Rixl\Sdk\Media\V1\Projects\Item\Videos\Item\AudioTracks\Upload\UploadRequestBuilder;
use Rixl\Sdk\Models\Google\Protobuf\EscapedEmpty;

/**
 * Builds and executes requests for operations under /media/v1/projects/{project_id}/videos/{video_id}/audio-tracks
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
     * @param string $track_id Unique identifier of the item
     * @return WithTrack_ItemRequestBuilder
    */
    public function byTrack_id(string $track_id): WithTrack_ItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['track_id'] = $track_id;
        return new WithTrack_ItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Instantiates a new AudioTracksRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/media/v1/projects/{project_id}/videos/{video_id}/audio-tracks');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * DeleteAllAudioTracks
     * @param AudioTracksRequestBuilderDeleteRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<EscapedEmpty|null>
     * @throws Exception
    */
    public function delete(?AudioTracksRequestBuilderDeleteRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toDeleteRequestInformation($requestConfiguration);
        return $this->requestAdapter->sendAsync($requestInfo, [EscapedEmpty::class, 'createFromDiscriminatorValue'], null);
    }

    /**
     * DeleteAllAudioTracks
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
     * Returns a request builder with the provided arbitrary URL. Using this method means any other path or query parameters are ignored.
     * @param string $rawUrl The raw URL to use for the request builder.
     * @return AudioTracksRequestBuilder
    */
    public function withUrl(string $rawUrl): AudioTracksRequestBuilder {
        return new AudioTracksRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
