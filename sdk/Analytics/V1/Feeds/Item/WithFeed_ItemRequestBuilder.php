<?php

namespace Rixl\Sdk\Analytics\V1\Feeds\Item;

use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Rixl\Sdk\Analytics\V1\Feeds\Item\Stats\StatsRequestBuilder;

/**
 * Builds and executes requests for operations under /analytics/v1/feeds/{feed_id}
*/
class WithFeed_ItemRequestBuilder extends BaseRequestBuilder 
{
    /**
     * The stats property
    */
    public function stats(): StatsRequestBuilder {
        return new StatsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Instantiates a new WithFeed_ItemRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/analytics/v1/feeds/{feed_id}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

}
