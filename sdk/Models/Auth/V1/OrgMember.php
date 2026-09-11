<?php

namespace Rixl\Sdk\Models\Auth\V1;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class OrgMember implements Parsable 
{
    /**
     * @var string|null $first_name The first_name property
    */
    private ?string $first_name = null;
    
    /**
     * @var string|null $id The id property
    */
    private ?string $id = null;
    
    /**
     * @var DateTime|null $invitation_expires_at The invitation_expires_at property
    */
    private ?DateTime $invitation_expires_at = null;
    
    /**
     * @var DateTime|null $joined_at The joined_at property
    */
    private ?DateTime $joined_at = null;
    
    /**
     * @var string|null $last_name The last_name property
    */
    private ?string $last_name = null;
    
    /**
     * @var string|null $org_id The org_id property
    */
    private ?string $org_id = null;
    
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
     * @var string|null $username The username property
    */
    private ?string $username = null;
    
    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return OrgMember
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): OrgMember {
        return new OrgMember();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'first_name' => fn(ParseNode $n) => $o->setFirstName($n->getStringValue()),
            'id' => fn(ParseNode $n) => $o->setId($n->getStringValue()),
            'invitation_expires_at' => fn(ParseNode $n) => $o->setInvitationExpiresAt($n->getDateTimeValue()),
            'joined_at' => fn(ParseNode $n) => $o->setJoinedAt($n->getDateTimeValue()),
            'last_name' => fn(ParseNode $n) => $o->setLastName($n->getStringValue()),
            'org_id' => fn(ParseNode $n) => $o->setOrgId($n->getStringValue()),
            'role' => fn(ParseNode $n) => $o->setRole($n->getEnumValue(MembershipRole::class)),
            'state' => fn(ParseNode $n) => $o->setState($n->getEnumValue(MembershipState::class)),
            'user_id' => fn(ParseNode $n) => $o->setUserId($n->getStringValue()),
            'username' => fn(ParseNode $n) => $o->setUsername($n->getStringValue()),
        ];
    }

    /**
     * Gets the first_name property value. The first_name property
     * @return string|null
    */
    public function getFirstName(): ?string {
        return $this->first_name;
    }

    /**
     * Gets the id property value. The id property
     * @return string|null
    */
    public function getId(): ?string {
        return $this->id;
    }

    /**
     * Gets the invitation_expires_at property value. The invitation_expires_at property
     * @return DateTime|null
    */
    public function getInvitationExpiresAt(): ?DateTime {
        return $this->invitation_expires_at;
    }

    /**
     * Gets the joined_at property value. The joined_at property
     * @return DateTime|null
    */
    public function getJoinedAt(): ?DateTime {
        return $this->joined_at;
    }

    /**
     * Gets the last_name property value. The last_name property
     * @return string|null
    */
    public function getLastName(): ?string {
        return $this->last_name;
    }

    /**
     * Gets the org_id property value. The org_id property
     * @return string|null
    */
    public function getOrgId(): ?string {
        return $this->org_id;
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
     * Gets the username property value. The username property
     * @return string|null
    */
    public function getUsername(): ?string {
        return $this->username;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('first_name', $this->getFirstName());
        $writer->writeStringValue('id', $this->getId());
        $writer->writeDateTimeValue('invitation_expires_at', $this->getInvitationExpiresAt());
        $writer->writeDateTimeValue('joined_at', $this->getJoinedAt());
        $writer->writeStringValue('last_name', $this->getLastName());
        $writer->writeStringValue('org_id', $this->getOrgId());
        $writer->writeEnumValue('role', $this->getRole());
        $writer->writeEnumValue('state', $this->getState());
        $writer->writeStringValue('username', $this->getUsername());
        $writer->writeStringValue('user_id', $this->getUserId());
    }

    /**
     * Sets the first_name property value. The first_name property
     * @param string|null $value Value to set for the first_name property.
    */
    public function setFirstName(?string $value): void {
        $this->first_name = $value;
    }

    /**
     * Sets the id property value. The id property
     * @param string|null $value Value to set for the id property.
    */
    public function setId(?string $value): void {
        $this->id = $value;
    }

    /**
     * Sets the invitation_expires_at property value. The invitation_expires_at property
     * @param DateTime|null $value Value to set for the invitation_expires_at property.
    */
    public function setInvitationExpiresAt(?DateTime $value): void {
        $this->invitation_expires_at = $value;
    }

    /**
     * Sets the joined_at property value. The joined_at property
     * @param DateTime|null $value Value to set for the joined_at property.
    */
    public function setJoinedAt(?DateTime $value): void {
        $this->joined_at = $value;
    }

    /**
     * Sets the last_name property value. The last_name property
     * @param string|null $value Value to set for the last_name property.
    */
    public function setLastName(?string $value): void {
        $this->last_name = $value;
    }

    /**
     * Sets the org_id property value. The org_id property
     * @param string|null $value Value to set for the org_id property.
    */
    public function setOrgId(?string $value): void {
        $this->org_id = $value;
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

    /**
     * Sets the username property value. The username property
     * @param string|null $value Value to set for the username property.
    */
    public function setUsername(?string $value): void {
        $this->username = $value;
    }

}
