<?php

namespace Rixl\Sdk\Models\Billing\V1;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class Invoice implements Parsable 
{
    /**
     * @var string|null $amount The amount property
    */
    private ?string $amount = null;
    
    /**
     * @var DateTime|null $created_at The created_at property
    */
    private ?DateTime $created_at = null;
    
    /**
     * @var string|null $currency The currency property
    */
    private ?string $currency = null;
    
    /**
     * @var string|null $description The description property
    */
    private ?string $description = null;
    
    /**
     * @var DateTime|null $due_date The due_date property
    */
    private ?DateTime $due_date = null;
    
    /**
     * @var string|null $id The id property
    */
    private ?string $id = null;
    
    /**
     * @var string|null $org_id The org_id property
    */
    private ?string $org_id = null;
    
    /**
     * @var DateTime|null $paid_at The paid_at property
    */
    private ?DateTime $paid_at = null;
    
    /**
     * @var InvoiceStatus|null $status The status property
    */
    private ?InvoiceStatus $status = null;
    
    /**
     * @var string|null $subscription_id The subscription_id property
    */
    private ?string $subscription_id = null;
    
    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return Invoice
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): Invoice {
        return new Invoice();
    }

    /**
     * Gets the amount property value. The amount property
     * @return string|null
    */
    public function getAmount(): ?string {
        return $this->amount;
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
     * Gets the description property value. The description property
     * @return string|null
    */
    public function getDescription(): ?string {
        return $this->description;
    }

    /**
     * Gets the due_date property value. The due_date property
     * @return DateTime|null
    */
    public function getDueDate(): ?DateTime {
        return $this->due_date;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'amount' => fn(ParseNode $n) => $o->setAmount($n->getStringValue()),
            'created_at' => fn(ParseNode $n) => $o->setCreatedAt($n->getDateTimeValue()),
            'currency' => fn(ParseNode $n) => $o->setCurrency($n->getStringValue()),
            'description' => fn(ParseNode $n) => $o->setDescription($n->getStringValue()),
            'due_date' => fn(ParseNode $n) => $o->setDueDate($n->getDateTimeValue()),
            'id' => fn(ParseNode $n) => $o->setId($n->getStringValue()),
            'org_id' => fn(ParseNode $n) => $o->setOrgId($n->getStringValue()),
            'paid_at' => fn(ParseNode $n) => $o->setPaidAt($n->getDateTimeValue()),
            'status' => fn(ParseNode $n) => $o->setStatus($n->getEnumValue(InvoiceStatus::class)),
            'subscription_id' => fn(ParseNode $n) => $o->setSubscriptionId($n->getStringValue()),
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
     * Gets the paid_at property value. The paid_at property
     * @return DateTime|null
    */
    public function getPaidAt(): ?DateTime {
        return $this->paid_at;
    }

    /**
     * Gets the status property value. The status property
     * @return InvoiceStatus|null
    */
    public function getStatus(): ?InvoiceStatus {
        return $this->status;
    }

    /**
     * Gets the subscription_id property value. The subscription_id property
     * @return string|null
    */
    public function getSubscriptionId(): ?string {
        return $this->subscription_id;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('amount', $this->getAmount());
        $writer->writeDateTimeValue('created_at', $this->getCreatedAt());
        $writer->writeStringValue('currency', $this->getCurrency());
        $writer->writeStringValue('description', $this->getDescription());
        $writer->writeDateTimeValue('due_date', $this->getDueDate());
        $writer->writeStringValue('id', $this->getId());
        $writer->writeStringValue('org_id', $this->getOrgId());
        $writer->writeDateTimeValue('paid_at', $this->getPaidAt());
        $writer->writeEnumValue('status', $this->getStatus());
        $writer->writeStringValue('subscription_id', $this->getSubscriptionId());
    }

    /**
     * Sets the amount property value. The amount property
     * @param string|null $value Value to set for the amount property.
    */
    public function setAmount(?string $value): void {
        $this->amount = $value;
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
     * Sets the description property value. The description property
     * @param string|null $value Value to set for the description property.
    */
    public function setDescription(?string $value): void {
        $this->description = $value;
    }

    /**
     * Sets the due_date property value. The due_date property
     * @param DateTime|null $value Value to set for the due_date property.
    */
    public function setDueDate(?DateTime $value): void {
        $this->due_date = $value;
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
     * Sets the paid_at property value. The paid_at property
     * @param DateTime|null $value Value to set for the paid_at property.
    */
    public function setPaidAt(?DateTime $value): void {
        $this->paid_at = $value;
    }

    /**
     * Sets the status property value. The status property
     * @param InvoiceStatus|null $value Value to set for the status property.
    */
    public function setStatus(?InvoiceStatus $value): void {
        $this->status = $value;
    }

    /**
     * Sets the subscription_id property value. The subscription_id property
     * @param string|null $value Value to set for the subscription_id property.
    */
    public function setSubscriptionId(?string $value): void {
        $this->subscription_id = $value;
    }

}
