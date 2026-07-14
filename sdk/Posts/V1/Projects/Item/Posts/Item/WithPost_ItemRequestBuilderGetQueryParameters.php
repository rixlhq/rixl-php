<?php

namespace Rixl\Sdk\Posts\V1\Projects\Item\Posts\Item;

/**
 * GetPost
*/
class WithPost_ItemRequestBuilderGetQueryParameters 
{
    /**
     * @var string|null $feedId Populated from feed-scoped routes; the handler resolves by post_id, so this is used only for path binding / optional validation.
    */
    public ?string $feedId = null;
    
    /**
     * Instantiates a new WithPost_ItemRequestBuilderGetQueryParameters and sets the default values.
     * @param string|null $feedId Populated from feed-scoped routes; the handler resolves by post_id, so this is used only for path binding / optional validation.
    */
    public function __construct(?string $feedId = null) {
        $this->feedId = $feedId;
    }

}
