<?php

namespace Rixl\Sdk\Models\Billingv1;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class PlanTaxCalculationResponse implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var int|null $amount_total The amount_total property
    */
    private ?int $amount_total = null;
    
    /**
     * @var int|null $base_amount The base_amount property
    */
    private ?int $base_amount = null;
    
    /**
     * @var BillingAddress|null $billing_address The billing_address property
    */
    private ?BillingAddress $billing_address = null;
    
    /**
     * @var string|null $billing_cycle The billing_cycle property
    */
    private ?string $billing_cycle = null;
    
    /**
     * @var string|null $calculated_at The calculated_at property
    */
    private ?string $calculated_at = null;
    
    /**
     * @var string|null $calculation_id The calculation_id property
    */
    private ?string $calculation_id = null;
    
    /**
     * @var string|null $currency The currency property
    */
    private ?string $currency = null;
    
    /**
     * @var string|null $plan_id The plan_id property
    */
    private ?string $plan_id = null;
    
    /**
     * @var string|null $plan_name The plan_name property
    */
    private ?string $plan_name = null;
    
    /**
     * @var int|null $tax_amount_exclusive The tax_amount_exclusive property
    */
    private ?int $tax_amount_exclusive = null;
    
    /**
     * @var int|null $tax_amount_inclusive The tax_amount_inclusive property
    */
    private ?int $tax_amount_inclusive = null;
    
    /**
     * @var float|null $tax_percentage The tax_percentage property
    */
    private ?float $tax_percentage = null;
    
    /**
     * Instantiates a new PlanTaxCalculationResponse and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return PlanTaxCalculationResponse
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): PlanTaxCalculationResponse {
        return new PlanTaxCalculationResponse();
    }

    /**
     * Gets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        return $this->additionalData;
    }

    /**
     * Gets the amount_total property value. The amount_total property
     * @return int|null
    */
    public function getAmountTotal(): ?int {
        return $this->amount_total;
    }

    /**
     * Gets the base_amount property value. The base_amount property
     * @return int|null
    */
    public function getBaseAmount(): ?int {
        return $this->base_amount;
    }

    /**
     * Gets the billing_address property value. The billing_address property
     * @return BillingAddress|null
    */
    public function getBillingAddress(): ?BillingAddress {
        return $this->billing_address;
    }

    /**
     * Gets the billing_cycle property value. The billing_cycle property
     * @return string|null
    */
    public function getBillingCycle(): ?string {
        return $this->billing_cycle;
    }

    /**
     * Gets the calculated_at property value. The calculated_at property
     * @return string|null
    */
    public function getCalculatedAt(): ?string {
        return $this->calculated_at;
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
            'amount_total' => fn(ParseNode $n) => $o->setAmountTotal($n->getIntegerValue()),
            'base_amount' => fn(ParseNode $n) => $o->setBaseAmount($n->getIntegerValue()),
            'billing_address' => fn(ParseNode $n) => $o->setBillingAddress($n->getObjectValue([BillingAddress::class, 'createFromDiscriminatorValue'])),
            'billing_cycle' => fn(ParseNode $n) => $o->setBillingCycle($n->getStringValue()),
            'calculated_at' => fn(ParseNode $n) => $o->setCalculatedAt($n->getStringValue()),
            'calculation_id' => fn(ParseNode $n) => $o->setCalculationId($n->getStringValue()),
            'currency' => fn(ParseNode $n) => $o->setCurrency($n->getStringValue()),
            'plan_id' => fn(ParseNode $n) => $o->setPlanId($n->getStringValue()),
            'plan_name' => fn(ParseNode $n) => $o->setPlanName($n->getStringValue()),
            'tax_amount_exclusive' => fn(ParseNode $n) => $o->setTaxAmountExclusive($n->getIntegerValue()),
            'tax_amount_inclusive' => fn(ParseNode $n) => $o->setTaxAmountInclusive($n->getIntegerValue()),
            'tax_percentage' => fn(ParseNode $n) => $o->setTaxPercentage($n->getFloatValue()),
        ];
    }

    /**
     * Gets the plan_id property value. The plan_id property
     * @return string|null
    */
    public function getPlanId(): ?string {
        return $this->plan_id;
    }

    /**
     * Gets the plan_name property value. The plan_name property
     * @return string|null
    */
    public function getPlanName(): ?string {
        return $this->plan_name;
    }

    /**
     * Gets the tax_amount_exclusive property value. The tax_amount_exclusive property
     * @return int|null
    */
    public function getTaxAmountExclusive(): ?int {
        return $this->tax_amount_exclusive;
    }

    /**
     * Gets the tax_amount_inclusive property value. The tax_amount_inclusive property
     * @return int|null
    */
    public function getTaxAmountInclusive(): ?int {
        return $this->tax_amount_inclusive;
    }

    /**
     * Gets the tax_percentage property value. The tax_percentage property
     * @return float|null
    */
    public function getTaxPercentage(): ?float {
        return $this->tax_percentage;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeIntegerValue('amount_total', $this->getAmountTotal());
        $writer->writeIntegerValue('base_amount', $this->getBaseAmount());
        $writer->writeObjectValue('billing_address', $this->getBillingAddress());
        $writer->writeStringValue('billing_cycle', $this->getBillingCycle());
        $writer->writeStringValue('calculated_at', $this->getCalculatedAt());
        $writer->writeStringValue('calculation_id', $this->getCalculationId());
        $writer->writeStringValue('currency', $this->getCurrency());
        $writer->writeStringValue('plan_id', $this->getPlanId());
        $writer->writeStringValue('plan_name', $this->getPlanName());
        $writer->writeIntegerValue('tax_amount_exclusive', $this->getTaxAmountExclusive());
        $writer->writeIntegerValue('tax_amount_inclusive', $this->getTaxAmountInclusive());
        $writer->writeFloatValue('tax_percentage', $this->getTaxPercentage());
        $writer->writeAdditionalData($this->getAdditionalData());
    }

    /**
     * Sets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @param array<string,mixed> $value Value to set for the AdditionalData property.
    */
    public function setAdditionalData(?array $value): void {
        $this->additionalData = $value;
    }

    /**
     * Sets the amount_total property value. The amount_total property
     * @param int|null $value Value to set for the amount_total property.
    */
    public function setAmountTotal(?int $value): void {
        $this->amount_total = $value;
    }

    /**
     * Sets the base_amount property value. The base_amount property
     * @param int|null $value Value to set for the base_amount property.
    */
    public function setBaseAmount(?int $value): void {
        $this->base_amount = $value;
    }

    /**
     * Sets the billing_address property value. The billing_address property
     * @param BillingAddress|null $value Value to set for the billing_address property.
    */
    public function setBillingAddress(?BillingAddress $value): void {
        $this->billing_address = $value;
    }

    /**
     * Sets the billing_cycle property value. The billing_cycle property
     * @param string|null $value Value to set for the billing_cycle property.
    */
    public function setBillingCycle(?string $value): void {
        $this->billing_cycle = $value;
    }

    /**
     * Sets the calculated_at property value. The calculated_at property
     * @param string|null $value Value to set for the calculated_at property.
    */
    public function setCalculatedAt(?string $value): void {
        $this->calculated_at = $value;
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
     * Sets the plan_id property value. The plan_id property
     * @param string|null $value Value to set for the plan_id property.
    */
    public function setPlanId(?string $value): void {
        $this->plan_id = $value;
    }

    /**
     * Sets the plan_name property value. The plan_name property
     * @param string|null $value Value to set for the plan_name property.
    */
    public function setPlanName(?string $value): void {
        $this->plan_name = $value;
    }

    /**
     * Sets the tax_amount_exclusive property value. The tax_amount_exclusive property
     * @param int|null $value Value to set for the tax_amount_exclusive property.
    */
    public function setTaxAmountExclusive(?int $value): void {
        $this->tax_amount_exclusive = $value;
    }

    /**
     * Sets the tax_amount_inclusive property value. The tax_amount_inclusive property
     * @param int|null $value Value to set for the tax_amount_inclusive property.
    */
    public function setTaxAmountInclusive(?int $value): void {
        $this->tax_amount_inclusive = $value;
    }

    /**
     * Sets the tax_percentage property value. The tax_percentage property
     * @param float|null $value Value to set for the tax_percentage property.
    */
    public function setTaxPercentage(?float $value): void {
        $this->tax_percentage = $value;
    }

}
