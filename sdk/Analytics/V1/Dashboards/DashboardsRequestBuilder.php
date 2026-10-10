<?php

namespace Rixl\Sdk\Analytics\V1\Dashboards;

use Exception;
use Http\Promise\Promise;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;
use Rixl\Sdk\Analytics\V1\Dashboards\Item\Dashboard_ItemRequestBuilder;
use Rixl\Sdk\Analytics\V1\Dashboards\Widgets\WidgetsRequestBuilder;
use Rixl\Sdk\Models\Analytics\V1\CreateDashboardRequest;
use Rixl\Sdk\Models\Analytics\V1\Dashboard;
use Rixl\Sdk\Models\Analytics\V1\ListDashboardsResponse;

/**
 * Builds and executes requests for operations under /analytics/v1/dashboards
*/
class DashboardsRequestBuilder extends BaseRequestBuilder 
{
    /**
     * The widgets property
    */
    public function widgets(): WidgetsRequestBuilder {
        return new WidgetsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Gets an item from the Rixl/Sdk.analytics.v1.dashboards.item collection
     * @param string $dashboard_Id Unique identifier of the item
     * @return Dashboard_ItemRequestBuilder
    */
    public function byDashboard_Id(string $dashboard_Id): Dashboard_ItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['dashboard_%2Did'] = $dashboard_Id;
        return new Dashboard_ItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Instantiates a new DashboardsRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/analytics/v1/dashboards{?page*,page_size*}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * ListDashboards
     * @param DashboardsRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<ListDashboardsResponse|null>
     * @throws Exception
    */
    public function get(?DashboardsRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        return $this->requestAdapter->sendAsync($requestInfo, [ListDashboardsResponse::class, 'createFromDiscriminatorValue'], null);
    }

    /**
     * CreateDashboard
     * @param CreateDashboardRequest $body The request body
     * @param DashboardsRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<Dashboard|null>
     * @throws Exception
    */
    public function post(CreateDashboardRequest $body, ?DashboardsRequestBuilderPostRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPostRequestInformation($body, $requestConfiguration);
        return $this->requestAdapter->sendAsync($requestInfo, [Dashboard::class, 'createFromDiscriminatorValue'], null);
    }

    /**
     * ListDashboards
     * @param DashboardsRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?DashboardsRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * CreateDashboard
     * @param CreateDashboardRequest $body The request body
     * @param DashboardsRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPostRequestInformation(CreateDashboardRequest $body, ?DashboardsRequestBuilderPostRequestConfiguration $requestConfiguration = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = $this->urlTemplate;
        $requestInfo->pathParameters = $this->pathParameters;
        $requestInfo->httpMethod = HttpMethod::POST;
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
     * @return DashboardsRequestBuilder
    */
    public function withUrl(string $rawUrl): DashboardsRequestBuilder {
        return new DashboardsRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
