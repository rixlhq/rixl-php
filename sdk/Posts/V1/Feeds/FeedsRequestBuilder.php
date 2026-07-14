<?php

namespace Rixl\Sdk\Posts\V1\Feeds;

use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Rixl\Sdk\Posts\V1\Feeds\Item\WithFeed_ItemRequestBuilder;

/**
 * Builds and executes requests for operations under /posts/v1/feeds
*/
class FeedsRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Gets an item from the Rixl/Sdk.posts.v1.feeds.item collection
     * @param string $feed_id Unique identifier of the item
     * @return WithFeed_ItemRequestBuilder
    */
    public function byFeed_id(string $feed_id): WithFeed_ItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['feed_id'] = $feed_id;
        return new WithFeed_ItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Instantiates a new FeedsRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/posts/v1/feeds');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

}
