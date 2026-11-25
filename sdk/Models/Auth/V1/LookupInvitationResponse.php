<?php

namespace Rixl\Sdk\Models\Auth\V1;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

/**
 * A closed invitation reports only its state.
*/
class LookupInvitationResponse implements Parsable 
{
    /**
     * @var string|null $email The email property
    */
    private ?string $email = null;
    
    /**
     * @var DateTime|null $expires_at A point in time in RFC 3339 format, with up to nanosecond precision. Output uses UTC (`Z`); input may use an offset from UTC.
    */
    private ?DateTime $expires_at = null;
    
    /**
     * @var string|null $inviter_display_name The inviter_display_name property
    */
    private ?string $inviter_display_name = null;
    
    /**
     * @var string|null $org_image_id The org_image_id property
    */
    private ?string $org_image_id = null;
    
    /**
     * @var string|null $org_name The org_name property
    */
    private ?string $org_name = null;
    
    /**
     * @var MembershipRole|null $role The role property
    */
    private ?MembershipRole $role = null;
    
    /**
     * @var InvitationState|null $state The state property
    */
    private ?InvitationState $state = null;
    
    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return LookupInvitationResponse
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): LookupInvitationResponse {
        return new LookupInvitationResponse();
    }

    /**
     * Gets the email property value. The email property
     * @return string|null
    */
    public function getEmail(): ?string {
        return $this->email;
    }

    /**
     * Gets the expires_at property value. A point in time in RFC 3339 format, with up to nanosecond precision. Output uses UTC (`Z`); input may use an offset from UTC.
     * @return DateTime|null
    */
    public function getExpiresAt(): ?DateTime {
        return $this->expires_at;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'email' => fn(ParseNode $n) => $o->setEmail($n->getStringValue()),
            'expires_at' => fn(ParseNode $n) => $o->setExpiresAt($n->getDateTimeValue()),
            'inviter_display_name' => fn(ParseNode $n) => $o->setInviterDisplayName($n->getStringValue()),
            'org_image_id' => fn(ParseNode $n) => $o->setOrgImageId($n->getStringValue()),
            'org_name' => fn(ParseNode $n) => $o->setOrgName($n->getStringValue()),
            'role' => fn(ParseNode $n) => $o->setRole($n->getEnumValue(MembershipRole::class)),
            'state' => fn(ParseNode $n) => $o->setState($n->getEnumValue(InvitationState::class)),
        ];
    }

    /**
     * Gets the inviter_display_name property value. The inviter_display_name property
     * @return string|null
    */
    public function getInviterDisplayName(): ?string {
        return $this->inviter_display_name;
    }

    /**
     * Gets the org_image_id property value. The org_image_id property
     * @return string|null
    */
    public function getOrgImageId(): ?string {
        return $this->org_image_id;
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
     * @return InvitationState|null
    */
    public function getState(): ?InvitationState {
        return $this->state;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('email', $this->getEmail());
        $writer->writeDateTimeValue('expires_at', $this->getExpiresAt());
        $writer->writeStringValue('inviter_display_name', $this->getInviterDisplayName());
        $writer->writeStringValue('org_image_id', $this->getOrgImageId());
        $writer->writeStringValue('org_name', $this->getOrgName());
        $writer->writeEnumValue('role', $this->getRole());
        $writer->writeEnumValue('state', $this->getState());
    }

    /**
     * Sets the email property value. The email property
     * @param string|null $value Value to set for the email property.
    */
    public function setEmail(?string $value): void {
        $this->email = $value;
    }

    /**
     * Sets the expires_at property value. A point in time in RFC 3339 format, with up to nanosecond precision. Output uses UTC (`Z`); input may use an offset from UTC.
     * @param DateTime|null $value Value to set for the expires_at property.
    */
    public function setExpiresAt(?DateTime $value): void {
        $this->expires_at = $value;
    }

    /**
     * Sets the inviter_display_name property value. The inviter_display_name property
     * @param string|null $value Value to set for the inviter_display_name property.
    */
    public function setInviterDisplayName(?string $value): void {
        $this->inviter_display_name = $value;
    }

    /**
     * Sets the org_image_id property value. The org_image_id property
     * @param string|null $value Value to set for the org_image_id property.
    */
    public function setOrgImageId(?string $value): void {
        $this->org_image_id = $value;
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
     * @param InvitationState|null $value Value to set for the state property.
    */
    public function setState(?InvitationState $value): void {
        $this->state = $value;
    }

}
