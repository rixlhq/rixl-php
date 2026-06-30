<?php

namespace Rixl\Sdk\Models\Authv1;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class SendBlogBroadcastResponse implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var string|null $broadcast_id The broadcast_id property
    */
    private ?string $broadcast_id = null;
    
    /**
     * @var string|null $scheduled_at The scheduled_at property
    */
    private ?string $scheduled_at = null;
    
    /**
     * @var string|null $sent_at The sent_at property
    */
    private ?string $sent_at = null;
    
    /**
     * Instantiates a new SendBlogBroadcastResponse and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return SendBlogBroadcastResponse
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): SendBlogBroadcastResponse {
        return new SendBlogBroadcastResponse();
    }

    /**
     * Gets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        return $this->additionalData;
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
            'scheduled_at' => fn(ParseNode $n) => $o->setScheduledAt($n->getStringValue()),
            'sent_at' => fn(ParseNode $n) => $o->setSentAt($n->getStringValue()),
        ];
    }

    /**
     * Gets the scheduled_at property value. The scheduled_at property
     * @return string|null
    */
    public function getScheduledAt(): ?string {
        return $this->scheduled_at;
    }

    /**
     * Gets the sent_at property value. The sent_at property
     * @return string|null
    */
    public function getSentAt(): ?string {
        return $this->sent_at;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('broadcast_id', $this->getBroadcastId());
        $writer->writeStringValue('scheduled_at', $this->getScheduledAt());
        $writer->writeStringValue('sent_at', $this->getSentAt());
        $writer->writeAdditionalData($this->getAdditionalData());
    }

    /**
     * Sets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @param array<string,mixed> $value Value to set for the AdditionalData property.
    */
    public function setAdditionalData(?array $value): void {
        $this->additionalData = $value;
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
     * @param string|null $value Value to set for the scheduled_at property.
    */
    public function setScheduledAt(?string $value): void {
        $this->scheduled_at = $value;
    }

    /**
     * Sets the sent_at property value. The sent_at property
     * @param string|null $value Value to set for the sent_at property.
    */
    public function setSentAt(?string $value): void {
        $this->sent_at = $value;
    }

}
