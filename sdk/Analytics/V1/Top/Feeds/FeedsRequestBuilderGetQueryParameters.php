<?php

namespace Rixl\Sdk\Analytics\V1\Top\Feeds;

use Microsoft\Kiota\Abstractions\QueryParameter;

/**
 * GetTopFeeds
*/
class FeedsRequestBuilderGetQueryParameters 
{
    /**
     * @var int|null $limit 
    */
    public ?int $limit = null;
    
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
     * Instantiates a new FeedsRequestBuilderGetQueryParameters and sets the default values.
     * @param int|null $limit 
     * @param string|null $rangeEnd 
     * @param string|null $rangeStart 
    */
    public function __construct(?int $limit = null, ?string $rangeEnd = null, ?string $rangeStart = null) {
        $this->limit = $limit;
        $this->rangeEnd = $rangeEnd;
        $this->rangeStart = $rangeStart;
    }

}
