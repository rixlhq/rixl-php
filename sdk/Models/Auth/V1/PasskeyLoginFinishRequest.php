<?php

namespace Rixl\Sdk\Models\Auth\V1;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Psr\Http\Message\StreamInterface;

class PasskeyLoginFinishRequest implements Parsable 
{
    /**
     * @var string|null $challenge_id The challenge_id property
    */
    private ?string $challenge_id = null;
    
    /**
     * @var StreamInterface|null $credential The credential property
    */
    private ?StreamInterface $credential = null;
    
    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return PasskeyLoginFinishRequest
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): PasskeyLoginFinishRequest {
        return new PasskeyLoginFinishRequest();
    }

    /**
     * Gets the challenge_id property value. The challenge_id property
     * @return string|null
    */
    public function getChallengeId(): ?string {
        return $this->challenge_id;
    }

    /**
     * Gets the credential property value. The credential property
     * @return StreamInterface|null
    */
    public function getCredential(): ?StreamInterface {
        return $this->credential;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'challenge_id' => fn(ParseNode $n) => $o->setChallengeId($n->getStringValue()),
            'credential' => fn(ParseNode $n) => $o->setCredential($n->getBinaryContent()),
        ];
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('challenge_id', $this->getChallengeId());
        $writer->writeBinaryContent('credential', $this->getCredential());
    }

    /**
     * Sets the challenge_id property value. The challenge_id property
     * @param string|null $value Value to set for the challenge_id property.
    */
    public function setChallengeId(?string $value): void {
        $this->challenge_id = $value;
    }

    /**
     * Sets the credential property value. The credential property
     * @param StreamInterface|null $value Value to set for the credential property.
    */
    public function setCredential(?StreamInterface $value): void {
        $this->credential = $value;
    }

}
