<?php

namespace Rixl\Sdk\Internal\Videos;

use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Rixl\Sdk\Internal\Videos\MarkFailed\MarkFailedRequestBuilder;
use Rixl\Sdk\Internal\Videos\MarkProcessed\MarkProcessedRequestBuilder;

/**
 * Builds and executes requests for operations under /internal/videos
*/
class VideosRequestBuilder extends BaseRequestBuilder 
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
     * Instantiates a new VideosRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/internal/videos');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

}
