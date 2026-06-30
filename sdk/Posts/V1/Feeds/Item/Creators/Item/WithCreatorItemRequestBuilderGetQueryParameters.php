<?php

namespace Rixl\Sdk\Posts\V1\Feeds\Item\Creators\Item;

/**
 * Public, unauthenticated listing of posts in a feed by a specific creator, with pagination.
*/
class WithCreatorItemRequestBuilderGetQueryParameters 
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
     * Instantiates a new WithCreatorItemRequestBuilderGetQueryParameters and sets the default values.
     * @param int|null $limit Page size
     * @param int|null $offset Page offset
    */
    public function __construct(?int $limit = null, ?int $offset = null) {
        $this->limit = $limit;
        $this->offset = $offset;
    }

}
