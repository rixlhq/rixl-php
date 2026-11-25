<?php

namespace Rixl\Sdk\Models\Auth\V1;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class ResendVerificationRequest implements Parsable 
{
    /**
     * @var string|null $email The email property
    */
    private ?string $email = null;
    
    /**
     * @var string|null $verification_id verification_id names the pending sign-up to resend, as returned by Register. A pending sign-up is never looked up by email alone.
    */
    private ?string $verification_id = null;
    
    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return ResendVerificationRequest
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): ResendVerificationRequest {
        return new ResendVerificationRequest();
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
            'verification_id' => fn(ParseNode $n) => $o->setVerificationId($n->getStringValue()),
        ];
    }

    /**
     * Gets the verification_id property value. verification_id names the pending sign-up to resend, as returned by Register. A pending sign-up is never looked up by email alone.
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
        $writer->writeStringValue('email', $this->getEmail());
        $writer->writeStringValue('verification_id', $this->getVerificationId());
    }

    /**
     * Sets the email property value. The email property
     * @param string|null $value Value to set for the email property.
    */
    public function setEmail(?string $value): void {
        $this->email = $value;
    }

    /**
     * Sets the verification_id property value. verification_id names the pending sign-up to resend, as returned by Register. A pending sign-up is never looked up by email alone.
     * @param string|null $value Value to set for the verification_id property.
    */
    public function setVerificationId(?string $value): void {
        $this->verification_id = $value;
    }

}
