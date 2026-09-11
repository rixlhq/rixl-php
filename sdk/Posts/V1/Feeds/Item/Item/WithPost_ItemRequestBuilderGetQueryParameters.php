<?php

namespace Rixl\Sdk\Posts\V1\Feeds\Item\Item;

/**
 * GetPost
*/
class WithPost_ItemRequestBuilderGetQueryParameters 
{
    /**
     * @QueryParameter("project_id")
     * @var string|null $projectId The project_id query parameter.
    */
    public ?string $projectId = null;
    
    /**
     * Instantiates a new WithPost_ItemRequestBuilderGetQueryParameters and sets the default values.
     * @param string|null $project_id The project_id query parameter.
    */
    public function __construct(?string $project_id = null) {
        $this->projectId = $project_id;
    }

}
