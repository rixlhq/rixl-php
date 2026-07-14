<?php

namespace Rixl\Sdk\Models\Auth\V1;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class ConnectedProvider implements Parsable 
{
    /**
     * @var string|null $emailAddress The emailAddress property
    */
    private ?string $emailAddress = null;
    
    /**
     * @var string|null $firstName The firstName property
    */
    private ?string $firstName = null;
    
    /**
     * @var string|null $imageUrl The imageUrl property
    */
    private ?string $imageUrl = null;
    
    /**
     * @var string|null $lastName The lastName property
    */
    private ?string $lastName = null;
    
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
     * Gets the emailAddress property value. The emailAddress property
     * @return string|null
    */
    public function getEmailAddress(): ?string {
        return $this->emailAddress;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'emailAddress' => fn(ParseNode $n) => $o->setEmailAddress($n->getStringValue()),
            'firstName' => fn(ParseNode $n) => $o->setFirstName($n->getStringValue()),
            'imageUrl' => fn(ParseNode $n) => $o->setImageUrl($n->getStringValue()),
            'lastName' => fn(ParseNode $n) => $o->setLastName($n->getStringValue()),
            'provider' => fn(ParseNode $n) => $o->setProvider($n->getEnumValue(ExternalAccountProvider::class)),
            'username' => fn(ParseNode $n) => $o->setUsername($n->getStringValue()),
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
     * Gets the imageUrl property value. The imageUrl property
     * @return string|null
    */
    public function getImageUrl(): ?string {
        return $this->imageUrl;
    }

    /**
     * Gets the lastName property value. The lastName property
     * @return string|null
    */
    public function getLastName(): ?string {
        return $this->lastName;
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
        $writer->writeStringValue('emailAddress', $this->getEmailAddress());
        $writer->writeStringValue('firstName', $this->getFirstName());
        $writer->writeStringValue('imageUrl', $this->getImageUrl());
        $writer->writeStringValue('lastName', $this->getLastName());
        $writer->writeEnumValue('provider', $this->getProvider());
        $writer->writeStringValue('username', $this->getUsername());
    }

    /**
     * Sets the emailAddress property value. The emailAddress property
     * @param string|null $value Value to set for the emailAddress property.
    */
    public function setEmailAddress(?string $value): void {
        $this->emailAddress = $value;
    }

    /**
     * Sets the firstName property value. The firstName property
     * @param string|null $value Value to set for the firstName property.
    */
    public function setFirstName(?string $value): void {
        $this->firstName = $value;
    }

    /**
     * Sets the imageUrl property value. The imageUrl property
     * @param string|null $value Value to set for the imageUrl property.
    */
    public function setImageUrl(?string $value): void {
        $this->imageUrl = $value;
    }

    /**
     * Sets the lastName property value. The lastName property
     * @param string|null $value Value to set for the lastName property.
    */
    public function setLastName(?string $value): void {
        $this->lastName = $value;
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
