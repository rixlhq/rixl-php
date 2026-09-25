<?php

namespace Rixl\Sdk\Billing\V1\PaymentMethods\FromPaymentIntent;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class FromPaymentIntentRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var FromPaymentIntentRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?FromPaymentIntentRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new FromPaymentIntentRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param FromPaymentIntentRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?FromPaymentIntentRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new FromPaymentIntentRequestBuilderGetQueryParameters.
     * @param string|null $payment_intent_id 
     * @return FromPaymentIntentRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?string $payment_intent_id = null): FromPaymentIntentRequestBuilderGetQueryParameters {
        return new FromPaymentIntentRequestBuilderGetQueryParameters($payment_intent_id);
    }

}
