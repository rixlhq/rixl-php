<?php

namespace Rixl\Sdk\Support\V1\Categories\Item;

use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Rixl\Sdk\Support\V1\Categories\Item\Topics\TopicsRequestBuilder;

/**
 * Builds and executes requests for operations under /support/v1/categories/{category_id}
*/
class WithCategory_ItemRequestBuilder extends BaseRequestBuilder 
{
    /**
     * The topics property
    */
    public function topics(): TopicsRequestBuilder {
        return new TopicsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Instantiates a new WithCategory_ItemRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/support/v1/categories/{category_id}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

}
