<?php

namespace Rixl\Sdk\Models\Analytics\V1;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class FunnelRequest implements Parsable 
{
    /**
     * @var DateRange|null $range The range property
    */
    private ?DateRange $range = null;
    
    /**
     * @var array<FunnelStep>|null $steps The steps property
    */
    private ?array $steps = null;
    
    /**
     * @var int|null $time_window The time_window property
    */
    private ?int $time_window = null;
    
    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return FunnelRequest
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): FunnelRequest {
        return new FunnelRequest();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'range' => fn(ParseNode $n) => $o->setRange($n->getObjectValue([DateRange::class, 'createFromDiscriminatorValue'])),
            'steps' => fn(ParseNode $n) => $o->setSteps($n->getCollectionOfObjectValues([FunnelStep::class, 'createFromDiscriminatorValue'])),
            'time_window' => fn(ParseNode $n) => $o->setTimeWindow($n->getIntegerValue()),
        ];
    }

    /**
     * Gets the range property value. The range property
     * @return DateRange|null
    */
    public function getRange(): ?DateRange {
        return $this->range;
    }

    /**
     * Gets the steps property value. The steps property
     * @return array<FunnelStep>|null
    */
    public function getSteps(): ?array {
        return $this->steps;
    }

    /**
     * Gets the time_window property value. The time_window property
     * @return int|null
    */
    public function getTimeWindow(): ?int {
        return $this->time_window;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeObjectValue('range', $this->getRange());
        $writer->writeCollectionOfObjectValues('steps', $this->getSteps());
        $writer->writeIntegerValue('time_window', $this->getTimeWindow());
    }

    /**
     * Sets the range property value. The range property
     * @param DateRange|null $value Value to set for the range property.
    */
    public function setRange(?DateRange $value): void {
        $this->range = $value;
    }

    /**
     * Sets the steps property value. The steps property
     * @param array<FunnelStep>|null $value Value to set for the steps property.
    */
    public function setSteps(?array $value): void {
        $this->steps = $value;
    }

    /**
     * Sets the time_window property value. The time_window property
     * @param int|null $value Value to set for the time_window property.
    */
    public function setTimeWindow(?int $value): void {
        $this->time_window = $value;
    }

}
