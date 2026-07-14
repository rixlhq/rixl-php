<?php

namespace Rixl\Sdk\Auth\V1\Memberships\Item\Members\Item;

use Microsoft\Kiota\Abstractions\QueryParameter;

/**
 * RemoveMember
*/
class Member_ItemRequestBuilderDeleteQueryParameters 
{
    /**
     * @QueryParameter("user%2EactorId")
     * @var string|null $userActorId 
    */
    public ?string $userActorId = null;
    
    /**
     * Instantiates a new Member_ItemRequestBuilderDeleteQueryParameters and sets the default values.
     * @param string|null $userActorId 
    */
    public function __construct(?string $userActorId = null) {
        $this->userActorId = $userActorId;
    }

}
