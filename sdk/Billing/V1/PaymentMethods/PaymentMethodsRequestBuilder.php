<?php

namespace Rixl\Sdk\Billing\V1\PaymentMethods;

use Exception;
use Http\Promise\Promise;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;
use Rixl\Sdk\Billing\V1\PaymentMethods\FromPaymentIntent\FromPaymentIntentRequestBuilder;
use Rixl\Sdk\Billing\V1\PaymentMethods\FromSetupIntent\FromSetupIntentRequestBuilder;
use Rixl\Sdk\Billing\V1\PaymentMethods\Item\WithPaymentMethodItemRequestBuilder;
use Rixl\Sdk\Models\Billingv1\ListPaymentMethodsResponse;
use Rixl\Sdk\Models\Billingv1\PaymentMethodDetails;
use Rixl\Sdk\Models\Gateway\UpsertPaymentMethodBody;

/**
 * Builds and executes requests for operations under /billing/v1/payment-methods
*/
class PaymentMethodsRequestBuilder extends BaseRequestBuilder 
{
    /**
     * The fromPaymentIntent property
    */
    public function fromPaymentIntent(): FromPaymentIntentRequestBuilder {
        return new FromPaymentIntentRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The fromSetupIntent property
    */
    public function fromSetupIntent(): FromSetupIntentRequestBuilder {
        return new FromSetupIntentRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Gets an item from the Rixl/Sdk.billing.v1.paymentMethods.item collection
     * @param string $paymentMethodId Payment method ID
     * @return WithPaymentMethodItemRequestBuilder
    */
    public function byPaymentMethodId(string $paymentMethodId): WithPaymentMethodItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['paymentMethodId'] = $paymentMethodId;
        return new WithPaymentMethodItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Instantiates a new PaymentMethodsRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/billing/v1/payment-methods');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Returns the organization's payment methods.
     * @param PaymentMethodsRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<ListPaymentMethodsResponse|null>
     * @throws Exception
    */
    public function get(?PaymentMethodsRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        return $this->requestAdapter->sendAsync($requestInfo, [ListPaymentMethodsResponse::class, 'createFromDiscriminatorValue'], null);
    }

    /**
     * Attach a payment method to the organization
     * @param UpsertPaymentMethodBody $body Payment method request
     * @param PaymentMethodsRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<PaymentMethodDetails|null>
     * @throws Exception
    */
    public function post(UpsertPaymentMethodBody $body, ?PaymentMethodsRequestBuilderPostRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPostRequestInformation($body, $requestConfiguration);
        return $this->requestAdapter->sendAsync($requestInfo, [PaymentMethodDetails::class, 'createFromDiscriminatorValue'], null);
    }

    /**
     * Returns the organization's payment methods.
     * @param PaymentMethodsRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?PaymentMethodsRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * Attach a payment method to the organization
     * @param UpsertPaymentMethodBody $body Payment method request
     * @param PaymentMethodsRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPostRequestInformation(UpsertPaymentMethodBody $body, ?PaymentMethodsRequestBuilderPostRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * @return PaymentMethodsRequestBuilder
    */
    public function withUrl(string $rawUrl): PaymentMethodsRequestBuilder {
        return new PaymentMethodsRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
