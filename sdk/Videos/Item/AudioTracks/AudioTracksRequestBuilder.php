<?php

namespace Rixl\Sdk\Videos\Item\AudioTracks;

use Exception;
use Http\Promise\Promise;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\MultiPartBody;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;
use Rixl\Sdk\Models\AudioTrack;
use Rixl\Sdk\Models\AudioTrackDelete;
use Rixl\Sdk\Videos\Item\AudioTracks\Item\WithTrackItemRequestBuilder;
use Rixl\Sdk\Videos\Item\AudioTracks\Language\LanguageRequestBuilder;

/**
 * Builds and executes requests for operations under /videos/{videoId}/audio-tracks
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
     * Gets an item from the Rixl/Sdk.videos.item.audioTracks.item collection
     * @param string $trackId Audio Track ID
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
        parent::__construct($requestAdapter, [], '{+baseurl}/videos/{videoId}/audio-tracks');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Remove all additional audio tracks from a video using API key authentication
     * @param AudioTracksRequestBuilderDeleteRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<AudioTrackDelete|null>
     * @throws Exception
    */
    public function delete(?AudioTracksRequestBuilderDeleteRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toDeleteRequestInformation($requestConfiguration);
        return $this->requestAdapter->sendAsync($requestInfo, [AudioTrackDelete::class, 'createFromDiscriminatorValue'], null);
    }

    /**
     * Replace all audio tracks with the provided ones using API key authentication
     * @param MultiPartBody $body The request body
     * @param AudioTracksRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<array<AudioTrack>|null>
     * @throws Exception
    */
    public function post(MultiPartBody $body, ?AudioTracksRequestBuilderPostRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPostRequestInformation($body, $requestConfiguration);
        return $this->requestAdapter->sendCollectionAsync($requestInfo, [AudioTrack::class, 'createFromDiscriminatorValue'], null);
    }

    /**
     * Remove all additional audio tracks from a video using API key authentication
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
     * Replace all audio tracks with the provided ones using API key authentication
     * @param MultiPartBody $body The request body
     * @param AudioTracksRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPostRequestInformation(MultiPartBody $body, ?AudioTracksRequestBuilderPostRequestConfiguration $requestConfiguration = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = $this->urlTemplate;
        $requestInfo->pathParameters = $this->pathParameters;
        $requestInfo->httpMethod = HttpMethod::POST;
        if ($requestConfiguration !== null) {
            $requestInfo->addHeaders($requestConfiguration->headers);
            $requestInfo->addRequestOptions(...$requestConfiguration->options);
        }
        $requestInfo->tryAddHeader('Accept', "application/json");
        $requestInfo->setContentFromParsable($this->requestAdapter, "multipart/form-data", $body);
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
