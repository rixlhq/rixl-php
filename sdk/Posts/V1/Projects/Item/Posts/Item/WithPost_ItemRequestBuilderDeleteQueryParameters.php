<?php

namespace Rixl\Sdk\Posts\V1\Projects\Item\Posts\Item;

/**
 * DeletePost
*/
class WithPost_ItemRequestBuilderDeleteQueryParameters 
{
    /**
     * @var string|null $feedId feed_id is accepted from the feed-scoped delete path but not used by the backend (deletion is keyed by post_id).
    */
    public ?string $feedId = null;
    
    /**
     * Instantiates a new WithPost_ItemRequestBuilderDeleteQueryParameters and sets the default values.
     * @param string|null $feedId feed_id is accepted from the feed-scoped delete path but not used by the backend (deletion is keyed by post_id).
    */
    public function __construct(?string $feedId = null) {
        $this->feedId = $feedId;
    }

}
