<?php

namespace Rixl\Sdk\Models\Billing\V1;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class CreateSubscriptionRequest implements Parsable 
{
    /**
     * @var BillingAddress|null $billingAddress The billingAddress property
    */
    private ?BillingAddress $billingAddress = null;
    
    /**
     * @var string|null $orgId The orgId property
    */
    private ?string $orgId = null;
    
    /**
     * @var string|null $paymentMethodId The paymentMethodId property
    */
    private ?string $paymentMethodId = null;
    
    /**
     * @var string|null $stripePriceId The stripePriceId property
    */
    private ?string $stripePriceId = null;
    
    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return CreateSubscriptionRequest
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): CreateSubscriptionRequest {
        return new CreateSubscriptionRequest();
    }

    /**
     * Gets the billingAddress property value. The billingAddress property
     * @return BillingAddress|null
    */
    public function getBillingAddress(): ?BillingAddress {
        return $this->billingAddress;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'billingAddress' => fn(ParseNode $n) => $o->setBillingAddress($n->getObjectValue([BillingAddress::class, 'createFromDiscriminatorValue'])),
            'orgId' => fn(ParseNode $n) => $o->setOrgId($n->getStringValue()),
            'paymentMethodId' => fn(ParseNode $n) => $o->setPaymentMethodId($n->getStringValue()),
            'stripePriceId' => fn(ParseNode $n) => $o->setStripePriceId($n->getStringValue()),
        ];
    }

    /**
     * Gets the orgId property value. The orgId property
     * @return string|null
    */
    public function getOrgId(): ?string {
        return $this->orgId;
    }

    /**
     * Gets the paymentMethodId property value. The paymentMethodId property
     * @return string|null
    */
    public function getPaymentMethodId(): ?string {
        return $this->paymentMethodId;
    }

    /**
     * Gets the stripePriceId property value. The stripePriceId property
     * @return string|null
    */
    public function getStripePriceId(): ?string {
        return $this->stripePriceId;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeObjectValue('billingAddress', $this->getBillingAddress());
        $writer->writeStringValue('orgId', $this->getOrgId());
        $writer->writeStringValue('paymentMethodId', $this->getPaymentMethodId());
        $writer->writeStringValue('stripePriceId', $this->getStripePriceId());
    }

    /**
     * Sets the billingAddress property value. The billingAddress property
     * @param BillingAddress|null $value Value to set for the billingAddress property.
    */
    public function setBillingAddress(?BillingAddress $value): void {
        $this->billingAddress = $value;
    }

    /**
     * Sets the orgId property value. The orgId property
     * @param string|null $value Value to set for the orgId property.
    */
    public function setOrgId(?string $value): void {
        $this->orgId = $value;
    }

    /**
     * Sets the paymentMethodId property value. The paymentMethodId property
     * @param string|null $value Value to set for the paymentMethodId property.
    */
    public function setPaymentMethodId(?string $value): void {
        $this->paymentMethodId = $value;
    }

    /**
     * Sets the stripePriceId property value. The stripePriceId property
     * @param string|null $value Value to set for the stripePriceId property.
    */
    public function setStripePriceId(?string $value): void {
        $this->stripePriceId = $value;
    }

}
