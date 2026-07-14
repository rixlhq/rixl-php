<?php

namespace Rixl\Sdk\Models\Billing\V1;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class UpgradeSubscriptionRequest implements Parsable 
{
    /**
     * @var string|null $orgId The orgId property
    */
    private ?string $orgId = null;
    
    /**
     * @var string|null $stripePriceId The stripePriceId property
    */
    private ?string $stripePriceId = null;
    
    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return UpgradeSubscriptionRequest
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): UpgradeSubscriptionRequest {
        return new UpgradeSubscriptionRequest();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'orgId' => fn(ParseNode $n) => $o->setOrgId($n->getStringValue()),
            'stripePriceId' => fn(ParseNode $n) => $o->setStripePriceId($n->getStringValue()),
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
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('orgId', $this->getOrgId());
        $writer->writeStringValue('stripePriceId', $this->getStripePriceId());
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

}
