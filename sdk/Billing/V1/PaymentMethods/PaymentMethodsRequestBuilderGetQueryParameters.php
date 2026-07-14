<?php

namespace Rixl\Sdk\Billing\V1\PaymentMethods;

/**
 * ListPaymentMethods
*/
class PaymentMethodsRequestBuilderGetQueryParameters 
{
    /**
     * @var string|null $orgId 
    */
    public ?string $orgId = null;
    
    /**
     * @var bool|null $refresh 
    */
    public ?bool $refresh = null;
    
    /**
     * Instantiates a new PaymentMethodsRequestBuilderGetQueryParameters and sets the default values.
     * @param string|null $orgId 
     * @param bool|null $refresh 
    */
    public function __construct(?string $orgId = null, ?bool $refresh = null) {
        $this->orgId = $orgId;
        $this->refresh = $refresh;
    }

}
