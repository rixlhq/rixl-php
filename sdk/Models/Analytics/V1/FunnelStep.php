<?php

namespace Rixl\Sdk\Models\Analytics\V1;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class FunnelStep implements Parsable 
{
    /**
     * @var string|null $event_type The event_type property
    */
    private ?string $event_type = null;
    
    /**
     * @var FunnelStep_filters|null $filters The filters property
    */
    private ?FunnelStep_filters $filters = null;
    
    /**
     * @var string|null $name The name property
    */
    private ?string $name = null;
    
    /**
     * @var string|null $page_type The page_type property
    */
    private ?string $page_type = null;
    
    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return FunnelStep
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): FunnelStep {
        return new FunnelStep();
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
            'filters' => fn(ParseNode $n) => $o->setFilters($n->getObjectValue([FunnelStep_filters::class, 'createFromDiscriminatorValue'])),
            'name' => fn(ParseNode $n) => $o->setName($n->getStringValue()),
            'page_type' => fn(ParseNode $n) => $o->setPageType($n->getStringValue()),
        ];
    }

    /**
     * Gets the filters property value. The filters property
     * @return FunnelStep_filters|null
    */
    public function getFilters(): ?FunnelStep_filters {
        return $this->filters;
    }

    /**
     * Gets the name property value. The name property
     * @return string|null
    */
    public function getName(): ?string {
        return $this->name;
    }

    /**
     * Gets the page_type property value. The page_type property
     * @return string|null
    */
    public function getPageType(): ?string {
        return $this->page_type;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('event_type', $this->getEventType());
        $writer->writeObjectValue('filters', $this->getFilters());
        $writer->writeStringValue('name', $this->getName());
        $writer->writeStringValue('page_type', $this->getPageType());
    }

    /**
     * Sets the event_type property value. The event_type property
     * @param string|null $value Value to set for the event_type property.
    */
    public function setEventType(?string $value): void {
        $this->event_type = $value;
    }

    /**
     * Sets the filters property value. The filters property
     * @param FunnelStep_filters|null $value Value to set for the filters property.
    */
    public function setFilters(?FunnelStep_filters $value): void {
        $this->filters = $value;
    }

    /**
     * Sets the name property value. The name property
     * @param string|null $value Value to set for the name property.
    */
    public function setName(?string $value): void {
        $this->name = $value;
    }

    /**
     * Sets the page_type property value. The page_type property
     * @param string|null $value Value to set for the page_type property.
    */
    public function setPageType(?string $value): void {
        $this->page_type = $value;
    }

}
