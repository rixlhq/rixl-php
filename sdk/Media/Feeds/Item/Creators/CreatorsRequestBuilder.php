<?php

namespace Rixl\Sdk\Media\Feeds\Item\Creators;

use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Rixl\Sdk\Media\Feeds\Item\Creators\Item\WithCreatorItemRequestBuilder;

/**
 * Builds and executes requests for operations under /media/feeds/{feedId}/creators
*/
class CreatorsRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Gets an item from the Rixl/Sdk.media.feeds.item.creators.item collection
     * @param string $creatorId Creator ID
     * @return WithCreatorItemRequestBuilder
    */
    public function byCreatorId(string $creatorId): WithCreatorItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['creatorId'] = $creatorId;
        return new WithCreatorItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Instantiates a new CreatorsRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/media/feeds/{feedId}/creators');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

}
