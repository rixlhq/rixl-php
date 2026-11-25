<?php

namespace Rixl\Sdk\Auth\V1\Notifications\Item;

use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Rixl\Sdk\Auth\V1\Notifications\Item\Preferences\PreferencesRequestBuilder;

/**
 * Builds and executes requests for operations under /auth/v1/notifications/{org_id}
*/
class WithOrg_ItemRequestBuilder extends BaseRequestBuilder 
{
    /**
     * The preferences property
    */
    public function preferences(): PreferencesRequestBuilder {
        return new PreferencesRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Instantiates a new WithOrg_ItemRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/auth/v1/notifications/{org_id}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

}
