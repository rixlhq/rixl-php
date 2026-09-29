<?php

namespace Rixl\Sdk\Auth\V1\Memberships\Item\Members\Item\Suspend;

use Microsoft\Kiota\Abstractions\QueryParameter;

/**
 * SuspendMember
*/
class SuspendRequestBuilderPatchQueryParameters 
{
    /**
     * @QueryParameter("user%2Eactor_id")
     * @var string|null $userActorId 
    */
    public ?string $userActorId = null;
    
    /**
     * Instantiates a new SuspendRequestBuilderPatchQueryParameters and sets the default values.
     * @param string|null $userActor_id 
    */
    public function __construct(?string $userActor_id = null) {
        $this->userActorId = $userActor_id;
    }

}
