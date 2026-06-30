<?php

namespace Rixl\Sdk\Billing\V1\PaymentMethods\FromSetupIntent;

/**
 * Returns the payment method ID associated with a setup intent
*/
class FromSetupIntentRequestBuilderGetQueryParameters 
{
    /**
     * @QueryParameter("setup_intent_id")
     * @var string|null $setupIntentId Setup intent ID
    */
    public ?string $setupIntentId = null;
    
    /**
     * Instantiates a new FromSetupIntentRequestBuilderGetQueryParameters and sets the default values.
     * @param string|null $setup_intent_id Setup intent ID
    */
    public function __construct(?string $setup_intent_id = null) {
        $this->setupIntentId = $setup_intent_id;
    }

}
