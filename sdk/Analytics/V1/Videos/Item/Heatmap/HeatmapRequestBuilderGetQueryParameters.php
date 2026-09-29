<?php

namespace Rixl\Sdk\Analytics\V1\Videos\Item\Heatmap;

use Microsoft\Kiota\Abstractions\QueryParameter;

/**
 * GetVideoHeatmap
*/
class HeatmapRequestBuilderGetQueryParameters 
{
    /**
     * @var int|null $buckets The buckets query parameter.
    */
    public ?int $buckets = null;
    
    /**
     * @QueryParameter("range%2Eend")
     * @var string|null $rangeEnd The range.end query parameter.
    */
    public ?string $rangeEnd = null;
    
    /**
     * @QueryParameter("range%2Estart")
     * @var string|null $rangeStart The range.start query parameter.
    */
    public ?string $rangeStart = null;
    
    /**
     * Instantiates a new HeatmapRequestBuilderGetQueryParameters and sets the default values.
     * @param int|null $buckets The buckets query parameter.
     * @param string|null $rangeEnd The range.end query parameter.
     * @param string|null $rangeStart The range.start query parameter.
    */
    public function __construct(?int $buckets = null, ?string $rangeEnd = null, ?string $rangeStart = null) {
        $this->buckets = $buckets;
        $this->rangeEnd = $rangeEnd;
        $this->rangeStart = $rangeStart;
    }

}
