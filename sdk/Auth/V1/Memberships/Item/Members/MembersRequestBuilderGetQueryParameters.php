<?php

namespace Rixl\Sdk\Auth\V1\Memberships\Item\Members;

use Microsoft\Kiota\Abstractions\QueryParameter;

/**
 * ListOrganizationMembers
*/
class MembersRequestBuilderGetQueryParameters 
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
     * @QueryParameter("user%2Euser_id")
     * @var string|null $userUserId 
    */
    public ?string $userUserId = null;
    
    /**
     * Instantiates a new MembersRequestBuilderGetQueryParameters and sets the default values.
     * @param int|null $limit 
     * @param int|null $offset 
     * @param string|null $userUser_id 
    */
    public function __construct(?int $limit = null, ?int $offset = null, ?string $userUser_id = null) {
        $this->limit = $limit;
        $this->offset = $offset;
        $this->userUserId = $userUser_id;
    }

}
