<?php

namespace Rixl\Sdk\Models\Billing\V1;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class TaxCalculationResponse implements Parsable 
{
    /**
     * @var string|null $calculationId The calculationId property
    */
    private ?string $calculationId = null;
    
    /**
     * @var string|null $currency The currency property
    */
    private ?string $currency = null;
    
    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return TaxCalculationResponse
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): TaxCalculationResponse {
        return new TaxCalculationResponse();
    }

    /**
     * Gets the calculationId property value. The calculationId property
     * @return string|null
    */
    public function getCalculationId(): ?string {
        return $this->calculationId;
    }

    /**
     * Gets the currency property value. The currency property
     * @return string|null
    */
    public function getCurrency(): ?string {
        return $this->currency;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'calculationId' => fn(ParseNode $n) => $o->setCalculationId($n->getStringValue()),
            'currency' => fn(ParseNode $n) => $o->setCurrency($n->getStringValue()),
        ];
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('calculationId', $this->getCalculationId());
        $writer->writeStringValue('currency', $this->getCurrency());
    }

    /**
     * Sets the calculationId property value. The calculationId property
     * @param string|null $value Value to set for the calculationId property.
    */
    public function setCalculationId(?string $value): void {
        $this->calculationId = $value;
    }

    /**
     * Sets the currency property value. The currency property
     * @param string|null $value Value to set for the currency property.
    */
    public function setCurrency(?string $value): void {
        $this->currency = $value;
    }

}
