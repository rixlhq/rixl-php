<?php

namespace Rixl\Sdk\Auth\V1\Memberships\Item\Policies\Permissions;

/**
 * ListPermissionRegistry
*/
class PermissionsRequestBuilderGetQueryParameters 
{
    /**
     * @var int|null $limit The limit query parameter.
    */
    public ?int $limit = null;
    
    /**
     * @var int|null $offset The offset query parameter.
    */
    public ?int $offset = null;
    
    /**
     * @var array<string>|null $types The types query parameter.
    */
    public ?array $types = null;
    
    /**
     * Instantiates a new PermissionsRequestBuilderGetQueryParameters and sets the default values.
     * @param int|null $limit The limit query parameter.
     * @param int|null $offset The offset query parameter.
     * @param array<string>|null $types The types query parameter.
    */
    public function __construct(?int $limit = null, ?int $offset = null, ?array $types = null) {
        $this->limit = $limit;
        $this->offset = $offset;
        $this->types = $types;
    }

}
