<?php

namespace Rixl\Sdk\Models\Auth\V1;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class UserInfo implements Parsable 
{
    /**
     * @var string|null $active_org_id The active_org_id property
    */
    private ?string $active_org_id = null;
    
    /**
     * @var string|null $country_code The country_code property
    */
    private ?string $country_code = null;
    
    /**
     * @var string|null $email The email property
    */
    private ?string $email = null;
    
    /**
     * @var bool|null $email_verified The email_verified property
    */
    private ?bool $email_verified = null;
    
    /**
     * @var string|null $first_name The first_name property
    */
    private ?string $first_name = null;
    
    /**
     * @var string|null $id The id property
    */
    private ?string $id = null;
    
    /**
     * @var string|null $image_url The image_url property
    */
    private ?string $image_url = null;
    
    /**
     * @var string|null $language_code The language_code property
    */
    private ?string $language_code = null;
    
    /**
     * @var string|null $last_name The last_name property
    */
    private ?string $last_name = null;
    
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
     * Gets the active_org_id property value. The active_org_id property
     * @return string|null
    */
    public function getActiveOrgId(): ?string {
        return $this->active_org_id;
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
     * Gets the email_verified property value. The email_verified property
     * @return bool|null
    */
    public function getEmailVerified(): ?bool {
        return $this->email_verified;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'active_org_id' => fn(ParseNode $n) => $o->setActiveOrgId($n->getStringValue()),
            'country_code' => fn(ParseNode $n) => $o->setCountryCode($n->getStringValue()),
            'email' => fn(ParseNode $n) => $o->setEmail($n->getStringValue()),
            'email_verified' => fn(ParseNode $n) => $o->setEmailVerified($n->getBooleanValue()),
            'first_name' => fn(ParseNode $n) => $o->setFirstName($n->getStringValue()),
            'id' => fn(ParseNode $n) => $o->setId($n->getStringValue()),
            'image_url' => fn(ParseNode $n) => $o->setImageUrl($n->getStringValue()),
            'language_code' => fn(ParseNode $n) => $o->setLanguageCode($n->getStringValue()),
            'last_name' => fn(ParseNode $n) => $o->setLastName($n->getStringValue()),
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
     * Gets the id property value. The id property
     * @return string|null
    */
    public function getId(): ?string {
        return $this->id;
    }

    /**
     * Gets the image_url property value. The image_url property
     * @return string|null
    */
    public function getImageUrl(): ?string {
        return $this->image_url;
    }

    /**
     * Gets the language_code property value. The language_code property
     * @return string|null
    */
    public function getLanguageCode(): ?string {
        return $this->language_code;
    }

    /**
     * Gets the last_name property value. The last_name property
     * @return string|null
    */
    public function getLastName(): ?string {
        return $this->last_name;
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
        $writer->writeStringValue('active_org_id', $this->getActiveOrgId());
        $writer->writeStringValue('country_code', $this->getCountryCode());
        $writer->writeStringValue('email', $this->getEmail());
        $writer->writeBooleanValue('email_verified', $this->getEmailVerified());
        $writer->writeStringValue('first_name', $this->getFirstName());
        $writer->writeStringValue('id', $this->getId());
        $writer->writeStringValue('image_url', $this->getImageUrl());
        $writer->writeStringValue('language_code', $this->getLanguageCode());
        $writer->writeStringValue('last_name', $this->getLastName());
        $writer->writeStringValue('username', $this->getUsername());
    }

    /**
     * Sets the active_org_id property value. The active_org_id property
     * @param string|null $value Value to set for the active_org_id property.
    */
    public function setActiveOrgId(?string $value): void {
        $this->active_org_id = $value;
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
     * Sets the email_verified property value. The email_verified property
     * @param bool|null $value Value to set for the email_verified property.
    */
    public function setEmailVerified(?bool $value): void {
        $this->email_verified = $value;
    }

    /**
     * Sets the first_name property value. The first_name property
     * @param string|null $value Value to set for the first_name property.
    */
    public function setFirstName(?string $value): void {
        $this->first_name = $value;
    }

    /**
     * Sets the id property value. The id property
     * @param string|null $value Value to set for the id property.
    */
    public function setId(?string $value): void {
        $this->id = $value;
    }

    /**
     * Sets the image_url property value. The image_url property
     * @param string|null $value Value to set for the image_url property.
    */
    public function setImageUrl(?string $value): void {
        $this->image_url = $value;
    }

    /**
     * Sets the language_code property value. The language_code property
     * @param string|null $value Value to set for the language_code property.
    */
    public function setLanguageCode(?string $value): void {
        $this->language_code = $value;
    }

    /**
     * Sets the last_name property value. The last_name property
     * @param string|null $value Value to set for the last_name property.
    */
    public function setLastName(?string $value): void {
        $this->last_name = $value;
    }

    /**
     * Sets the username property value. The username property
     * @param string|null $value Value to set for the username property.
    */
    public function setUsername(?string $value): void {
        $this->username = $value;
    }

}
