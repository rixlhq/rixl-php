<?php

namespace Rixl\Sdk\Models\Auth\V1;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Psr\Http\Message\StreamInterface;

class PasskeyLoginFinishRequest implements Parsable 
{
    /**
     * @var StreamInterface|null $credential The credential property
    */
    private ?StreamInterface $credential = null;
    
    /**
     * @var string|null $session_id The session_id property
    */
    private ?string $session_id = null;
    
    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return PasskeyLoginFinishRequest
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): PasskeyLoginFinishRequest {
        return new PasskeyLoginFinishRequest();
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
            'credential' => fn(ParseNode $n) => $o->setCredential($n->getBinaryContent()),
            'session_id' => fn(ParseNode $n) => $o->setSessionId($n->getStringValue()),
        ];
    }

    /**
     * Gets the session_id property value. The session_id property
     * @return string|null
    */
    public function getSessionId(): ?string {
        return $this->session_id;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeBinaryContent('credential', $this->getCredential());
        $writer->writeStringValue('session_id', $this->getSessionId());
    }

    /**
     * Sets the credential property value. The credential property
     * @param StreamInterface|null $value Value to set for the credential property.
    */
    public function setCredential(?StreamInterface $value): void {
        $this->credential = $value;
    }

    /**
     * Sets the session_id property value. The session_id property
     * @param string|null $value Value to set for the session_id property.
    */
    public function setSessionId(?string $value): void {
        $this->session_id = $value;
    }

}
