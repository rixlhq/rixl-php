<?php

namespace Rixl\Sdk\Auth\V1\MembershipApplications;

use Microsoft\Kiota\Abstractions\QueryParameter;
use Rixl\Sdk\Models\Auth\V1\MembershipApplicationState;

/**
 * ListMembershipApplications
*/
class MembershipApplicationsRequestBuilderGetQueryParameters 
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
     * @var MembershipApplicationState|null $state 
    */
    public ?MembershipApplicationState $state = null;
    
    /**
     * @QueryParameter("user%2Euser_id")
     * @var string|null $userUserId 
    */
    public ?string $userUserId = null;
    
    /**
     * Instantiates a new MembershipApplicationsRequestBuilderGetQueryParameters and sets the default values.
     * @param int|null $limit 
     * @param int|null $offset 
     * @param MembershipApplicationState|null $state 
     * @param string|null $userUser_id 
    */
    public function __construct(?int $limit = null, ?int $offset = null, ?MembershipApplicationState $state = null, ?string $userUser_id = null) {
        $this->limit = $limit;
        $this->offset = $offset;
        $this->state = $state;
        $this->userUserId = $userUser_id;
    }

}
