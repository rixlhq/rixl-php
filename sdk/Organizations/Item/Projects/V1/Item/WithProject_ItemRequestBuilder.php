<?php

namespace Rixl\Sdk\Organizations\Item\Projects\V1\Item;

use Exception;
use Http\Promise\Promise;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;
use Rixl\Sdk\Models\Project\V1\Project;
use Rixl\Sdk\Organizations\Item\Projects\V1\Item\CustomDomain\CustomDomainRequestBuilder;
use Rixl\Sdk\Organizations\Item\Projects\V1\Item\Move\MoveRequestBuilder;
use Rixl\Sdk\Organizations\Item\Projects\V1\Item\Name\NameRequestBuilder;
use Rixl\Sdk\Organizations\Item\Projects\V1\Item\VideoQuality\VideoQualityRequestBuilder;

/**
 * Builds and executes requests for operations under /organizations/{org_id}/projects/v1/{project_id}
*/
class WithProject_ItemRequestBuilder extends BaseRequestBuilder 
{
    /**
     * The customDomain property
    */
    public function customDomain(): CustomDomainRequestBuilder {
        return new CustomDomainRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The move property
    */
    public function move(): MoveRequestBuilder {
        return new MoveRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The name property
    */
    public function name(): NameRequestBuilder {
        return new NameRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The videoQuality property
    */
    public function videoQuality(): VideoQualityRequestBuilder {
        return new VideoQualityRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Instantiates a new WithProject_ItemRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/organizations/{org_id}/projects/v1/{project_id}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * DeleteProject
     * @param WithProject_ItemRequestBuilderDeleteRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<Project|null>
     * @throws Exception
    */
    public function delete(?WithProject_ItemRequestBuilderDeleteRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toDeleteRequestInformation($requestConfiguration);
        return $this->requestAdapter->sendAsync($requestInfo, [Project::class, 'createFromDiscriminatorValue'], null);
    }

    /**
     * GetProject
     * @param WithProject_ItemRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<Project|null>
     * @throws Exception
    */
    public function get(?WithProject_ItemRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        return $this->requestAdapter->sendAsync($requestInfo, [Project::class, 'createFromDiscriminatorValue'], null);
    }

    /**
     * DeleteProject
     * @param WithProject_ItemRequestBuilderDeleteRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toDeleteRequestInformation(?WithProject_ItemRequestBuilderDeleteRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * GetProject
     * @param WithProject_ItemRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?WithProject_ItemRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = $this->urlTemplate;
        $requestInfo->pathParameters = $this->pathParameters;
        $requestInfo->httpMethod = HttpMethod::GET;
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
     * @return WithProject_ItemRequestBuilder
    */
    public function withUrl(string $rawUrl): WithProject_ItemRequestBuilder {
        return new WithProject_ItemRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
