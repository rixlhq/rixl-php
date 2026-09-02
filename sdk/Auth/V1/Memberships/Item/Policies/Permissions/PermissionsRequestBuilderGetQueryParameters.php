<?php

namespace Rixl\Sdk\Auth\V1\Memberships\Item\Policies\Permissions;

/**
 * ListPermissionRegistry
*/
class PermissionsRequestBuilderGetQueryParameters 
{
    /**
     * @var int|null $limit 
    */
    public ?int $limit = null;
    
    /**
     * @var int|null $offset 
    */
    public ?int $offset = null;
    
    /**
     * @var array<string>|null $types 
    */
    public ?array $types = null;
    
    /**
     * Instantiates a new PermissionsRequestBuilderGetQueryParameters and sets the default values.
     * @param int|null $limit 
     * @param int|null $offset 
     * @param array<string>|null $types 
    */
    public function __construct(?int $limit = null, ?int $offset = null, ?array $types = null) {
        $this->limit = $limit;
        $this->offset = $offset;
        $this->types = $types;
    }

}
