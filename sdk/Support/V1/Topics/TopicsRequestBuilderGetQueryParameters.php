<?php

namespace Rixl\Sdk\Support\V1\Topics;

/**
 * ListTopics
*/
class TopicsRequestBuilderGetQueryParameters 
{
    /**
     * @QueryParameter("category_id")
     * @var string|null $categoryId The category_id query parameter.
    */
    public ?string $categoryId = null;
    
    /**
     * @var string|null $query The query query parameter.
    */
    public ?string $query = null;
    
    /**
     * Instantiates a new TopicsRequestBuilderGetQueryParameters and sets the default values.
     * @param string|null $category_id The category_id query parameter.
     * @param string|null $query The query query parameter.
    */
    public function __construct(?string $category_id = null, ?string $query = null) {
        $this->categoryId = $category_id;
        $this->query = $query;
    }

}
