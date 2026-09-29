<?php

namespace Rixl\Sdk\Models\Billing\V1;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class Subscription implements Parsable 
{
    /**
     * @var bool|null $cancel_at_period_end The cancel_at_period_end property
    */
    private ?bool $cancel_at_period_end = null;
    
    /**
     * @var string|null $currency The currency property
    */
    private ?string $currency = null;
    
    /**
     * @var DateTime|null $current_period_end The current_period_end property
    */
    private ?DateTime $current_period_end = null;
    
    /**
     * @var bool|null $expiring_soon The expiring_soon property
    */
    private ?bool $expiring_soon = null;
    
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
     * @var PlanType|null $plan_type The plan_type property
    */
    private ?PlanType $plan_type = null;
    
    /**
     * @var string|null $price The price property
    */
    private ?string $price = null;
    
    /**
     * @var SubscriptionStatus|null $status The status property
    */
    private ?SubscriptionStatus $status = null;
    
    /**
     * @var bool|null $trials_ending_soon The trials_ending_soon property
    */
    private ?bool $trials_ending_soon = null;
    
    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return Subscription
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): Subscription {
        return new Subscription();
    }

    /**
     * Gets the cancel_at_period_end property value. The cancel_at_period_end property
     * @return bool|null
    */
    public function getCancelAtPeriodEnd(): ?bool {
        return $this->cancel_at_period_end;
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
     * Gets the expiring_soon property value. The expiring_soon property
     * @return bool|null
    */
    public function getExpiringSoon(): ?bool {
        return $this->expiring_soon;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'cancel_at_period_end' => fn(ParseNode $n) => $o->setCancelAtPeriodEnd($n->getBooleanValue()),
            'currency' => fn(ParseNode $n) => $o->setCurrency($n->getStringValue()),
            'current_period_end' => fn(ParseNode $n) => $o->setCurrentPeriodEnd($n->getDateTimeValue()),
            'expiring_soon' => fn(ParseNode $n) => $o->setExpiringSoon($n->getBooleanValue()),
            'id' => fn(ParseNode $n) => $o->setId($n->getStringValue()),
            'org_id' => fn(ParseNode $n) => $o->setOrgId($n->getStringValue()),
            'plan_id' => fn(ParseNode $n) => $o->setPlanId($n->getStringValue()),
            'plan_name' => fn(ParseNode $n) => $o->setPlanName($n->getStringValue()),
            'plan_type' => fn(ParseNode $n) => $o->setPlanType($n->getEnumValue(PlanType::class)),
            'price' => fn(ParseNode $n) => $o->setPrice($n->getStringValue()),
            'status' => fn(ParseNode $n) => $o->setStatus($n->getEnumValue(SubscriptionStatus::class)),
            'trials_ending_soon' => fn(ParseNode $n) => $o->setTrialsEndingSoon($n->getBooleanValue()),
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
     * Gets the plan_type property value. The plan_type property
     * @return PlanType|null
    */
    public function getPlanType(): ?PlanType {
        return $this->plan_type;
    }

    /**
     * Gets the price property value. The price property
     * @return string|null
    */
    public function getPrice(): ?string {
        return $this->price;
    }

    /**
     * Gets the status property value. The status property
     * @return SubscriptionStatus|null
    */
    public function getStatus(): ?SubscriptionStatus {
        return $this->status;
    }

    /**
     * Gets the trials_ending_soon property value. The trials_ending_soon property
     * @return bool|null
    */
    public function getTrialsEndingSoon(): ?bool {
        return $this->trials_ending_soon;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeBooleanValue('cancel_at_period_end', $this->getCancelAtPeriodEnd());
        $writer->writeStringValue('currency', $this->getCurrency());
        $writer->writeDateTimeValue('current_period_end', $this->getCurrentPeriodEnd());
        $writer->writeBooleanValue('expiring_soon', $this->getExpiringSoon());
        $writer->writeStringValue('id', $this->getId());
        $writer->writeStringValue('org_id', $this->getOrgId());
        $writer->writeStringValue('plan_id', $this->getPlanId());
        $writer->writeStringValue('plan_name', $this->getPlanName());
        $writer->writeEnumValue('plan_type', $this->getPlanType());
        $writer->writeStringValue('price', $this->getPrice());
        $writer->writeEnumValue('status', $this->getStatus());
        $writer->writeBooleanValue('trials_ending_soon', $this->getTrialsEndingSoon());
    }

    /**
     * Sets the cancel_at_period_end property value. The cancel_at_period_end property
     * @param bool|null $value Value to set for the cancel_at_period_end property.
    */
    public function setCancelAtPeriodEnd(?bool $value): void {
        $this->cancel_at_period_end = $value;
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
     * Sets the expiring_soon property value. The expiring_soon property
     * @param bool|null $value Value to set for the expiring_soon property.
    */
    public function setExpiringSoon(?bool $value): void {
        $this->expiring_soon = $value;
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
     * Sets the plan_type property value. The plan_type property
     * @param PlanType|null $value Value to set for the plan_type property.
    */
    public function setPlanType(?PlanType $value): void {
        $this->plan_type = $value;
    }

    /**
     * Sets the price property value. The price property
     * @param string|null $value Value to set for the price property.
    */
    public function setPrice(?string $value): void {
        $this->price = $value;
    }

    /**
     * Sets the status property value. The status property
     * @param SubscriptionStatus|null $value Value to set for the status property.
    */
    public function setStatus(?SubscriptionStatus $value): void {
        $this->status = $value;
    }

    /**
     * Sets the trials_ending_soon property value. The trials_ending_soon property
     * @param bool|null $value Value to set for the trials_ending_soon property.
    */
    public function setTrialsEndingSoon(?bool $value): void {
        $this->trials_ending_soon = $value;
    }

}
