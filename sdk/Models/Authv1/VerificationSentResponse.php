<?php

namespace Rixl\Sdk\Models\Authv1;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class VerificationSentResponse implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var string|null $can_resend_at The can_resend_at property
    */
    private ?string $can_resend_at = null;
    
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
     * Instantiates a new VerificationSentResponse and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return VerificationSentResponse
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): VerificationSentResponse {
        return new VerificationSentResponse();
    }

    /**
     * Gets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        return $this->additionalData;
    }

    /**
     * Gets the can_resend_at property value. The can_resend_at property
     * @return string|null
    */
    public function getCanResendAt(): ?string {
        return $this->can_resend_at;
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
            'can_resend_at' => fn(ParseNode $n) => $o->setCanResendAt($n->getStringValue()),
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
        $writer->writeStringValue('can_resend_at', $this->getCanResendAt());
        $writer->writeBooleanValue('code_sent', $this->getCodeSent());
        $writer->writeStringValue('message', $this->getMessage());
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
     * Sets the can_resend_at property value. The can_resend_at property
     * @param string|null $value Value to set for the can_resend_at property.
    */
    public function setCanResendAt(?string $value): void {
        $this->can_resend_at = $value;
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
