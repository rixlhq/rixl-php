<?php

namespace Rixl\Sdk\Models\Auth\V1;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class RegisterResponse implements Parsable 
{
    /**
     * @var bool|null $emailVerificationSent The emailVerificationSent property
    */
    private ?bool $emailVerificationSent = null;
    
    /**
     * @var string|null $message The message property
    */
    private ?string $message = null;
    
    /**
     * @var string|null $userId The userId property
    */
    private ?string $userId = null;
    
    /**
     * @var string|null $verificationId The verificationId property
    */
    private ?string $verificationId = null;
    
    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return RegisterResponse
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): RegisterResponse {
        return new RegisterResponse();
    }

    /**
     * Gets the emailVerificationSent property value. The emailVerificationSent property
     * @return bool|null
    */
    public function getEmailVerificationSent(): ?bool {
        return $this->emailVerificationSent;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'emailVerificationSent' => fn(ParseNode $n) => $o->setEmailVerificationSent($n->getBooleanValue()),
            'message' => fn(ParseNode $n) => $o->setMessage($n->getStringValue()),
            'userId' => fn(ParseNode $n) => $o->setUserId($n->getStringValue()),
            'verificationId' => fn(ParseNode $n) => $o->setVerificationId($n->getStringValue()),
        ];
    }

    /**
     * Gets the message property value. The message property
     * @return string|null
    */
    public function getMessage(): ?string {
        return $this->message;
    }

    /**
     * Gets the userId property value. The userId property
     * @return string|null
    */
    public function getUserId(): ?string {
        return $this->userId;
    }

    /**
     * Gets the verificationId property value. The verificationId property
     * @return string|null
    */
    public function getVerificationId(): ?string {
        return $this->verificationId;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeBooleanValue('emailVerificationSent', $this->getEmailVerificationSent());
        $writer->writeStringValue('message', $this->getMessage());
        $writer->writeStringValue('userId', $this->getUserId());
        $writer->writeStringValue('verificationId', $this->getVerificationId());
    }

    /**
     * Sets the emailVerificationSent property value. The emailVerificationSent property
     * @param bool|null $value Value to set for the emailVerificationSent property.
    */
    public function setEmailVerificationSent(?bool $value): void {
        $this->emailVerificationSent = $value;
    }

    /**
     * Sets the message property value. The message property
     * @param string|null $value Value to set for the message property.
    */
    public function setMessage(?string $value): void {
        $this->message = $value;
    }

    /**
     * Sets the userId property value. The userId property
     * @param string|null $value Value to set for the userId property.
    */
    public function setUserId(?string $value): void {
        $this->userId = $value;
    }

    /**
     * Sets the verificationId property value. The verificationId property
     * @param string|null $value Value to set for the verificationId property.
    */
    public function setVerificationId(?string $value): void {
        $this->verificationId = $value;
    }

}
