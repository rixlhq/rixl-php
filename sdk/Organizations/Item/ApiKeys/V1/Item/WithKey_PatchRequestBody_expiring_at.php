<?php

namespace Rixl\Sdk\Organizations\Item\ApiKeys\V1\Item;

use Microsoft\Kiota\Abstractions\Serialization\ComposedTypeWrapper;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Rixl\Sdk\Models\Google\Protobuf\Timestamp;

/**
 * Composed type wrapper for classes Timestamp, WithKey_PatchRequestBody_expiring_atMember1
*/
class WithKey_PatchRequestBody_expiring_at implements ComposedTypeWrapper, Parsable 
{
    /**
     * @var Timestamp|null $timestamp Composed type representation for type Timestamp
    */
    private ?Timestamp $timestamp = null;
    
    /**
     * @var WithKey_PatchRequestBody_expiring_atMember1|null $withKey_PatchRequestBody_expiring_atMember1 Composed type representation for type WithKey_PatchRequestBody_expiring_atMember1
    */
    private ?WithKey_PatchRequestBody_expiring_atMember1 $withKey_PatchRequestBody_expiring_atMember1 = null;
    
    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return WithKey_PatchRequestBody_expiring_at
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): WithKey_PatchRequestBody_expiring_at {
        $result = new WithKey_PatchRequestBody_expiring_at();
        return $result;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        if ($this->getTimestamp() !== null) {
            return $this->getTimestamp()->getFieldDeserializers();
        } else if ($this->getWithKeyPatchRequestBodyExpiringAtMember1() !== null) {
            return $this->getWithKeyPatchRequestBodyExpiringAtMember1()->getFieldDeserializers();
        }
        return [];
    }

    /**
     * Gets the Timestamp property value. Composed type representation for type Timestamp
     * @return Timestamp|null
    */
    public function getTimestamp(): ?Timestamp {
        return $this->timestamp;
    }

    /**
     * Gets the WithKey_PatchRequestBody_expiring_atMember1 property value. Composed type representation for type WithKey_PatchRequestBody_expiring_atMember1
     * @return WithKey_PatchRequestBody_expiring_atMember1|null
    */
    public function getWithKeyPatchRequestBodyExpiringAtMember1(): ?WithKey_PatchRequestBody_expiring_atMember1 {
        return $this->withKey_PatchRequestBody_expiring_atMember1;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        if ($this->getTimestamp() !== null) {
            $writer->writeObjectValue(null, $this->getTimestamp());
        } else if ($this->getWithKeyPatchRequestBodyExpiringAtMember1() !== null) {
            $writer->writeObjectValue(null, $this->getWithKeyPatchRequestBodyExpiringAtMember1());
        }
    }

    /**
     * Sets the Timestamp property value. Composed type representation for type Timestamp
     * @param Timestamp|null $value Value to set for the Timestamp property.
    */
    public function setTimestamp(?Timestamp $value): void {
        $this->timestamp = $value;
    }

    /**
     * Sets the WithKey_PatchRequestBody_expiring_atMember1 property value. Composed type representation for type WithKey_PatchRequestBody_expiring_atMember1
     * @param WithKey_PatchRequestBody_expiring_atMember1|null $value Value to set for the WithKey_PatchRequestBody_expiring_atMember1 property.
    */
    public function setWithKeyPatchRequestBodyExpiringAtMember1(?WithKey_PatchRequestBody_expiring_atMember1 $value): void {
        $this->withKey_PatchRequestBody_expiring_atMember1 = $value;
    }

}
