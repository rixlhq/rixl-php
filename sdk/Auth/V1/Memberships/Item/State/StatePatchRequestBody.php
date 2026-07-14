<?php

namespace Rixl\Sdk\Auth\V1\Memberships\Item\State;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Rixl\Sdk\Models\Auth\V1\MembershipState;
use Rixl\Sdk\Models\Auth\V1\UserOrgRequest;

class StatePatchRequestBody implements Parsable 
{
    /**
     * @var MembershipState|null $state The state property
    */
    private ?MembershipState $state = null;
    
    /**
     * @var UserOrgRequest|null $user The user property
    */
    private ?UserOrgRequest $user = null;
    
    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return StatePatchRequestBody
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): StatePatchRequestBody {
        return new StatePatchRequestBody();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'state' => fn(ParseNode $n) => $o->setState($n->getEnumValue(MembershipState::class)),
            'user' => fn(ParseNode $n) => $o->setUser($n->getObjectValue([UserOrgRequest::class, 'createFromDiscriminatorValue'])),
        ];
    }

    /**
     * Gets the state property value. The state property
     * @return MembershipState|null
    */
    public function getState(): ?MembershipState {
        return $this->state;
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
        $writer->writeEnumValue('state', $this->getState());
        $writer->writeObjectValue('user', $this->getUser());
    }

    /**
     * Sets the state property value. The state property
     * @param MembershipState|null $value Value to set for the state property.
    */
    public function setState(?MembershipState $value): void {
        $this->state = $value;
    }

    /**
     * Sets the user property value. The user property
     * @param UserOrgRequest|null $value Value to set for the user property.
    */
    public function setUser(?UserOrgRequest $value): void {
        $this->user = $value;
    }

}
