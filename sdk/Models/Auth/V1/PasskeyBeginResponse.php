<?php

namespace Rixl\Sdk\Models\Auth\V1;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Psr\Http\Message\StreamInterface;

class PasskeyBeginResponse implements Parsable 
{
    /**
     * @var StreamInterface|null $options The options property
    */
    private ?StreamInterface $options = null;
    
    /**
     * @var string|null $sessionId The sessionId property
    */
    private ?string $sessionId = null;
    
    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return PasskeyBeginResponse
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): PasskeyBeginResponse {
        return new PasskeyBeginResponse();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'options' => fn(ParseNode $n) => $o->setOptions($n->getBinaryContent()),
            'sessionId' => fn(ParseNode $n) => $o->setSessionId($n->getStringValue()),
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
     * Gets the sessionId property value. The sessionId property
     * @return string|null
    */
    public function getSessionId(): ?string {
        return $this->sessionId;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeBinaryContent('options', $this->getOptions());
        $writer->writeStringValue('sessionId', $this->getSessionId());
    }

    /**
     * Sets the options property value. The options property
     * @param StreamInterface|null $value Value to set for the options property.
    */
    public function setOptions(?StreamInterface $value): void {
        $this->options = $value;
    }

    /**
     * Sets the sessionId property value. The sessionId property
     * @param string|null $value Value to set for the sessionId property.
    */
    public function setSessionId(?string $value): void {
        $this->sessionId = $value;
    }

}
