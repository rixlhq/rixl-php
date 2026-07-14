<?php

namespace Rixl\Sdk\Media\V1\Projects\Item\Images;

use Exception;
use Http\Promise\Promise;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;
use Rixl\Sdk\Media\V1\Projects\Item\Images\Item\WithImage_ItemRequestBuilder;
use Rixl\Sdk\Media\V1\Projects\Item\Images\Upload\UploadRequestBuilder;
use Rixl\Sdk\Models\Images\V1\ListImagesResponse;

/**
 * Builds and executes requests for operations under /media/v1/projects/{project_id}/images
*/
class ImagesRequestBuilder extends BaseRequestBuilder 
{
    /**
     * The upload property
    */
    public function upload(): UploadRequestBuilder {
        return new UploadRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Gets an item from the Rixl/Sdk.media.v1.projects.item.images.item collection
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
        parent::__construct($requestAdapter, [], '{+baseurl}/media/v1/projects/{project_id}/images{?pagination%2Elimit*,pagination%2Eoffset*,sortDirection*,sortField*}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * ListImages
     * @param ImagesRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<ListImagesResponse|null>
     * @throws Exception
    */
    public function get(?ImagesRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        return $this->requestAdapter->sendAsync($requestInfo, [ListImagesResponse::class, 'createFromDiscriminatorValue'], null);
    }

    /**
     * ListImages
     * @param ImagesRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?ImagesRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = $this->urlTemplate;
        $requestInfo->pathParameters = $this->pathParameters;
        $requestInfo->httpMethod = HttpMethod::GET;
        if ($requestConfiguration !== null) {
            $requestInfo->addHeaders($requestConfiguration->headers);
            if ($requestConfiguration->queryParameters !== null) {
                $requestInfo->setQueryParameters($requestConfiguration->queryParameters);
            }
            $requestInfo->addRequestOptions(...$requestConfiguration->options);
        }
        $requestInfo->tryAddHeader('Accept', "application/json");
        return $requestInfo;
    }

    /**
     * Returns a request builder with the provided arbitrary URL. Using this method means any other path or query parameters are ignored.
     * @param string $rawUrl The raw URL to use for the request builder.
     * @return ImagesRequestBuilder
    */
    public function withUrl(string $rawUrl): ImagesRequestBuilder {
        return new ImagesRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
