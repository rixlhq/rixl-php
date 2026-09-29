<?php

namespace Rixl\Sdk\Auth\V1\Memberships\Item\Members;

/**
 * ListOrganizationMembers
*/
class MembersRequestBuilderGetQueryParameters 
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
     * Instantiates a new MembersRequestBuilderGetQueryParameters and sets the default values.
     * @param int|null $limit The limit query parameter.
     * @param int|null $offset The offset query parameter.
    */
    public function __construct(?int $limit = null, ?int $offset = null) {
        $this->limit = $limit;
        $this->offset = $offset;
    }

}
