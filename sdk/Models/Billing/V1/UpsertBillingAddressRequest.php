<?php

namespace Rixl\Sdk\Models\Billing\V1;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class UpsertBillingAddressRequest implements Parsable 
{
    /**
     * @var BillingAddress|null $address The address property
    */
    private ?BillingAddress $address = null;
    
    /**
     * @var string|null $org_id The org_id property
    */
    private ?string $org_id = null;
    
    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return UpsertBillingAddressRequest
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): UpsertBillingAddressRequest {
        return new UpsertBillingAddressRequest();
    }

    /**
     * Gets the address property value. The address property
     * @return BillingAddress|null
    */
    public function getAddress(): ?BillingAddress {
        return $this->address;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'address' => fn(ParseNode $n) => $o->setAddress($n->getObjectValue([BillingAddress::class, 'createFromDiscriminatorValue'])),
            'org_id' => fn(ParseNode $n) => $o->setOrgId($n->getStringValue()),
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
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeObjectValue('address', $this->getAddress());
        $writer->writeStringValue('org_id', $this->getOrgId());
    }

    /**
     * Sets the address property value. The address property
     * @param BillingAddress|null $value Value to set for the address property.
    */
    public function setAddress(?BillingAddress $value): void {
        $this->address = $value;
    }

    /**
     * Sets the org_id property value. The org_id property
     * @param string|null $value Value to set for the org_id property.
    */
    public function setOrgId(?string $value): void {
        $this->org_id = $value;
    }

}
