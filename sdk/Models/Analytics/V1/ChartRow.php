<?php

namespace Rixl\Sdk\Models\Analytics\V1;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class ChartRow implements Parsable 
{
    /**
     * @var ChartRow_dimensions|null $dimensions The dimensions property
    */
    private ?ChartRow_dimensions $dimensions = null;
    
    /**
     * @var string|null $timestamp The timestamp property
    */
    private ?string $timestamp = null;
    
    /**
     * @var float|null $value The value property
    */
    private ?float $value = null;
    
    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return ChartRow
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): ChartRow {
        return new ChartRow();
    }

    /**
     * Gets the dimensions property value. The dimensions property
     * @return ChartRow_dimensions|null
    */
    public function getDimensions(): ?ChartRow_dimensions {
        return $this->dimensions;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'dimensions' => fn(ParseNode $n) => $o->setDimensions($n->getObjectValue([ChartRow_dimensions::class, 'createFromDiscriminatorValue'])),
            'timestamp' => fn(ParseNode $n) => $o->setTimestamp($n->getStringValue()),
            'value' => fn(ParseNode $n) => $o->setValue($n->getFloatValue()),
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
     * Gets the value property value. The value property
     * @return float|null
    */
    public function getValue(): ?float {
        return $this->value;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeObjectValue('dimensions', $this->getDimensions());
        $writer->writeStringValue('timestamp', $this->getTimestamp());
        $writer->writeFloatValue('value', $this->getValue());
    }

    /**
     * Sets the dimensions property value. The dimensions property
     * @param ChartRow_dimensions|null $value Value to set for the dimensions property.
    */
    public function setDimensions(?ChartRow_dimensions $value): void {
        $this->dimensions = $value;
    }

    /**
     * Sets the timestamp property value. The timestamp property
     * @param string|null $value Value to set for the timestamp property.
    */
    public function setTimestamp(?string $value): void {
        $this->timestamp = $value;
    }

    /**
     * Sets the value property value. The value property
     * @param float|null $value Value to set for the value property.
    */
    public function setValue(?float $value): void {
        $this->value = $value;
    }

}
