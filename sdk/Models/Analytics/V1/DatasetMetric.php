<?php

namespace Rixl\Sdk\Models\Analytics\V1;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class DatasetMetric implements Parsable 
{
    /**
     * @var string|null $aggregation The aggregation property
    */
    private ?string $aggregation = null;
    
    /**
     * @var string|null $label The label property
    */
    private ?string $label = null;
    
    /**
     * @var string|null $name The name property
    */
    private ?string $name = null;
    
    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return DatasetMetric
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): DatasetMetric {
        return new DatasetMetric();
    }

    /**
     * Gets the aggregation property value. The aggregation property
     * @return string|null
    */
    public function getAggregation(): ?string {
        return $this->aggregation;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'aggregation' => fn(ParseNode $n) => $o->setAggregation($n->getStringValue()),
            'label' => fn(ParseNode $n) => $o->setLabel($n->getStringValue()),
            'name' => fn(ParseNode $n) => $o->setName($n->getStringValue()),
        ];
    }

    /**
     * Gets the label property value. The label property
     * @return string|null
    */
    public function getLabel(): ?string {
        return $this->label;
    }

    /**
     * Gets the name property value. The name property
     * @return string|null
    */
    public function getName(): ?string {
        return $this->name;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('aggregation', $this->getAggregation());
        $writer->writeStringValue('label', $this->getLabel());
        $writer->writeStringValue('name', $this->getName());
    }

    /**
     * Sets the aggregation property value. The aggregation property
     * @param string|null $value Value to set for the aggregation property.
    */
    public function setAggregation(?string $value): void {
        $this->aggregation = $value;
    }

    /**
     * Sets the label property value. The label property
     * @param string|null $value Value to set for the label property.
    */
    public function setLabel(?string $value): void {
        $this->label = $value;
    }

    /**
     * Sets the name property value. The name property
     * @param string|null $value Value to set for the name property.
    */
    public function setName(?string $value): void {
        $this->name = $value;
    }

}
