<?php

namespace Rixl\Sdk\Analytics\V1;

use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Rixl\Sdk\Analytics\V1\Dashboard\DashboardRequestBuilder;
use Rixl\Sdk\Analytics\V1\Dashboards\DashboardsRequestBuilder;
use Rixl\Sdk\Analytics\V1\Events\EventsRequestBuilder;
use Rixl\Sdk\Analytics\V1\Feeds\FeedsRequestBuilder;
use Rixl\Sdk\Analytics\V1\Funnels\FunnelsRequestBuilder;
use Rixl\Sdk\Analytics\V1\Images\ImagesRequestBuilder;
use Rixl\Sdk\Analytics\V1\Posts\PostsRequestBuilder;
use Rixl\Sdk\Analytics\V1\Realtime\RealtimeRequestBuilder;
use Rixl\Sdk\Analytics\V1\Retention\RetentionRequestBuilder;
use Rixl\Sdk\Analytics\V1\Top\TopRequestBuilder;
use Rixl\Sdk\Analytics\V1\Videos\VideosRequestBuilder;

/**
 * Builds and executes requests for operations under /analytics/v1
*/
class V1RequestBuilder extends BaseRequestBuilder 
{
    /**
     * The dashboard property
    */
    public function dashboard(): DashboardRequestBuilder {
        return new DashboardRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The dashboards property
    */
    public function dashboards(): DashboardsRequestBuilder {
        return new DashboardsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The events property
    */
    public function events(): EventsRequestBuilder {
        return new EventsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The feeds property
    */
    public function feeds(): FeedsRequestBuilder {
        return new FeedsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The funnels property
    */
    public function funnels(): FunnelsRequestBuilder {
        return new FunnelsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The images property
    */
    public function images(): ImagesRequestBuilder {
        return new ImagesRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The posts property
    */
    public function posts(): PostsRequestBuilder {
        return new PostsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The realtime property
    */
    public function realtime(): RealtimeRequestBuilder {
        return new RealtimeRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The retention property
    */
    public function retention(): RetentionRequestBuilder {
        return new RetentionRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The top property
    */
    public function top(): TopRequestBuilder {
        return new TopRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The videos property
    */
    public function videos(): VideosRequestBuilder {
        return new VideosRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Instantiates a new V1RequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/analytics/v1');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

}
