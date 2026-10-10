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
     * @var string|null $feedId The feed_id query parameter.
    */
    public ?string $feedId = null;
    
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
     * Instantiates a new PostsRequestBuilderGetQueryParameters and sets the default values.
     * @param string|null $feed_id The feed_id query parameter.
     * @param int|null $limit The limit query parameter.
     * @param string|null $rangeEnd The range.end query parameter.
     * @param string|null $rangeStart The range.start query parameter.
    */
    public function __construct(?string $feed_id = null, ?int $limit = null, ?string $rangeEnd = null, ?string $rangeStart = null) {
        $this->feedId = $feed_id;
        $this->limit = $limit;
        $this->rangeEnd = $rangeEnd;
        $this->rangeStart = $rangeStart;
    }

}
