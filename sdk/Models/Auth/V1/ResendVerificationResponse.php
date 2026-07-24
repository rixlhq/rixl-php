<?php

namespace Rixl\Sdk\Models\Auth\V1;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class ResendVerificationResponse implements Parsable 
{
    /**
     * @var bool|null $code_sent The code_sent property
    */
    private ?bool $code_sent = null;
    
    /**
     * @var string|null $message The message property
    */
    private ?string $message = null;
    
    /**
     * @var string|null $verification_id The verification_id property
    */
    private ?string $verification_id = null;
    
    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return ResendVerificationResponse
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): ResendVerificationResponse {
        return new ResendVerificationResponse();
    }

    /**
     * Gets the code_sent property value. The code_sent property
     * @return bool|null
    */
    public function getCodeSent(): ?bool {
        return $this->code_sent;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'code_sent' => fn(ParseNode $n) => $o->setCodeSent($n->getBooleanValue()),
            'message' => fn(ParseNode $n) => $o->setMessage($n->getStringValue()),
            'verification_id' => fn(ParseNode $n) => $o->setVerificationId($n->getStringValue()),
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
     * Gets the verification_id property value. The verification_id property
     * @return string|null
    */
    public function getVerificationId(): ?string {
        return $this->verification_id;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeBooleanValue('code_sent', $this->getCodeSent());
        $writer->writeStringValue('message', $this->getMessage());
        $writer->writeStringValue('verification_id', $this->getVerificationId());
    }

    /**
     * Sets the code_sent property value. The code_sent property
     * @param bool|null $value Value to set for the code_sent property.
    */
    public function setCodeSent(?bool $value): void {
        $this->code_sent = $value;
    }

    /**
     * Sets the message property value. The message property
     * @param string|null $value Value to set for the message property.
    */
    public function setMessage(?string $value): void {
        $this->message = $value;
    }

    /**
     * Sets the verification_id property value. The verification_id property
     * @param string|null $value Value to set for the verification_id property.
    */
    public function setVerificationId(?string $value): void {
        $this->verification_id = $value;
    }

}
