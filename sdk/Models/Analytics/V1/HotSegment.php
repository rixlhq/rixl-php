<?php

namespace Rixl\Sdk\Models\Analytics\V1;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class HotSegment implements Parsable 
{
    /**
     * @var int|null $end_second The end_second property
    */
    private ?int $end_second = null;
    
    /**
     * @var float|null $multiplier The multiplier property
    */
    private ?float $multiplier = null;
    
    /**
     * @var int|null $start_second The start_second property
    */
    private ?int $start_second = null;
    
    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return HotSegment
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): HotSegment {
        return new HotSegment();
    }

    /**
     * Gets the end_second property value. The end_second property
     * @return int|null
    */
    public function getEndSecond(): ?int {
        return $this->end_second;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'end_second' => fn(ParseNode $n) => $o->setEndSecond($n->getIntegerValue()),
            'multiplier' => fn(ParseNode $n) => $o->setMultiplier($n->getFloatValue()),
            'start_second' => fn(ParseNode $n) => $o->setStartSecond($n->getIntegerValue()),
        ];
    }

    /**
     * Gets the multiplier property value. The multiplier property
     * @return float|null
    */
    public function getMultiplier(): ?float {
        return $this->multiplier;
    }

    /**
     * Gets the start_second property value. The start_second property
     * @return int|null
    */
    public function getStartSecond(): ?int {
        return $this->start_second;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeIntegerValue('end_second', $this->getEndSecond());
        $writer->writeFloatValue('multiplier', $this->getMultiplier());
        $writer->writeIntegerValue('start_second', $this->getStartSecond());
    }

    /**
     * Sets the end_second property value. The end_second property
     * @param int|null $value Value to set for the end_second property.
    */
    public function setEndSecond(?int $value): void {
        $this->end_second = $value;
    }

    /**
     * Sets the multiplier property value. The multiplier property
     * @param float|null $value Value to set for the multiplier property.
    */
    public function setMultiplier(?float $value): void {
        $this->multiplier = $value;
    }

    /**
     * Sets the start_second property value. The start_second property
     * @param int|null $value Value to set for the start_second property.
    */
    public function setStartSecond(?int $value): void {
        $this->start_second = $value;
    }

}
