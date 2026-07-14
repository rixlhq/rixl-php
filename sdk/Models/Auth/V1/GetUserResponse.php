<?php

namespace Rixl\Sdk\Models\Auth\V1;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class GetUserResponse implements Parsable 
{
    /**
     * @var string|null $email The email property
    */
    private ?string $email = null;
    
    /**
     * @var bool|null $emailVerified The emailVerified property
    */
    private ?bool $emailVerified = null;
    
    /**
     * @var string|null $userId The userId property
    */
    private ?string $userId = null;
    
    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return GetUserResponse
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): GetUserResponse {
        return new GetUserResponse();
    }

    /**
     * Gets the email property value. The email property
     * @return string|null
    */
    public function getEmail(): ?string {
        return $this->email;
    }

    /**
     * Gets the emailVerified property value. The emailVerified property
     * @return bool|null
    */
    public function getEmailVerified(): ?bool {
        return $this->emailVerified;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'email' => fn(ParseNode $n) => $o->setEmail($n->getStringValue()),
            'emailVerified' => fn(ParseNode $n) => $o->setEmailVerified($n->getBooleanValue()),
            'userId' => fn(ParseNode $n) => $o->setUserId($n->getStringValue()),
        ];
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
        $writer->writeStringValue('email', $this->getEmail());
        $writer->writeBooleanValue('emailVerified', $this->getEmailVerified());
        $writer->writeStringValue('userId', $this->getUserId());
    }

    /**
     * Sets the email property value. The email property
     * @param string|null $value Value to set for the email property.
    */
    public function setEmail(?string $value): void {
        $this->email = $value;
    }

    /**
     * Sets the emailVerified property value. The emailVerified property
     * @param bool|null $value Value to set for the emailVerified property.
    */
    public function setEmailVerified(?bool $value): void {
        $this->emailVerified = $value;
    }

    /**
     * Sets the userId property value. The userId property
     * @param string|null $value Value to set for the userId property.
    */
    public function setUserId(?string $value): void {
        $this->userId = $value;
    }

}
