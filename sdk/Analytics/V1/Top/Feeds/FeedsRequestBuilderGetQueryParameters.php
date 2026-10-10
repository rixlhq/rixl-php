<?php

namespace Rixl\Sdk\Analytics\V1\Top\Feeds;

use Microsoft\Kiota\Abstractions\QueryParameter;

/**
 * GetTopFeeds
*/
class FeedsRequestBuilderGetQueryParameters 
{
    /**
     * @var int|null $limit The limit query parameter.
    */
    public ?int $limit = null;
    
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
     * Instantiates a new FeedsRequestBuilderGetQueryParameters and sets the default values.
     * @param int|null $limit The limit query parameter.
     * @param string|null $rangeEnd The range.end query parameter.
     * @param string|null $rangeStart The range.start query parameter.
    */
    public function __construct(?int $limit = null, ?string $rangeEnd = null, ?string $rangeStart = null) {
        $this->limit = $limit;
        $this->rangeEnd = $rangeEnd;
        $this->rangeStart = $rangeStart;
    }

}
