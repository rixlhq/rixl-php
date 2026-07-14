<?php

namespace Rixl\Sdk\Models\Auth\V1;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class ResetPasswordRequest implements Parsable 
{
    /**
     * @var string|null $newPassword The newPassword property
    */
    private ?string $newPassword = null;
    
    /**
     * @var string|null $token The token property
    */
    private ?string $token = null;
    
    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return ResetPasswordRequest
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): ResetPasswordRequest {
        return new ResetPasswordRequest();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'newPassword' => fn(ParseNode $n) => $o->setNewPassword($n->getStringValue()),
            'token' => fn(ParseNode $n) => $o->setToken($n->getStringValue()),
        ];
    }

    /**
     * Gets the newPassword property value. The newPassword property
     * @return string|null
    */
    public function getNewPassword(): ?string {
        return $this->newPassword;
    }

    /**
     * Gets the token property value. The token property
     * @return string|null
    */
    public function getToken(): ?string {
        return $this->token;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('newPassword', $this->getNewPassword());
        $writer->writeStringValue('token', $this->getToken());
    }

    /**
     * Sets the newPassword property value. The newPassword property
     * @param string|null $value Value to set for the newPassword property.
    */
    public function setNewPassword(?string $value): void {
        $this->newPassword = $value;
    }

    /**
     * Sets the token property value. The token property
     * @param string|null $value Value to set for the token property.
    */
    public function setToken(?string $value): void {
        $this->token = $value;
    }

}
