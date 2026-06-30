<?php

namespace Rixl\Sdk\Analytics\V1\Feeds\Item\Stats;

/**
 * Returns aggregated statistics for a feed over a date range
*/
class StatsRequestBuilderGetQueryParameters 
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
     * Instantiates a new StatsRequestBuilderGetQueryParameters and sets the default values.
     * @param string|null $end End date (inclusive)
     * @param string|null $start Start date (inclusive)
    */
    public function __construct(?string $end = null, ?string $start = null) {
        $this->end = $end;
        $this->start = $start;
    }

}
