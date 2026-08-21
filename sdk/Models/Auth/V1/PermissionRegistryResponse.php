<?php

namespace Rixl\Sdk\Models\Auth\V1;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class PermissionRegistryResponse implements Parsable 
{
    /**
     * @var array<PermissionOffset>|null $permissions The permissions property
    */
    private ?array $permissions = null;
    
    /**
     * @var int|null $total The total property
    */
    private ?int $total = null;
    
    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return PermissionRegistryResponse
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): PermissionRegistryResponse {
        return new PermissionRegistryResponse();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'permissions' => fn(ParseNode $n) => $o->setPermissions($n->getCollectionOfObjectValues([PermissionOffset::class, 'createFromDiscriminatorValue'])),
            'total' => fn(ParseNode $n) => $o->setTotal($n->getIntegerValue()),
        ];
    }

    /**
     * Gets the permissions property value. The permissions property
     * @return array<PermissionOffset>|null
    */
    public function getPermissions(): ?array {
        return $this->permissions;
    }

    /**
     * Gets the total property value. The total property
     * @return int|null
    */
    public function getTotal(): ?int {
        return $this->total;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeCollectionOfObjectValues('permissions', $this->getPermissions());
        $writer->writeIntegerValue('total', $this->getTotal());
    }

    /**
     * Sets the permissions property value. The permissions property
     * @param array<PermissionOffset>|null $value Value to set for the permissions property.
    */
    public function setPermissions(?array $value): void {
        $this->permissions = $value;
    }

    /**
     * Sets the total property value. The total property
     * @param int|null $value Value to set for the total property.
    */
    public function setTotal(?int $value): void {
        $this->total = $value;
    }

}
