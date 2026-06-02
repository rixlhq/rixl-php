<?php

namespace Rixl\Sdk\Media\Images;

/**
 * Retrieve all images for the caller's active project with pagination and sorting support.
*/
class ImagesRequestBuilderGetQueryParameters 
{
    /**
     * @var int|null $limit Number of images to return (default 20, max 100)
    */
    public ?int $limit = null;
    
    /**
     * @var int|null $offset Number of images to skip (default 0)
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
     * @param int|null $limit Number of images to return (default 20, max 100)
     * @param int|null $offset Number of images to skip (default 0)
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
