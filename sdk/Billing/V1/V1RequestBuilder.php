<?php

namespace Rixl\Sdk\Billing\V1;

use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Rixl\Sdk\Billing\V1\Address\AddressRequestBuilder;
use Rixl\Sdk\Billing\V1\BandwidthUsage\BandwidthUsageRequestBuilder;
use Rixl\Sdk\Billing\V1\Checkout\CheckoutRequestBuilder;
use Rixl\Sdk\Billing\V1\ContactSales\ContactSalesRequestBuilder;
use Rixl\Sdk\Billing\V1\Invoices\InvoicesRequestBuilder;
use Rixl\Sdk\Billing\V1\Jobs\JobsRequestBuilder;
use Rixl\Sdk\Billing\V1\PaymentMethods\PaymentMethodsRequestBuilder;
use Rixl\Sdk\Billing\V1\Plans\PlansRequestBuilder;
use Rixl\Sdk\Billing\V1\SetupIntent\SetupIntentRequestBuilder;
use Rixl\Sdk\Billing\V1\StorageUsage\StorageUsageRequestBuilder;
use Rixl\Sdk\Billing\V1\Subscription\SubscriptionRequestBuilder;
use Rixl\Sdk\Billing\V1\Tax\TaxRequestBuilder;

/**
 * Builds and executes requests for operations under /billing/v1
*/
class V1RequestBuilder extends BaseRequestBuilder 
{
    /**
     * The address property
    */
    public function address(): AddressRequestBuilder {
        return new AddressRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The bandwidthUsage property
    */
    public function bandwidthUsage(): BandwidthUsageRequestBuilder {
        return new BandwidthUsageRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The checkout property
    */
    public function checkout(): CheckoutRequestBuilder {
        return new CheckoutRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The contactSales property
    */
    public function contactSales(): ContactSalesRequestBuilder {
        return new ContactSalesRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The invoices property
    */
    public function invoices(): InvoicesRequestBuilder {
        return new InvoicesRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The jobs property
    */
    public function jobs(): JobsRequestBuilder {
        return new JobsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The paymentMethods property
    */
    public function paymentMethods(): PaymentMethodsRequestBuilder {
        return new PaymentMethodsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The plans property
    */
    public function plans(): PlansRequestBuilder {
        return new PlansRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The setupIntent property
    */
    public function setupIntent(): SetupIntentRequestBuilder {
        return new SetupIntentRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The storageUsage property
    */
    public function storageUsage(): StorageUsageRequestBuilder {
        return new StorageUsageRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The subscription property
    */
    public function subscription(): SubscriptionRequestBuilder {
        return new SubscriptionRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The tax property
    */
    public function tax(): TaxRequestBuilder {
        return new TaxRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Instantiates a new V1RequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/billing/v1');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

}
