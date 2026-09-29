<?php

namespace Rixl\Sdk\Auth\V1\Memberships\Item\Domain;

/**
 * GetDomainStatus
*/
class DomainRequestBuilderGetQueryParameters 
{
    /**
     * @QueryParameter("user_id")
     * @var string|null $userId The user_id query parameter.
    */
    public ?string $userId = null;
    
    /**
     * Instantiates a new DomainRequestBuilderGetQueryParameters and sets the default values.
     * @param string|null $user_id The user_id query parameter.
    */
    public function __construct(?string $user_id = null) {
        $this->userId = $user_id;
    }

}
