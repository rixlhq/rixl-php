<?php

namespace Rixl\Sdk\Models\Auth\V1;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class MembershipMutation implements Parsable 
{
    /**
     * @var DateTime|null $joined_at The joined_at property
    */
    private ?DateTime $joined_at = null;
    
    /**
     * @var string|null $org_id The org_id property
    */
    private ?string $org_id = null;
    
    /**
     * @var string|null $org_name The org_name property
    */
    private ?string $org_name = null;
    
    /**
     * @var MembershipRole|null $role The role property
    */
    private ?MembershipRole $role = null;
    
    /**
     * @var MembershipState|null $state The state property
    */
    private ?MembershipState $state = null;
    
    /**
     * @var string|null $user_id The user_id property
    */
    private ?string $user_id = null;
    
    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return MembershipMutation
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): MembershipMutation {
        return new MembershipMutation();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'joined_at' => fn(ParseNode $n) => $o->setJoinedAt($n->getDateTimeValue()),
            'org_id' => fn(ParseNode $n) => $o->setOrgId($n->getStringValue()),
            'org_name' => fn(ParseNode $n) => $o->setOrgName($n->getStringValue()),
            'role' => fn(ParseNode $n) => $o->setRole($n->getEnumValue(MembershipRole::class)),
            'state' => fn(ParseNode $n) => $o->setState($n->getEnumValue(MembershipState::class)),
            'user_id' => fn(ParseNode $n) => $o->setUserId($n->getStringValue()),
        ];
    }

    /**
     * Gets the joined_at property value. The joined_at property
     * @return DateTime|null
    */
    public function getJoinedAt(): ?DateTime {
        return $this->joined_at;
    }

    /**
     * Gets the org_id property value. The org_id property
     * @return string|null
    */
    public function getOrgId(): ?string {
        return $this->org_id;
    }

    /**
     * Gets the org_name property value. The org_name property
     * @return string|null
    */
    public function getOrgName(): ?string {
        return $this->org_name;
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
        $writer->writeDateTimeValue('joined_at', $this->getJoinedAt());
        $writer->writeStringValue('org_id', $this->getOrgId());
        $writer->writeStringValue('org_name', $this->getOrgName());
        $writer->writeEnumValue('role', $this->getRole());
        $writer->writeEnumValue('state', $this->getState());
        $writer->writeStringValue('user_id', $this->getUserId());
    }

    /**
     * Sets the joined_at property value. The joined_at property
     * @param DateTime|null $value Value to set for the joined_at property.
    */
    public function setJoinedAt(?DateTime $value): void {
        $this->joined_at = $value;
    }

    /**
     * Sets the org_id property value. The org_id property
     * @param string|null $value Value to set for the org_id property.
    */
    public function setOrgId(?string $value): void {
        $this->org_id = $value;
    }

    /**
     * Sets the org_name property value. The org_name property
     * @param string|null $value Value to set for the org_name property.
    */
    public function setOrgName(?string $value): void {
        $this->org_name = $value;
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
     * Sets the user_id property value. The user_id property
     * @param string|null $value Value to set for the user_id property.
    */
    public function setUserId(?string $value): void {
        $this->user_id = $value;
    }

}
