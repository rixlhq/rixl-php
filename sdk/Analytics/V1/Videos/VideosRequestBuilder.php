<?php

namespace Rixl\Sdk\Analytics\V1\Videos;

use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Rixl\Sdk\Analytics\V1\Videos\Item\WithVideo_ItemRequestBuilder;

/**
 * Builds and executes requests for operations under /analytics/v1/videos
*/
class VideosRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Gets an item from the Rixl/Sdk.analytics.v1.videos.item collection
     * @param string $video_id Unique identifier of the item
     * @return WithVideo_ItemRequestBuilder
    */
    public function byVideo_id(string $video_id): WithVideo_ItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['video_id'] = $video_id;
        return new WithVideo_ItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Instantiates a new VideosRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/analytics/v1/videos');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

}
