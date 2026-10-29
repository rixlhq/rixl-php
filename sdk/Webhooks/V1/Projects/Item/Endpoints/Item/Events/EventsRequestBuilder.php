<?php

namespace Rixl\Sdk\Webhooks\V1\Projects\Item\Endpoints\Item\Events;

use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Rixl\Sdk\Webhooks\V1\Projects\Item\Endpoints\Item\Events\Item\WithEvent_ItemRequestBuilder;

/**
 * Builds and executes requests for operations under /webhooks/v1/projects/{project_id}/endpoints/{endpoint_id}/events
*/
class EventsRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Gets an item from the Rixl/Sdk.webhooks.v1.projects.item.endpoints.item.events.item collection
     * @param string $event_id The event_id path parameter.
     * @return WithEvent_ItemRequestBuilder
    */
    public function byEvent_id(string $event_id): WithEvent_ItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['event_id'] = $event_id;
        return new WithEvent_ItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Instantiates a new EventsRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/webhooks/v1/projects/{project_id}/endpoints/{endpoint_id}/events');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

}
