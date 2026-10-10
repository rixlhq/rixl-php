<?php

namespace Rixl\Sdk\Models\Auth\V1;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class MembershipApplication implements Parsable 
{
    /**
     * @var DateTime|null $created_at The created_at property
    */
    private ?DateTime $created_at = null;
    
    /**
     * @var DateTime|null $decided_at The decided_at property
    */
    private ?DateTime $decided_at = null;
    
    /**
     * @var string|null $id The id property
    */
    private ?string $id = null;
    
    /**
     * @var DateTime|null $invitation_expires_at The invitation_expires_at property
    */
    private ?DateTime $invitation_expires_at = null;
    
    /**
     * @var string|null $org_id The org_id property
    */
    private ?string $org_id = null;
    
    /**
     * @var string|null $organization_first_name The organization_first_name property
    */
    private ?string $organization_first_name = null;
    
    /**
     * @var string|null $organization_last_name The organization_last_name property
    */
    private ?string $organization_last_name = null;
    
    /**
     * @var string|null $organization_username The organization_username property
    */
    private ?string $organization_username = null;
    
    /**
     * @var MembershipRole|null $role The role property
    */
    private ?MembershipRole $role = null;
    
    /**
     * @var MembershipApplicationState|null $state The state property
    */
    private ?MembershipApplicationState $state = null;
    
    /**
     * @var string|null $user_id The user_id property
    */
    private ?string $user_id = null;
    
    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return MembershipApplication
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): MembershipApplication {
        return new MembershipApplication();
    }

    /**
     * Gets the created_at property value. The created_at property
     * @return DateTime|null
    */
    public function getCreatedAt(): ?DateTime {
        return $this->created_at;
    }

    /**
     * Gets the decided_at property value. The decided_at property
     * @return DateTime|null
    */
    public function getDecidedAt(): ?DateTime {
        return $this->decided_at;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'created_at' => fn(ParseNode $n) => $o->setCreatedAt($n->getDateTimeValue()),
            'decided_at' => fn(ParseNode $n) => $o->setDecidedAt($n->getDateTimeValue()),
            'id' => fn(ParseNode $n) => $o->setId($n->getStringValue()),
            'invitation_expires_at' => fn(ParseNode $n) => $o->setInvitationExpiresAt($n->getDateTimeValue()),
            'org_id' => fn(ParseNode $n) => $o->setOrgId($n->getStringValue()),
            'organization_first_name' => fn(ParseNode $n) => $o->setOrganizationFirstName($n->getStringValue()),
            'organization_last_name' => fn(ParseNode $n) => $o->setOrganizationLastName($n->getStringValue()),
            'organization_username' => fn(ParseNode $n) => $o->setOrganizationUsername($n->getStringValue()),
            'role' => fn(ParseNode $n) => $o->setRole($n->getEnumValue(MembershipRole::class)),
            'state' => fn(ParseNode $n) => $o->setState($n->getEnumValue(MembershipApplicationState::class)),
            'user_id' => fn(ParseNode $n) => $o->setUserId($n->getStringValue()),
        ];
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
     * Gets the organization_first_name property value. The organization_first_name property
     * @return string|null
    */
    public function getOrganizationFirstName(): ?string {
        return $this->organization_first_name;
    }

    /**
     * Gets the organization_last_name property value. The organization_last_name property
     * @return string|null
    */
    public function getOrganizationLastName(): ?string {
        return $this->organization_last_name;
    }

    /**
     * Gets the organization_username property value. The organization_username property
     * @return string|null
    */
    public function getOrganizationUsername(): ?string {
        return $this->organization_username;
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
     * @return MembershipApplicationState|null
    */
    public function getState(): ?MembershipApplicationState {
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
        $writer->writeDateTimeValue('created_at', $this->getCreatedAt());
        $writer->writeDateTimeValue('decided_at', $this->getDecidedAt());
        $writer->writeStringValue('id', $this->getId());
        $writer->writeDateTimeValue('invitation_expires_at', $this->getInvitationExpiresAt());
        $writer->writeStringValue('organization_first_name', $this->getOrganizationFirstName());
        $writer->writeStringValue('organization_last_name', $this->getOrganizationLastName());
        $writer->writeStringValue('organization_username', $this->getOrganizationUsername());
        $writer->writeStringValue('org_id', $this->getOrgId());
        $writer->writeEnumValue('role', $this->getRole());
        $writer->writeEnumValue('state', $this->getState());
        $writer->writeStringValue('user_id', $this->getUserId());
    }

    /**
     * Sets the created_at property value. The created_at property
     * @param DateTime|null $value Value to set for the created_at property.
    */
    public function setCreatedAt(?DateTime $value): void {
        $this->created_at = $value;
    }

    /**
     * Sets the decided_at property value. The decided_at property
     * @param DateTime|null $value Value to set for the decided_at property.
    */
    public function setDecidedAt(?DateTime $value): void {
        $this->decided_at = $value;
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
     * Sets the organization_first_name property value. The organization_first_name property
     * @param string|null $value Value to set for the organization_first_name property.
    */
    public function setOrganizationFirstName(?string $value): void {
        $this->organization_first_name = $value;
    }

    /**
     * Sets the organization_last_name property value. The organization_last_name property
     * @param string|null $value Value to set for the organization_last_name property.
    */
    public function setOrganizationLastName(?string $value): void {
        $this->organization_last_name = $value;
    }

    /**
     * Sets the organization_username property value. The organization_username property
     * @param string|null $value Value to set for the organization_username property.
    */
    public function setOrganizationUsername(?string $value): void {
        $this->organization_username = $value;
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
     * @param MembershipApplicationState|null $value Value to set for the state property.
    */
    public function setState(?MembershipApplicationState $value): void {
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
