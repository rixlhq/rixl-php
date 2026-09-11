<?php

namespace Rixl\Sdk\Support\V1\Tickets;

use Microsoft\Kiota\Abstractions\QueryParameter;

/**
 * ListTickets
*/
class TicketsRequestBuilderGetQueryParameters 
{
    /**
     * @QueryParameter("pagination%2Elimit")
     * @var int|null $paginationLimit Maximum number of items to return.
    */
    public ?int $paginationLimit = null;
    
    /**
     * @QueryParameter("pagination%2Eoffset")
     * @var int|null $paginationOffset Number of items to skip before collecting the result set.
    */
    public ?int $paginationOffset = null;
    
    /**
     * @var string|null $status The status query parameter.
    */
    public ?string $status = null;
    
    /**
     * Instantiates a new TicketsRequestBuilderGetQueryParameters and sets the default values.
     * @param int|null $paginationLimit Maximum number of items to return.
     * @param int|null $paginationOffset Number of items to skip before collecting the result set.
     * @param string|null $status The status query parameter.
    */
    public function __construct(?int $paginationLimit = null, ?int $paginationOffset = null, ?string $status = null) {
        $this->paginationLimit = $paginationLimit;
        $this->paginationOffset = $paginationOffset;
        $this->status = $status;
    }

}
