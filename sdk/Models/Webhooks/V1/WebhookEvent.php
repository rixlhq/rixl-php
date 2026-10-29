<?php

namespace Rixl\Sdk\Models\Webhooks\V1;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Rixl\Sdk\Models\Google\Protobuf\Struct;

/**
 * WebhookEvent is a recorded outbound notification. `data` is the exact object embedded in the delivered payload envelope.
*/
class WebhookEvent implements Parsable 
{
    /**
     * @var DateTime|null $created_at The created_at property
    */
    private ?DateTime $created_at = null;
    
    /**
     * @var Struct|null $data The data property
    */
    private ?Struct $data = null;
    
    /**
     * @var string|null $id The id property
    */
    private ?string $id = null;
    
    /**
     * @var string|null $resource_id The resource_id property
    */
    private ?string $resource_id = null;
    
    /**
     * @var string|null $type The type property
    */
    private ?string $type = null;
    
    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return WebhookEvent
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): WebhookEvent {
        return new WebhookEvent();
    }

    /**
     * Gets the created_at property value. The created_at property
     * @return DateTime|null
    */
    public function getCreatedAt(): ?DateTime {
        return $this->created_at;
    }

    /**
     * Gets the data property value. The data property
     * @return Struct|null
    */
    public function getData(): ?Struct {
        return $this->data;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'created_at' => fn(ParseNode $n) => $o->setCreatedAt($n->getDateTimeValue()),
            'data' => fn(ParseNode $n) => $o->setData($n->getObjectValue([Struct::class, 'createFromDiscriminatorValue'])),
            'id' => fn(ParseNode $n) => $o->setId($n->getStringValue()),
            'resource_id' => fn(ParseNode $n) => $o->setResourceId($n->getStringValue()),
            'type' => fn(ParseNode $n) => $o->setType($n->getStringValue()),
        ];
    }

    /**
     * Gets the id property value. The id property
     * @return string|null
    */
    public function getId(): ?string {
        return $this->id;
    }

    /**
     * Gets the resource_id property value. The resource_id property
     * @return string|null
    */
    public function getResourceId(): ?string {
        return $this->resource_id;
    }

    /**
     * Gets the type property value. The type property
     * @return string|null
    */
    public function getType(): ?string {
        return $this->type;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeDateTimeValue('created_at', $this->getCreatedAt());
        $writer->writeObjectValue('data', $this->getData());
        $writer->writeStringValue('id', $this->getId());
        $writer->writeStringValue('resource_id', $this->getResourceId());
        $writer->writeStringValue('type', $this->getType());
    }

    /**
     * Sets the created_at property value. The created_at property
     * @param DateTime|null $value Value to set for the created_at property.
    */
    public function setCreatedAt(?DateTime $value): void {
        $this->created_at = $value;
    }

    /**
     * Sets the data property value. The data property
     * @param Struct|null $value Value to set for the data property.
    */
    public function setData(?Struct $value): void {
        $this->data = $value;
    }

    /**
     * Sets the id property value. The id property
     * @param string|null $value Value to set for the id property.
    */
    public function setId(?string $value): void {
        $this->id = $value;
    }

    /**
     * Sets the resource_id property value. The resource_id property
     * @param string|null $value Value to set for the resource_id property.
    */
    public function setResourceId(?string $value): void {
        $this->resource_id = $value;
    }

    /**
     * Sets the type property value. The type property
     * @param string|null $value Value to set for the type property.
    */
    public function setType(?string $value): void {
        $this->type = $value;
    }

}
