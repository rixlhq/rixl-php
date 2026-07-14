<?php

namespace Rixl\Sdk\Media\V1\Projects\Item\Images\Item;

use Exception;
use Http\Promise\Promise;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;
use Rixl\Sdk\Media\V1\Projects\Item\Images\Item\Upload\UploadRequestBuilder;
use Rixl\Sdk\Media\V1\Projects\Item\Images\Item\Visibility\VisibilityRequestBuilder;
use Rixl\Sdk\Models\Google\Protobuf\EscapedEmpty;

/**
 * Builds and executes requests for operations under /media/v1/projects/{project_id}/images/{image_id}
*/
class WithImage_ItemRequestBuilder extends BaseRequestBuilder 
{
    /**
     * The upload property
    */
    public function upload(): UploadRequestBuilder {
        return new UploadRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The visibility property
    */
    public function visibility(): VisibilityRequestBuilder {
        return new VisibilityRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Instantiates a new WithImage_ItemRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/media/v1/projects/{project_id}/images/{image_id}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * DeleteImage
     * @param WithImage_ItemRequestBuilderDeleteRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<EscapedEmpty|null>
     * @throws Exception
    */
    public function delete(?WithImage_ItemRequestBuilderDeleteRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toDeleteRequestInformation($requestConfiguration);
        return $this->requestAdapter->sendAsync($requestInfo, [EscapedEmpty::class, 'createFromDiscriminatorValue'], null);
    }

    /**
     * DeleteImage
     * @param WithImage_ItemRequestBuilderDeleteRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toDeleteRequestInformation(?WithImage_ItemRequestBuilderDeleteRequestConfiguration $requestConfiguration = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = $this->urlTemplate;
        $requestInfo->pathParameters = $this->pathParameters;
        $requestInfo->httpMethod = HttpMethod::DELETE;
        if ($requestConfiguration !== null) {
            $requestInfo->addHeaders($requestConfiguration->headers);
            $requestInfo->addRequestOptions(...$requestConfiguration->options);
        }
        $requestInfo->tryAddHeader('Accept', "application/json");
        return $requestInfo;
    }

    /**
     * Returns a request builder with the provided arbitrary URL. Using this method means any other path or query parameters are ignored.
     * @param string $rawUrl The raw URL to use for the request builder.
     * @return WithImage_ItemRequestBuilder
    */
    public function withUrl(string $rawUrl): WithImage_ItemRequestBuilder {
        return new WithImage_ItemRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
