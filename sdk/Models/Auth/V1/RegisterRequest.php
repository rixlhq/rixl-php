<?php

namespace Rixl\Sdk\Models\Auth\V1;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class RegisterRequest implements Parsable 
{
    /**
     * @var string|null $country_code The country_code property
    */
    private ?string $country_code = null;
    
    /**
     * @var string|null $email The email property
    */
    private ?string $email = null;
    
    /**
     * @var string|null $password The password property
    */
    private ?string $password = null;
    
    /**
     * @var bool|null $subscribe_to_blog The subscribe_to_blog property
    */
    private ?bool $subscribe_to_blog = null;
    
    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return RegisterRequest
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): RegisterRequest {
        return new RegisterRequest();
    }

    /**
     * Gets the country_code property value. The country_code property
     * @return string|null
    */
    public function getCountryCode(): ?string {
        return $this->country_code;
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
            'country_code' => fn(ParseNode $n) => $o->setCountryCode($n->getStringValue()),
            'email' => fn(ParseNode $n) => $o->setEmail($n->getStringValue()),
            'password' => fn(ParseNode $n) => $o->setPassword($n->getStringValue()),
            'subscribe_to_blog' => fn(ParseNode $n) => $o->setSubscribeToBlog($n->getBooleanValue()),
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
     * Gets the subscribe_to_blog property value. The subscribe_to_blog property
     * @return bool|null
    */
    public function getSubscribeToBlog(): ?bool {
        return $this->subscribe_to_blog;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('country_code', $this->getCountryCode());
        $writer->writeStringValue('email', $this->getEmail());
        $writer->writeStringValue('password', $this->getPassword());
        $writer->writeBooleanValue('subscribe_to_blog', $this->getSubscribeToBlog());
    }

    /**
     * Sets the country_code property value. The country_code property
     * @param string|null $value Value to set for the country_code property.
    */
    public function setCountryCode(?string $value): void {
        $this->country_code = $value;
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
     * Sets the subscribe_to_blog property value. The subscribe_to_blog property
     * @param bool|null $value Value to set for the subscribe_to_blog property.
    */
    public function setSubscribeToBlog(?bool $value): void {
        $this->subscribe_to_blog = $value;
    }

}
