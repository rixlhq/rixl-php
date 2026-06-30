<?php

namespace Rixl\Sdk\Models\Gateway;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

/**
 * Subscription request
*/
class CreateSubscriptionBody implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var BillingAddressBody|null $billing_address The billing_address property
    */
    private ?BillingAddressBody $billing_address = null;
    
    /**
     * @var string|null $payment_method_id The payment_method_id property
    */
    private ?string $payment_method_id = null;
    
    /**
     * @var string|null $stripe_price_id The stripe_price_id property
    */
    private ?string $stripe_price_id = null;
    
    /**
     * Instantiates a new CreateSubscriptionBody and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return CreateSubscriptionBody
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): CreateSubscriptionBody {
        return new CreateSubscriptionBody();
    }

    /**
     * Gets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        return $this->additionalData;
    }

    /**
     * Gets the billing_address property value. The billing_address property
     * @return BillingAddressBody|null
    */
    public function getBillingAddress(): ?BillingAddressBody {
        return $this->billing_address;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'billing_address' => fn(ParseNode $n) => $o->setBillingAddress($n->getObjectValue([BillingAddressBody::class, 'createFromDiscriminatorValue'])),
            'payment_method_id' => fn(ParseNode $n) => $o->setPaymentMethodId($n->getStringValue()),
            'stripe_price_id' => fn(ParseNode $n) => $o->setStripePriceId($n->getStringValue()),
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
        $writer->writeStringValue('payment_method_id', $this->getPaymentMethodId());
        $writer->writeStringValue('stripe_price_id', $this->getStripePriceId());
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
     * Sets the billing_address property value. The billing_address property
     * @param BillingAddressBody|null $value Value to set for the billing_address property.
    */
    public function setBillingAddress(?BillingAddressBody $value): void {
        $this->billing_address = $value;
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
