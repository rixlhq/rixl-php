<?php

namespace Rixl\Sdk\Models\Webhooks\V1;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class SendTestEventResponse implements Parsable 
{
    /**
     * @var string|null $event_id The event_id property
    */
    private ?string $event_id = null;
    
    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return SendTestEventResponse
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): SendTestEventResponse {
        return new SendTestEventResponse();
    }

    /**
     * Gets the event_id property value. The event_id property
     * @return string|null
    */
    public function getEventId(): ?string {
        return $this->event_id;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'event_id' => fn(ParseNode $n) => $o->setEventId($n->getStringValue()),
        ];
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('event_id', $this->getEventId());
    }

    /**
     * Sets the event_id property value. The event_id property
     * @param string|null $value Value to set for the event_id property.
    */
    public function setEventId(?string $value): void {
        $this->event_id = $value;
    }

}
