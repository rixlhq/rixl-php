<?php

namespace Rixl\Sdk\Models\Analytics\V1;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class EventCount implements Parsable 
{
    /**
     * @var string|null $event_type The event_type property
    */
    private ?string $event_type = null;
    
    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return EventCount
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): EventCount {
        return new EventCount();
    }

    /**
     * Gets the event_type property value. The event_type property
     * @return string|null
    */
    public function getEventType(): ?string {
        return $this->event_type;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'event_type' => fn(ParseNode $n) => $o->setEventType($n->getStringValue()),
        ];
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('event_type', $this->getEventType());
    }

    /**
     * Sets the event_type property value. The event_type property
     * @param string|null $value Value to set for the event_type property.
    */
    public function setEventType(?string $value): void {
        $this->event_type = $value;
    }

}
