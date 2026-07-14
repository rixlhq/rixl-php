<?php

namespace Rixl\Sdk\Models\Auth\V1;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class PasskeyRegisterFinishResponse implements Parsable 
{
    /**
     * @var string|null $name The name property
    */
    private ?string $name = null;
    
    /**
     * @var string|null $passkeyId The passkeyId property
    */
    private ?string $passkeyId = null;
    
    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return PasskeyRegisterFinishResponse
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): PasskeyRegisterFinishResponse {
        return new PasskeyRegisterFinishResponse();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'name' => fn(ParseNode $n) => $o->setName($n->getStringValue()),
            'passkeyId' => fn(ParseNode $n) => $o->setPasskeyId($n->getStringValue()),
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
     * Gets the passkeyId property value. The passkeyId property
     * @return string|null
    */
    public function getPasskeyId(): ?string {
        return $this->passkeyId;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('name', $this->getName());
        $writer->writeStringValue('passkeyId', $this->getPasskeyId());
    }

    /**
     * Sets the name property value. The name property
     * @param string|null $value Value to set for the name property.
    */
    public function setName(?string $value): void {
        $this->name = $value;
    }

    /**
     * Sets the passkeyId property value. The passkeyId property
     * @param string|null $value Value to set for the passkeyId property.
    */
    public function setPasskeyId(?string $value): void {
        $this->passkeyId = $value;
    }

}
