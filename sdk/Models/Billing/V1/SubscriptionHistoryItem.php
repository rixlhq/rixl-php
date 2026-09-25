<?php

namespace Rixl\Sdk\Models\Billing\V1;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class SubscriptionHistoryItem implements Parsable 
{
    /**
     * @var bool|null $cancel_at_period_end The cancel_at_period_end property
    */
    private ?bool $cancel_at_period_end = null;
    
    /**
     * @var DateTime|null $created_at The created_at property
    */
    private ?DateTime $created_at = null;
    
    /**
     * @var string|null $currency The currency property
    */
    private ?string $currency = null;
    
    /**
     * @var DateTime|null $current_period_end The current_period_end property
    */
    private ?DateTime $current_period_end = null;
    
    /**
     * @var DateTime|null $end_date The end_date property
    */
    private ?DateTime $end_date = null;
    
    /**
     * @var string|null $id The id property
    */
    private ?string $id = null;
    
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
     * @var string|null $price The price property
    */
    private ?string $price = null;
    
    /**
     * @var DateTime|null $start_date The start_date property
    */
    private ?DateTime $start_date = null;
    
    /**
     * @var SubscriptionStatus|null $status The status property
    */
    private ?SubscriptionStatus $status = null;
    
    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return SubscriptionHistoryItem
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): SubscriptionHistoryItem {
        return new SubscriptionHistoryItem();
    }

    /**
     * Gets the cancel_at_period_end property value. The cancel_at_period_end property
     * @return bool|null
    */
    public function getCancelAtPeriodEnd(): ?bool {
        return $this->cancel_at_period_end;
    }

    /**
     * Gets the created_at property value. The created_at property
     * @return DateTime|null
    */
    public function getCreatedAt(): ?DateTime {
        return $this->created_at;
    }

    /**
     * Gets the currency property value. The currency property
     * @return string|null
    */
    public function getCurrency(): ?string {
        return $this->currency;
    }

    /**
     * Gets the current_period_end property value. The current_period_end property
     * @return DateTime|null
    */
    public function getCurrentPeriodEnd(): ?DateTime {
        return $this->current_period_end;
    }

    /**
     * Gets the end_date property value. The end_date property
     * @return DateTime|null
    */
    public function getEndDate(): ?DateTime {
        return $this->end_date;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'cancel_at_period_end' => fn(ParseNode $n) => $o->setCancelAtPeriodEnd($n->getBooleanValue()),
            'created_at' => fn(ParseNode $n) => $o->setCreatedAt($n->getDateTimeValue()),
            'currency' => fn(ParseNode $n) => $o->setCurrency($n->getStringValue()),
            'current_period_end' => fn(ParseNode $n) => $o->setCurrentPeriodEnd($n->getDateTimeValue()),
            'end_date' => fn(ParseNode $n) => $o->setEndDate($n->getDateTimeValue()),
            'id' => fn(ParseNode $n) => $o->setId($n->getStringValue()),
            'org_id' => fn(ParseNode $n) => $o->setOrgId($n->getStringValue()),
            'plan_id' => fn(ParseNode $n) => $o->setPlanId($n->getStringValue()),
            'plan_name' => fn(ParseNode $n) => $o->setPlanName($n->getStringValue()),
            'price' => fn(ParseNode $n) => $o->setPrice($n->getStringValue()),
            'start_date' => fn(ParseNode $n) => $o->setStartDate($n->getDateTimeValue()),
            'status' => fn(ParseNode $n) => $o->setStatus($n->getEnumValue(SubscriptionStatus::class)),
        ];
    }

    /**
     * Gets the id property value. The id property
     * @return string|null
    */
    public function getId(): ?string {
        return $this->id;
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
     * Gets the price property value. The price property
     * @return string|null
    */
    public function getPrice(): ?string {
        return $this->price;
    }

    /**
     * Gets the start_date property value. The start_date property
     * @return DateTime|null
    */
    public function getStartDate(): ?DateTime {
        return $this->start_date;
    }

    /**
     * Gets the status property value. The status property
     * @return SubscriptionStatus|null
    */
    public function getStatus(): ?SubscriptionStatus {
        return $this->status;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeBooleanValue('cancel_at_period_end', $this->getCancelAtPeriodEnd());
        $writer->writeDateTimeValue('created_at', $this->getCreatedAt());
        $writer->writeStringValue('currency', $this->getCurrency());
        $writer->writeDateTimeValue('current_period_end', $this->getCurrentPeriodEnd());
        $writer->writeDateTimeValue('end_date', $this->getEndDate());
        $writer->writeStringValue('id', $this->getId());
        $writer->writeStringValue('org_id', $this->getOrgId());
        $writer->writeStringValue('plan_id', $this->getPlanId());
        $writer->writeStringValue('plan_name', $this->getPlanName());
        $writer->writeStringValue('price', $this->getPrice());
        $writer->writeDateTimeValue('start_date', $this->getStartDate());
        $writer->writeEnumValue('status', $this->getStatus());
    }

    /**
     * Sets the cancel_at_period_end property value. The cancel_at_period_end property
     * @param bool|null $value Value to set for the cancel_at_period_end property.
    */
    public function setCancelAtPeriodEnd(?bool $value): void {
        $this->cancel_at_period_end = $value;
    }

    /**
     * Sets the created_at property value. The created_at property
     * @param DateTime|null $value Value to set for the created_at property.
    */
    public function setCreatedAt(?DateTime $value): void {
        $this->created_at = $value;
    }

    /**
     * Sets the currency property value. The currency property
     * @param string|null $value Value to set for the currency property.
    */
    public function setCurrency(?string $value): void {
        $this->currency = $value;
    }

    /**
     * Sets the current_period_end property value. The current_period_end property
     * @param DateTime|null $value Value to set for the current_period_end property.
    */
    public function setCurrentPeriodEnd(?DateTime $value): void {
        $this->current_period_end = $value;
    }

    /**
     * Sets the end_date property value. The end_date property
     * @param DateTime|null $value Value to set for the end_date property.
    */
    public function setEndDate(?DateTime $value): void {
        $this->end_date = $value;
    }

    /**
     * Sets the id property value. The id property
     * @param string|null $value Value to set for the id property.
    */
    public function setId(?string $value): void {
        $this->id = $value;
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

    /**
     * Sets the price property value. The price property
     * @param string|null $value Value to set for the price property.
    */
    public function setPrice(?string $value): void {
        $this->price = $value;
    }

    /**
     * Sets the start_date property value. The start_date property
     * @param DateTime|null $value Value to set for the start_date property.
    */
    public function setStartDate(?DateTime $value): void {
        $this->start_date = $value;
    }

    /**
     * Sets the status property value. The status property
     * @param SubscriptionStatus|null $value Value to set for the status property.
    */
    public function setStatus(?SubscriptionStatus $value): void {
        $this->status = $value;
    }

}
