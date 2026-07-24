<?php

namespace Rixl\Sdk\Models\Auth\V1;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class InitiateEmailChangeRequest implements Parsable 
{
    /**
     * @var string|null $new_email The new_email property
    */
    private ?string $new_email = null;
    
    /**
     * @var string|null $user_id The user_id property
    */
    private ?string $user_id = null;
    
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
            'new_email' => fn(ParseNode $n) => $o->setNewEmail($n->getStringValue()),
            'user_id' => fn(ParseNode $n) => $o->setUserId($n->getStringValue()),
        ];
    }

    /**
     * Gets the new_email property value. The new_email property
     * @return string|null
    */
    public function getNewEmail(): ?string {
        return $this->new_email;
    }

    /**
     * Gets the user_id property value. The user_id property
     * @return string|null
    */
    public function getUserId(): ?string {
        return $this->user_id;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('new_email', $this->getNewEmail());
        $writer->writeStringValue('user_id', $this->getUserId());
    }

    /**
     * Sets the new_email property value. The new_email property
     * @param string|null $value Value to set for the new_email property.
    */
    public function setNewEmail(?string $value): void {
        $this->new_email = $value;
    }

    /**
     * Sets the user_id property value. The user_id property
     * @param string|null $value Value to set for the user_id property.
    */
    public function setUserId(?string $value): void {
        $this->user_id = $value;
    }

}
