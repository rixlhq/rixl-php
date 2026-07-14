<?php

namespace Rixl\Sdk\Models\Analytics\V1;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class HotSegment implements Parsable 
{
    /**
     * @var int|null $endSecond The endSecond property
    */
    private ?int $endSecond = null;
    
    /**
     * @var float|null $multiplier The multiplier property
    */
    private ?float $multiplier = null;
    
    /**
     * @var int|null $startSecond The startSecond property
    */
    private ?int $startSecond = null;
    
    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return HotSegment
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): HotSegment {
        return new HotSegment();
    }

    /**
     * Gets the endSecond property value. The endSecond property
     * @return int|null
    */
    public function getEndSecond(): ?int {
        return $this->endSecond;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'endSecond' => fn(ParseNode $n) => $o->setEndSecond($n->getIntegerValue()),
            'multiplier' => fn(ParseNode $n) => $o->setMultiplier($n->getFloatValue()),
            'startSecond' => fn(ParseNode $n) => $o->setStartSecond($n->getIntegerValue()),
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
     * Gets the startSecond property value. The startSecond property
     * @return int|null
    */
    public function getStartSecond(): ?int {
        return $this->startSecond;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeIntegerValue('endSecond', $this->getEndSecond());
        $writer->writeFloatValue('multiplier', $this->getMultiplier());
        $writer->writeIntegerValue('startSecond', $this->getStartSecond());
    }

    /**
     * Sets the endSecond property value. The endSecond property
     * @param int|null $value Value to set for the endSecond property.
    */
    public function setEndSecond(?int $value): void {
        $this->endSecond = $value;
    }

    /**
     * Sets the multiplier property value. The multiplier property
     * @param float|null $value Value to set for the multiplier property.
    */
    public function setMultiplier(?float $value): void {
        $this->multiplier = $value;
    }

    /**
     * Sets the startSecond property value. The startSecond property
     * @param int|null $value Value to set for the startSecond property.
    */
    public function setStartSecond(?int $value): void {
        $this->startSecond = $value;
    }

}
