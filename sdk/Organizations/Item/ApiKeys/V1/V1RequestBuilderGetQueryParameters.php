<?php

namespace Rixl\Sdk\Organizations\Item\ApiKeys\V1;

use Microsoft\Kiota\Abstractions\QueryParameter;

/**
 * ListApiKeys
*/
class V1RequestBuilderGetQueryParameters 
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
     * Instantiates a new V1RequestBuilderGetQueryParameters and sets the default values.
     * @param int|null $paginationLimit Maximum number of items to return.
     * @param int|null $paginationOffset Number of items to skip before collecting the result set.
    */
    public function __construct(?int $paginationLimit = null, ?int $paginationOffset = null) {
        $this->paginationLimit = $paginationLimit;
        $this->paginationOffset = $paginationOffset;
    }

}
