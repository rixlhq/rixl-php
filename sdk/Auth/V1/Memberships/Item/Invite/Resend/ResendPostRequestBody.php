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
     * @var string|null $userId The userId property
    */
    private ?string $userId = null;
    
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
            'userId' => fn(ParseNode $n) => $o->setUserId($n->getStringValue()),
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
     * Gets the userId property value. The userId property
     * @return string|null
    */
    public function getUserId(): ?string {
        return $this->userId;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeObjectValue('user', $this->getUser());
        $writer->writeStringValue('userId', $this->getUserId());
    }

    /**
     * Sets the user property value. The user property
     * @param ActorOrgRequest|null $value Value to set for the user property.
    */
    public function setUser(?ActorOrgRequest $value): void {
        $this->user = $value;
    }

    /**
     * Sets the userId property value. The userId property
     * @param string|null $value Value to set for the userId property.
    */
    public function setUserId(?string $value): void {
        $this->userId = $value;
    }

}
