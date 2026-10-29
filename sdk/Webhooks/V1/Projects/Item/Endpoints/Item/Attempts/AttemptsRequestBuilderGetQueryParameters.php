<?php

namespace Rixl\Sdk\Webhooks\V1\Projects\Item\Endpoints\Item\Attempts;

use Microsoft\Kiota\Abstractions\QueryParameter;

/**
 * ListEndpointAttempts returns the delivery history for one endpoint, newest first.
*/
class AttemptsRequestBuilderGetQueryParameters 
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
     * Instantiates a new AttemptsRequestBuilderGetQueryParameters and sets the default values.
     * @param int|null $paginationLimit Maximum number of items to return.
     * @param int|null $paginationOffset Number of items to skip before collecting the result set.
    */
    public function __construct(?int $paginationLimit = null, ?int $paginationOffset = null) {
        $this->paginationLimit = $paginationLimit;
        $this->paginationOffset = $paginationOffset;
    }

}
