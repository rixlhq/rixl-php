<?php

namespace Rixl\Sdk\Models\Auth\V1;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class UserInfo implements Parsable 
{
    /**
     * @var string|null $activeOrgId The activeOrgId property
    */
    private ?string $activeOrgId = null;
    
    /**
     * @var string|null $countryCode The countryCode property
    */
    private ?string $countryCode = null;
    
    /**
     * @var string|null $email The email property
    */
    private ?string $email = null;
    
    /**
     * @var bool|null $emailVerified The emailVerified property
    */
    private ?bool $emailVerified = null;
    
    /**
     * @var string|null $firstName The firstName property
    */
    private ?string $firstName = null;
    
    /**
     * @var string|null $id The id property
    */
    private ?string $id = null;
    
    /**
     * @var string|null $imageUrl The imageUrl property
    */
    private ?string $imageUrl = null;
    
    /**
     * @var string|null $languageCode The languageCode property
    */
    private ?string $languageCode = null;
    
    /**
     * @var string|null $lastName The lastName property
    */
    private ?string $lastName = null;
    
    /**
     * @var string|null $username The username property
    */
    private ?string $username = null;
    
    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return UserInfo
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): UserInfo {
        return new UserInfo();
    }

    /**
     * Gets the activeOrgId property value. The activeOrgId property
     * @return string|null
    */
    public function getActiveOrgId(): ?string {
        return $this->activeOrgId;
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
     * Gets the emailVerified property value. The emailVerified property
     * @return bool|null
    */
    public function getEmailVerified(): ?bool {
        return $this->emailVerified;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'activeOrgId' => fn(ParseNode $n) => $o->setActiveOrgId($n->getStringValue()),
            'countryCode' => fn(ParseNode $n) => $o->setCountryCode($n->getStringValue()),
            'email' => fn(ParseNode $n) => $o->setEmail($n->getStringValue()),
            'emailVerified' => fn(ParseNode $n) => $o->setEmailVerified($n->getBooleanValue()),
            'firstName' => fn(ParseNode $n) => $o->setFirstName($n->getStringValue()),
            'id' => fn(ParseNode $n) => $o->setId($n->getStringValue()),
            'imageUrl' => fn(ParseNode $n) => $o->setImageUrl($n->getStringValue()),
            'languageCode' => fn(ParseNode $n) => $o->setLanguageCode($n->getStringValue()),
            'lastName' => fn(ParseNode $n) => $o->setLastName($n->getStringValue()),
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
     * Gets the id property value. The id property
     * @return string|null
    */
    public function getId(): ?string {
        return $this->id;
    }

    /**
     * Gets the imageUrl property value. The imageUrl property
     * @return string|null
    */
    public function getImageUrl(): ?string {
        return $this->imageUrl;
    }

    /**
     * Gets the languageCode property value. The languageCode property
     * @return string|null
    */
    public function getLanguageCode(): ?string {
        return $this->languageCode;
    }

    /**
     * Gets the lastName property value. The lastName property
     * @return string|null
    */
    public function getLastName(): ?string {
        return $this->lastName;
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
        $writer->writeStringValue('activeOrgId', $this->getActiveOrgId());
        $writer->writeStringValue('countryCode', $this->getCountryCode());
        $writer->writeStringValue('email', $this->getEmail());
        $writer->writeBooleanValue('emailVerified', $this->getEmailVerified());
        $writer->writeStringValue('firstName', $this->getFirstName());
        $writer->writeStringValue('id', $this->getId());
        $writer->writeStringValue('imageUrl', $this->getImageUrl());
        $writer->writeStringValue('languageCode', $this->getLanguageCode());
        $writer->writeStringValue('lastName', $this->getLastName());
        $writer->writeStringValue('username', $this->getUsername());
    }

    /**
     * Sets the activeOrgId property value. The activeOrgId property
     * @param string|null $value Value to set for the activeOrgId property.
    */
    public function setActiveOrgId(?string $value): void {
        $this->activeOrgId = $value;
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
     * Sets the emailVerified property value. The emailVerified property
     * @param bool|null $value Value to set for the emailVerified property.
    */
    public function setEmailVerified(?bool $value): void {
        $this->emailVerified = $value;
    }

    /**
     * Sets the firstName property value. The firstName property
     * @param string|null $value Value to set for the firstName property.
    */
    public function setFirstName(?string $value): void {
        $this->firstName = $value;
    }

    /**
     * Sets the id property value. The id property
     * @param string|null $value Value to set for the id property.
    */
    public function setId(?string $value): void {
        $this->id = $value;
    }

    /**
     * Sets the imageUrl property value. The imageUrl property
     * @param string|null $value Value to set for the imageUrl property.
    */
    public function setImageUrl(?string $value): void {
        $this->imageUrl = $value;
    }

    /**
     * Sets the languageCode property value. The languageCode property
     * @param string|null $value Value to set for the languageCode property.
    */
    public function setLanguageCode(?string $value): void {
        $this->languageCode = $value;
    }

    /**
     * Sets the lastName property value. The lastName property
     * @param string|null $value Value to set for the lastName property.
    */
    public function setLastName(?string $value): void {
        $this->lastName = $value;
    }

    /**
     * Sets the username property value. The username property
     * @param string|null $value Value to set for the username property.
    */
    public function setUsername(?string $value): void {
        $this->username = $value;
    }

}
