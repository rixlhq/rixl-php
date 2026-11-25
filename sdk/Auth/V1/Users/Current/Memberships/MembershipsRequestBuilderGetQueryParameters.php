<?php

namespace Rixl\Sdk\Auth\V1\Users\Current\Memberships;

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
     * Instantiates a new MembershipsRequestBuilderGetQueryParameters and sets the default values.
     * @param int|null $limit 
     * @param int|null $offset 
     * @param MembershipState|null $state 
    */
    public function __construct(?int $limit = null, ?int $offset = null, ?MembershipState $state = null) {
        $this->limit = $limit;
        $this->offset = $offset;
        $this->state = $state;
    }

}
