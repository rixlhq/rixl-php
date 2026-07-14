<?php

namespace Rixl\Sdk\Billing\V1\PaymentMethods\FromPaymentIntent;

/**
 * GetPaymentMethodFromPaymentIntent
*/
class FromPaymentIntentRequestBuilderGetQueryParameters 
{
    /**
     * @var string|null $paymentIntentId 
    */
    public ?string $paymentIntentId = null;
    
    /**
     * Instantiates a new FromPaymentIntentRequestBuilderGetQueryParameters and sets the default values.
     * @param string|null $paymentIntentId 
    */
    public function __construct(?string $paymentIntentId = null) {
        $this->paymentIntentId = $paymentIntentId;
    }

}
