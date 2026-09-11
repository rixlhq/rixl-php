<?php

namespace Rixl\Sdk\Models\Auth\V1;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class SendBlogBroadcastResponse implements Parsable 
{
    /**
     * @var string|null $broadcast_id The broadcast_id property
    */
    private ?string $broadcast_id = null;
    
    /**
     * @var DateTime|null $scheduled_at The scheduled_at property
    */
    private ?DateTime $scheduled_at = null;
    
    /**
     * @var DateTime|null $sent_at The sent_at property
    */
    private ?DateTime $sent_at = null;
    
    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return SendBlogBroadcastResponse
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): SendBlogBroadcastResponse {
        return new SendBlogBroadcastResponse();
    }

    /**
     * Gets the broadcast_id property value. The broadcast_id property
     * @return string|null
    */
    public function getBroadcastId(): ?string {
        return $this->broadcast_id;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'broadcast_id' => fn(ParseNode $n) => $o->setBroadcastId($n->getStringValue()),
            'scheduled_at' => fn(ParseNode $n) => $o->setScheduledAt($n->getDateTimeValue()),
            'sent_at' => fn(ParseNode $n) => $o->setSentAt($n->getDateTimeValue()),
        ];
    }

    /**
     * Gets the scheduled_at property value. The scheduled_at property
     * @return DateTime|null
    */
    public function getScheduledAt(): ?DateTime {
        return $this->scheduled_at;
    }

    /**
     * Gets the sent_at property value. The sent_at property
     * @return DateTime|null
    */
    public function getSentAt(): ?DateTime {
        return $this->sent_at;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('broadcast_id', $this->getBroadcastId());
        $writer->writeDateTimeValue('scheduled_at', $this->getScheduledAt());
        $writer->writeDateTimeValue('sent_at', $this->getSentAt());
    }

    /**
     * Sets the broadcast_id property value. The broadcast_id property
     * @param string|null $value Value to set for the broadcast_id property.
    */
    public function setBroadcastId(?string $value): void {
        $this->broadcast_id = $value;
    }

    /**
     * Sets the scheduled_at property value. The scheduled_at property
     * @param DateTime|null $value Value to set for the scheduled_at property.
    */
    public function setScheduledAt(?DateTime $value): void {
        $this->scheduled_at = $value;
    }

    /**
     * Sets the sent_at property value. The sent_at property
     * @param DateTime|null $value Value to set for the sent_at property.
    */
    public function setSentAt(?DateTime $value): void {
        $this->sent_at = $value;
    }

}
