<?php

namespace Rixl\Sdk\Billing\V1\PaymentMethods;

/**
 * ListPaymentMethods
*/
class PaymentMethodsRequestBuilderGetQueryParameters 
{
    /**
     * @QueryParameter("org_id")
     * @var string|null $orgId The org_id query parameter.
    */
    public ?string $orgId = null;
    
    /**
     * @var bool|null $refresh The refresh query parameter.
    */
    public ?bool $refresh = null;
    
    /**
     * Instantiates a new PaymentMethodsRequestBuilderGetQueryParameters and sets the default values.
     * @param string|null $org_id The org_id query parameter.
     * @param bool|null $refresh The refresh query parameter.
    */
    public function __construct(?string $org_id = null, ?bool $refresh = null) {
        $this->orgId = $org_id;
        $this->refresh = $refresh;
    }

}
