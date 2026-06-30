<?php

namespace Rixl\Sdk\Projects\Item\Feeds;

/**
 * Lists all feeds for the active project with pagination.
*/
class FeedsRequestBuilderGetQueryParameters 
{
    /**
     * @var int|null $limit Limit
    */
    public ?int $limit = null;
    
    /**
     * @var int|null $offset Offset
    */
    public ?int $offset = null;
    
    /**
     * Instantiates a new FeedsRequestBuilderGetQueryParameters and sets the default values.
     * @param int|null $limit Limit
     * @param int|null $offset Offset
    */
    public function __construct(?int $limit = null, ?int $offset = null) {
        $this->limit = $limit;
        $this->offset = $offset;
    }

}
