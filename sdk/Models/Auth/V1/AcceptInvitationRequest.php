<?php

namespace Rixl\Sdk\Models\Auth\V1;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

/**
 * At most one of `token`, `invitation_id` may be set.
*/
class AcceptInvitationRequest implements Parsable 
{
    /**
     * @var string|null $invitation_id The invitation_id property
    */
    private ?string $invitation_id = null;
    
    /**
     * @var string|null $token The token property
    */
    private ?string $token = null;
    
    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return AcceptInvitationRequest
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): AcceptInvitationRequest {
        return new AcceptInvitationRequest();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'invitation_id' => fn(ParseNode $n) => $o->setInvitationId($n->getStringValue()),
            'token' => fn(ParseNode $n) => $o->setToken($n->getStringValue()),
        ];
    }

    /**
     * Gets the invitation_id property value. The invitation_id property
     * @return string|null
    */
    public function getInvitationId(): ?string {
        return $this->invitation_id;
    }

    /**
     * Gets the token property value. The token property
     * @return string|null
    */
    public function getToken(): ?string {
        return $this->token;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('invitation_id', $this->getInvitationId());
        $writer->writeStringValue('token', $this->getToken());
    }

    /**
     * Sets the invitation_id property value. The invitation_id property
     * @param string|null $value Value to set for the invitation_id property.
    */
    public function setInvitationId(?string $value): void {
        $this->invitation_id = $value;
    }

    /**
     * Sets the token property value. The token property
     * @param string|null $value Value to set for the token property.
    */
    public function setToken(?string $value): void {
        $this->token = $value;
    }

}
