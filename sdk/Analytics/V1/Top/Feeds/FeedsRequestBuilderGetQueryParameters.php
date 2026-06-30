<?php

namespace Rixl\Sdk\Analytics\V1\Top\Feeds;

/**
 * Returns the top feeds over a date range
*/
class FeedsRequestBuilderGetQueryParameters 
{
    /**
     * @var string|null $end End date (inclusive)
    */
    public ?string $end = null;
    
    /**
     * @var string|null $limit Maximum number of results
    */
    public ?string $limit = null;
    
    /**
     * @var string|null $start Start date (inclusive)
    */
    public ?string $start = null;
    
    /**
     * Instantiates a new FeedsRequestBuilderGetQueryParameters and sets the default values.
     * @param string|null $end End date (inclusive)
     * @param string|null $limit Maximum number of results
     * @param string|null $start Start date (inclusive)
    */
    public function __construct(?string $end = null, ?string $limit = null, ?string $start = null) {
        $this->end = $end;
        $this->limit = $limit;
        $this->start = $start;
    }

}
