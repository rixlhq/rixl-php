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
     * @var int|null $limit 
    */
    public ?int $limit = null;
    
    /**
     * @var int|null $offset 
    */
    public ?int $offset = null;
    
    /**
     * @var MembershipState|null $state 
    */
    public ?MembershipState $state = null;
    
    /**
     * @QueryParameter("user%2EuserId")
     * @var string|null $userUserId 
    */
    public ?string $userUserId = null;
    
    /**
     * Instantiates a new MembershipsRequestBuilderGetQueryParameters and sets the default values.
     * @param int|null $limit 
     * @param int|null $offset 
     * @param MembershipState|null $state 
     * @param string|null $userUserId 
    */
    public function __construct(?int $limit = null, ?int $offset = null, ?MembershipState $state = null, ?string $userUserId = null) {
        $this->limit = $limit;
        $this->offset = $offset;
        $this->state = $state;
        $this->userUserId = $userUserId;
    }

}
