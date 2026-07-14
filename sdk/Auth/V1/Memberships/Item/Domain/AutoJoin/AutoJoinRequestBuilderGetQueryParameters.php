<?php

namespace Rixl\Sdk\Auth\V1\Memberships\Item\Domain\AutoJoin;

/**
 * GetDomainAutoJoin
*/
class AutoJoinRequestBuilderGetQueryParameters 
{
    /**
     * @var string|null $userId 
    */
    public ?string $userId = null;
    
    /**
     * Instantiates a new AutoJoinRequestBuilderGetQueryParameters and sets the default values.
     * @param string|null $userId 
    */
    public function __construct(?string $userId = null) {
        $this->userId = $userId;
    }

}
