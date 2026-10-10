<?php

namespace Rixl\Sdk\Models\Billing\V1;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class BillingConfig implements Parsable 
{
    /**
     * @var string|null $publishable_key Stripe publishable key of the account the caller's organization is billed in.
    */
    private ?string $publishable_key = null;
    
    /**
     * @var bool|null $sandbox True when the organization is billed in the Stripe sandbox: no money moves.
    */
    private ?bool $sandbox = null;
    
    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return BillingConfig
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): BillingConfig {
        return new BillingConfig();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'publishable_key' => fn(ParseNode $n) => $o->setPublishableKey($n->getStringValue()),
            'sandbox' => fn(ParseNode $n) => $o->setSandbox($n->getBooleanValue()),
        ];
    }

    /**
     * Gets the publishable_key property value. Stripe publishable key of the account the caller's organization is billed in.
     * @return string|null
    */
    public function getPublishableKey(): ?string {
        return $this->publishable_key;
    }

    /**
     * Gets the sandbox property value. True when the organization is billed in the Stripe sandbox: no money moves.
     * @return bool|null
    */
    public function getSandbox(): ?bool {
        return $this->sandbox;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('publishable_key', $this->getPublishableKey());
        $writer->writeBooleanValue('sandbox', $this->getSandbox());
    }

    /**
     * Sets the publishable_key property value. Stripe publishable key of the account the caller's organization is billed in.
     * @param string|null $value Value to set for the publishable_key property.
    */
    public function setPublishableKey(?string $value): void {
        $this->publishable_key = $value;
    }

    /**
     * Sets the sandbox property value. True when the organization is billed in the Stripe sandbox: no money moves.
     * @param bool|null $value Value to set for the sandbox property.
    */
    public function setSandbox(?bool $value): void {
        $this->sandbox = $value;
    }

}
