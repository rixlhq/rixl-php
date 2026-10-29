<?php

namespace Rixl\Sdk\Webhooks\V1\Projects\Item\Endpoints\Item\Events\Item;

use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Rixl\Sdk\Webhooks\V1\Projects\Item\Endpoints\Item\Events\Item\Replay\ReplayRequestBuilder;

/**
 * Builds and executes requests for operations under /webhooks/v1/projects/{project_id}/endpoints/{endpoint_id}/events/{event_id}
*/
class WithEvent_ItemRequestBuilder extends BaseRequestBuilder 
{
    /**
     * The replay property
    */
    public function replay(): ReplayRequestBuilder {
        return new ReplayRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Instantiates a new WithEvent_ItemRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/webhooks/v1/projects/{project_id}/endpoints/{endpoint_id}/events/{event_id}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

}
