<?php

namespace Rixl\Sdk\Analytics\V1\Videos\Item\HotSegments;

/**
 * Returns the most engaging segments of a video
*/
class HotSegmentsRequestBuilderGetQueryParameters 
{
    /**
     * @var string|null $end End date (inclusive)
    */
    public ?string $end = null;
    
    /**
     * @var string|null $start Start date (inclusive)
    */
    public ?string $start = null;
    
    /**
     * Instantiates a new HotSegmentsRequestBuilderGetQueryParameters and sets the default values.
     * @param string|null $end End date (inclusive)
     * @param string|null $start Start date (inclusive)
    */
    public function __construct(?string $end = null, ?string $start = null) {
        $this->end = $end;
        $this->start = $start;
    }

}
