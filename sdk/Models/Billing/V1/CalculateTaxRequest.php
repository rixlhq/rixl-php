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
     * @var BillingAddress|null $billingAddress The billingAddress property
    */
    private ?BillingAddress $billingAddress = null;
    
    /**
     * @var BillingCycle|null $billingCycle The billingCycle property
    */
    private ?BillingCycle $billingCycle = null;
    
    /**
     * @var string|null $currency The currency property
    */
    private ?string $currency = null;
    
    /**
     * @var array<TaxLineItem>|null $lineItems The lineItems property
    */
    private ?array $lineItems = null;
    
    /**
     * @var CalculateTaxRequest_metadata|null $metadata The metadata property
    */
    private ?CalculateTaxRequest_metadata $metadata = null;
    
    /**
     * @var string|null $orgId The orgId property
    */
    private ?string $orgId = null;
    
    /**
     * @var string|null $planId The planId property
    */
    private ?string $planId = null;
    
    /**
     * @var string|null $planName The planName property
    */
    private ?string $planName = null;
    
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
     * Gets the billingAddress property value. The billingAddress property
     * @return BillingAddress|null
    */
    public function getBillingAddress(): ?BillingAddress {
        return $this->billingAddress;
    }

    /**
     * Gets the billingCycle property value. The billingCycle property
     * @return BillingCycle|null
    */
    public function getBillingCycle(): ?BillingCycle {
        return $this->billingCycle;
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
            'billingAddress' => fn(ParseNode $n) => $o->setBillingAddress($n->getObjectValue([BillingAddress::class, 'createFromDiscriminatorValue'])),
            'billingCycle' => fn(ParseNode $n) => $o->setBillingCycle($n->getEnumValue(BillingCycle::class)),
            'currency' => fn(ParseNode $n) => $o->setCurrency($n->getStringValue()),
            'lineItems' => fn(ParseNode $n) => $o->setLineItems($n->getCollectionOfObjectValues([TaxLineItem::class, 'createFromDiscriminatorValue'])),
            'metadata' => fn(ParseNode $n) => $o->setMetadata($n->getObjectValue([CalculateTaxRequest_metadata::class, 'createFromDiscriminatorValue'])),
            'orgId' => fn(ParseNode $n) => $o->setOrgId($n->getStringValue()),
            'planId' => fn(ParseNode $n) => $o->setPlanId($n->getStringValue()),
            'planName' => fn(ParseNode $n) => $o->setPlanName($n->getStringValue()),
        ];
    }

    /**
     * Gets the lineItems property value. The lineItems property
     * @return array<TaxLineItem>|null
    */
    public function getLineItems(): ?array {
        return $this->lineItems;
    }

    /**
     * Gets the metadata property value. The metadata property
     * @return CalculateTaxRequest_metadata|null
    */
    public function getMetadata(): ?CalculateTaxRequest_metadata {
        return $this->metadata;
    }

    /**
     * Gets the orgId property value. The orgId property
     * @return string|null
    */
    public function getOrgId(): ?string {
        return $this->orgId;
    }

    /**
     * Gets the planId property value. The planId property
     * @return string|null
    */
    public function getPlanId(): ?string {
        return $this->planId;
    }

    /**
     * Gets the planName property value. The planName property
     * @return string|null
    */
    public function getPlanName(): ?string {
        return $this->planName;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeFloatValue('amount', $this->getAmount());
        $writer->writeObjectValue('billingAddress', $this->getBillingAddress());
        $writer->writeEnumValue('billingCycle', $this->getBillingCycle());
        $writer->writeStringValue('currency', $this->getCurrency());
        $writer->writeCollectionOfObjectValues('lineItems', $this->getLineItems());
        $writer->writeObjectValue('metadata', $this->getMetadata());
        $writer->writeStringValue('orgId', $this->getOrgId());
        $writer->writeStringValue('planId', $this->getPlanId());
        $writer->writeStringValue('planName', $this->getPlanName());
    }

    /**
     * Sets the amount property value. The amount property
     * @param float|null $value Value to set for the amount property.
    */
    public function setAmount(?float $value): void {
        $this->amount = $value;
    }

    /**
     * Sets the billingAddress property value. The billingAddress property
     * @param BillingAddress|null $value Value to set for the billingAddress property.
    */
    public function setBillingAddress(?BillingAddress $value): void {
        $this->billingAddress = $value;
    }

    /**
     * Sets the billingCycle property value. The billingCycle property
     * @param BillingCycle|null $value Value to set for the billingCycle property.
    */
    public function setBillingCycle(?BillingCycle $value): void {
        $this->billingCycle = $value;
    }

    /**
     * Sets the currency property value. The currency property
     * @param string|null $value Value to set for the currency property.
    */
    public function setCurrency(?string $value): void {
        $this->currency = $value;
    }

    /**
     * Sets the lineItems property value. The lineItems property
     * @param array<TaxLineItem>|null $value Value to set for the lineItems property.
    */
    public function setLineItems(?array $value): void {
        $this->lineItems = $value;
    }

    /**
     * Sets the metadata property value. The metadata property
     * @param CalculateTaxRequest_metadata|null $value Value to set for the metadata property.
    */
    public function setMetadata(?CalculateTaxRequest_metadata $value): void {
        $this->metadata = $value;
    }

    /**
     * Sets the orgId property value. The orgId property
     * @param string|null $value Value to set for the orgId property.
    */
    public function setOrgId(?string $value): void {
        $this->orgId = $value;
    }

    /**
     * Sets the planId property value. The planId property
     * @param string|null $value Value to set for the planId property.
    */
    public function setPlanId(?string $value): void {
        $this->planId = $value;
    }

    /**
     * Sets the planName property value. The planName property
     * @param string|null $value Value to set for the planName property.
    */
    public function setPlanName(?string $value): void {
        $this->planName = $value;
    }

}
