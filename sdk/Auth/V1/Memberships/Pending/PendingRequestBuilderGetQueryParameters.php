<?php

namespace Rixl\Sdk\Auth\V1\Memberships\Pending;

/**
 * Returns a paginated list of the authenticated user's pending organization membership invitations that have not yet been accepted.
*/
class PendingRequestBuilderGetQueryParameters 
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
     * Instantiates a new PendingRequestBuilderGetQueryParameters and sets the default values.
     * @param int|null $limit Limit
     * @param int|null $offset Offset
    */
    public function __construct(?int $limit = null, ?int $offset = null) {
        $this->limit = $limit;
        $this->offset = $offset;
    }

}
