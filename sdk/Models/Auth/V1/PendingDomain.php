<?php

namespace Rixl\Sdk\Models\Auth\V1;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class PendingDomain implements Parsable 
{
    /**
     * @var DateTime|null $expires_at The expires_at property
    */
    private ?DateTime $expires_at = null;
    
    /**
     * @var string|null $verification_token The verification_token property
    */
    private ?string $verification_token = null;
    
    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return PendingDomain
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): PendingDomain {
        return new PendingDomain();
    }

    /**
     * Gets the expires_at property value. The expires_at property
     * @return DateTime|null
    */
    public function getExpiresAt(): ?DateTime {
        return $this->expires_at;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'expires_at' => fn(ParseNode $n) => $o->setExpiresAt($n->getDateTimeValue()),
            'verification_token' => fn(ParseNode $n) => $o->setVerificationToken($n->getStringValue()),
        ];
    }

    /**
     * Gets the verification_token property value. The verification_token property
     * @return string|null
    */
    public function getVerificationToken(): ?string {
        return $this->verification_token;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeDateTimeValue('expires_at', $this->getExpiresAt());
        $writer->writeStringValue('verification_token', $this->getVerificationToken());
    }

    /**
     * Sets the expires_at property value. The expires_at property
     * @param DateTime|null $value Value to set for the expires_at property.
    */
    public function setExpiresAt(?DateTime $value): void {
        $this->expires_at = $value;
    }

    /**
     * Sets the verification_token property value. The verification_token property
     * @param string|null $value Value to set for the verification_token property.
    */
    public function setVerificationToken(?string $value): void {
        $this->verification_token = $value;
    }

}
