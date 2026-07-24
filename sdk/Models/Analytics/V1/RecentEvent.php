<?php

namespace Rixl\Sdk\Models\Analytics\V1;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class RecentEvent implements Parsable 
{
    /**
     * @var string|null $content_id The content_id property
    */
    private ?string $content_id = null;
    
    /**
     * @var string|null $event_type The event_type property
    */
    private ?string $event_type = null;
    
    /**
     * @var string|null $timestamp The timestamp property
    */
    private ?string $timestamp = null;
    
    /**
     * @var string|null $user_id The user_id property
    */
    private ?string $user_id = null;
    
    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return RecentEvent
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): RecentEvent {
        return new RecentEvent();
    }

    /**
     * Gets the content_id property value. The content_id property
     * @return string|null
    */
    public function getContentId(): ?string {
        return $this->content_id;
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
            'content_id' => fn(ParseNode $n) => $o->setContentId($n->getStringValue()),
            'event_type' => fn(ParseNode $n) => $o->setEventType($n->getStringValue()),
            'timestamp' => fn(ParseNode $n) => $o->setTimestamp($n->getStringValue()),
            'user_id' => fn(ParseNode $n) => $o->setUserId($n->getStringValue()),
        ];
    }

    /**
     * Gets the timestamp property value. The timestamp property
     * @return string|null
    */
    public function getTimestamp(): ?string {
        return $this->timestamp;
    }

    /**
     * Gets the user_id property value. The user_id property
     * @return string|null
    */
    public function getUserId(): ?string {
        return $this->user_id;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('content_id', $this->getContentId());
        $writer->writeStringValue('event_type', $this->getEventType());
        $writer->writeStringValue('timestamp', $this->getTimestamp());
        $writer->writeStringValue('user_id', $this->getUserId());
    }

    /**
     * Sets the content_id property value. The content_id property
     * @param string|null $value Value to set for the content_id property.
    */
    public function setContentId(?string $value): void {
        $this->content_id = $value;
    }

    /**
     * Sets the event_type property value. The event_type property
     * @param string|null $value Value to set for the event_type property.
    */
    public function setEventType(?string $value): void {
        $this->event_type = $value;
    }

    /**
     * Sets the timestamp property value. The timestamp property
     * @param string|null $value Value to set for the timestamp property.
    */
    public function setTimestamp(?string $value): void {
        $this->timestamp = $value;
    }

    /**
     * Sets the user_id property value. The user_id property
     * @param string|null $value Value to set for the user_id property.
    */
    public function setUserId(?string $value): void {
        $this->user_id = $value;
    }

}
