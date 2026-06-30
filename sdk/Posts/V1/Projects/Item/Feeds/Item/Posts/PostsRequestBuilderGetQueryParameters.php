<?php

namespace Rixl\Sdk\Posts\V1\Projects\Item\Feeds\Item\Posts;

/**
 * List posts in a feed
*/
class PostsRequestBuilderGetQueryParameters 
{
    /**
     * @var int|null $limit Page size
    */
    public ?int $limit = null;
    
    /**
     * @var int|null $offset Page offset
    */
    public ?int $offset = null;
    
    /**
     * Instantiates a new PostsRequestBuilderGetQueryParameters and sets the default values.
     * @param int|null $limit Page size
     * @param int|null $offset Page offset
    */
    public function __construct(?int $limit = null, ?int $offset = null) {
        $this->limit = $limit;
        $this->offset = $offset;
    }

}
