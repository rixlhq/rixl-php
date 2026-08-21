<?php

namespace Rixl\Sdk\Analytics\V1\Dashboards\Item;

use Exception;
use Http\Promise\Promise;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;
use Rixl\Sdk\Analytics\V1\Dashboards\Item\EscapedDefault\DefaultRequestBuilder;
use Rixl\Sdk\Analytics\V1\Dashboards\Item\Export\ExportRequestBuilder;
use Rixl\Sdk\Analytics\V1\Dashboards\Item\Layout\LayoutRequestBuilder;
use Rixl\Sdk\Analytics\V1\Dashboards\Item\Widgets\WidgetsRequestBuilder;
use Rixl\Sdk\Models\Analytics\V1\Dashboard;
use Rixl\Sdk\Models\Google\Protobuf\EscapedEmpty;

/**
 * Builds and executes requests for operations under /analytics/v1/dashboards/{dashboard_-id}
*/
class Dashboard_ItemRequestBuilder extends BaseRequestBuilder 
{
    /**
     * The default property
    */
    public function escapedDefault(): DefaultRequestBuilder {
        return new DefaultRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The export property
    */
    public function export(): ExportRequestBuilder {
        return new ExportRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The layout property
    */
    public function layout(): LayoutRequestBuilder {
        return new LayoutRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The widgets property
    */
    public function widgets(): WidgetsRequestBuilder {
        return new WidgetsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Instantiates a new Dashboard_ItemRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/analytics/v1/dashboards/{dashboard_%2Did}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * DeleteDashboard
     * @param Dashboard_ItemRequestBuilderDeleteRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<EscapedEmpty|null>
     * @throws Exception
    */
    public function delete(?Dashboard_ItemRequestBuilderDeleteRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toDeleteRequestInformation($requestConfiguration);
        return $this->requestAdapter->sendAsync($requestInfo, [EscapedEmpty::class, 'createFromDiscriminatorValue'], null);
    }

    /**
     * GetDashboard
     * @param Dashboard_ItemRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<Dashboard|null>
     * @throws Exception
    */
    public function get(?Dashboard_ItemRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        return $this->requestAdapter->sendAsync($requestInfo, [Dashboard::class, 'createFromDiscriminatorValue'], null);
    }

    /**
     * UpdateDashboard
     * @param Dashboard_PatchRequestBody $body The request body
     * @param Dashboard_ItemRequestBuilderPatchRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<Dashboard|null>
     * @throws Exception
    */
    public function patch(Dashboard_PatchRequestBody $body, ?Dashboard_ItemRequestBuilderPatchRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPatchRequestInformation($body, $requestConfiguration);
        return $this->requestAdapter->sendAsync($requestInfo, [Dashboard::class, 'createFromDiscriminatorValue'], null);
    }

    /**
     * DeleteDashboard
     * @param Dashboard_ItemRequestBuilderDeleteRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toDeleteRequestInformation(?Dashboard_ItemRequestBuilderDeleteRequestConfiguration $requestConfiguration = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = '{+baseurl}/analytics/v1/dashboards/{dashboard_%2Did}?expected_revision={expected_revision}';
        $requestInfo->pathParameters = $this->pathParameters;
        $requestInfo->httpMethod = HttpMethod::DELETE;
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
     * GetDashboard
     * @param Dashboard_ItemRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?Dashboard_ItemRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * UpdateDashboard
     * @param Dashboard_PatchRequestBody $body The request body
     * @param Dashboard_ItemRequestBuilderPatchRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPatchRequestInformation(Dashboard_PatchRequestBody $body, ?Dashboard_ItemRequestBuilderPatchRequestConfiguration $requestConfiguration = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = $this->urlTemplate;
        $requestInfo->pathParameters = $this->pathParameters;
        $requestInfo->httpMethod = HttpMethod::PATCH;
        if ($requestConfiguration !== null) {
            $requestInfo->addHeaders($requestConfiguration->headers);
            $requestInfo->addRequestOptions(...$requestConfiguration->options);
        }
        $requestInfo->tryAddHeader('Accept', "application/json");
        $requestInfo->setContentFromParsable($this->requestAdapter, "application/json", $body);
        return $requestInfo;
    }

    /**
     * Returns a request builder with the provided arbitrary URL. Using this method means any other path or query parameters are ignored.
     * @param string $rawUrl The raw URL to use for the request builder.
     * @return Dashboard_ItemRequestBuilder
    */
    public function withUrl(string $rawUrl): Dashboard_ItemRequestBuilder {
        return new Dashboard_ItemRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
