<?php

namespace Rixl\Sdk\Models\Auth\V1;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class UpdateOrgNameResponse implements Parsable 
{
    /**
     * @var string|null $firstName The firstName property
    */
    private ?string $firstName = null;
    
    /**
     * @var string|null $lastName The lastName property
    */
    private ?string $lastName = null;
    
    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return UpdateOrgNameResponse
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): UpdateOrgNameResponse {
        return new UpdateOrgNameResponse();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'firstName' => fn(ParseNode $n) => $o->setFirstName($n->getStringValue()),
            'lastName' => fn(ParseNode $n) => $o->setLastName($n->getStringValue()),
        ];
    }

    /**
     * Gets the firstName property value. The firstName property
     * @return string|null
    */
    public function getFirstName(): ?string {
        return $this->firstName;
    }

    /**
     * Gets the lastName property value. The lastName property
     * @return string|null
    */
    public function getLastName(): ?string {
        return $this->lastName;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('firstName', $this->getFirstName());
        $writer->writeStringValue('lastName', $this->getLastName());
    }

    /**
     * Sets the firstName property value. The firstName property
     * @param string|null $value Value to set for the firstName property.
    */
    public function setFirstName(?string $value): void {
        $this->firstName = $value;
    }

    /**
     * Sets the lastName property value. The lastName property
     * @param string|null $value Value to set for the lastName property.
    */
    public function setLastName(?string $value): void {
        $this->lastName = $value;
    }

}
