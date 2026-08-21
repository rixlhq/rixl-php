<?php

namespace Rixl\Sdk\Models\Analytics\V1;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class CreateDashboardRequest implements Parsable 
{
    /**
     * @var bool|null $is_default The is_default property
    */
    private ?bool $is_default = null;
    
    /**
     * @var string|null $name The name property
    */
    private ?string $name = null;
    
    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return CreateDashboardRequest
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): CreateDashboardRequest {
        return new CreateDashboardRequest();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'is_default' => fn(ParseNode $n) => $o->setIsDefault($n->getBooleanValue()),
            'name' => fn(ParseNode $n) => $o->setName($n->getStringValue()),
        ];
    }

    /**
     * Gets the is_default property value. The is_default property
     * @return bool|null
    */
    public function getIsDefault(): ?bool {
        return $this->is_default;
    }

    /**
     * Gets the name property value. The name property
     * @return string|null
    */
    public function getName(): ?string {
        return $this->name;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeBooleanValue('is_default', $this->getIsDefault());
        $writer->writeStringValue('name', $this->getName());
    }

    /**
     * Sets the is_default property value. The is_default property
     * @param bool|null $value Value to set for the is_default property.
    */
    public function setIsDefault(?bool $value): void {
        $this->is_default = $value;
    }

    /**
     * Sets the name property value. The name property
     * @param string|null $value Value to set for the name property.
    */
    public function setName(?string $value): void {
        $this->name = $value;
    }

}
