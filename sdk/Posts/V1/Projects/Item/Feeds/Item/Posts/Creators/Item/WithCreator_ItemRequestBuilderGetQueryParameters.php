<?php

namespace Rixl\Sdk\Posts\V1\Projects\Item\Feeds\Item\Posts\Creators\Item;

use Microsoft\Kiota\Abstractions\QueryParameter;

/**
 * ListPosts
*/
class WithCreator_ItemRequestBuilderGetQueryParameters 
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
     * Instantiates a new WithCreator_ItemRequestBuilderGetQueryParameters and sets the default values.
     * @param int|null $paginationLimit Maximum number of items to return.
     * @param int|null $paginationOffset Number of items to skip before collecting the result set.
    */
    public function __construct(?int $paginationLimit = null, ?int $paginationOffset = null) {
        $this->paginationLimit = $paginationLimit;
        $this->paginationOffset = $paginationOffset;
    }

}
