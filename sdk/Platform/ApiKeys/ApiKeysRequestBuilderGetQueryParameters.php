<?php

namespace Rixl\Sdk\Platform\ApiKeys;

/**
 * Get all API keys for a specific organization
*/
class ApiKeysRequestBuilderGetQueryParameters 
{
    /**
     * @var int|null $limit Pagination limit
    */
    public ?int $limit = null;
    
    /**
     * @var int|null $offset Pagination offset
    */
    public ?int $offset = null;
    
    /**
     * Instantiates a new ApiKeysRequestBuilderGetQueryParameters and sets the default values.
     * @param int|null $limit Pagination limit
     * @param int|null $offset Pagination offset
    */
    public function __construct(?int $limit = null, ?int $offset = null) {
        $this->limit = $limit;
        $this->offset = $offset;
    }

}
