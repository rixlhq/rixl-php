<?php

namespace Rixl\Sdk\Support\V1\Categories\Item\Topics;

/**
 * ListTopics
*/
class TopicsRequestBuilderGetQueryParameters 
{
    /**
     * @var string|null $query 
    */
    public ?string $query = null;
    
    /**
     * Instantiates a new TopicsRequestBuilderGetQueryParameters and sets the default values.
     * @param string|null $query 
    */
    public function __construct(?string $query = null) {
        $this->query = $query;
    }

}
