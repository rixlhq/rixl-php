<?php

namespace Rixl\Sdk\Models\Billing\V1;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class CalculateGenericTaxRequest implements Parsable 
{
    /**
     * @var BillingAddress|null $billing_address The billing_address property
    */
    private ?BillingAddress $billing_address = null;
    
    /**
     * @var string|null $currency The currency property
    */
    private ?string $currency = null;
    
    /**
     * @var array<TaxLineItem>|null $line_items The line_items property
    */
    private ?array $line_items = null;
    
    /**
     * @var string|null $org_id The org_id property
    */
    private ?string $org_id = null;
    
    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return CalculateGenericTaxRequest
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): CalculateGenericTaxRequest {
        return new CalculateGenericTaxRequest();
    }

    /**
     * Gets the billing_address property value. The billing_address property
     * @return BillingAddress|null
    */
    public function getBillingAddress(): ?BillingAddress {
        return $this->billing_address;
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
            'billing_address' => fn(ParseNode $n) => $o->setBillingAddress($n->getObjectValue([BillingAddress::class, 'createFromDiscriminatorValue'])),
            'currency' => fn(ParseNode $n) => $o->setCurrency($n->getStringValue()),
            'line_items' => fn(ParseNode $n) => $o->setLineItems($n->getCollectionOfObjectValues([TaxLineItem::class, 'createFromDiscriminatorValue'])),
            'org_id' => fn(ParseNode $n) => $o->setOrgId($n->getStringValue()),
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
     * Gets the org_id property value. The org_id property
     * @return string|null
    */
    public function getOrgId(): ?string {
        return $this->org_id;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeObjectValue('billing_address', $this->getBillingAddress());
        $writer->writeStringValue('currency', $this->getCurrency());
        $writer->writeCollectionOfObjectValues('line_items', $this->getLineItems());
        $writer->writeStringValue('org_id', $this->getOrgId());
    }

    /**
     * Sets the billing_address property value. The billing_address property
     * @param BillingAddress|null $value Value to set for the billing_address property.
    */
    public function setBillingAddress(?BillingAddress $value): void {
        $this->billing_address = $value;
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
     * Sets the org_id property value. The org_id property
     * @param string|null $value Value to set for the org_id property.
    */
    public function setOrgId(?string $value): void {
        $this->org_id = $value;
    }

}
