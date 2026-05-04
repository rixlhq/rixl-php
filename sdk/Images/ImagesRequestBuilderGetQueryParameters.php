<?php

namespace Rixl\Sdk\Images;

/**
 * Retrieve all images for a specific project, with pagination and sorting.
*/
class ImagesRequestBuilderGetQueryParameters 
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
     * @var string|null $order Sort order (asc, desc)
    */
    public ?string $order = null;
    
    /**
     * @var string|null $sort Field to sort by (created_at, name, size, updated_at)
    */
    public ?string $sort = null;
    
    /**
     * Instantiates a new ImagesRequestBuilderGetQueryParameters and sets the default values.
     * @param int|null $limit Maximum number of items to return in a single request. <br> **Default:** `25`
     * @param int|null $offset Starting point of the result set. <br>To get page 2 with a limit of 25, set `offset` to `25`. <br> **Default:** `0`
     * @param string|null $order Sort order (asc, desc)
     * @param string|null $sort Field to sort by (created_at, name, size, updated_at)
    */
    public function __construct(?int $limit = null, ?int $offset = null, ?string $order = null, ?string $sort = null) {
        $this->limit = $limit;
        $this->offset = $offset;
        $this->order = $order;
        $this->sort = $sort;
    }

}
