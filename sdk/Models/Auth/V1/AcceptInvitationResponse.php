<?php

namespace Rixl\Sdk\Models\Auth\V1;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class AcceptInvitationResponse implements Parsable 
{
    /**
     * @var string|null $orgId The orgId property
    */
    private ?string $orgId = null;
    
    /**
     * @var string|null $orgName The orgName property
    */
    private ?string $orgName = null;
    
    /**
     * @var MembershipRole|null $role The role property
    */
    private ?MembershipRole $role = null;
    
    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return AcceptInvitationResponse
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): AcceptInvitationResponse {
        return new AcceptInvitationResponse();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'orgId' => fn(ParseNode $n) => $o->setOrgId($n->getStringValue()),
            'orgName' => fn(ParseNode $n) => $o->setOrgName($n->getStringValue()),
            'role' => fn(ParseNode $n) => $o->setRole($n->getEnumValue(MembershipRole::class)),
        ];
    }

    /**
     * Gets the orgId property value. The orgId property
     * @return string|null
    */
    public function getOrgId(): ?string {
        return $this->orgId;
    }

    /**
     * Gets the orgName property value. The orgName property
     * @return string|null
    */
    public function getOrgName(): ?string {
        return $this->orgName;
    }

    /**
     * Gets the role property value. The role property
     * @return MembershipRole|null
    */
    public function getRole(): ?MembershipRole {
        return $this->role;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('orgId', $this->getOrgId());
        $writer->writeStringValue('orgName', $this->getOrgName());
        $writer->writeEnumValue('role', $this->getRole());
    }

    /**
     * Sets the orgId property value. The orgId property
     * @param string|null $value Value to set for the orgId property.
    */
    public function setOrgId(?string $value): void {
        $this->orgId = $value;
    }

    /**
     * Sets the orgName property value. The orgName property
     * @param string|null $value Value to set for the orgName property.
    */
    public function setOrgName(?string $value): void {
        $this->orgName = $value;
    }

    /**
     * Sets the role property value. The role property
     * @param MembershipRole|null $value Value to set for the role property.
    */
    public function setRole(?MembershipRole $value): void {
        $this->role = $value;
    }

}
