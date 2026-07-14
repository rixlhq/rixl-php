<?php

namespace Rixl\Sdk\Models\Auth\V1;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class EmailStatusResponse implements Parsable 
{
    /**
     * @var string|null $email The email property
    */
    private ?string $email = null;
    
    /**
     * @var bool|null $hasEmail The hasEmail property
    */
    private ?bool $hasEmail = null;
    
    /**
     * @var bool|null $verified The verified property
    */
    private ?bool $verified = null;
    
    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return EmailStatusResponse
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): EmailStatusResponse {
        return new EmailStatusResponse();
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
            'hasEmail' => fn(ParseNode $n) => $o->setHasEmail($n->getBooleanValue()),
            'verified' => fn(ParseNode $n) => $o->setVerified($n->getBooleanValue()),
        ];
    }

    /**
     * Gets the hasEmail property value. The hasEmail property
     * @return bool|null
    */
    public function getHasEmail(): ?bool {
        return $this->hasEmail;
    }

    /**
     * Gets the verified property value. The verified property
     * @return bool|null
    */
    public function getVerified(): ?bool {
        return $this->verified;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('email', $this->getEmail());
        $writer->writeBooleanValue('hasEmail', $this->getHasEmail());
        $writer->writeBooleanValue('verified', $this->getVerified());
    }

    /**
     * Sets the email property value. The email property
     * @param string|null $value Value to set for the email property.
    */
    public function setEmail(?string $value): void {
        $this->email = $value;
    }

    /**
     * Sets the hasEmail property value. The hasEmail property
     * @param bool|null $value Value to set for the hasEmail property.
    */
    public function setHasEmail(?bool $value): void {
        $this->hasEmail = $value;
    }

    /**
     * Sets the verified property value. The verified property
     * @param bool|null $value Value to set for the verified property.
    */
    public function setVerified(?bool $value): void {
        $this->verified = $value;
    }

}
