<?php

namespace Rixl\Sdk\Models\Analytics\V1;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class RecentEvent implements Parsable 
{
    /**
     * @var string|null $contentId The contentId property
    */
    private ?string $contentId = null;
    
    /**
     * @var string|null $eventType The eventType property
    */
    private ?string $eventType = null;
    
    /**
     * @var string|null $timestamp The timestamp property
    */
    private ?string $timestamp = null;
    
    /**
     * @var string|null $userId The userId property
    */
    private ?string $userId = null;
    
    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return RecentEvent
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): RecentEvent {
        return new RecentEvent();
    }

    /**
     * Gets the contentId property value. The contentId property
     * @return string|null
    */
    public function getContentId(): ?string {
        return $this->contentId;
    }

    /**
     * Gets the eventType property value. The eventType property
     * @return string|null
    */
    public function getEventType(): ?string {
        return $this->eventType;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'contentId' => fn(ParseNode $n) => $o->setContentId($n->getStringValue()),
            'eventType' => fn(ParseNode $n) => $o->setEventType($n->getStringValue()),
            'timestamp' => fn(ParseNode $n) => $o->setTimestamp($n->getStringValue()),
            'userId' => fn(ParseNode $n) => $o->setUserId($n->getStringValue()),
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
     * Gets the userId property value. The userId property
     * @return string|null
    */
    public function getUserId(): ?string {
        return $this->userId;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('contentId', $this->getContentId());
        $writer->writeStringValue('eventType', $this->getEventType());
        $writer->writeStringValue('timestamp', $this->getTimestamp());
        $writer->writeStringValue('userId', $this->getUserId());
    }

    /**
     * Sets the contentId property value. The contentId property
     * @param string|null $value Value to set for the contentId property.
    */
    public function setContentId(?string $value): void {
        $this->contentId = $value;
    }

    /**
     * Sets the eventType property value. The eventType property
     * @param string|null $value Value to set for the eventType property.
    */
    public function setEventType(?string $value): void {
        $this->eventType = $value;
    }

    /**
     * Sets the timestamp property value. The timestamp property
     * @param string|null $value Value to set for the timestamp property.
    */
    public function setTimestamp(?string $value): void {
        $this->timestamp = $value;
    }

    /**
     * Sets the userId property value. The userId property
     * @param string|null $value Value to set for the userId property.
    */
    public function setUserId(?string $value): void {
        $this->userId = $value;
    }

}
