<?php

namespace Rixl\Sdk\Auth\V1\Organizations\Item\Members\Item;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Rixl\Sdk\Models\Auth\V1\MembershipRole;
use Rixl\Sdk\Models\Auth\V1\MembershipState;

class Member_PatchRequestBody implements Parsable 
{
    /**
     * @var MembershipRole|null $role The role property
    */
    private ?MembershipRole $role = null;
    
    /**
     * @var MembershipState|null $state The state property
    */
    private ?MembershipState $state = null;
    
    /**
     * @var string|null $update_mask Comma-separated field paths in lowerCamelCase (for example, `user.displayName,photo`).
    */
    private ?string $update_mask = null;
    
    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return Member_PatchRequestBody
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): Member_PatchRequestBody {
        return new Member_PatchRequestBody();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'role' => fn(ParseNode $n) => $o->setRole($n->getEnumValue(MembershipRole::class)),
            'state' => fn(ParseNode $n) => $o->setState($n->getEnumValue(MembershipState::class)),
            'update_mask' => fn(ParseNode $n) => $o->setUpdateMask($n->getStringValue()),
        ];
    }

    /**
     * Gets the role property value. The role property
     * @return MembershipRole|null
    */
    public function getRole(): ?MembershipRole {
        return $this->role;
    }

    /**
     * Gets the state property value. The state property
     * @return MembershipState|null
    */
    public function getState(): ?MembershipState {
        return $this->state;
    }

    /**
     * Gets the update_mask property value. Comma-separated field paths in lowerCamelCase (for example, `user.displayName,photo`).
     * @return string|null
    */
    public function getUpdateMask(): ?string {
        return $this->update_mask;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeEnumValue('role', $this->getRole());
        $writer->writeEnumValue('state', $this->getState());
        $writer->writeStringValue('update_mask', $this->getUpdateMask());
    }

    /**
     * Sets the role property value. The role property
     * @param MembershipRole|null $value Value to set for the role property.
    */
    public function setRole(?MembershipRole $value): void {
        $this->role = $value;
    }

    /**
     * Sets the state property value. The state property
     * @param MembershipState|null $value Value to set for the state property.
    */
    public function setState(?MembershipState $value): void {
        $this->state = $value;
    }

    /**
     * Sets the update_mask property value. Comma-separated field paths in lowerCamelCase (for example, `user.displayName,photo`).
     * @param string|null $value Value to set for the update_mask property.
    */
    public function setUpdateMask(?string $value): void {
        $this->update_mask = $value;
    }

}
