<?php

namespace Rixl\Sdk\Models\Billing\V1;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class TaxCalculationResponse implements Parsable 
{
    /**
     * @var string|null $amount_total The amount_total property
    */
    private ?string $amount_total = null;
    
    /**
     * @var string|null $calculation_id The calculation_id property
    */
    private ?string $calculation_id = null;
    
    /**
     * @var string|null $currency The currency property
    */
    private ?string $currency = null;
    
    /**
     * @var string|null $tax_amount_exclusive The tax_amount_exclusive property
    */
    private ?string $tax_amount_exclusive = null;
    
    /**
     * @var string|null $tax_amount_inclusive The tax_amount_inclusive property
    */
    private ?string $tax_amount_inclusive = null;
    
    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return TaxCalculationResponse
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): TaxCalculationResponse {
        return new TaxCalculationResponse();
    }

    /**
     * Gets the amount_total property value. The amount_total property
     * @return string|null
    */
    public function getAmountTotal(): ?string {
        return $this->amount_total;
    }

    /**
     * Gets the calculation_id property value. The calculation_id property
     * @return string|null
    */
    public function getCalculationId(): ?string {
        return $this->calculation_id;
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
            'amount_total' => fn(ParseNode $n) => $o->setAmountTotal($n->getStringValue()),
            'calculation_id' => fn(ParseNode $n) => $o->setCalculationId($n->getStringValue()),
            'currency' => fn(ParseNode $n) => $o->setCurrency($n->getStringValue()),
            'tax_amount_exclusive' => fn(ParseNode $n) => $o->setTaxAmountExclusive($n->getStringValue()),
            'tax_amount_inclusive' => fn(ParseNode $n) => $o->setTaxAmountInclusive($n->getStringValue()),
        ];
    }

    /**
     * Gets the tax_amount_exclusive property value. The tax_amount_exclusive property
     * @return string|null
    */
    public function getTaxAmountExclusive(): ?string {
        return $this->tax_amount_exclusive;
    }

    /**
     * Gets the tax_amount_inclusive property value. The tax_amount_inclusive property
     * @return string|null
    */
    public function getTaxAmountInclusive(): ?string {
        return $this->tax_amount_inclusive;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('amount_total', $this->getAmountTotal());
        $writer->writeStringValue('calculation_id', $this->getCalculationId());
        $writer->writeStringValue('currency', $this->getCurrency());
        $writer->writeStringValue('tax_amount_exclusive', $this->getTaxAmountExclusive());
        $writer->writeStringValue('tax_amount_inclusive', $this->getTaxAmountInclusive());
    }

    /**
     * Sets the amount_total property value. The amount_total property
     * @param string|null $value Value to set for the amount_total property.
    */
    public function setAmountTotal(?string $value): void {
        $this->amount_total = $value;
    }

    /**
     * Sets the calculation_id property value. The calculation_id property
     * @param string|null $value Value to set for the calculation_id property.
    */
    public function setCalculationId(?string $value): void {
        $this->calculation_id = $value;
    }

    /**
     * Sets the currency property value. The currency property
     * @param string|null $value Value to set for the currency property.
    */
    public function setCurrency(?string $value): void {
        $this->currency = $value;
    }

    /**
     * Sets the tax_amount_exclusive property value. The tax_amount_exclusive property
     * @param string|null $value Value to set for the tax_amount_exclusive property.
    */
    public function setTaxAmountExclusive(?string $value): void {
        $this->tax_amount_exclusive = $value;
    }

    /**
     * Sets the tax_amount_inclusive property value. The tax_amount_inclusive property
     * @param string|null $value Value to set for the tax_amount_inclusive property.
    */
    public function setTaxAmountInclusive(?string $value): void {
        $this->tax_amount_inclusive = $value;
    }

}
