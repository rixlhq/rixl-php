<?php

namespace Rixl\Sdk\Models\Auth\V1;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class VerifyTOTPForLoginRequest implements Parsable 
{
    /**
     * @var string|null $challenge_id The challenge_id property
    */
    private ?string $challenge_id = null;
    
    /**
     * @var string|null $code The code property
    */
    private ?string $code = null;
    
    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return VerifyTOTPForLoginRequest
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): VerifyTOTPForLoginRequest {
        return new VerifyTOTPForLoginRequest();
    }

    /**
     * Gets the challenge_id property value. The challenge_id property
     * @return string|null
    */
    public function getChallengeId(): ?string {
        return $this->challenge_id;
    }

    /**
     * Gets the code property value. The code property
     * @return string|null
    */
    public function getCode(): ?string {
        return $this->code;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'challenge_id' => fn(ParseNode $n) => $o->setChallengeId($n->getStringValue()),
            'code' => fn(ParseNode $n) => $o->setCode($n->getStringValue()),
        ];
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('challenge_id', $this->getChallengeId());
        $writer->writeStringValue('code', $this->getCode());
    }

    /**
     * Sets the challenge_id property value. The challenge_id property
     * @param string|null $value Value to set for the challenge_id property.
    */
    public function setChallengeId(?string $value): void {
        $this->challenge_id = $value;
    }

    /**
     * Sets the code property value. The code property
     * @param string|null $value Value to set for the code property.
    */
    public function setCode(?string $value): void {
        $this->code = $value;
    }

}
