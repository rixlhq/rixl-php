<?php

namespace Rixl\Sdk\Analytics\V1\Videos\Item\Heatmap;

use Microsoft\Kiota\Abstractions\QueryParameter;

/**
 * GetVideoHeatmap
*/
class HeatmapRequestBuilderGetQueryParameters 
{
    /**
     * @var int|null $buckets 
    */
    public ?int $buckets = null;
    
    /**
     * @QueryParameter("range%2Eend")
     * @var string|null $rangeEnd 
    */
    public ?string $rangeEnd = null;
    
    /**
     * @QueryParameter("range%2Estart")
     * @var string|null $rangeStart 
    */
    public ?string $rangeStart = null;
    
    /**
     * Instantiates a new HeatmapRequestBuilderGetQueryParameters and sets the default values.
     * @param int|null $buckets 
     * @param string|null $rangeEnd 
     * @param string|null $rangeStart 
    */
    public function __construct(?int $buckets = null, ?string $rangeEnd = null, ?string $rangeStart = null) {
        $this->buckets = $buckets;
        $this->rangeEnd = $rangeEnd;
        $this->rangeStart = $rangeStart;
    }

}
