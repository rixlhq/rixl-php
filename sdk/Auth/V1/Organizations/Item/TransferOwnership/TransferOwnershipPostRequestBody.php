<?php

namespace Rixl\Sdk\Auth\V1\Organizations\Item\TransferOwnership;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Rixl\Sdk\Models\Auth\V1\MembershipRole;

class TransferOwnershipPostRequestBody implements Parsable 
{
    /**
     * @var MembershipRole|null $demote_to Omit to keep the current owner as a co-owner.
    */
    private ?MembershipRole $demote_to = null;
    
    /**
     * @var string|null $user_id The user_id property
    */
    private ?string $user_id = null;
    
    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return TransferOwnershipPostRequestBody
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): TransferOwnershipPostRequestBody {
        return new TransferOwnershipPostRequestBody();
    }

    /**
     * Gets the demote_to property value. Omit to keep the current owner as a co-owner.
     * @return MembershipRole|null
    */
    public function getDemoteTo(): ?MembershipRole {
        return $this->demote_to;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'demote_to' => fn(ParseNode $n) => $o->setDemoteTo($n->getEnumValue(MembershipRole::class)),
            'user_id' => fn(ParseNode $n) => $o->setUserId($n->getStringValue()),
        ];
    }

    /**
     * Gets the user_id property value. The user_id property
     * @return string|null
    */
    public function getUserId(): ?string {
        return $this->user_id;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeEnumValue('demote_to', $this->getDemoteTo());
        $writer->writeStringValue('user_id', $this->getUserId());
    }

    /**
     * Sets the demote_to property value. Omit to keep the current owner as a co-owner.
     * @param MembershipRole|null $value Value to set for the demote_to property.
    */
    public function setDemoteTo(?MembershipRole $value): void {
        $this->demote_to = $value;
    }

    /**
     * Sets the user_id property value. The user_id property
     * @param string|null $value Value to set for the user_id property.
    */
    public function setUserId(?string $value): void {
        $this->user_id = $value;
    }

}
