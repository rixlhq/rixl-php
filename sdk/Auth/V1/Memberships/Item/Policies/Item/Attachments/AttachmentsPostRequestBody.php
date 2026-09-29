<?php

namespace Rixl\Sdk\Auth\V1\Memberships\Item\Policies\Item\Attachments;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Rixl\Sdk\Models\Auth\V1\PolicyIdentityType;

class AttachmentsPostRequestBody implements Parsable 
{
    /**
     * @var string|null $identity_id The identity_id property
    */
    private ?string $identity_id = null;
    
    /**
     * @var PolicyIdentityType|null $identity_type The identity_type property
    */
    private ?PolicyIdentityType $identity_type = null;
    
    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return AttachmentsPostRequestBody
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): AttachmentsPostRequestBody {
        return new AttachmentsPostRequestBody();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'identity_id' => fn(ParseNode $n) => $o->setIdentityId($n->getStringValue()),
            'identity_type' => fn(ParseNode $n) => $o->setIdentityType($n->getEnumValue(PolicyIdentityType::class)),
        ];
    }

    /**
     * Gets the identity_id property value. The identity_id property
     * @return string|null
    */
    public function getIdentityId(): ?string {
        return $this->identity_id;
    }

    /**
     * Gets the identity_type property value. The identity_type property
     * @return PolicyIdentityType|null
    */
    public function getIdentityType(): ?PolicyIdentityType {
        return $this->identity_type;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('identity_id', $this->getIdentityId());
        $writer->writeEnumValue('identity_type', $this->getIdentityType());
    }

    /**
     * Sets the identity_id property value. The identity_id property
     * @param string|null $value Value to set for the identity_id property.
    */
    public function setIdentityId(?string $value): void {
        $this->identity_id = $value;
    }

    /**
     * Sets the identity_type property value. The identity_type property
     * @param PolicyIdentityType|null $value Value to set for the identity_type property.
    */
    public function setIdentityType(?PolicyIdentityType $value): void {
        $this->identity_type = $value;
    }

}
