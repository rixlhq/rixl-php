<?php

namespace Rixl\Sdk\Models\Auth\V1;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class ResendVerificationResponse implements Parsable 
{
    /**
     * @var bool|null $codeSent The codeSent property
    */
    private ?bool $codeSent = null;
    
    /**
     * @var string|null $message The message property
    */
    private ?string $message = null;
    
    /**
     * @var string|null $verificationId The verificationId property
    */
    private ?string $verificationId = null;
    
    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return ResendVerificationResponse
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): ResendVerificationResponse {
        return new ResendVerificationResponse();
    }

    /**
     * Gets the codeSent property value. The codeSent property
     * @return bool|null
    */
    public function getCodeSent(): ?bool {
        return $this->codeSent;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'codeSent' => fn(ParseNode $n) => $o->setCodeSent($n->getBooleanValue()),
            'message' => fn(ParseNode $n) => $o->setMessage($n->getStringValue()),
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
        $writer->writeBooleanValue('codeSent', $this->getCodeSent());
        $writer->writeStringValue('message', $this->getMessage());
        $writer->writeStringValue('verificationId', $this->getVerificationId());
    }

    /**
     * Sets the codeSent property value. The codeSent property
     * @param bool|null $value Value to set for the codeSent property.
    */
    public function setCodeSent(?bool $value): void {
        $this->codeSent = $value;
    }

    /**
     * Sets the message property value. The message property
     * @param string|null $value Value to set for the message property.
    */
    public function setMessage(?string $value): void {
        $this->message = $value;
    }

    /**
     * Sets the verificationId property value. The verificationId property
     * @param string|null $value Value to set for the verificationId property.
    */
    public function setVerificationId(?string $value): void {
        $this->verificationId = $value;
    }

}
