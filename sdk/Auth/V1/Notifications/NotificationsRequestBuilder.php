<?php

namespace Rixl\Sdk\Auth\V1\Notifications;

use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Rixl\Sdk\Auth\V1\Notifications\Item\Org_ItemRequestBuilder;

/**
 * Builds and executes requests for operations under /auth/v1/notifications
*/
class NotificationsRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Gets an item from the Rixl/Sdk.auth.v1.notifications.item collection
     * @param string $org_Id Unique identifier of the item
     * @return Org_ItemRequestBuilder
    */
    public function byOrg_Id(string $org_Id): Org_ItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['org_%2Did'] = $org_Id;
        return new Org_ItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Instantiates a new NotificationsRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/auth/v1/notifications');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

}
