<?php

namespace Rixl\Sdk\Models\Auth\V1;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class LoginRequest implements Parsable 
{
    /**
     * @var string|null $email The email property
    */
    private ?string $email = null;
    
    /**
     * @var string|null $password The password property
    */
    private ?string $password = null;
    
    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return LoginRequest
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): LoginRequest {
        return new LoginRequest();
    }

    /**
     * Gets the email property value. The email property
     * @return string|null
    */
    public function getEmail(): ?string {
        return $this->email;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'email' => fn(ParseNode $n) => $o->setEmail($n->getStringValue()),
            'password' => fn(ParseNode $n) => $o->setPassword($n->getStringValue()),
        ];
    }

    /**
     * Gets the password property value. The password property
     * @return string|null
    */
    public function getPassword(): ?string {
        return $this->password;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('email', $this->getEmail());
        $writer->writeStringValue('password', $this->getPassword());
    }

    /**
     * Sets the email property value. The email property
     * @param string|null $value Value to set for the email property.
    */
    public function setEmail(?string $value): void {
        $this->email = $value;
    }

    /**
     * Sets the password property value. The password property
     * @param string|null $value Value to set for the password property.
    */
    public function setPassword(?string $value): void {
        $this->password = $value;
    }

}
