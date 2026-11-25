<?php

namespace Rixl\Sdk\Models\Auth\V1;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

class NotificationPreference implements Parsable 
{
    /**
     * @var array<string>|null $always_sent always_sent lists the notices in this category the caller receives even with email disabled.
    */
    private ?array $always_sent = null;
    
    /**
     * @var NotificationCategory|null $category The category property
    */
    private ?NotificationCategory $category = null;
    
    /**
     * @var bool|null $email_enabled The email_enabled property
    */
    private ?bool $email_enabled = null;
    
    /**
     * @var bool|null $locked locked is true when the caller's role cannot disable the category.
    */
    private ?bool $locked = null;
    
    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return NotificationPreference
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): NotificationPreference {
        return new NotificationPreference();
    }

    /**
     * Gets the always_sent property value. always_sent lists the notices in this category the caller receives even with email disabled.
     * @return array<string>|null
    */
    public function getAlwaysSent(): ?array {
        return $this->always_sent;
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
            'always_sent' => function (ParseNode $n) {
                $val = $n->getCollectionOfPrimitiveValues();
                if (is_array($val)) {
                    TypeUtils::validateCollectionValues($val, 'string');
                }
                /** @var array<string>|null $val */
                $this->setAlwaysSent($val);
            },
            'category' => fn(ParseNode $n) => $o->setCategory($n->getEnumValue(NotificationCategory::class)),
            'email_enabled' => fn(ParseNode $n) => $o->setEmailEnabled($n->getBooleanValue()),
            'locked' => fn(ParseNode $n) => $o->setLocked($n->getBooleanValue()),
        ];
    }

    /**
     * Gets the locked property value. locked is true when the caller's role cannot disable the category.
     * @return bool|null
    */
    public function getLocked(): ?bool {
        return $this->locked;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeCollectionOfPrimitiveValues('always_sent', $this->getAlwaysSent());
        $writer->writeEnumValue('category', $this->getCategory());
        $writer->writeBooleanValue('email_enabled', $this->getEmailEnabled());
        $writer->writeBooleanValue('locked', $this->getLocked());
    }

    /**
     * Sets the always_sent property value. always_sent lists the notices in this category the caller receives even with email disabled.
     * @param array<string>|null $value Value to set for the always_sent property.
    */
    public function setAlwaysSent(?array $value): void {
        $this->always_sent = $value;
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
     * Sets the locked property value. locked is true when the caller's role cannot disable the category.
     * @param bool|null $value Value to set for the locked property.
    */
    public function setLocked(?bool $value): void {
        $this->locked = $value;
    }

}
