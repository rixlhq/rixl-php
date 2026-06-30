<?php

namespace Rixl\Sdk\Analytics\V1\Top\Posts;

/**
 * Returns the top posts over a date range
*/
class PostsRequestBuilderGetQueryParameters 
{
    /**
     * @var string|null $end End date (inclusive)
    */
    public ?string $end = null;
    
    /**
     * @QueryParameter("feed_id")
     * @var string|null $feedId Filter by feed
    */
    public ?string $feedId = null;
    
    /**
     * @var string|null $limit Maximum number of results
    */
    public ?string $limit = null;
    
    /**
     * @var string|null $start Start date (inclusive)
    */
    public ?string $start = null;
    
    /**
     * Instantiates a new PostsRequestBuilderGetQueryParameters and sets the default values.
     * @param string|null $end End date (inclusive)
     * @param string|null $feed_id Filter by feed
     * @param string|null $limit Maximum number of results
     * @param string|null $start Start date (inclusive)
    */
    public function __construct(?string $end = null, ?string $feed_id = null, ?string $limit = null, ?string $start = null) {
        $this->end = $end;
        $this->feedId = $feed_id;
        $this->limit = $limit;
        $this->start = $start;
    }

}
