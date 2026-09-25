<?php

namespace Rixl\Sdk\Auth\V1\Memberships\Item\Name;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class NamePatchRequestBody implements Parsable 
{
    /**
     * @var string|null $full_name The full_name property
    */
    private ?string $full_name = null;
    
    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return NamePatchRequestBody
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): NamePatchRequestBody {
        return new NamePatchRequestBody();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'full_name' => fn(ParseNode $n) => $o->setFullName($n->getStringValue()),
        ];
    }

    /**
     * Gets the full_name property value. The full_name property
     * @return string|null
    */
    public function getFullName(): ?string {
        return $this->full_name;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('full_name', $this->getFullName());
    }

    /**
     * Sets the full_name property value. The full_name property
     * @param string|null $value Value to set for the full_name property.
    */
    public function setFullName(?string $value): void {
        $this->full_name = $value;
    }

}
