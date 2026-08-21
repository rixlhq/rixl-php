<?php

namespace Rixl\Sdk\Auth\V1\Memberships\Item\Policies\Permissions;

use Microsoft\Kiota\Abstractions\QueryParameter;

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
     * @QueryParameter("user%2Euser_id")
     * @var string|null $userUserId 
    */
    public ?string $userUserId = null;
    
    /**
     * Instantiates a new PermissionsRequestBuilderGetQueryParameters and sets the default values.
     * @param int|null $limit 
     * @param int|null $offset 
     * @param array<string>|null $types 
     * @param string|null $userUser_id 
    */
    public function __construct(?int $limit = null, ?int $offset = null, ?array $types = null, ?string $userUser_id = null) {
        $this->limit = $limit;
        $this->offset = $offset;
        $this->types = $types;
        $this->userUserId = $userUser_id;
    }

}
