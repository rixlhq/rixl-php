<?php

namespace Rixl\Sdk\Billing\V1\PaymentMethods\FromPaymentIntent;

/**
 * GetPaymentMethodFromPaymentIntent
*/
class FromPaymentIntentRequestBuilderGetQueryParameters 
{
    /**
     * @QueryParameter("payment_intent_id")
     * @var string|null $paymentIntentId 
    */
    public ?string $paymentIntentId = null;
    
    /**
     * Instantiates a new FromPaymentIntentRequestBuilderGetQueryParameters and sets the default values.
     * @param string|null $payment_intent_id 
    */
    public function __construct(?string $payment_intent_id = null) {
        $this->paymentIntentId = $payment_intent_id;
    }

}
