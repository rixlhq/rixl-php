<?php

namespace Rixl\Sdk\Models\Auth\V1;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class UnsubscribeBlogByEmailRequest implements Parsable 
{
    /**
     * @var string|null $email The email property
    */
    private ?string $email = null;
    
    /**
     * @var UserRequest|null $user The user property
    */
    private ?UserRequest $user = null;
    
    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return UnsubscribeBlogByEmailRequest
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): UnsubscribeBlogByEmailRequest {
        return new UnsubscribeBlogByEmailRequest();
    }

    /**
     * Gets the email property value. The email property
     * @return string|null
    */
    public function getEmail(): ?string {
        return $this->email;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'email' => fn(ParseNode $n) => $o->setEmail($n->getStringValue()),
            'user' => fn(ParseNode $n) => $o->setUser($n->getObjectValue([UserRequest::class, 'createFromDiscriminatorValue'])),
        ];
    }

    /**
     * Gets the user property value. The user property
     * @return UserRequest|null
    */
    public function getUser(): ?UserRequest {
        return $this->user;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('email', $this->getEmail());
        $writer->writeObjectValue('user', $this->getUser());
    }

    /**
     * Sets the email property value. The email property
     * @param string|null $value Value to set for the email property.
    */
    public function setEmail(?string $value): void {
        $this->email = $value;
    }

    /**
     * Sets the user property value. The user property
     * @param UserRequest|null $value Value to set for the user property.
    */
    public function setUser(?UserRequest $value): void {
        $this->user = $value;
    }

}
