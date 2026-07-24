<?php

namespace Rixl\Sdk\Models\Billing\V1;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class UpsertPaymentMethodRequest implements Parsable 
{
    /**
     * @var string|null $org_id The org_id property
    */
    private ?string $org_id = null;
    
    /**
     * @var string|null $payment_method_id The payment_method_id property
    */
    private ?string $payment_method_id = null;
    
    /**
     * @var bool|null $set_as_default The set_as_default property
    */
    private ?bool $set_as_default = null;
    
    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return UpsertPaymentMethodRequest
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): UpsertPaymentMethodRequest {
        return new UpsertPaymentMethodRequest();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'org_id' => fn(ParseNode $n) => $o->setOrgId($n->getStringValue()),
            'payment_method_id' => fn(ParseNode $n) => $o->setPaymentMethodId($n->getStringValue()),
            'set_as_default' => fn(ParseNode $n) => $o->setSetAsDefault($n->getBooleanValue()),
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
     * Gets the set_as_default property value. The set_as_default property
     * @return bool|null
    */
    public function getSetAsDefault(): ?bool {
        return $this->set_as_default;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('org_id', $this->getOrgId());
        $writer->writeStringValue('payment_method_id', $this->getPaymentMethodId());
        $writer->writeBooleanValue('set_as_default', $this->getSetAsDefault());
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
     * Sets the set_as_default property value. The set_as_default property
     * @param bool|null $value Value to set for the set_as_default property.
    */
    public function setSetAsDefault(?bool $value): void {
        $this->set_as_default = $value;
    }

}
