<?php

namespace Rixl\Sdk\Support\V1;

use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Rixl\Sdk\Support\V1\Categories\CategoriesRequestBuilder;
use Rixl\Sdk\Support\V1\Chat\ChatRequestBuilder;
use Rixl\Sdk\Support\V1\Tickets\TicketsRequestBuilder;
use Rixl\Sdk\Support\V1\Topics\TopicsRequestBuilder;

/**
 * Builds and executes requests for operations under /support/v1
*/
class V1RequestBuilder extends BaseRequestBuilder 
{
    /**
     * The categories property
    */
    public function categories(): CategoriesRequestBuilder {
        return new CategoriesRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The chat property
    */
    public function chat(): ChatRequestBuilder {
        return new ChatRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The tickets property
    */
    public function tickets(): TicketsRequestBuilder {
        return new TicketsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The topics property
    */
    public function topics(): TopicsRequestBuilder {
        return new TopicsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Instantiates a new V1RequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/support/v1');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

}
