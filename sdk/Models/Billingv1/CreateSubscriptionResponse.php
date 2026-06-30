<?php

namespace Rixl\Sdk\Models\Billingv1;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class CreateSubscriptionResponse implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var bool|null $cancel_at_period_end The cancel_at_period_end property
    */
    private ?bool $cancel_at_period_end = null;
    
    /**
     * @var string|null $current_period_end The current_period_end property
    */
    private ?string $current_period_end = null;
    
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
     * @var string|null $status The status property
    */
    private ?string $status = null;
    
    /**
     * @var string|null $stripe_customer_id The stripe_customer_id property
    */
    private ?string $stripe_customer_id = null;
    
    /**
     * @var string|null $stripe_subscription_id The stripe_subscription_id property
    */
    private ?string $stripe_subscription_id = null;
    
    /**
     * Instantiates a new CreateSubscriptionResponse and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return CreateSubscriptionResponse
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): CreateSubscriptionResponse {
        return new CreateSubscriptionResponse();
    }

    /**
     * Gets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        return $this->additionalData;
    }

    /**
     * Gets the cancel_at_period_end property value. The cancel_at_period_end property
     * @return bool|null
    */
    public function getCancelAtPeriodEnd(): ?bool {
        return $this->cancel_at_period_end;
    }

    /**
     * Gets the current_period_end property value. The current_period_end property
     * @return string|null
    */
    public function getCurrentPeriodEnd(): ?string {
        return $this->current_period_end;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'cancel_at_period_end' => fn(ParseNode $n) => $o->setCancelAtPeriodEnd($n->getBooleanValue()),
            'current_period_end' => fn(ParseNode $n) => $o->setCurrentPeriodEnd($n->getStringValue()),
            'id' => fn(ParseNode $n) => $o->setId($n->getStringValue()),
            'org_id' => fn(ParseNode $n) => $o->setOrgId($n->getStringValue()),
            'plan_id' => fn(ParseNode $n) => $o->setPlanId($n->getStringValue()),
            'status' => fn(ParseNode $n) => $o->setStatus($n->getStringValue()),
            'stripe_customer_id' => fn(ParseNode $n) => $o->setStripeCustomerId($n->getStringValue()),
            'stripe_subscription_id' => fn(ParseNode $n) => $o->setStripeSubscriptionId($n->getStringValue()),
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
     * Gets the status property value. The status property
     * @return string|null
    */
    public function getStatus(): ?string {
        return $this->status;
    }

    /**
     * Gets the stripe_customer_id property value. The stripe_customer_id property
     * @return string|null
    */
    public function getStripeCustomerId(): ?string {
        return $this->stripe_customer_id;
    }

    /**
     * Gets the stripe_subscription_id property value. The stripe_subscription_id property
     * @return string|null
    */
    public function getStripeSubscriptionId(): ?string {
        return $this->stripe_subscription_id;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeBooleanValue('cancel_at_period_end', $this->getCancelAtPeriodEnd());
        $writer->writeStringValue('current_period_end', $this->getCurrentPeriodEnd());
        $writer->writeStringValue('id', $this->getId());
        $writer->writeStringValue('org_id', $this->getOrgId());
        $writer->writeStringValue('plan_id', $this->getPlanId());
        $writer->writeStringValue('status', $this->getStatus());
        $writer->writeStringValue('stripe_customer_id', $this->getStripeCustomerId());
        $writer->writeStringValue('stripe_subscription_id', $this->getStripeSubscriptionId());
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
     * Sets the cancel_at_period_end property value. The cancel_at_period_end property
     * @param bool|null $value Value to set for the cancel_at_period_end property.
    */
    public function setCancelAtPeriodEnd(?bool $value): void {
        $this->cancel_at_period_end = $value;
    }

    /**
     * Sets the current_period_end property value. The current_period_end property
     * @param string|null $value Value to set for the current_period_end property.
    */
    public function setCurrentPeriodEnd(?string $value): void {
        $this->current_period_end = $value;
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
     * Sets the status property value. The status property
     * @param string|null $value Value to set for the status property.
    */
    public function setStatus(?string $value): void {
        $this->status = $value;
    }

    /**
     * Sets the stripe_customer_id property value. The stripe_customer_id property
     * @param string|null $value Value to set for the stripe_customer_id property.
    */
    public function setStripeCustomerId(?string $value): void {
        $this->stripe_customer_id = $value;
    }

    /**
     * Sets the stripe_subscription_id property value. The stripe_subscription_id property
     * @param string|null $value Value to set for the stripe_subscription_id property.
    */
    public function setStripeSubscriptionId(?string $value): void {
        $this->stripe_subscription_id = $value;
    }

}
