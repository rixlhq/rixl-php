<?php

namespace Rixl\Sdk\Models\Billing\V1;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class UpsertPaymentMethodRequest implements Parsable 
{
    /**
     * @var string|null $orgId The orgId property
    */
    private ?string $orgId = null;
    
    /**
     * @var string|null $paymentMethodId The paymentMethodId property
    */
    private ?string $paymentMethodId = null;
    
    /**
     * @var bool|null $setAsDefault The setAsDefault property
    */
    private ?bool $setAsDefault = null;
    
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
            'orgId' => fn(ParseNode $n) => $o->setOrgId($n->getStringValue()),
            'paymentMethodId' => fn(ParseNode $n) => $o->setPaymentMethodId($n->getStringValue()),
            'setAsDefault' => fn(ParseNode $n) => $o->setSetAsDefault($n->getBooleanValue()),
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
     * Gets the setAsDefault property value. The setAsDefault property
     * @return bool|null
    */
    public function getSetAsDefault(): ?bool {
        return $this->setAsDefault;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('orgId', $this->getOrgId());
        $writer->writeStringValue('paymentMethodId', $this->getPaymentMethodId());
        $writer->writeBooleanValue('setAsDefault', $this->getSetAsDefault());
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
     * Sets the setAsDefault property value. The setAsDefault property
     * @param bool|null $value Value to set for the setAsDefault property.
    */
    public function setSetAsDefault(?bool $value): void {
        $this->setAsDefault = $value;
    }

}
