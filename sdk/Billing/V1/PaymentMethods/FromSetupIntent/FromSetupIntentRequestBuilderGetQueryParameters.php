<?php

namespace Rixl\Sdk\Billing\V1\PaymentMethods\FromSetupIntent;

/**
 * GetPaymentMethodFromSetupIntent
*/
class FromSetupIntentRequestBuilderGetQueryParameters 
{
    /**
     * @var string|null $setupIntentId 
    */
    public ?string $setupIntentId = null;
    
    /**
     * Instantiates a new FromSetupIntentRequestBuilderGetQueryParameters and sets the default values.
     * @param string|null $setupIntentId 
    */
    public function __construct(?string $setupIntentId = null) {
        $this->setupIntentId = $setupIntentId;
    }

}
