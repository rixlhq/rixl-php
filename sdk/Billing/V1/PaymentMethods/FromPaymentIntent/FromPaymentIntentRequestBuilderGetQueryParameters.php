<?php

namespace Rixl\Sdk\Billing\V1\PaymentMethods\FromPaymentIntent;

/**
 * Returns the payment method ID associated with a payment intent
*/
class FromPaymentIntentRequestBuilderGetQueryParameters 
{
    /**
     * @QueryParameter("payment_intent_id")
     * @var string|null $paymentIntentId Payment intent ID
    */
    public ?string $paymentIntentId = null;
    
    /**
     * Instantiates a new FromPaymentIntentRequestBuilderGetQueryParameters and sets the default values.
     * @param string|null $payment_intent_id Payment intent ID
    */
    public function __construct(?string $payment_intent_id = null) {
        $this->paymentIntentId = $payment_intent_id;
    }

}
