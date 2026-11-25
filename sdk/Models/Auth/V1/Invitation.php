<?php

namespace Rixl\Sdk\Models\Auth\V1;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class Invitation implements Parsable 
{
    /**
     * @var DateTime|null $created_at A point in time in RFC 3339 format, with up to nanosecond precision. Output uses UTC (`Z`); input may use an offset from UTC.
    */
    private ?DateTime $created_at = null;
    
    /**
     * @var string|null $email The email property
    */
    private ?string $email = null;
    
    /**
     * @var DateTime|null $expires_at A point in time in RFC 3339 format, with up to nanosecond precision. Output uses UTC (`Z`); input may use an offset from UTC.
    */
    private ?DateTime $expires_at = null;
    
    /**
     * @var string|null $id The id property
    */
    private ?string $id = null;
    
    /**
     * @var InvitationInviter|null $invited_by Unset once the inviter's account is deleted.
    */
    private ?InvitationInviter $invited_by = null;
    
    /**
     * @var DateTime|null $last_sent_at A point in time in RFC 3339 format, with up to nanosecond precision. Output uses UTC (`Z`); input may use an offset from UTC.
    */
    private ?DateTime $last_sent_at = null;
    
    /**
     * @var Organization|null $org The org property
    */
    private ?Organization $org = null;
    
    /**
     * @var DateTime|null $resend_available_at Set while a daily sending limit would delay a resend by the caller.
    */
    private ?DateTime $resend_available_at = null;
    
    /**
     * @var MembershipRole|null $role Never OWNER.
    */
    private ?MembershipRole $role = null;
    
    /**
     * @var InvitationState|null $state The effective state: a pending invitation past its expiry reads as expired.
    */
    private ?InvitationState $state = null;
    
    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return Invitation
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): Invitation {
        return new Invitation();
    }

    /**
     * Gets the created_at property value. A point in time in RFC 3339 format, with up to nanosecond precision. Output uses UTC (`Z`); input may use an offset from UTC.
     * @return DateTime|null
    */
    public function getCreatedAt(): ?DateTime {
        return $this->created_at;
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
            'created_at' => fn(ParseNode $n) => $o->setCreatedAt($n->getDateTimeValue()),
            'email' => fn(ParseNode $n) => $o->setEmail($n->getStringValue()),
            'expires_at' => fn(ParseNode $n) => $o->setExpiresAt($n->getDateTimeValue()),
            'id' => fn(ParseNode $n) => $o->setId($n->getStringValue()),
            'invited_by' => fn(ParseNode $n) => $o->setInvitedBy($n->getObjectValue([InvitationInviter::class, 'createFromDiscriminatorValue'])),
            'last_sent_at' => fn(ParseNode $n) => $o->setLastSentAt($n->getDateTimeValue()),
            'org' => fn(ParseNode $n) => $o->setOrg($n->getObjectValue([Organization::class, 'createFromDiscriminatorValue'])),
            'resend_available_at' => fn(ParseNode $n) => $o->setResendAvailableAt($n->getDateTimeValue()),
            'role' => fn(ParseNode $n) => $o->setRole($n->getEnumValue(MembershipRole::class)),
            'state' => fn(ParseNode $n) => $o->setState($n->getEnumValue(InvitationState::class)),
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
     * Gets the invited_by property value. Unset once the inviter's account is deleted.
     * @return InvitationInviter|null
    */
    public function getInvitedBy(): ?InvitationInviter {
        return $this->invited_by;
    }

    /**
     * Gets the last_sent_at property value. A point in time in RFC 3339 format, with up to nanosecond precision. Output uses UTC (`Z`); input may use an offset from UTC.
     * @return DateTime|null
    */
    public function getLastSentAt(): ?DateTime {
        return $this->last_sent_at;
    }

    /**
     * Gets the org property value. The org property
     * @return Organization|null
    */
    public function getOrg(): ?Organization {
        return $this->org;
    }

    /**
     * Gets the resend_available_at property value. Set while a daily sending limit would delay a resend by the caller.
     * @return DateTime|null
    */
    public function getResendAvailableAt(): ?DateTime {
        return $this->resend_available_at;
    }

    /**
     * Gets the role property value. Never OWNER.
     * @return MembershipRole|null
    */
    public function getRole(): ?MembershipRole {
        return $this->role;
    }

    /**
     * Gets the state property value. The effective state: a pending invitation past its expiry reads as expired.
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
        $writer->writeDateTimeValue('created_at', $this->getCreatedAt());
        $writer->writeStringValue('email', $this->getEmail());
        $writer->writeDateTimeValue('expires_at', $this->getExpiresAt());
        $writer->writeStringValue('id', $this->getId());
        $writer->writeObjectValue('invited_by', $this->getInvitedBy());
        $writer->writeDateTimeValue('last_sent_at', $this->getLastSentAt());
        $writer->writeObjectValue('org', $this->getOrg());
        $writer->writeDateTimeValue('resend_available_at', $this->getResendAvailableAt());
        $writer->writeEnumValue('role', $this->getRole());
        $writer->writeEnumValue('state', $this->getState());
    }

    /**
     * Sets the created_at property value. A point in time in RFC 3339 format, with up to nanosecond precision. Output uses UTC (`Z`); input may use an offset from UTC.
     * @param DateTime|null $value Value to set for the created_at property.
    */
    public function setCreatedAt(?DateTime $value): void {
        $this->created_at = $value;
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
     * Sets the id property value. The id property
     * @param string|null $value Value to set for the id property.
    */
    public function setId(?string $value): void {
        $this->id = $value;
    }

    /**
     * Sets the invited_by property value. Unset once the inviter's account is deleted.
     * @param InvitationInviter|null $value Value to set for the invited_by property.
    */
    public function setInvitedBy(?InvitationInviter $value): void {
        $this->invited_by = $value;
    }

    /**
     * Sets the last_sent_at property value. A point in time in RFC 3339 format, with up to nanosecond precision. Output uses UTC (`Z`); input may use an offset from UTC.
     * @param DateTime|null $value Value to set for the last_sent_at property.
    */
    public function setLastSentAt(?DateTime $value): void {
        $this->last_sent_at = $value;
    }

    /**
     * Sets the org property value. The org property
     * @param Organization|null $value Value to set for the org property.
    */
    public function setOrg(?Organization $value): void {
        $this->org = $value;
    }

    /**
     * Sets the resend_available_at property value. Set while a daily sending limit would delay a resend by the caller.
     * @param DateTime|null $value Value to set for the resend_available_at property.
    */
    public function setResendAvailableAt(?DateTime $value): void {
        $this->resend_available_at = $value;
    }

    /**
     * Sets the role property value. Never OWNER.
     * @param MembershipRole|null $value Value to set for the role property.
    */
    public function setRole(?MembershipRole $value): void {
        $this->role = $value;
    }

    /**
     * Sets the state property value. The effective state: a pending invitation past its expiry reads as expired.
     * @param InvitationState|null $value Value to set for the state property.
    */
    public function setState(?InvitationState $value): void {
        $this->state = $value;
    }

}
