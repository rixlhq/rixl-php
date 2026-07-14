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
     * @var string|null $sortDirection 
    */
    public ?string $sortDirection = null;
    
    /**
     * @var string|null $sortField 
    */
    public ?string $sortField = null;
    
    /**
     * Instantiates a new ImagesRequestBuilderGetQueryParameters and sets the default values.
     * @param int|null $paginationLimit Maximum number of items to return.
     * @param int|null $paginationOffset Number of items to skip before collecting the result set.
     * @param string|null $sortDirection 
     * @param string|null $sortField 
    */
    public function __construct(?int $paginationLimit = null, ?int $paginationOffset = null, ?string $sortDirection = null, ?string $sortField = null) {
        $this->paginationLimit = $paginationLimit;
        $this->paginationOffset = $paginationOffset;
        $this->sortDirection = $sortDirection;
        $this->sortField = $sortField;
    }

}
