<?php

namespace Rixl\Sdk\Models\Auth\V1;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Psr\Http\Message\StreamInterface;

class PasskeyRegisterFinishRequest implements Parsable 
{
    /**
     * @var StreamInterface|null $credential The credential property
    */
    private ?StreamInterface $credential = null;
    
    /**
     * @var string|null $name The name property
    */
    private ?string $name = null;
    
    /**
     * @var string|null $session_id The session_id property
    */
    private ?string $session_id = null;
    
    /**
     * @var string|null $user_id The user_id property
    */
    private ?string $user_id = null;
    
    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return PasskeyRegisterFinishRequest
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): PasskeyRegisterFinishRequest {
        return new PasskeyRegisterFinishRequest();
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
            'name' => fn(ParseNode $n) => $o->setName($n->getStringValue()),
            'session_id' => fn(ParseNode $n) => $o->setSessionId($n->getStringValue()),
            'user_id' => fn(ParseNode $n) => $o->setUserId($n->getStringValue()),
        ];
    }

    /**
     * Gets the name property value. The name property
     * @return string|null
    */
    public function getName(): ?string {
        return $this->name;
    }

    /**
     * Gets the session_id property value. The session_id property
     * @return string|null
    */
    public function getSessionId(): ?string {
        return $this->session_id;
    }

    /**
     * Gets the user_id property value. The user_id property
     * @return string|null
    */
    public function getUserId(): ?string {
        return $this->user_id;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeBinaryContent('credential', $this->getCredential());
        $writer->writeStringValue('name', $this->getName());
        $writer->writeStringValue('session_id', $this->getSessionId());
        $writer->writeStringValue('user_id', $this->getUserId());
    }

    /**
     * Sets the credential property value. The credential property
     * @param StreamInterface|null $value Value to set for the credential property.
    */
    public function setCredential(?StreamInterface $value): void {
        $this->credential = $value;
    }

    /**
     * Sets the name property value. The name property
     * @param string|null $value Value to set for the name property.
    */
    public function setName(?string $value): void {
        $this->name = $value;
    }

    /**
     * Sets the session_id property value. The session_id property
     * @param string|null $value Value to set for the session_id property.
    */
    public function setSessionId(?string $value): void {
        $this->session_id = $value;
    }

    /**
     * Sets the user_id property value. The user_id property
     * @param string|null $value Value to set for the user_id property.
    */
    public function setUserId(?string $value): void {
        $this->user_id = $value;
    }

}
