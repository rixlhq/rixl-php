<?php

namespace Rixl\Sdk\Models\Auth\V1;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Psr\Http\Message\StreamInterface;

class PasskeyBeginResponse implements Parsable 
{
    /**
     * @var string|null $challenge_id The challenge_id property
    */
    private ?string $challenge_id = null;
    
    /**
     * @var StreamInterface|null $options The options property
    */
    private ?StreamInterface $options = null;
    
    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return PasskeyBeginResponse
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): PasskeyBeginResponse {
        return new PasskeyBeginResponse();
    }

    /**
     * Gets the challenge_id property value. The challenge_id property
     * @return string|null
    */
    public function getChallengeId(): ?string {
        return $this->challenge_id;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'challenge_id' => fn(ParseNode $n) => $o->setChallengeId($n->getStringValue()),
            'options' => fn(ParseNode $n) => $o->setOptions($n->getBinaryContent()),
        ];
    }

    /**
     * Gets the options property value. The options property
     * @return StreamInterface|null
    */
    public function getOptions(): ?StreamInterface {
        return $this->options;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('challenge_id', $this->getChallengeId());
        $writer->writeBinaryContent('options', $this->getOptions());
    }

    /**
     * Sets the challenge_id property value. The challenge_id property
     * @param string|null $value Value to set for the challenge_id property.
    */
    public function setChallengeId(?string $value): void {
        $this->challenge_id = $value;
    }

    /**
     * Sets the options property value. The options property
     * @param StreamInterface|null $value Value to set for the options property.
    */
    public function setOptions(?StreamInterface $value): void {
        $this->options = $value;
    }

}
