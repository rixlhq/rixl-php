<?php

namespace Rixl\Sdk\Analytics\V1\Feeds\Item\Stats;

use Microsoft\Kiota\Abstractions\QueryParameter;

/**
 * GetFeedStats
*/
class StatsRequestBuilderGetQueryParameters 
{
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
     * Instantiates a new StatsRequestBuilderGetQueryParameters and sets the default values.
     * @param string|null $rangeEnd The range.end query parameter.
     * @param string|null $rangeStart The range.start query parameter.
    */
    public function __construct(?string $rangeEnd = null, ?string $rangeStart = null) {
        $this->rangeEnd = $rangeEnd;
        $this->rangeStart = $rangeStart;
    }

}
