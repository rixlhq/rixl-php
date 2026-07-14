<?php

namespace Rixl\Sdk\Billing\V1\PaymentMethods\Item;

/**
 * DeletePaymentMethod
*/
class WithPayment_method_ItemRequestBuilderDeleteQueryParameters 
{
    /**
     * @var string|null $orgId 
    */
    public ?string $orgId = null;
    
    /**
     * Instantiates a new WithPayment_method_ItemRequestBuilderDeleteQueryParameters and sets the default values.
     * @param string|null $orgId 
    */
    public function __construct(?string $orgId = null) {
        $this->orgId = $orgId;
    }

}
