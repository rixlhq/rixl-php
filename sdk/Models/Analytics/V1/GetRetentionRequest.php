<?php

namespace Rixl\Sdk\Models\Analytics\V1;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class GetRetentionRequest implements Parsable 
{
    /**
     * @var string|null $period The period property
    */
    private ?string $period = null;
    
    /**
     * @var DateRange|null $range The range property
    */
    private ?DateRange $range = null;
    
    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return GetRetentionRequest
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): GetRetentionRequest {
        return new GetRetentionRequest();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'period' => fn(ParseNode $n) => $o->setPeriod($n->getStringValue()),
            'range' => fn(ParseNode $n) => $o->setRange($n->getObjectValue([DateRange::class, 'createFromDiscriminatorValue'])),
        ];
    }

    /**
     * Gets the period property value. The period property
     * @return string|null
    */
    public function getPeriod(): ?string {
        return $this->period;
    }

    /**
     * Gets the range property value. The range property
     * @return DateRange|null
    */
    public function getRange(): ?DateRange {
        return $this->range;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('period', $this->getPeriod());
        $writer->writeObjectValue('range', $this->getRange());
    }

    /**
     * Sets the period property value. The period property
     * @param string|null $value Value to set for the period property.
    */
    public function setPeriod(?string $value): void {
        $this->period = $value;
    }

    /**
     * Sets the range property value. The range property
     * @param DateRange|null $value Value to set for the range property.
    */
    public function setRange(?DateRange $value): void {
        $this->range = $value;
    }

}
