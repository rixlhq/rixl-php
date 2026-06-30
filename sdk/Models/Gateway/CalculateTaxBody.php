<?php

namespace Rixl\Sdk\Models\Gateway;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

/**
 * Tax calculation request
*/
class CalculateTaxBody implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var float|null $amount The amount property
    */
    private ?float $amount = null;
    
    /**
     * @var BillingAddressBody|null $billing_address The billing_address property
    */
    private ?BillingAddressBody $billing_address = null;
    
    /**
     * @var string|null $billing_cycle The billing_cycle property
    */
    private ?string $billing_cycle = null;
    
    /**
     * @var string|null $currency The currency property
    */
    private ?string $currency = null;
    
    /**
     * @var int|null $interval_count The interval_count property
    */
    private ?int $interval_count = null;
    
    /**
     * @var array<TaxLineItemBody>|null $line_items The line_items property
    */
    private ?array $line_items = null;
    
    /**
     * @var CalculateTaxBody_metadata|null $metadata The metadata property
    */
    private ?CalculateTaxBody_metadata $metadata = null;
    
    /**
     * @var string|null $plan_id The plan_id property
    */
    private ?string $plan_id = null;
    
    /**
     * @var string|null $plan_name The plan_name property
    */
    private ?string $plan_name = null;
    
    /**
     * Instantiates a new CalculateTaxBody and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return CalculateTaxBody
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): CalculateTaxBody {
        return new CalculateTaxBody();
    }

    /**
     * Gets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        return $this->additionalData;
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
     * @return BillingAddressBody|null
    */
    public function getBillingAddress(): ?BillingAddressBody {
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
            'billing_address' => fn(ParseNode $n) => $o->setBillingAddress($n->getObjectValue([BillingAddressBody::class, 'createFromDiscriminatorValue'])),
            'billing_cycle' => fn(ParseNode $n) => $o->setBillingCycle($n->getStringValue()),
            'currency' => fn(ParseNode $n) => $o->setCurrency($n->getStringValue()),
            'interval_count' => fn(ParseNode $n) => $o->setIntervalCount($n->getIntegerValue()),
            'line_items' => fn(ParseNode $n) => $o->setLineItems($n->getCollectionOfObjectValues([TaxLineItemBody::class, 'createFromDiscriminatorValue'])),
            'metadata' => fn(ParseNode $n) => $o->setMetadata($n->getObjectValue([CalculateTaxBody_metadata::class, 'createFromDiscriminatorValue'])),
            'plan_id' => fn(ParseNode $n) => $o->setPlanId($n->getStringValue()),
            'plan_name' => fn(ParseNode $n) => $o->setPlanName($n->getStringValue()),
        ];
    }

    /**
     * Gets the interval_count property value. The interval_count property
     * @return int|null
    */
    public function getIntervalCount(): ?int {
        return $this->interval_count;
    }

    /**
     * Gets the line_items property value. The line_items property
     * @return array<TaxLineItemBody>|null
    */
    public function getLineItems(): ?array {
        return $this->line_items;
    }

    /**
     * Gets the metadata property value. The metadata property
     * @return CalculateTaxBody_metadata|null
    */
    public function getMetadata(): ?CalculateTaxBody_metadata {
        return $this->metadata;
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
        $writer->writeStringValue('billing_cycle', $this->getBillingCycle());
        $writer->writeStringValue('currency', $this->getCurrency());
        $writer->writeIntegerValue('interval_count', $this->getIntervalCount());
        $writer->writeCollectionOfObjectValues('line_items', $this->getLineItems());
        $writer->writeObjectValue('metadata', $this->getMetadata());
        $writer->writeStringValue('plan_id', $this->getPlanId());
        $writer->writeStringValue('plan_name', $this->getPlanName());
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
     * Sets the amount property value. The amount property
     * @param float|null $value Value to set for the amount property.
    */
    public function setAmount(?float $value): void {
        $this->amount = $value;
    }

    /**
     * Sets the billing_address property value. The billing_address property
     * @param BillingAddressBody|null $value Value to set for the billing_address property.
    */
    public function setBillingAddress(?BillingAddressBody $value): void {
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
     * Sets the currency property value. The currency property
     * @param string|null $value Value to set for the currency property.
    */
    public function setCurrency(?string $value): void {
        $this->currency = $value;
    }

    /**
     * Sets the interval_count property value. The interval_count property
     * @param int|null $value Value to set for the interval_count property.
    */
    public function setIntervalCount(?int $value): void {
        $this->interval_count = $value;
    }

    /**
     * Sets the line_items property value. The line_items property
     * @param array<TaxLineItemBody>|null $value Value to set for the line_items property.
    */
    public function setLineItems(?array $value): void {
        $this->line_items = $value;
    }

    /**
     * Sets the metadata property value. The metadata property
     * @param CalculateTaxBody_metadata|null $value Value to set for the metadata property.
    */
    public function setMetadata(?CalculateTaxBody_metadata $value): void {
        $this->metadata = $value;
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
