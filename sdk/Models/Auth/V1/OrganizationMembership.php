<?php

namespace Rixl\Sdk\Models\Auth\V1;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class OrganizationMembership implements Parsable 
{
    /**
     * @var Organization|null $organization The organization property
    */
    private ?Organization $organization = null;
    
    /**
     * @var MembershipRole|null $role The role property
    */
    private ?MembershipRole $role = null;
    
    /**
     * @var MembershipState|null $state The state property
    */
    private ?MembershipState $state = null;
    
    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return OrganizationMembership
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): OrganizationMembership {
        return new OrganizationMembership();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'organization' => fn(ParseNode $n) => $o->setOrganization($n->getObjectValue([Organization::class, 'createFromDiscriminatorValue'])),
            'role' => fn(ParseNode $n) => $o->setRole($n->getEnumValue(MembershipRole::class)),
            'state' => fn(ParseNode $n) => $o->setState($n->getEnumValue(MembershipState::class)),
        ];
    }

    /**
     * Gets the organization property value. The organization property
     * @return Organization|null
    */
    public function getOrganization(): ?Organization {
        return $this->organization;
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
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeObjectValue('organization', $this->getOrganization());
        $writer->writeEnumValue('role', $this->getRole());
        $writer->writeEnumValue('state', $this->getState());
    }

    /**
     * Sets the organization property value. The organization property
     * @param Organization|null $value Value to set for the organization property.
    */
    public function setOrganization(?Organization $value): void {
        $this->organization = $value;
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

}
