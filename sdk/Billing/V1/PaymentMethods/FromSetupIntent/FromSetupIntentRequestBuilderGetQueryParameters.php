<?php

namespace Rixl\Sdk\Billing\V1\PaymentMethods\FromSetupIntent;

/**
 * GetPaymentMethodFromSetupIntent
*/
class FromSetupIntentRequestBuilderGetQueryParameters 
{
    /**
     * @QueryParameter("setup_intent_id")
     * @var string|null $setupIntentId 
    */
    public ?string $setupIntentId = null;
    
    /**
     * Instantiates a new FromSetupIntentRequestBuilderGetQueryParameters and sets the default values.
     * @param string|null $setup_intent_id 
    */
    public function __construct(?string $setup_intent_id = null) {
        $this->setupIntentId = $setup_intent_id;
    }

}
