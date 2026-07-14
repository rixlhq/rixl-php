<?php

namespace Rixl\Sdk\Models\Billing\V1;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class CreateCheckoutSessionRequest implements Parsable 
{
    /**
     * @var string|null $cancelUrl The cancelUrl property
    */
    private ?string $cancelUrl = null;
    
    /**
     * @var string|null $orgId The orgId property
    */
    private ?string $orgId = null;
    
    /**
     * @var string|null $stripePriceId The stripePriceId property
    */
    private ?string $stripePriceId = null;
    
    /**
     * @var string|null $successUrl The successUrl property
    */
    private ?string $successUrl = null;
    
    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return CreateCheckoutSessionRequest
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): CreateCheckoutSessionRequest {
        return new CreateCheckoutSessionRequest();
    }

    /**
     * Gets the cancelUrl property value. The cancelUrl property
     * @return string|null
    */
    public function getCancelUrl(): ?string {
        return $this->cancelUrl;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'cancelUrl' => fn(ParseNode $n) => $o->setCancelUrl($n->getStringValue()),
            'orgId' => fn(ParseNode $n) => $o->setOrgId($n->getStringValue()),
            'stripePriceId' => fn(ParseNode $n) => $o->setStripePriceId($n->getStringValue()),
            'successUrl' => fn(ParseNode $n) => $o->setSuccessUrl($n->getStringValue()),
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
     * Gets the stripePriceId property value. The stripePriceId property
     * @return string|null
    */
    public function getStripePriceId(): ?string {
        return $this->stripePriceId;
    }

    /**
     * Gets the successUrl property value. The successUrl property
     * @return string|null
    */
    public function getSuccessUrl(): ?string {
        return $this->successUrl;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('cancelUrl', $this->getCancelUrl());
        $writer->writeStringValue('orgId', $this->getOrgId());
        $writer->writeStringValue('stripePriceId', $this->getStripePriceId());
        $writer->writeStringValue('successUrl', $this->getSuccessUrl());
    }

    /**
     * Sets the cancelUrl property value. The cancelUrl property
     * @param string|null $value Value to set for the cancelUrl property.
    */
    public function setCancelUrl(?string $value): void {
        $this->cancelUrl = $value;
    }

    /**
     * Sets the orgId property value. The orgId property
     * @param string|null $value Value to set for the orgId property.
    */
    public function setOrgId(?string $value): void {
        $this->orgId = $value;
    }

    /**
     * Sets the stripePriceId property value. The stripePriceId property
     * @param string|null $value Value to set for the stripePriceId property.
    */
    public function setStripePriceId(?string $value): void {
        $this->stripePriceId = $value;
    }

    /**
     * Sets the successUrl property value. The successUrl property
     * @param string|null $value Value to set for the successUrl property.
    */
    public function setSuccessUrl(?string $value): void {
        $this->successUrl = $value;
    }

}
