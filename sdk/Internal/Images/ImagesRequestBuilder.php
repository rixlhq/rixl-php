<?php

namespace Rixl\Sdk\Internal\Images;

use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Rixl\Sdk\Internal\Images\MarkFailed\MarkFailedRequestBuilder;
use Rixl\Sdk\Internal\Images\MarkProcessed\MarkProcessedRequestBuilder;
use Rixl\Sdk\Internal\Images\Take\TakeRequestBuilder;

/**
 * Builds and executes requests for operations under /internal/images
*/
class ImagesRequestBuilder extends BaseRequestBuilder 
{
    /**
     * The markFailed property
    */
    public function markFailed(): MarkFailedRequestBuilder {
        return new MarkFailedRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The markProcessed property
    */
    public function markProcessed(): MarkProcessedRequestBuilder {
        return new MarkProcessedRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The take property
    */
    public function take(): TakeRequestBuilder {
        return new TakeRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Instantiates a new ImagesRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/internal/images');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

}
