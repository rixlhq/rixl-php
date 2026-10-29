<?php

namespace Rixl\Sdk\Webhooks\V1\Projects\Item\Endpoints\Item;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class WithEndpoint_PatchRequestBody implements Parsable 
{
    /**
     * @var bool|null $enabled The enabled property
    */
    private ?bool $enabled = null;
    
    /**
     * @var array<WithEndpoint_PatchRequestBody_event_types>|null $event_types The event_types property
    */
    private ?array $event_types = null;
    
    /**
     * @var string|null $url The url property
    */
    private ?string $url = null;
    
    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return WithEndpoint_PatchRequestBody
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): WithEndpoint_PatchRequestBody {
        return new WithEndpoint_PatchRequestBody();
    }

    /**
     * Gets the enabled property value. The enabled property
     * @return bool|null
    */
    public function getEnabled(): ?bool {
        return $this->enabled;
    }

    /**
     * Gets the event_types property value. The event_types property
     * @return array<WithEndpoint_PatchRequestBody_event_types>|null
    */
    public function getEventTypes(): ?array {
        return $this->event_types;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'enabled' => fn(ParseNode $n) => $o->setEnabled($n->getBooleanValue()),
            'event_types' => fn(ParseNode $n) => $o->setEventTypes($n->getCollectionOfEnumValues(WithEndpoint_PatchRequestBody_event_types::class)),
            'url' => fn(ParseNode $n) => $o->setUrl($n->getStringValue()),
        ];
    }

    /**
     * Gets the url property value. The url property
     * @return string|null
    */
    public function getUrl(): ?string {
        return $this->url;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeBooleanValue('enabled', $this->getEnabled());
        $writer->writeCollectionOfEnumValues('event_types', $this->getEventTypes());
        $writer->writeStringValue('url', $this->getUrl());
    }

    /**
     * Sets the enabled property value. The enabled property
     * @param bool|null $value Value to set for the enabled property.
    */
    public function setEnabled(?bool $value): void {
        $this->enabled = $value;
    }

    /**
     * Sets the event_types property value. The event_types property
     * @param array<WithEndpoint_PatchRequestBody_event_types>|null $value Value to set for the event_types property.
    */
    public function setEventTypes(?array $value): void {
        $this->event_types = $value;
    }

    /**
     * Sets the url property value. The url property
     * @param string|null $value Value to set for the url property.
    */
    public function setUrl(?string $value): void {
        $this->url = $value;
    }

}
