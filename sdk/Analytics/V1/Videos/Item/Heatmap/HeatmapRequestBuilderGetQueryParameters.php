<?php

namespace Rixl\Sdk\Analytics\V1\Videos\Item\Heatmap;

/**
 * Returns the engagement heatmap for a video
*/
class HeatmapRequestBuilderGetQueryParameters 
{
    /**
     * @var string|null $buckets Number of buckets
    */
    public ?string $buckets = null;
    
    /**
     * @var string|null $end End date (inclusive)
    */
    public ?string $end = null;
    
    /**
     * @var string|null $start Start date (inclusive)
    */
    public ?string $start = null;
    
    /**
     * Instantiates a new HeatmapRequestBuilderGetQueryParameters and sets the default values.
     * @param string|null $buckets Number of buckets
     * @param string|null $end End date (inclusive)
     * @param string|null $start Start date (inclusive)
    */
    public function __construct(?string $buckets = null, ?string $end = null, ?string $start = null) {
        $this->buckets = $buckets;
        $this->end = $end;
        $this->start = $start;
    }

}
