<?php

namespace Rixl\Sdk\Models\Billing\V1;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class CalculateTaxRequest implements Parsable 
{
    /**
     * @var float|null $amount The amount property
    */
    private ?float $amount = null;
    
    /**
     * @var BillingAddress|null $billing_address The billing_address property
    */
    private ?BillingAddress $billing_address = null;
    
    /**
     * @var BillingCycle|null $billing_cycle The billing_cycle property
    */
    private ?BillingCycle $billing_cycle = null;
    
    /**
     * @var string|null $currency The currency property
    */
    private ?string $currency = null;
    
    /**
     * @var array<TaxLineItem>|null $line_items The line_items property
    */
    private ?array $line_items = null;
    
    /**
     * @var CalculateTaxRequest_metadata|null $metadata The metadata property
    */
    private ?CalculateTaxRequest_metadata $metadata = null;
    
    /**
     * @var string|null $org_id The org_id property
    */
    private ?string $org_id = null;
    
    /**
     * @var string|null $plan_id The plan_id property
    */
    private ?string $plan_id = null;
    
    /**
     * @var string|null $plan_name The plan_name property
    */
    private ?string $plan_name = null;
    
    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return CalculateTaxRequest
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): CalculateTaxRequest {
        return new CalculateTaxRequest();
    }

    /**
     * Gets the amount property value. The amount property
     * @return float|null
    */
    public function getAmount(): ?float {
        return $this->amount;
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
     * @return BillingCycle|null
    */
    public function getBillingCycle(): ?BillingCycle {
        return $this->billing_cycle;
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
            'amount' => fn(ParseNode $n) => $o->setAmount($n->getFloatValue()),
            'billing_address' => fn(ParseNode $n) => $o->setBillingAddress($n->getObjectValue([BillingAddress::class, 'createFromDiscriminatorValue'])),
            'billing_cycle' => fn(ParseNode $n) => $o->setBillingCycle($n->getEnumValue(BillingCycle::class)),
            'currency' => fn(ParseNode $n) => $o->setCurrency($n->getStringValue()),
            'line_items' => fn(ParseNode $n) => $o->setLineItems($n->getCollectionOfObjectValues([TaxLineItem::class, 'createFromDiscriminatorValue'])),
            'metadata' => fn(ParseNode $n) => $o->setMetadata($n->getObjectValue([CalculateTaxRequest_metadata::class, 'createFromDiscriminatorValue'])),
            'org_id' => fn(ParseNode $n) => $o->setOrgId($n->getStringValue()),
            'plan_id' => fn(ParseNode $n) => $o->setPlanId($n->getStringValue()),
            'plan_name' => fn(ParseNode $n) => $o->setPlanName($n->getStringValue()),
        ];
    }

    /**
     * Gets the line_items property value. The line_items property
     * @return array<TaxLineItem>|null
    */
    public function getLineItems(): ?array {
        return $this->line_items;
    }

    /**
     * Gets the metadata property value. The metadata property
     * @return CalculateTaxRequest_metadata|null
    */
    public function getMetadata(): ?CalculateTaxRequest_metadata {
        return $this->metadata;
    }

    /**
     * Gets the org_id property value. The org_id property
     * @return string|null
    */
    public function getOrgId(): ?string {
        return $this->org_id;
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
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeFloatValue('amount', $this->getAmount());
        $writer->writeObjectValue('billing_address', $this->getBillingAddress());
        $writer->writeEnumValue('billing_cycle', $this->getBillingCycle());
        $writer->writeStringValue('currency', $this->getCurrency());
        $writer->writeCollectionOfObjectValues('line_items', $this->getLineItems());
        $writer->writeObjectValue('metadata', $this->getMetadata());
        $writer->writeStringValue('org_id', $this->getOrgId());
        $writer->writeStringValue('plan_id', $this->getPlanId());
        $writer->writeStringValue('plan_name', $this->getPlanName());
    }

    /**
     * Sets the amount property value. The amount property
     * @param float|null $value Value to set for the amount property.
    */
    public function setAmount(?float $value): void {
        $this->amount = $value;
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
     * @param BillingCycle|null $value Value to set for the billing_cycle property.
    */
    public function setBillingCycle(?BillingCycle $value): void {
        $this->billing_cycle = $value;
    }

    /**
     * Sets the currency property value. The currency property
     * @param string|null $value Value to set for the currency property.
    */
    public function setCurrency(?string $value): void {
        $this->currency = $value;
    }

    /**
     * Sets the line_items property value. The line_items property
     * @param array<TaxLineItem>|null $value Value to set for the line_items property.
    */
    public function setLineItems(?array $value): void {
        $this->line_items = $value;
    }

    /**
     * Sets the metadata property value. The metadata property
     * @param CalculateTaxRequest_metadata|null $value Value to set for the metadata property.
    */
    public function setMetadata(?CalculateTaxRequest_metadata $value): void {
        $this->metadata = $value;
    }

    /**
     * Sets the org_id property value. The org_id property
     * @param string|null $value Value to set for the org_id property.
    */
    public function setOrgId(?string $value): void {
        $this->org_id = $value;
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

}
