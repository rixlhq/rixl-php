<?php

namespace Rixl\Sdk\Billing\V1\Tax\Calculate;

use Exception;
use Http\Promise\Promise;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;
use Rixl\Sdk\Models\Billing\V1\CalculateTaxRequest;
use Rixl\Sdk\Models\Billing\V1\PlanTaxCalculationResponse;

/**
 * Builds and executes requests for operations under /billing/v1/tax/calculate
*/
class CalculateRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Instantiates a new CalculateRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/billing/v1/tax/calculate');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * CalculateTax
     * @param CalculateTaxRequest $body The request body
     * @param CalculateRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<PlanTaxCalculationResponse|null>
     * @throws Exception
    */
    public function post(CalculateTaxRequest $body, ?CalculateRequestBuilderPostRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPostRequestInformation($body, $requestConfiguration);
        return $this->requestAdapter->sendAsync($requestInfo, [PlanTaxCalculationResponse::class, 'createFromDiscriminatorValue'], null);
    }

    /**
     * CalculateTax
     * @param CalculateTaxRequest $body The request body
     * @param CalculateRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPostRequestInformation(CalculateTaxRequest $body, ?CalculateRequestBuilderPostRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * @return CalculateRequestBuilder
    */
    public function withUrl(string $rawUrl): CalculateRequestBuilder {
        return new CalculateRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
