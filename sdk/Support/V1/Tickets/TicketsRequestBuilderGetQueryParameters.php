<?php

namespace Rixl\Sdk\Support\V1\Tickets;

use Microsoft\Kiota\Abstractions\QueryParameter;
use Rixl\Sdk\Models\Support\V1\TicketStatus;

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
     * @var TicketStatus|null $status 
    */
    public ?TicketStatus $status = null;
    
    /**
     * Instantiates a new TicketsRequestBuilderGetQueryParameters and sets the default values.
     * @param int|null $paginationLimit Maximum number of items to return.
     * @param int|null $paginationOffset Number of items to skip before collecting the result set.
     * @param TicketStatus|null $status 
    */
    public function __construct(?int $paginationLimit = null, ?int $paginationOffset = null, ?TicketStatus $status = null) {
        $this->paginationLimit = $paginationLimit;
        $this->paginationOffset = $paginationOffset;
        $this->status = $status;
    }

}
