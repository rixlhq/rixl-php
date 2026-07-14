<?php

namespace Rixl\Sdk\Billing\V1\Address;

/**
 * GetBillingAddress
*/
class AddressRequestBuilderGetQueryParameters 
{
    /**
     * @var string|null $orgId 
    */
    public ?string $orgId = null;
    
    /**
     * Instantiates a new AddressRequestBuilderGetQueryParameters and sets the default values.
     * @param string|null $orgId 
    */
    public function __construct(?string $orgId = null) {
        $this->orgId = $orgId;
    }

}
