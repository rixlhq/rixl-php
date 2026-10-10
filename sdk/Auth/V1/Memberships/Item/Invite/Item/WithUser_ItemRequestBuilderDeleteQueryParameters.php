<?php

namespace Rixl\Sdk\Auth\V1\Memberships\Item\Invite\Item;

use Microsoft\Kiota\Abstractions\QueryParameter;

/**
 * CancelInvitation
*/
class WithUser_ItemRequestBuilderDeleteQueryParameters 
{
    /**
     * @QueryParameter("user%2Eactor_id")
     * @var string|null $userActorId 
    */
    public ?string $userActorId = null;
    
    /**
     * Instantiates a new WithUser_ItemRequestBuilderDeleteQueryParameters and sets the default values.
     * @param string|null $userActor_id 
    */
    public function __construct(?string $userActor_id = null) {
        $this->userActorId = $userActor_id;
    }

}
