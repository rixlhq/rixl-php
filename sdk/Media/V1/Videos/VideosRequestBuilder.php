<?php

namespace Rixl\Sdk\Media\V1\Videos;

use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Rixl\Sdk\Media\V1\Videos\Item\WithVideoItemRequestBuilder;

/**
 * Builds and executes requests for operations under /media/v1/videos
*/
class VideosRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Gets an item from the Rixl/Sdk.media.v1.videos.item collection
     * @param string $videoId Video ID
     * @return WithVideoItemRequestBuilder
    */
    public function byVideoId(string $videoId): WithVideoItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['videoId'] = $videoId;
        return new WithVideoItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Instantiates a new VideosRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/media/v1/videos');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

}
