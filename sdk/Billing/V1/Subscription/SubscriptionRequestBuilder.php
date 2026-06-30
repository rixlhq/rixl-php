<?php

namespace Rixl\Sdk\Billing\V1\Subscription;

use Exception;
use Http\Promise\Promise;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;
use Rixl\Sdk\Billing\V1\Subscription\Cancel\CancelRequestBuilder;
use Rixl\Sdk\Billing\V1\Subscription\History\HistoryRequestBuilder;
use Rixl\Sdk\Billing\V1\Subscription\Reactivate\ReactivateRequestBuilder;
use Rixl\Sdk\Billing\V1\Subscription\Upgrade\UpgradeRequestBuilder;
use Rixl\Sdk\Models\Billingv1\CreateSubscriptionResponse;
use Rixl\Sdk\Models\Billingv1\Subscription;
use Rixl\Sdk\Models\Gateway\CreateSubscriptionBody;

/**
 * Builds and executes requests for operations under /billing/v1/subscription
*/
class SubscriptionRequestBuilder extends BaseRequestBuilder 
{
    /**
     * The cancel property
    */
    public function cancel(): CancelRequestBuilder {
        return new CancelRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The history property
    */
    public function history(): HistoryRequestBuilder {
        return new HistoryRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The reactivate property
    */
    public function reactivate(): ReactivateRequestBuilder {
        return new ReactivateRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The upgrade property
    */
    public function upgrade(): UpgradeRequestBuilder {
        return new UpgradeRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Instantiates a new SubscriptionRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/billing/v1/subscription');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Returns the current organization subscription.
     * @param SubscriptionRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<Subscription|null>
     * @throws Exception
    */
    public function get(?SubscriptionRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        return $this->requestAdapter->sendAsync($requestInfo, [Subscription::class, 'createFromDiscriminatorValue'], null);
    }

    /**
     * Create a subscription for the authenticated organization
     * @param CreateSubscriptionBody $body Subscription request
     * @param SubscriptionRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<CreateSubscriptionResponse|null>
     * @throws Exception
    */
    public function post(CreateSubscriptionBody $body, ?SubscriptionRequestBuilderPostRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPostRequestInformation($body, $requestConfiguration);
        return $this->requestAdapter->sendAsync($requestInfo, [CreateSubscriptionResponse::class, 'createFromDiscriminatorValue'], null);
    }

    /**
     * Returns the current organization subscription.
     * @param SubscriptionRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?SubscriptionRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * Create a subscription for the authenticated organization
     * @param CreateSubscriptionBody $body Subscription request
     * @param SubscriptionRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPostRequestInformation(CreateSubscriptionBody $body, ?SubscriptionRequestBuilderPostRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * @return SubscriptionRequestBuilder
    */
    public function withUrl(string $rawUrl): SubscriptionRequestBuilder {
        return new SubscriptionRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
