<?php

namespace Rixl\Sdk\Auth\V1\Memberships;

use Microsoft\Kiota\Abstractions\QueryParameter;
use Rixl\Sdk\Models\Auth\V1\MembershipState;

/**
 * ListMemberships
*/
class MembershipsRequestBuilderGetQueryParameters 
{
    /**
     * @var int|null $limit The limit query parameter.
    */
    public ?int $limit = null;
    
    /**
     * @var int|null $offset The offset query parameter.
    */
    public ?int $offset = null;
    
    /**
     * @var MembershipState|null $state The state query parameter.
    */
    public ?MembershipState $state = null;
    
    /**
     * @QueryParameter("user%2Euser_id")
     * @var string|null $userUserId The user.user_id query parameter.
    */
    public ?string $userUserId = null;
    
    /**
     * Instantiates a new MembershipsRequestBuilderGetQueryParameters and sets the default values.
     * @param int|null $limit The limit query parameter.
     * @param int|null $offset The offset query parameter.
     * @param MembershipState|null $state The state query parameter.
     * @param string|null $userUser_id The user.user_id query parameter.
    */
    public function __construct(?int $limit = null, ?int $offset = null, ?MembershipState $state = null, ?string $userUser_id = null) {
        $this->limit = $limit;
        $this->offset = $offset;
        $this->state = $state;
        $this->userUserId = $userUser_id;
    }

}
