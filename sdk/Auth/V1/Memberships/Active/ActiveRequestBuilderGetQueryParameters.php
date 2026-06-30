<?php

namespace Rixl\Sdk\Auth\V1\Memberships\Active;

/**
 * Returns a paginated list of the organizations in which the authenticated user holds an active membership.
*/
class ActiveRequestBuilderGetQueryParameters 
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
     * Instantiates a new ActiveRequestBuilderGetQueryParameters and sets the default values.
     * @param int|null $limit Limit
     * @param int|null $offset Offset
    */
    public function __construct(?int $limit = null, ?int $offset = null) {
        $this->limit = $limit;
        $this->offset = $offset;
    }

}
