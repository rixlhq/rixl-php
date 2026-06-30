<?php

namespace Rixl\Sdk\Models\Authv1;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class RegisterResponse implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var bool|null $email_verification_sent The email_verification_sent property
    */
    private ?bool $email_verification_sent = null;
    
    /**
     * @var string|null $message The message property
    */
    private ?string $message = null;
    
    /**
     * @var string|null $user_id The user_id property
    */
    private ?string $user_id = null;
    
    /**
     * @var string|null $verification_id The verification_id property
    */
    private ?string $verification_id = null;
    
    /**
     * Instantiates a new RegisterResponse and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return RegisterResponse
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): RegisterResponse {
        return new RegisterResponse();
    }

    /**
     * Gets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        return $this->additionalData;
    }

    /**
     * Gets the email_verification_sent property value. The email_verification_sent property
     * @return bool|null
    */
    public function getEmailVerificationSent(): ?bool {
        return $this->email_verification_sent;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'email_verification_sent' => fn(ParseNode $n) => $o->setEmailVerificationSent($n->getBooleanValue()),
            'message' => fn(ParseNode $n) => $o->setMessage($n->getStringValue()),
            'user_id' => fn(ParseNode $n) => $o->setUserId($n->getStringValue()),
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
     * Gets the user_id property value. The user_id property
     * @return string|null
    */
    public function getUserId(): ?string {
        return $this->user_id;
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
        $writer->writeBooleanValue('email_verification_sent', $this->getEmailVerificationSent());
        $writer->writeStringValue('message', $this->getMessage());
        $writer->writeStringValue('user_id', $this->getUserId());
        $writer->writeStringValue('verification_id', $this->getVerificationId());
        $writer->writeAdditionalData($this->getAdditionalData());
    }

    /**
     * Sets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @param array<string,mixed> $value Value to set for the AdditionalData property.
    */
    public function setAdditionalData(?array $value): void {
        $this->additionalData = $value;
    }

    /**
     * Sets the email_verification_sent property value. The email_verification_sent property
     * @param bool|null $value Value to set for the email_verification_sent property.
    */
    public function setEmailVerificationSent(?bool $value): void {
        $this->email_verification_sent = $value;
    }

    /**
     * Sets the message property value. The message property
     * @param string|null $value Value to set for the message property.
    */
    public function setMessage(?string $value): void {
        $this->message = $value;
    }

    /**
     * Sets the user_id property value. The user_id property
     * @param string|null $value Value to set for the user_id property.
    */
    public function setUserId(?string $value): void {
        $this->user_id = $value;
    }

    /**
     * Sets the verification_id property value. The verification_id property
     * @param string|null $value Value to set for the verification_id property.
    */
    public function setVerificationId(?string $value): void {
        $this->verification_id = $value;
    }

}
