<?php

namespace Rixl\Sdk\Billing\V1\Address;

/**
 * GetBillingAddress
*/
class AddressRequestBuilderGetQueryParameters 
{
    /**
     * @QueryParameter("org_id")
     * @var string|null $orgId The org_id query parameter.
    */
    public ?string $orgId = null;
    
    /**
     * Instantiates a new AddressRequestBuilderGetQueryParameters and sets the default values.
     * @param string|null $org_id The org_id query parameter.
    */
    public function __construct(?string $org_id = null) {
        $this->orgId = $org_id;
    }

}
