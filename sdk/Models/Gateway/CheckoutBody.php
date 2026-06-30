<?php

namespace Rixl\Sdk\Models\Gateway;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

/**
 * Checkout request
*/
class CheckoutBody implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var string|null $cancel_url The cancel_url property
    */
    private ?string $cancel_url = null;
    
    /**
     * @var string|null $stripe_price_id The stripe_price_id property
    */
    private ?string $stripe_price_id = null;
    
    /**
     * @var string|null $success_url The success_url property
    */
    private ?string $success_url = null;
    
    /**
     * Instantiates a new CheckoutBody and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return CheckoutBody
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): CheckoutBody {
        return new CheckoutBody();
    }

    /**
     * Gets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        return $this->additionalData;
    }

    /**
     * Gets the cancel_url property value. The cancel_url property
     * @return string|null
    */
    public function getCancelUrl(): ?string {
        return $this->cancel_url;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'cancel_url' => fn(ParseNode $n) => $o->setCancelUrl($n->getStringValue()),
            'stripe_price_id' => fn(ParseNode $n) => $o->setStripePriceId($n->getStringValue()),
            'success_url' => fn(ParseNode $n) => $o->setSuccessUrl($n->getStringValue()),
        ];
    }

    /**
     * Gets the stripe_price_id property value. The stripe_price_id property
     * @return string|null
    */
    public function getStripePriceId(): ?string {
        return $this->stripe_price_id;
    }

    /**
     * Gets the success_url property value. The success_url property
     * @return string|null
    */
    public function getSuccessUrl(): ?string {
        return $this->success_url;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('cancel_url', $this->getCancelUrl());
        $writer->writeStringValue('stripe_price_id', $this->getStripePriceId());
        $writer->writeStringValue('success_url', $this->getSuccessUrl());
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
     * Sets the cancel_url property value. The cancel_url property
     * @param string|null $value Value to set for the cancel_url property.
    */
    public function setCancelUrl(?string $value): void {
        $this->cancel_url = $value;
    }

    /**
     * Sets the stripe_price_id property value. The stripe_price_id property
     * @param string|null $value Value to set for the stripe_price_id property.
    */
    public function setStripePriceId(?string $value): void {
        $this->stripe_price_id = $value;
    }

    /**
     * Sets the success_url property value. The success_url property
     * @param string|null $value Value to set for the success_url property.
    */
    public function setSuccessUrl(?string $value): void {
        $this->success_url = $value;
    }

}
