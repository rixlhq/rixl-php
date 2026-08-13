<?php

namespace Rixl\Sdk\Models\Analytics\V1;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class Dataset implements Parsable 
{
    /**
     * @var array<DatasetField>|null $dimensions The dimensions property
    */
    private ?array $dimensions = null;
    
    /**
     * @var array<DatasetField>|null $filters The filters property
    */
    private ?array $filters = null;
    
    /**
     * @var string|null $id The id property
    */
    private ?string $id = null;
    
    /**
     * @var string|null $label The label property
    */
    private ?string $label = null;
    
    /**
     * @var array<DatasetMetric>|null $metrics The metrics property
    */
    private ?array $metrics = null;
    
    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return Dataset
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): Dataset {
        return new Dataset();
    }

    /**
     * Gets the dimensions property value. The dimensions property
     * @return array<DatasetField>|null
    */
    public function getDimensions(): ?array {
        return $this->dimensions;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'dimensions' => fn(ParseNode $n) => $o->setDimensions($n->getCollectionOfObjectValues([DatasetField::class, 'createFromDiscriminatorValue'])),
            'filters' => fn(ParseNode $n) => $o->setFilters($n->getCollectionOfObjectValues([DatasetField::class, 'createFromDiscriminatorValue'])),
            'id' => fn(ParseNode $n) => $o->setId($n->getStringValue()),
            'label' => fn(ParseNode $n) => $o->setLabel($n->getStringValue()),
            'metrics' => fn(ParseNode $n) => $o->setMetrics($n->getCollectionOfObjectValues([DatasetMetric::class, 'createFromDiscriminatorValue'])),
        ];
    }

    /**
     * Gets the filters property value. The filters property
     * @return array<DatasetField>|null
    */
    public function getFilters(): ?array {
        return $this->filters;
    }

    /**
     * Gets the id property value. The id property
     * @return string|null
    */
    public function getId(): ?string {
        return $this->id;
    }

    /**
     * Gets the label property value. The label property
     * @return string|null
    */
    public function getLabel(): ?string {
        return $this->label;
    }

    /**
     * Gets the metrics property value. The metrics property
     * @return array<DatasetMetric>|null
    */
    public function getMetrics(): ?array {
        return $this->metrics;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeCollectionOfObjectValues('dimensions', $this->getDimensions());
        $writer->writeCollectionOfObjectValues('filters', $this->getFilters());
        $writer->writeStringValue('id', $this->getId());
        $writer->writeStringValue('label', $this->getLabel());
        $writer->writeCollectionOfObjectValues('metrics', $this->getMetrics());
    }

    /**
     * Sets the dimensions property value. The dimensions property
     * @param array<DatasetField>|null $value Value to set for the dimensions property.
    */
    public function setDimensions(?array $value): void {
        $this->dimensions = $value;
    }

    /**
     * Sets the filters property value. The filters property
     * @param array<DatasetField>|null $value Value to set for the filters property.
    */
    public function setFilters(?array $value): void {
        $this->filters = $value;
    }

    /**
     * Sets the id property value. The id property
     * @param string|null $value Value to set for the id property.
    */
    public function setId(?string $value): void {
        $this->id = $value;
    }

    /**
     * Sets the label property value. The label property
     * @param string|null $value Value to set for the label property.
    */
    public function setLabel(?string $value): void {
        $this->label = $value;
    }

    /**
     * Sets the metrics property value. The metrics property
     * @param array<DatasetMetric>|null $value Value to set for the metrics property.
    */
    public function setMetrics(?array $value): void {
        $this->metrics = $value;
    }

}
