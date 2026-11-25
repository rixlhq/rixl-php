<?php

namespace Rixl\Sdk\Auth\V1\Notifications\Item\Preferences;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Rixl\Sdk\Models\Auth\V1\NotificationCategory;

class PreferencesPatchRequestBody implements Parsable 
{
    /**
     * @var NotificationCategory|null $category The category property
    */
    private ?NotificationCategory $category = null;
    
    /**
     * @var bool|null $email_enabled The email_enabled property
    */
    private ?bool $email_enabled = null;
    
    /**
     * @var PreferencesPatchRequestBody_user|null $user The user property
    */
    private ?PreferencesPatchRequestBody_user $user = null;
    
    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return PreferencesPatchRequestBody
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): PreferencesPatchRequestBody {
        return new PreferencesPatchRequestBody();
    }

    /**
     * Gets the category property value. The category property
     * @return NotificationCategory|null
    */
    public function getCategory(): ?NotificationCategory {
        return $this->category;
    }

    /**
     * Gets the email_enabled property value. The email_enabled property
     * @return bool|null
    */
    public function getEmailEnabled(): ?bool {
        return $this->email_enabled;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'category' => fn(ParseNode $n) => $o->setCategory($n->getEnumValue(NotificationCategory::class)),
            'email_enabled' => fn(ParseNode $n) => $o->setEmailEnabled($n->getBooleanValue()),
            'user' => fn(ParseNode $n) => $o->setUser($n->getObjectValue([PreferencesPatchRequestBody_user::class, 'createFromDiscriminatorValue'])),
        ];
    }

    /**
     * Gets the user property value. The user property
     * @return PreferencesPatchRequestBody_user|null
    */
    public function getUser(): ?PreferencesPatchRequestBody_user {
        return $this->user;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeEnumValue('category', $this->getCategory());
        $writer->writeBooleanValue('email_enabled', $this->getEmailEnabled());
        $writer->writeObjectValue('user', $this->getUser());
    }

    /**
     * Sets the category property value. The category property
     * @param NotificationCategory|null $value Value to set for the category property.
    */
    public function setCategory(?NotificationCategory $value): void {
        $this->category = $value;
    }

    /**
     * Sets the email_enabled property value. The email_enabled property
     * @param bool|null $value Value to set for the email_enabled property.
    */
    public function setEmailEnabled(?bool $value): void {
        $this->email_enabled = $value;
    }

    /**
     * Sets the user property value. The user property
     * @param PreferencesPatchRequestBody_user|null $value Value to set for the user property.
    */
    public function setUser(?PreferencesPatchRequestBody_user $value): void {
        $this->user = $value;
    }

}
