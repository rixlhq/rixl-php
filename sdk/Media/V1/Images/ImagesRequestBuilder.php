<?php

namespace Rixl\Sdk\Media\V1\Images;

use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Rixl\Sdk\Media\V1\Images\Item\WithImage_ItemRequestBuilder;

/**
 * Builds and executes requests for operations under /media/v1/images
*/
class ImagesRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Gets an item from the Rixl/Sdk.media.v1.images.item collection
     * @param string $image_id Unique identifier of the item
     * @return WithImage_ItemRequestBuilder
    */
    public function byImage_id(string $image_id): WithImage_ItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['image_id'] = $image_id;
        return new WithImage_ItemRequestBuilder($urlTplParams, $this->requestAdapter);
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
