<?php

namespace Rixl\Sdk\Posts\V1\Feeds\Item;

use Microsoft\Kiota\Abstractions\QueryParameter;

/**
 * ListPosts
*/
class WithFeed_ItemRequestBuilderGetQueryParameters 
{
    /**
     * @QueryParameter("creator_id")
     * @var string|null $creatorId 
    */
    public ?string $creatorId = null;
    
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
     * @QueryParameter("project_id")
     * @var string|null $projectId 
    */
    public ?string $projectId = null;
    
    /**
     * Instantiates a new WithFeed_ItemRequestBuilderGetQueryParameters and sets the default values.
     * @param string|null $creator_id 
     * @param int|null $paginationLimit Maximum number of items to return.
     * @param int|null $paginationOffset Number of items to skip before collecting the result set.
     * @param string|null $project_id 
    */
    public function __construct(?string $creator_id = null, ?int $paginationLimit = null, ?int $paginationOffset = null, ?string $project_id = null) {
        $this->creatorId = $creator_id;
        $this->paginationLimit = $paginationLimit;
        $this->paginationOffset = $paginationOffset;
        $this->projectId = $project_id;
    }

}
