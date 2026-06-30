<?php

namespace Rixl\Sdk\Models\Billingv1;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class PaymentMethodIdResponse implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var string|null $payment_method_id The payment_method_id property
    */
    private ?string $payment_method_id = null;
    
    /**
     * @var string|null $setup_intent_id The setup_intent_id property
    */
    private ?string $setup_intent_id = null;
    
    /**
     * @var string|null $status The status property
    */
    private ?string $status = null;
    
    /**
     * Instantiates a new PaymentMethodIdResponse and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return PaymentMethodIdResponse
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): PaymentMethodIdResponse {
        return new PaymentMethodIdResponse();
    }

    /**
     * Gets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        return $this->additionalData;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'payment_method_id' => fn(ParseNode $n) => $o->setPaymentMethodId($n->getStringValue()),
            'setup_intent_id' => fn(ParseNode $n) => $o->setSetupIntentId($n->getStringValue()),
            'status' => fn(ParseNode $n) => $o->setStatus($n->getStringValue()),
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
     * Gets the setup_intent_id property value. The setup_intent_id property
     * @return string|null
    */
    public function getSetupIntentId(): ?string {
        return $this->setup_intent_id;
    }

    /**
     * Gets the status property value. The status property
     * @return string|null
    */
    public function getStatus(): ?string {
        return $this->status;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('payment_method_id', $this->getPaymentMethodId());
        $writer->writeStringValue('setup_intent_id', $this->getSetupIntentId());
        $writer->writeStringValue('status', $this->getStatus());
        $writer->writeAdditionalData($this->getAdditionalData());
    }

    /**
     * Sets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @param array<string,mixed> $value Value to set for the AdditionalData property.
    */
    public function setAdditionalData(?array $value): void {
        $this->additionalData = $value;
    }

    /**
     * Sets the payment_method_id property value. The payment_method_id property
     * @param string|null $value Value to set for the payment_method_id property.
    */
    public function setPaymentMethodId(?string $value): void {
        $this->payment_method_id = $value;
    }

    /**
     * Sets the setup_intent_id property value. The setup_intent_id property
     * @param string|null $value Value to set for the setup_intent_id property.
    */
    public function setSetupIntentId(?string $value): void {
        $this->setup_intent_id = $value;
    }

    /**
     * Sets the status property value. The status property
     * @param string|null $value Value to set for the status property.
    */
    public function setStatus(?string $value): void {
        $this->status = $value;
    }

}
