<?php

namespace Rixl\Sdk\Media\V1\Images;

use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Rixl\Sdk\Media\V1\Images\Item\WithImageItemRequestBuilder;

/**
 * Builds and executes requests for operations under /media/v1/images
*/
class ImagesRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Gets an item from the Rixl/Sdk.media.v1.images.item collection
     * @param string $imageId Image ID
     * @return WithImageItemRequestBuilder
    */
    public function byImageId(string $imageId): WithImageItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['imageId'] = $imageId;
        return new WithImageItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Instantiates a new ImagesRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/media/v1/images');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

}
