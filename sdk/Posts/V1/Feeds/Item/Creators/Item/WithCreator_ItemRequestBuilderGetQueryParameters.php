<?php

namespace Rixl\Sdk\Posts\V1\Feeds\Item\Creators\Item;

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
     * @var string|null $projectId 
    */
    public ?string $projectId = null;
    
    /**
     * Instantiates a new WithCreator_ItemRequestBuilderGetQueryParameters and sets the default values.
     * @param int|null $paginationLimit Maximum number of items to return.
     * @param int|null $paginationOffset Number of items to skip before collecting the result set.
     * @param string|null $projectId 
    */
    public function __construct(?int $paginationLimit = null, ?int $paginationOffset = null, ?string $projectId = null) {
        $this->paginationLimit = $paginationLimit;
        $this->paginationOffset = $paginationOffset;
        $this->projectId = $projectId;
    }

}
