<?php

namespace Rixl\Sdk\Media\V1\Projects\Item\Images;

use Microsoft\Kiota\Abstractions\QueryParameter;

/**
 * ListImages
*/
class ImagesRequestBuilderGetQueryParameters 
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
     * @QueryParameter("sort_direction")
     * @var string|null $sortDirection The sort_direction query parameter.
    */
    public ?string $sortDirection = null;
    
    /**
     * @QueryParameter("sort_field")
     * @var string|null $sortField The sort_field query parameter.
    */
    public ?string $sortField = null;
    
    /**
     * Instantiates a new ImagesRequestBuilderGetQueryParameters and sets the default values.
     * @param int|null $paginationLimit Maximum number of items to return.
     * @param int|null $paginationOffset Number of items to skip before collecting the result set.
     * @param string|null $sort_direction The sort_direction query parameter.
     * @param string|null $sort_field The sort_field query parameter.
    */
    public function __construct(?int $paginationLimit = null, ?int $paginationOffset = null, ?string $sort_direction = null, ?string $sort_field = null) {
        $this->paginationLimit = $paginationLimit;
        $this->paginationOffset = $paginationOffset;
        $this->sortDirection = $sort_direction;
        $this->sortField = $sort_field;
    }

}
