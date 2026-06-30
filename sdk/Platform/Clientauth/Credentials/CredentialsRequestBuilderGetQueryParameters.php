<?php

namespace Rixl\Sdk\Platform\Clientauth\Credentials;

/**
 * List client credentials for the specified organization
*/
class CredentialsRequestBuilderGetQueryParameters 
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
     * Instantiates a new CredentialsRequestBuilderGetQueryParameters and sets the default values.
     * @param int|null $limit Pagination limit
     * @param int|null $offset Pagination offset
    */
    public function __construct(?int $limit = null, ?int $offset = null) {
        $this->limit = $limit;
        $this->offset = $offset;
    }

}
