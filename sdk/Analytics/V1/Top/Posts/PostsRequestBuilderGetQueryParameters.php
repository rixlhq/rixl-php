<?php

namespace Rixl\Sdk\Analytics\V1\Top\Posts;

use Microsoft\Kiota\Abstractions\QueryParameter;

/**
 * GetTopPosts
*/
class PostsRequestBuilderGetQueryParameters 
{
    /**
     * @QueryParameter("feed_id")
     * @var string|null $feedId 
    */
    public ?string $feedId = null;
    
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
     * Instantiates a new PostsRequestBuilderGetQueryParameters and sets the default values.
     * @param string|null $feed_id 
     * @param int|null $limit 
     * @param string|null $rangeEnd 
     * @param string|null $rangeStart 
    */
    public function __construct(?string $feed_id = null, ?int $limit = null, ?string $rangeEnd = null, ?string $rangeStart = null) {
        $this->feedId = $feed_id;
        $this->limit = $limit;
        $this->rangeEnd = $rangeEnd;
        $this->rangeStart = $rangeStart;
    }

}
