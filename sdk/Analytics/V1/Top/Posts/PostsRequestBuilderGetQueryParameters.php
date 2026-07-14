<?php

namespace Rixl\Sdk\Analytics\V1\Top\Posts;

use Microsoft\Kiota\Abstractions\QueryParameter;

/**
 * GetTopPosts
*/
class PostsRequestBuilderGetQueryParameters 
{
    /**
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
     * @param string|null $feedId 
     * @param int|null $limit 
     * @param string|null $rangeEnd 
     * @param string|null $rangeStart 
    */
    public function __construct(?string $feedId = null, ?int $limit = null, ?string $rangeEnd = null, ?string $rangeStart = null) {
        $this->feedId = $feedId;
        $this->limit = $limit;
        $this->rangeEnd = $rangeEnd;
        $this->rangeStart = $rangeStart;
    }

}
