<?php

namespace Rixl\Sdk\Models\Billing\V1;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class ListPaymentMethodsResponse implements Parsable 
{
    /**
     * @var array<PaymentMethod>|null $payment_methods The payment_methods property
    */
    private ?array $payment_methods = null;
    
    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return ListPaymentMethodsResponse
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): ListPaymentMethodsResponse {
        return new ListPaymentMethodsResponse();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'payment_methods' => fn(ParseNode $n) => $o->setPaymentMethods($n->getCollectionOfObjectValues([PaymentMethod::class, 'createFromDiscriminatorValue'])),
        ];
    }

    /**
     * Gets the payment_methods property value. The payment_methods property
     * @return array<PaymentMethod>|null
    */
    public function getPaymentMethods(): ?array {
        return $this->payment_methods;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeCollectionOfObjectValues('payment_methods', $this->getPaymentMethods());
    }

    /**
     * Sets the payment_methods property value. The payment_methods property
     * @param array<PaymentMethod>|null $value Value to set for the payment_methods property.
    */
    public function setPaymentMethods(?array $value): void {
        $this->payment_methods = $value;
    }

}
