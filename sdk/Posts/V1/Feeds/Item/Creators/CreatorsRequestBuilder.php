<?php

namespace Rixl\Sdk\Posts\V1\Feeds\Item\Creators;

use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Rixl\Sdk\Posts\V1\Feeds\Item\Creators\Item\WithCreator_ItemRequestBuilder;

/**
 * Builds and executes requests for operations under /posts/v1/feeds/{feed_id}/creators
*/
class CreatorsRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Gets an item from the Rixl/Sdk.posts.v1.feeds.item.creators.item collection
     * @param string $creator_id Unique identifier of the item
     * @return WithCreator_ItemRequestBuilder
    */
    public function byCreator_id(string $creator_id): WithCreator_ItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['creator_id'] = $creator_id;
        return new WithCreator_ItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Instantiates a new CreatorsRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/posts/v1/feeds/{feed_id}/creators');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

}
