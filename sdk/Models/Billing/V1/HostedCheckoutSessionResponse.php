<?php

namespace Rixl\Sdk\Models\Billing\V1;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class HostedCheckoutSessionResponse implements Parsable 
{
    /**
     * @var float|null $amount The amount property
    */
    private ?float $amount = null;
    
    /**
     * @var string|null $currency The currency property
    */
    private ?string $currency = null;
    
    /**
     * @var string|null $session_id The session_id property
    */
    private ?string $session_id = null;
    
    /**
     * @var string|null $session_url The session_url property
    */
    private ?string $session_url = null;
    
    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return HostedCheckoutSessionResponse
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): HostedCheckoutSessionResponse {
        return new HostedCheckoutSessionResponse();
    }

    /**
     * Gets the amount property value. The amount property
     * @return float|null
    */
    public function getAmount(): ?float {
        return $this->amount;
    }

    /**
     * Gets the currency property value. The currency property
     * @return string|null
    */
    public function getCurrency(): ?string {
        return $this->currency;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'amount' => fn(ParseNode $n) => $o->setAmount($n->getFloatValue()),
            'currency' => fn(ParseNode $n) => $o->setCurrency($n->getStringValue()),
            'session_id' => fn(ParseNode $n) => $o->setSessionId($n->getStringValue()),
            'session_url' => fn(ParseNode $n) => $o->setSessionUrl($n->getStringValue()),
        ];
    }

    /**
     * Gets the session_id property value. The session_id property
     * @return string|null
    */
    public function getSessionId(): ?string {
        return $this->session_id;
    }

    /**
     * Gets the session_url property value. The session_url property
     * @return string|null
    */
    public function getSessionUrl(): ?string {
        return $this->session_url;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeFloatValue('amount', $this->getAmount());
        $writer->writeStringValue('currency', $this->getCurrency());
        $writer->writeStringValue('session_id', $this->getSessionId());
        $writer->writeStringValue('session_url', $this->getSessionUrl());
    }

    /**
     * Sets the amount property value. The amount property
     * @param float|null $value Value to set for the amount property.
    */
    public function setAmount(?float $value): void {
        $this->amount = $value;
    }

    /**
     * Sets the currency property value. The currency property
     * @param string|null $value Value to set for the currency property.
    */
    public function setCurrency(?string $value): void {
        $this->currency = $value;
    }

    /**
     * Sets the session_id property value. The session_id property
     * @param string|null $value Value to set for the session_id property.
    */
    public function setSessionId(?string $value): void {
        $this->session_id = $value;
    }

    /**
     * Sets the session_url property value. The session_url property
     * @param string|null $value Value to set for the session_url property.
    */
    public function setSessionUrl(?string $value): void {
        $this->session_url = $value;
    }

}
