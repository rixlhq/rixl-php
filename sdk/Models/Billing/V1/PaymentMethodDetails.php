<?php

namespace Rixl\Sdk\Models\Billing\V1;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class PaymentMethodDetails implements Parsable 
{
    /**
     * @var string|null $brand The brand property
    */
    private ?string $brand = null;
    
    /**
     * @var string|null $id The id property
    */
    private ?string $id = null;
    
    /**
     * @var bool|null $isDefault The isDefault property
    */
    private ?bool $isDefault = null;
    
    /**
     * @var string|null $last4 The last4 property
    */
    private ?string $last4 = null;
    
    /**
     * @var string|null $type The type property
    */
    private ?string $type = null;
    
    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return PaymentMethodDetails
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): PaymentMethodDetails {
        return new PaymentMethodDetails();
    }

    /**
     * Gets the brand property value. The brand property
     * @return string|null
    */
    public function getBrand(): ?string {
        return $this->brand;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'brand' => fn(ParseNode $n) => $o->setBrand($n->getStringValue()),
            'id' => fn(ParseNode $n) => $o->setId($n->getStringValue()),
            'isDefault' => fn(ParseNode $n) => $o->setIsDefault($n->getBooleanValue()),
            'last4' => fn(ParseNode $n) => $o->setLast4($n->getStringValue()),
            'type' => fn(ParseNode $n) => $o->setType($n->getStringValue()),
        ];
    }

    /**
     * Gets the id property value. The id property
     * @return string|null
    */
    public function getId(): ?string {
        return $this->id;
    }

    /**
     * Gets the isDefault property value. The isDefault property
     * @return bool|null
    */
    public function getIsDefault(): ?bool {
        return $this->isDefault;
    }

    /**
     * Gets the last4 property value. The last4 property
     * @return string|null
    */
    public function getLast4(): ?string {
        return $this->last4;
    }

    /**
     * Gets the type property value. The type property
     * @return string|null
    */
    public function getType(): ?string {
        return $this->type;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('brand', $this->getBrand());
        $writer->writeStringValue('id', $this->getId());
        $writer->writeBooleanValue('isDefault', $this->getIsDefault());
        $writer->writeStringValue('last4', $this->getLast4());
        $writer->writeStringValue('type', $this->getType());
    }

    /**
     * Sets the brand property value. The brand property
     * @param string|null $value Value to set for the brand property.
    */
    public function setBrand(?string $value): void {
        $this->brand = $value;
    }

    /**
     * Sets the id property value. The id property
     * @param string|null $value Value to set for the id property.
    */
    public function setId(?string $value): void {
        $this->id = $value;
    }

    /**
     * Sets the isDefault property value. The isDefault property
     * @param bool|null $value Value to set for the isDefault property.
    */
    public function setIsDefault(?bool $value): void {
        $this->isDefault = $value;
    }

    /**
     * Sets the last4 property value. The last4 property
     * @param string|null $value Value to set for the last4 property.
    */
    public function setLast4(?string $value): void {
        $this->last4 = $value;
    }

    /**
     * Sets the type property value. The type property
     * @param string|null $value Value to set for the type property.
    */
    public function setType(?string $value): void {
        $this->type = $value;
    }

}
