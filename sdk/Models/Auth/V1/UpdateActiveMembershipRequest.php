<?php

namespace Rixl\Sdk\Models\Auth\V1;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class UpdateActiveMembershipRequest implements Parsable 
{
    /**
     * @var string|null $membershipId The membershipId property
    */
    private ?string $membershipId = null;
    
    /**
     * @var UserOrgRequest|null $user The user property
    */
    private ?UserOrgRequest $user = null;
    
    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return UpdateActiveMembershipRequest
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): UpdateActiveMembershipRequest {
        return new UpdateActiveMembershipRequest();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'membershipId' => fn(ParseNode $n) => $o->setMembershipId($n->getStringValue()),
            'user' => fn(ParseNode $n) => $o->setUser($n->getObjectValue([UserOrgRequest::class, 'createFromDiscriminatorValue'])),
        ];
    }

    /**
     * Gets the membershipId property value. The membershipId property
     * @return string|null
    */
    public function getMembershipId(): ?string {
        return $this->membershipId;
    }

    /**
     * Gets the user property value. The user property
     * @return UserOrgRequest|null
    */
    public function getUser(): ?UserOrgRequest {
        return $this->user;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('membershipId', $this->getMembershipId());
        $writer->writeObjectValue('user', $this->getUser());
    }

    /**
     * Sets the membershipId property value. The membershipId property
     * @param string|null $value Value to set for the membershipId property.
    */
    public function setMembershipId(?string $value): void {
        $this->membershipId = $value;
    }

    /**
     * Sets the user property value. The user property
     * @param UserOrgRequest|null $value Value to set for the user property.
    */
    public function setUser(?UserOrgRequest $value): void {
        $this->user = $value;
    }

}
