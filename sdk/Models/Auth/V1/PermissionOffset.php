<?php

namespace Rixl\Sdk\Models\Auth\V1;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class PermissionOffset implements Parsable 
{
    /**
     * @var string|null $name The name property
    */
    private ?string $name = null;
    
    /**
     * @var int|null $offset The offset property
    */
    private ?int $offset = null;
    
    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return PermissionOffset
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): PermissionOffset {
        return new PermissionOffset();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'name' => fn(ParseNode $n) => $o->setName($n->getStringValue()),
            'offset' => fn(ParseNode $n) => $o->setOffset($n->getIntegerValue()),
        ];
    }

    /**
     * Gets the name property value. The name property
     * @return string|null
    */
    public function getName(): ?string {
        return $this->name;
    }

    /**
     * Gets the offset property value. The offset property
     * @return int|null
    */
    public function getOffset(): ?int {
        return $this->offset;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('name', $this->getName());
        $writer->writeIntegerValue('offset', $this->getOffset());
    }

    /**
     * Sets the name property value. The name property
     * @param string|null $value Value to set for the name property.
    */
    public function setName(?string $value): void {
        $this->name = $value;
    }

    /**
     * Sets the offset property value. The offset property
     * @param int|null $value Value to set for the offset property.
    */
    public function setOffset(?int $value): void {
        $this->offset = $value;
    }

}
