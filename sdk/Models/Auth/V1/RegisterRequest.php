<?php

namespace Rixl\Sdk\Models\Auth\V1;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class RegisterRequest implements Parsable 
{
    /**
     * @var string|null $countryCode The countryCode property
    */
    private ?string $countryCode = null;
    
    /**
     * @var string|null $email The email property
    */
    private ?string $email = null;
    
    /**
     * @var string|null $password The password property
    */
    private ?string $password = null;
    
    /**
     * @var bool|null $subscribeToBlog The subscribeToBlog property
    */
    private ?bool $subscribeToBlog = null;
    
    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return RegisterRequest
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): RegisterRequest {
        return new RegisterRequest();
    }

    /**
     * Gets the countryCode property value. The countryCode property
     * @return string|null
    */
    public function getCountryCode(): ?string {
        return $this->countryCode;
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
            'countryCode' => fn(ParseNode $n) => $o->setCountryCode($n->getStringValue()),
            'email' => fn(ParseNode $n) => $o->setEmail($n->getStringValue()),
            'password' => fn(ParseNode $n) => $o->setPassword($n->getStringValue()),
            'subscribeToBlog' => fn(ParseNode $n) => $o->setSubscribeToBlog($n->getBooleanValue()),
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
     * Gets the subscribeToBlog property value. The subscribeToBlog property
     * @return bool|null
    */
    public function getSubscribeToBlog(): ?bool {
        return $this->subscribeToBlog;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('countryCode', $this->getCountryCode());
        $writer->writeStringValue('email', $this->getEmail());
        $writer->writeStringValue('password', $this->getPassword());
        $writer->writeBooleanValue('subscribeToBlog', $this->getSubscribeToBlog());
    }

    /**
     * Sets the countryCode property value. The countryCode property
     * @param string|null $value Value to set for the countryCode property.
    */
    public function setCountryCode(?string $value): void {
        $this->countryCode = $value;
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

    /**
     * Sets the subscribeToBlog property value. The subscribeToBlog property
     * @param bool|null $value Value to set for the subscribeToBlog property.
    */
    public function setSubscribeToBlog(?bool $value): void {
        $this->subscribeToBlog = $value;
    }

}
