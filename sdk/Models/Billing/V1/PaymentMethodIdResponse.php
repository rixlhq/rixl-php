<?php

namespace Rixl\Sdk\Models\Billing\V1;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class PaymentMethodIdResponse implements Parsable 
{
    /**
     * @var string|null $paymentMethodId The paymentMethodId property
    */
    private ?string $paymentMethodId = null;
    
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
            'paymentMethodId' => fn(ParseNode $n) => $o->setPaymentMethodId($n->getStringValue()),
        ];
    }

    /**
     * Gets the paymentMethodId property value. The paymentMethodId property
     * @return string|null
    */
    public function getPaymentMethodId(): ?string {
        return $this->paymentMethodId;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('paymentMethodId', $this->getPaymentMethodId());
    }

    /**
     * Sets the paymentMethodId property value. The paymentMethodId property
     * @param string|null $value Value to set for the paymentMethodId property.
    */
    public function setPaymentMethodId(?string $value): void {
        $this->paymentMethodId = $value;
    }

}
