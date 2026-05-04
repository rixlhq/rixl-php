<?php

namespace Rixl\Sdk\Feeds\Item;

/**
 * Retrieve posts in a feed, with pagination.
*/
class WithFeedItemRequestBuilderGetQueryParameters 
{
    /**
     * @var int|null $limit Maximum number of items to return in a single request. <br> **Default:** `25`
    */
    public ?int $limit = null;
    
    /**
     * @var int|null $offset Starting point of the result set. <br>To get page 2 with a limit of 25, set `offset` to `25`. <br> **Default:** `0`
    */
    public ?int $offset = null;
    
    /**
     * Instantiates a new WithFeedItemRequestBuilderGetQueryParameters and sets the default values.
     * @param int|null $limit Maximum number of items to return in a single request. <br> **Default:** `25`
     * @param int|null $offset Starting point of the result set. <br>To get page 2 with a limit of 25, set `offset` to `25`. <br> **Default:** `0`
    */
    public function __construct(?int $limit = null, ?int $offset = null) {
        $this->limit = $limit;
        $this->offset = $offset;
    }

}
