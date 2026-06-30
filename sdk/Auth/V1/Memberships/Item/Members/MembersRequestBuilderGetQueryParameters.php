<?php

namespace Rixl\Sdk\Auth\V1\Memberships\Item\Members;

/**
 * Returns a paginated list of the members belonging to the specified organization.
*/
class MembersRequestBuilderGetQueryParameters 
{
    /**
     * @var int|null $limit Limit
    */
    public ?int $limit = null;
    
    /**
     * @var int|null $offset Offset
    */
    public ?int $offset = null;
    
    /**
     * Instantiates a new MembersRequestBuilderGetQueryParameters and sets the default values.
     * @param int|null $limit Limit
     * @param int|null $offset Offset
    */
    public function __construct(?int $limit = null, ?int $offset = null) {
        $this->limit = $limit;
        $this->offset = $offset;
    }

}
