<?php

namespace Rixl\Sdk\Posts\V1\Projects\Item\Feeds\Item\Posts;

use Microsoft\Kiota\Abstractions\QueryParameter;

/**
 * ListPosts
*/
class PostsRequestBuilderGetQueryParameters 
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
     * Instantiates a new PostsRequestBuilderGetQueryParameters and sets the default values.
     * @param string|null $creator_id 
     * @param int|null $paginationLimit Maximum number of items to return.
     * @param int|null $paginationOffset Number of items to skip before collecting the result set.
    */
    public function __construct(?string $creator_id = null, ?int $paginationLimit = null, ?int $paginationOffset = null) {
        $this->creatorId = $creator_id;
        $this->paginationLimit = $paginationLimit;
        $this->paginationOffset = $paginationOffset;
    }

}
