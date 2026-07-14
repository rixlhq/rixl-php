<?php

namespace Rixl\Sdk\Models\Clientauth\V1;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class MintClientTokenRequest implements Parsable 
{
    /**
     * @var string|null $clientId The clientId property
    */
    private ?string $clientId = null;
    
    /**
     * @var string|null $clientSecret The clientSecret property
    */
    private ?string $clientSecret = null;
    
    /**
     * @var string|null $projectId The projectId property
    */
    private ?string $projectId = null;
    
    /**
     * @var string|null $subject The subject property
    */
    private ?string $subject = null;
    
    /**
     * @var int|null $ttlMinutes The ttlMinutes property
    */
    private ?int $ttlMinutes = null;
    
    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return MintClientTokenRequest
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): MintClientTokenRequest {
        return new MintClientTokenRequest();
    }

    /**
     * Gets the clientId property value. The clientId property
     * @return string|null
    */
    public function getClientId(): ?string {
        return $this->clientId;
    }

    /**
     * Gets the clientSecret property value. The clientSecret property
     * @return string|null
    */
    public function getClientSecret(): ?string {
        return $this->clientSecret;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'clientId' => fn(ParseNode $n) => $o->setClientId($n->getStringValue()),
            'clientSecret' => fn(ParseNode $n) => $o->setClientSecret($n->getStringValue()),
            'projectId' => fn(ParseNode $n) => $o->setProjectId($n->getStringValue()),
            'subject' => fn(ParseNode $n) => $o->setSubject($n->getStringValue()),
            'ttlMinutes' => fn(ParseNode $n) => $o->setTtlMinutes($n->getIntegerValue()),
        ];
    }

    /**
     * Gets the projectId property value. The projectId property
     * @return string|null
    */
    public function getProjectId(): ?string {
        return $this->projectId;
    }

    /**
     * Gets the subject property value. The subject property
     * @return string|null
    */
    public function getSubject(): ?string {
        return $this->subject;
    }

    /**
     * Gets the ttlMinutes property value. The ttlMinutes property
     * @return int|null
    */
    public function getTtlMinutes(): ?int {
        return $this->ttlMinutes;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('clientId', $this->getClientId());
        $writer->writeStringValue('clientSecret', $this->getClientSecret());
        $writer->writeStringValue('projectId', $this->getProjectId());
        $writer->writeStringValue('subject', $this->getSubject());
        $writer->writeIntegerValue('ttlMinutes', $this->getTtlMinutes());
    }

    /**
     * Sets the clientId property value. The clientId property
     * @param string|null $value Value to set for the clientId property.
    */
    public function setClientId(?string $value): void {
        $this->clientId = $value;
    }

    /**
     * Sets the clientSecret property value. The clientSecret property
     * @param string|null $value Value to set for the clientSecret property.
    */
    public function setClientSecret(?string $value): void {
        $this->clientSecret = $value;
    }

    /**
     * Sets the projectId property value. The projectId property
     * @param string|null $value Value to set for the projectId property.
    */
    public function setProjectId(?string $value): void {
        $this->projectId = $value;
    }

    /**
     * Sets the subject property value. The subject property
     * @param string|null $value Value to set for the subject property.
    */
    public function setSubject(?string $value): void {
        $this->subject = $value;
    }

    /**
     * Sets the ttlMinutes property value. The ttlMinutes property
     * @param int|null $value Value to set for the ttlMinutes property.
    */
    public function setTtlMinutes(?int $value): void {
        $this->ttlMinutes = $value;
    }

}
