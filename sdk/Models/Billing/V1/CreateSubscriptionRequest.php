<?php

namespace Rixl\Sdk\Models\Billing\V1;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class CreateSubscriptionRequest implements Parsable 
{
    /**
     * @var BillingAddress|null $billing_address The billing_address property
    */
    private ?BillingAddress $billing_address = null;
    
    /**
     * @var string|null $org_id The org_id property
    */
    private ?string $org_id = null;
    
    /**
     * @var string|null $payment_method_id The payment_method_id property
    */
    private ?string $payment_method_id = null;
    
    /**
     * @var string|null $stripe_price_id The stripe_price_id property
    */
    private ?string $stripe_price_id = null;
    
    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return CreateSubscriptionRequest
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): CreateSubscriptionRequest {
        return new CreateSubscriptionRequest();
    }

    /**
     * Gets the billing_address property value. The billing_address property
     * @return BillingAddress|null
    */
    public function getBillingAddress(): ?BillingAddress {
        return $this->billing_address;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'billing_address' => fn(ParseNode $n) => $o->setBillingAddress($n->getObjectValue([BillingAddress::class, 'createFromDiscriminatorValue'])),
            'org_id' => fn(ParseNode $n) => $o->setOrgId($n->getStringValue()),
            'payment_method_id' => fn(ParseNode $n) => $o->setPaymentMethodId($n->getStringValue()),
            'stripe_price_id' => fn(ParseNode $n) => $o->setStripePriceId($n->getStringValue()),
        ];
    }

    /**
     * Gets the org_id property value. The org_id property
     * @return string|null
    */
    public function getOrgId(): ?string {
        return $this->org_id;
    }

    /**
     * Gets the payment_method_id property value. The payment_method_id property
     * @return string|null
    */
    public function getPaymentMethodId(): ?string {
        return $this->payment_method_id;
    }

    /**
     * Gets the stripe_price_id property value. The stripe_price_id property
     * @return string|null
    */
    public function getStripePriceId(): ?string {
        return $this->stripe_price_id;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeObjectValue('billing_address', $this->getBillingAddress());
        $writer->writeStringValue('org_id', $this->getOrgId());
        $writer->writeStringValue('payment_method_id', $this->getPaymentMethodId());
        $writer->writeStringValue('stripe_price_id', $this->getStripePriceId());
    }

    /**
     * Sets the billing_address property value. The billing_address property
     * @param BillingAddress|null $value Value to set for the billing_address property.
    */
    public function setBillingAddress(?BillingAddress $value): void {
        $this->billing_address = $value;
    }

    /**
     * Sets the org_id property value. The org_id property
     * @param string|null $value Value to set for the org_id property.
    */
    public function setOrgId(?string $value): void {
        $this->org_id = $value;
    }

    /**
     * Sets the payment_method_id property value. The payment_method_id property
     * @param string|null $value Value to set for the payment_method_id property.
    */
    public function setPaymentMethodId(?string $value): void {
        $this->payment_method_id = $value;
    }

    /**
     * Sets the stripe_price_id property value. The stripe_price_id property
     * @param string|null $value Value to set for the stripe_price_id property.
    */
    public function setStripePriceId(?string $value): void {
        $this->stripe_price_id = $value;
    }

}
