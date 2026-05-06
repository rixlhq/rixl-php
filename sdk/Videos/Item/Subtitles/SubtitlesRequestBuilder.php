<?php

namespace Rixl\Sdk\Videos\Item\Subtitles;

use Exception;
use Http\Promise\Promise;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\MultiPartBody;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;
use Rixl\Sdk\Models\Subtitle;
use Rixl\Sdk\Models\SubtitleDelete;
use Rixl\Sdk\Videos\Item\Subtitles\Item\WithSubtitleItemRequestBuilder;
use Rixl\Sdk\Videos\Item\Subtitles\Language\LanguageRequestBuilder;

/**
 * Builds and executes requests for operations under /videos/{videoId}/subtitles
*/
class SubtitlesRequestBuilder extends BaseRequestBuilder 
{
    /**
     * The language property
    */
    public function language(): LanguageRequestBuilder {
        return new LanguageRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Gets an item from the Rixl/Sdk.videos.item.subtitles.item collection
     * @param string $subtitleId Subtitle ID
     * @return WithSubtitleItemRequestBuilder
    */
    public function bySubtitleId(string $subtitleId): WithSubtitleItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['subtitleId'] = $subtitleId;
        return new WithSubtitleItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Instantiates a new SubtitlesRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/videos/{videoId}/subtitles');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Remove all subtitles from a video using API key authentication
     * @param SubtitlesRequestBuilderDeleteRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<SubtitleDelete|null>
     * @throws Exception
    */
    public function delete(?SubtitlesRequestBuilderDeleteRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toDeleteRequestInformation($requestConfiguration);
        return $this->requestAdapter->sendAsync($requestInfo, [SubtitleDelete::class, 'createFromDiscriminatorValue'], null);
    }

    /**
     * Replace all subtitles with the provided ones using API key authentication
     * @param MultiPartBody $body The request body
     * @param SubtitlesRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<array<Subtitle>|null>
     * @throws Exception
    */
    public function post(MultiPartBody $body, ?SubtitlesRequestBuilderPostRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPostRequestInformation($body, $requestConfiguration);
        return $this->requestAdapter->sendCollectionAsync($requestInfo, [Subtitle::class, 'createFromDiscriminatorValue'], null);
    }

    /**
     * Remove all subtitles from a video using API key authentication
     * @param SubtitlesRequestBuilderDeleteRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toDeleteRequestInformation(?SubtitlesRequestBuilderDeleteRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * Replace all subtitles with the provided ones using API key authentication
     * @param MultiPartBody $body The request body
     * @param SubtitlesRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPostRequestInformation(MultiPartBody $body, ?SubtitlesRequestBuilderPostRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * @return SubtitlesRequestBuilder
    */
    public function withUrl(string $rawUrl): SubtitlesRequestBuilder {
        return new SubtitlesRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
