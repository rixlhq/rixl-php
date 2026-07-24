<?php

namespace Rixl\Sdk\Models\Auth\V1;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class ConnectedProvider implements Parsable 
{
    /**
     * @var string|null $email_address The email_address property
    */
    private ?string $email_address = null;
    
    /**
     * @var string|null $first_name The first_name property
    */
    private ?string $first_name = null;
    
    /**
     * @var string|null $image_url The image_url property
    */
    private ?string $image_url = null;
    
    /**
     * @var string|null $last_name The last_name property
    */
    private ?string $last_name = null;
    
    /**
     * @var ExternalAccountProvider|null $provider The provider property
    */
    private ?ExternalAccountProvider $provider = null;
    
    /**
     * @var string|null $username The username property
    */
    private ?string $username = null;
    
    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return ConnectedProvider
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): ConnectedProvider {
        return new ConnectedProvider();
    }

    /**
     * Gets the email_address property value. The email_address property
     * @return string|null
    */
    public function getEmailAddress(): ?string {
        return $this->email_address;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'email_address' => fn(ParseNode $n) => $o->setEmailAddress($n->getStringValue()),
            'first_name' => fn(ParseNode $n) => $o->setFirstName($n->getStringValue()),
            'image_url' => fn(ParseNode $n) => $o->setImageUrl($n->getStringValue()),
            'last_name' => fn(ParseNode $n) => $o->setLastName($n->getStringValue()),
            'provider' => fn(ParseNode $n) => $o->setProvider($n->getEnumValue(ExternalAccountProvider::class)),
            'username' => fn(ParseNode $n) => $o->setUsername($n->getStringValue()),
        ];
    }

    /**
     * Gets the first_name property value. The first_name property
     * @return string|null
    */
    public function getFirstName(): ?string {
        return $this->first_name;
    }

    /**
     * Gets the image_url property value. The image_url property
     * @return string|null
    */
    public function getImageUrl(): ?string {
        return $this->image_url;
    }

    /**
     * Gets the last_name property value. The last_name property
     * @return string|null
    */
    public function getLastName(): ?string {
        return $this->last_name;
    }

    /**
     * Gets the provider property value. The provider property
     * @return ExternalAccountProvider|null
    */
    public function getProvider(): ?ExternalAccountProvider {
        return $this->provider;
    }

    /**
     * Gets the username property value. The username property
     * @return string|null
    */
    public function getUsername(): ?string {
        return $this->username;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('email_address', $this->getEmailAddress());
        $writer->writeStringValue('first_name', $this->getFirstName());
        $writer->writeStringValue('image_url', $this->getImageUrl());
        $writer->writeStringValue('last_name', $this->getLastName());
        $writer->writeEnumValue('provider', $this->getProvider());
        $writer->writeStringValue('username', $this->getUsername());
    }

    /**
     * Sets the email_address property value. The email_address property
     * @param string|null $value Value to set for the email_address property.
    */
    public function setEmailAddress(?string $value): void {
        $this->email_address = $value;
    }

    /**
     * Sets the first_name property value. The first_name property
     * @param string|null $value Value to set for the first_name property.
    */
    public function setFirstName(?string $value): void {
        $this->first_name = $value;
    }

    /**
     * Sets the image_url property value. The image_url property
     * @param string|null $value Value to set for the image_url property.
    */
    public function setImageUrl(?string $value): void {
        $this->image_url = $value;
    }

    /**
     * Sets the last_name property value. The last_name property
     * @param string|null $value Value to set for the last_name property.
    */
    public function setLastName(?string $value): void {
        $this->last_name = $value;
    }

    /**
     * Sets the provider property value. The provider property
     * @param ExternalAccountProvider|null $value Value to set for the provider property.
    */
    public function setProvider(?ExternalAccountProvider $value): void {
        $this->provider = $value;
    }

    /**
     * Sets the username property value. The username property
     * @param string|null $value Value to set for the username property.
    */
    public function setUsername(?string $value): void {
        $this->username = $value;
    }

}
