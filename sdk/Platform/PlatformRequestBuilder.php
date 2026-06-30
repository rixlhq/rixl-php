<?php

namespace Rixl\Sdk\Platform;

use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Rixl\Sdk\Platform\ApiKeys\ApiKeysRequestBuilder;
use Rixl\Sdk\Platform\Auth\AuthRequestBuilder;
use Rixl\Sdk\Platform\Clientauth\ClientauthRequestBuilder;

/**
 * Builds and executes requests for operations under /platform
*/
class PlatformRequestBuilder extends BaseRequestBuilder 
{
    /**
     * The apiKeys property
    */
    public function apiKeys(): ApiKeysRequestBuilder {
        return new ApiKeysRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The auth property
    */
    public function auth(): AuthRequestBuilder {
        return new AuthRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The clientauth property
    */
    public function clientauth(): ClientauthRequestBuilder {
        return new ClientauthRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Instantiates a new PlatformRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/platform');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

}
