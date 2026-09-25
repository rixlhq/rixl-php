<?php

namespace Rixl\Sdk\Auth\V1\Memberships\Item\Invite\Resend;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Rixl\Sdk\Models\Auth\V1\ActorOrgRequest;

class ResendPostRequestBody implements Parsable 
{
    /**
     * @var ActorOrgRequest|null $user The user property
    */
    private ?ActorOrgRequest $user = null;
    
    /**
     * @var string|null $user_id The user_id property
    */
    private ?string $user_id = null;
    
    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return ResendPostRequestBody
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): ResendPostRequestBody {
        return new ResendPostRequestBody();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'user' => fn(ParseNode $n) => $o->setUser($n->getObjectValue([ActorOrgRequest::class, 'createFromDiscriminatorValue'])),
            'user_id' => fn(ParseNode $n) => $o->setUserId($n->getStringValue()),
        ];
    }

    /**
     * Gets the user property value. The user property
     * @return ActorOrgRequest|null
    */
    public function getUser(): ?ActorOrgRequest {
        return $this->user;
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
        $writer->writeObjectValue('user', $this->getUser());
        $writer->writeStringValue('user_id', $this->getUserId());
    }

    /**
     * Sets the user property value. The user property
     * @param ActorOrgRequest|null $value Value to set for the user property.
    */
    public function setUser(?ActorOrgRequest $value): void {
        $this->user = $value;
    }

    /**
     * Sets the user_id property value. The user_id property
     * @param string|null $value Value to set for the user_id property.
    */
    public function setUserId(?string $value): void {
        $this->user_id = $value;
    }

}
