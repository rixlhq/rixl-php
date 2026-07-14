<?php

namespace Rixl\Sdk\Models\Billing\V1;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class CalculateGenericTaxRequest implements Parsable 
{
    /**
     * @var BillingAddress|null $billingAddress The billingAddress property
    */
    private ?BillingAddress $billingAddress = null;
    
    /**
     * @var string|null $currency The currency property
    */
    private ?string $currency = null;
    
    /**
     * @var array<TaxLineItem>|null $lineItems The lineItems property
    */
    private ?array $lineItems = null;
    
    /**
     * @var string|null $orgId The orgId property
    */
    private ?string $orgId = null;
    
    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return CalculateGenericTaxRequest
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): CalculateGenericTaxRequest {
        return new CalculateGenericTaxRequest();
    }

    /**
     * Gets the billingAddress property value. The billingAddress property
     * @return BillingAddress|null
    */
    public function getBillingAddress(): ?BillingAddress {
        return $this->billingAddress;
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
            'billingAddress' => fn(ParseNode $n) => $o->setBillingAddress($n->getObjectValue([BillingAddress::class, 'createFromDiscriminatorValue'])),
            'currency' => fn(ParseNode $n) => $o->setCurrency($n->getStringValue()),
            'lineItems' => fn(ParseNode $n) => $o->setLineItems($n->getCollectionOfObjectValues([TaxLineItem::class, 'createFromDiscriminatorValue'])),
            'orgId' => fn(ParseNode $n) => $o->setOrgId($n->getStringValue()),
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
     * Gets the orgId property value. The orgId property
     * @return string|null
    */
    public function getOrgId(): ?string {
        return $this->orgId;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeObjectValue('billingAddress', $this->getBillingAddress());
        $writer->writeStringValue('currency', $this->getCurrency());
        $writer->writeCollectionOfObjectValues('lineItems', $this->getLineItems());
        $writer->writeStringValue('orgId', $this->getOrgId());
    }

    /**
     * Sets the billingAddress property value. The billingAddress property
     * @param BillingAddress|null $value Value to set for the billingAddress property.
    */
    public function setBillingAddress(?BillingAddress $value): void {
        $this->billingAddress = $value;
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
     * Sets the orgId property value. The orgId property
     * @param string|null $value Value to set for the orgId property.
    */
    public function setOrgId(?string $value): void {
        $this->orgId = $value;
    }

}
