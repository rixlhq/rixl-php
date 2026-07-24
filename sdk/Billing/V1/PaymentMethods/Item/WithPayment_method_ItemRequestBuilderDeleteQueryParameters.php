<?php

namespace Rixl\Sdk\Billing\V1\PaymentMethods\Item;

/**
 * DeletePaymentMethod
*/
class WithPayment_method_ItemRequestBuilderDeleteQueryParameters 
{
    /**
     * @QueryParameter("org_id")
     * @var string|null $orgId 
    */
    public ?string $orgId = null;
    
    /**
     * Instantiates a new WithPayment_method_ItemRequestBuilderDeleteQueryParameters and sets the default values.
     * @param string|null $org_id 
    */
    public function __construct(?string $org_id = null) {
        $this->orgId = $org_id;
    }

}
