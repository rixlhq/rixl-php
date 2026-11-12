<?php

namespace Rixl\Sdk\Auth\V1\Memberships\Item\Username;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class UsernamePatchRequestBody implements Parsable 
{
    /**
     * @var UsernamePatchRequestBody_user|null $user The user property
    */
    private ?UsernamePatchRequestBody_user $user = null;
    
    /**
     * @var string|null $username The username property
    */
    private ?string $username = null;
    
    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return UsernamePatchRequestBody
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): UsernamePatchRequestBody {
        return new UsernamePatchRequestBody();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'user' => fn(ParseNode $n) => $o->setUser($n->getObjectValue([UsernamePatchRequestBody_user::class, 'createFromDiscriminatorValue'])),
            'username' => fn(ParseNode $n) => $o->setUsername($n->getStringValue()),
        ];
    }

    /**
     * Gets the user property value. The user property
     * @return UsernamePatchRequestBody_user|null
    */
    public function getUser(): ?UsernamePatchRequestBody_user {
        return $this->user;
    }

    /**
     * Gets the username property value. The username property
     * @return string|null
    */
    public function getUsername(): ?string {
        return $this->username;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeObjectValue('user', $this->getUser());
        $writer->writeStringValue('username', $this->getUsername());
    }

    /**
     * Sets the user property value. The user property
     * @param UsernamePatchRequestBody_user|null $value Value to set for the user property.
    */
    public function setUser(?UsernamePatchRequestBody_user $value): void {
        $this->user = $value;
    }

    /**
     * Sets the username property value. The username property
     * @param string|null $value Value to set for the username property.
    */
    public function setUsername(?string $value): void {
        $this->username = $value;
    }

}
