<?php

namespace Rixl\Sdk\Videos\Item;

use Exception;
use Http\Promise\Promise;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;
use Rixl\Sdk\Models\Github_com_rixlhq_api_internal_errors\ErrorResponse;
use Rixl\Sdk\Models\Video;
use Rixl\Sdk\Videos\Item\AudioTracks\AudioTracksRequestBuilder;
use Rixl\Sdk\Videos\Item\Chapters\ChaptersRequestBuilder;
use Rixl\Sdk\Videos\Item\Delete\DeleteRequestBuilder;
use Rixl\Sdk\Videos\Item\Subtitles\SubtitlesRequestBuilder;
use Rixl\Sdk\Videos\Item\Thumbnail\ThumbnailRequestBuilder;

/**
 * Builds and executes requests for operations under /videos/{videoId}
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
     * The deletePath property
    */
    public function deletePath(): DeleteRequestBuilder {
        return new DeleteRequestBuilder($this->pathParameters, $this->requestAdapter);
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
     * Instantiates a new WithVideoItemRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/videos/{videoId}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Retrieve a video by its ID for a specific project.
     * @param WithVideoItemRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<Video|null>
     * @throws Exception
    */
    public function get(?WithVideoItemRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                '400' => [ErrorResponse::class, 'createFromDiscriminatorValue'],
                '401' => [ErrorResponse::class, 'createFromDiscriminatorValue'],
                '403' => [ErrorResponse::class, 'createFromDiscriminatorValue'],
                '404' => [ErrorResponse::class, 'createFromDiscriminatorValue'],
                '500' => [ErrorResponse::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [Video::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Retrieve a video by its ID for a specific project.
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
