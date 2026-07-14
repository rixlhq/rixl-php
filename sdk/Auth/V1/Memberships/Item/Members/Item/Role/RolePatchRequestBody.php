<?php

namespace Rixl\Sdk\Auth\V1\Memberships\Item\Members\Item\Role;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Rixl\Sdk\Models\Auth\V1\ActorOrgRequest;
use Rixl\Sdk\Models\Auth\V1\MembershipRole;

class RolePatchRequestBody implements Parsable 
{
    /**
     * @var MembershipRole|null $role The role property
    */
    private ?MembershipRole $role = null;
    
    /**
     * @var ActorOrgRequest|null $user The user property
    */
    private ?ActorOrgRequest $user = null;
    
    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return RolePatchRequestBody
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): RolePatchRequestBody {
        return new RolePatchRequestBody();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'role' => fn(ParseNode $n) => $o->setRole($n->getEnumValue(MembershipRole::class)),
            'user' => fn(ParseNode $n) => $o->setUser($n->getObjectValue([ActorOrgRequest::class, 'createFromDiscriminatorValue'])),
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
     * Gets the user property value. The user property
     * @return ActorOrgRequest|null
    */
    public function getUser(): ?ActorOrgRequest {
        return $this->user;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeEnumValue('role', $this->getRole());
        $writer->writeObjectValue('user', $this->getUser());
    }

    /**
     * Sets the role property value. The role property
     * @param MembershipRole|null $value Value to set for the role property.
    */
    public function setRole(?MembershipRole $value): void {
        $this->role = $value;
    }

    /**
     * Sets the user property value. The user property
     * @param ActorOrgRequest|null $value Value to set for the user property.
    */
    public function setUser(?ActorOrgRequest $value): void {
        $this->user = $value;
    }

}
