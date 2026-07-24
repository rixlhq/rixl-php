<?php

namespace Rixl\Sdk\Models\Billing\V1;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class PaymentMethodIdResponse implements Parsable 
{
    /**
     * @var string|null $payment_method_id The payment_method_id property
    */
    private ?string $payment_method_id = null;
    
    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return PaymentMethodIdResponse
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): PaymentMethodIdResponse {
        return new PaymentMethodIdResponse();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'payment_method_id' => fn(ParseNode $n) => $o->setPaymentMethodId($n->getStringValue()),
        ];
    }

    /**
     * Gets the payment_method_id property value. The payment_method_id property
     * @return string|null
    */
    public function getPaymentMethodId(): ?string {
        return $this->payment_method_id;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('payment_method_id', $this->getPaymentMethodId());
    }

    /**
     * Sets the payment_method_id property value. The payment_method_id property
     * @param string|null $value Value to set for the payment_method_id property.
    */
    public function setPaymentMethodId(?string $value): void {
        $this->payment_method_id = $value;
    }

}
