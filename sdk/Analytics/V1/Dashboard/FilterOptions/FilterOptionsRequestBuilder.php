<?php

namespace Rixl\Sdk\Analytics\V1\Dashboard\FilterOptions;

use Exception;
use Http\Promise\Promise;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;
use Rixl\Sdk\Models\Analytics\V1\GetFilterOptionsRequest;
use Rixl\Sdk\Models\Analytics\V1\GetFilterOptionsResponse;

/**
 * Builds and executes requests for operations under /analytics/v1/dashboard/filter-options
*/
class FilterOptionsRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Instantiates a new FilterOptionsRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/analytics/v1/dashboard/filter-options');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * GetFilterOptions
     * @param GetFilterOptionsRequest $body The request body
     * @param FilterOptionsRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<GetFilterOptionsResponse|null>
     * @throws Exception
    */
    public function post(GetFilterOptionsRequest $body, ?FilterOptionsRequestBuilderPostRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPostRequestInformation($body, $requestConfiguration);
        return $this->requestAdapter->sendAsync($requestInfo, [GetFilterOptionsResponse::class, 'createFromDiscriminatorValue'], null);
    }

    /**
     * GetFilterOptions
     * @param GetFilterOptionsRequest $body The request body
     * @param FilterOptionsRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPostRequestInformation(GetFilterOptionsRequest $body, ?FilterOptionsRequestBuilderPostRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * @return FilterOptionsRequestBuilder
    */
    public function withUrl(string $rawUrl): FilterOptionsRequestBuilder {
        return new FilterOptionsRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
