<?php

namespace Rixl\Sdk\Models\Auth\V1;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class InitiateEmailChangeRequest implements Parsable 
{
    /**
     * @var string|null $newEmail The newEmail property
    */
    private ?string $newEmail = null;
    
    /**
     * @var string|null $userId The userId property
    */
    private ?string $userId = null;
    
    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return InitiateEmailChangeRequest
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): InitiateEmailChangeRequest {
        return new InitiateEmailChangeRequest();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'newEmail' => fn(ParseNode $n) => $o->setNewEmail($n->getStringValue()),
            'userId' => fn(ParseNode $n) => $o->setUserId($n->getStringValue()),
        ];
    }

    /**
     * Gets the newEmail property value. The newEmail property
     * @return string|null
    */
    public function getNewEmail(): ?string {
        return $this->newEmail;
    }

    /**
     * Gets the userId property value. The userId property
     * @return string|null
    */
    public function getUserId(): ?string {
        return $this->userId;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('newEmail', $this->getNewEmail());
        $writer->writeStringValue('userId', $this->getUserId());
    }

    /**
     * Sets the newEmail property value. The newEmail property
     * @param string|null $value Value to set for the newEmail property.
    */
    public function setNewEmail(?string $value): void {
        $this->newEmail = $value;
    }

    /**
     * Sets the userId property value. The userId property
     * @param string|null $value Value to set for the userId property.
    */
    public function setUserId(?string $value): void {
        $this->userId = $value;
    }

}
