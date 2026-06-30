<?php

namespace Rixl\Sdk\Posts\V1\Projects\Item\Feeds;

use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Rixl\Sdk\Posts\V1\Projects\Item\Feeds\Item\WithFeedItemRequestBuilder;

/**
 * Builds and executes requests for operations under /posts/v1/projects/{projectId}/feeds
*/
class FeedsRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Gets an item from the Rixl/Sdk.posts.v1.projects.item.feeds.item collection
     * @param string $feedId Feed ID
     * @return WithFeedItemRequestBuilder
    */
    public function byFeedId(string $feedId): WithFeedItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['feedId'] = $feedId;
        return new WithFeedItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Instantiates a new FeedsRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/posts/v1/projects/{projectId}/feeds');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

}
