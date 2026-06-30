<?php

namespace Rixl\Sdk\Billing\V1\Subscription\Upgrade;

use Exception;
use Http\Promise\Promise;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;
use Rixl\Sdk\Models\Billingv1\UpgradeSubscriptionResponse;
use Rixl\Sdk\Models\Gateway\UpgradeSubscriptionBody;

/**
 * Builds and executes requests for operations under /billing/v1/subscription/upgrade
*/
class UpgradeRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Instantiates a new UpgradeRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/billing/v1/subscription/upgrade');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Upgrade the organization's subscription to a new plan
     * @param UpgradeSubscriptionBody $body Upgrade request
     * @param UpgradeRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<UpgradeSubscriptionResponse|null>
     * @throws Exception
    */
    public function post(UpgradeSubscriptionBody $body, ?UpgradeRequestBuilderPostRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPostRequestInformation($body, $requestConfiguration);
        return $this->requestAdapter->sendAsync($requestInfo, [UpgradeSubscriptionResponse::class, 'createFromDiscriminatorValue'], null);
    }

    /**
     * Upgrade the organization's subscription to a new plan
     * @param UpgradeSubscriptionBody $body Upgrade request
     * @param UpgradeRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPostRequestInformation(UpgradeSubscriptionBody $body, ?UpgradeRequestBuilderPostRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * @return UpgradeRequestBuilder
    */
    public function withUrl(string $rawUrl): UpgradeRequestBuilder {
        return new UpgradeRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
