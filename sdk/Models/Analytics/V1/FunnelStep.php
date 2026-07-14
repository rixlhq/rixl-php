<?php

namespace Rixl\Sdk\Models\Analytics\V1;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class FunnelStep implements Parsable 
{
    /**
     * @var string|null $eventType The eventType property
    */
    private ?string $eventType = null;
    
    /**
     * @var FunnelStep_filters|null $filters The filters property
    */
    private ?FunnelStep_filters $filters = null;
    
    /**
     * @var string|null $name The name property
    */
    private ?string $name = null;
    
    /**
     * @var string|null $pageType The pageType property
    */
    private ?string $pageType = null;
    
    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return FunnelStep
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): FunnelStep {
        return new FunnelStep();
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
            'eventType' => fn(ParseNode $n) => $o->setEventType($n->getStringValue()),
            'filters' => fn(ParseNode $n) => $o->setFilters($n->getObjectValue([FunnelStep_filters::class, 'createFromDiscriminatorValue'])),
            'name' => fn(ParseNode $n) => $o->setName($n->getStringValue()),
            'pageType' => fn(ParseNode $n) => $o->setPageType($n->getStringValue()),
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
     * Gets the pageType property value. The pageType property
     * @return string|null
    */
    public function getPageType(): ?string {
        return $this->pageType;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('eventType', $this->getEventType());
        $writer->writeObjectValue('filters', $this->getFilters());
        $writer->writeStringValue('name', $this->getName());
        $writer->writeStringValue('pageType', $this->getPageType());
    }

    /**
     * Sets the eventType property value. The eventType property
     * @param string|null $value Value to set for the eventType property.
    */
    public function setEventType(?string $value): void {
        $this->eventType = $value;
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
     * Sets the pageType property value. The pageType property
     * @param string|null $value Value to set for the pageType property.
    */
    public function setPageType(?string $value): void {
        $this->pageType = $value;
    }

}
