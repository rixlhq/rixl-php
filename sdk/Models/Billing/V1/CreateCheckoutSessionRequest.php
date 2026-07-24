<?php

namespace Rixl\Sdk\Models\Billing\V1;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class CreateCheckoutSessionRequest implements Parsable 
{
    /**
     * @var string|null $cancel_url The cancel_url property
    */
    private ?string $cancel_url = null;
    
    /**
     * @var string|null $org_id The org_id property
    */
    private ?string $org_id = null;
    
    /**
     * @var string|null $stripe_price_id The stripe_price_id property
    */
    private ?string $stripe_price_id = null;
    
    /**
     * @var string|null $success_url The success_url property
    */
    private ?string $success_url = null;
    
    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return CreateCheckoutSessionRequest
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): CreateCheckoutSessionRequest {
        return new CreateCheckoutSessionRequest();
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
            'org_id' => fn(ParseNode $n) => $o->setOrgId($n->getStringValue()),
            'stripe_price_id' => fn(ParseNode $n) => $o->setStripePriceId($n->getStringValue()),
            'success_url' => fn(ParseNode $n) => $o->setSuccessUrl($n->getStringValue()),
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
        $writer->writeStringValue('org_id', $this->getOrgId());
        $writer->writeStringValue('stripe_price_id', $this->getStripePriceId());
        $writer->writeStringValue('success_url', $this->getSuccessUrl());
    }

    /**
     * Sets the cancel_url property value. The cancel_url property
     * @param string|null $value Value to set for the cancel_url property.
    */
    public function setCancelUrl(?string $value): void {
        $this->cancel_url = $value;
    }

    /**
     * Sets the org_id property value. The org_id property
     * @param string|null $value Value to set for the org_id property.
    */
    public function setOrgId(?string $value): void {
        $this->org_id = $value;
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
