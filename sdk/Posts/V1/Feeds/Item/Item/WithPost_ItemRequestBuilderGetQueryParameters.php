<?php

namespace Rixl\Sdk\Posts\V1\Feeds\Item\Item;

/**
 * GetPost
*/
class WithPost_ItemRequestBuilderGetQueryParameters 
{
    /**
     * @var string|null $projectId 
    */
    public ?string $projectId = null;
    
    /**
     * Instantiates a new WithPost_ItemRequestBuilderGetQueryParameters and sets the default values.
     * @param string|null $projectId 
    */
    public function __construct(?string $projectId = null) {
        $this->projectId = $projectId;
    }

}
