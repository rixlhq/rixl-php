<?php

namespace Rixl\Sdk\Models\Auth\V1;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class NotificationPreferences implements Parsable 
{
    /**
     * @var array<NotificationPreference>|null $preferences The preferences property
    */
    private ?array $preferences = null;
    
    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return NotificationPreferences
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): NotificationPreferences {
        return new NotificationPreferences();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'preferences' => fn(ParseNode $n) => $o->setPreferences($n->getCollectionOfObjectValues([NotificationPreference::class, 'createFromDiscriminatorValue'])),
        ];
    }

    /**
     * Gets the preferences property value. The preferences property
     * @return array<NotificationPreference>|null
    */
    public function getPreferences(): ?array {
        return $this->preferences;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeCollectionOfObjectValues('preferences', $this->getPreferences());
    }

    /**
     * Sets the preferences property value. The preferences property
     * @param array<NotificationPreference>|null $value Value to set for the preferences property.
    */
    public function setPreferences(?array $value): void {
        $this->preferences = $value;
    }

}
