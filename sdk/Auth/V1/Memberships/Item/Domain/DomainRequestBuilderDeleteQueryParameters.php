<?php

namespace Rixl\Sdk\Auth\V1\Memberships\Item\Domain;

/**
 * RemoveDomain
*/
class DomainRequestBuilderDeleteQueryParameters 
{
    /**
     * @var string|null $userId 
    */
    public ?string $userId = null;
    
    /**
     * Instantiates a new DomainRequestBuilderDeleteQueryParameters and sets the default values.
     * @param string|null $userId 
    */
    public function __construct(?string $userId = null) {
        $this->userId = $userId;
    }

}
