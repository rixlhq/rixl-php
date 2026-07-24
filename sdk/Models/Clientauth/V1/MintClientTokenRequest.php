<?php

namespace Rixl\Sdk\Models\Clientauth\V1;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class MintClientTokenRequest implements Parsable 
{
    /**
     * @var string|null $client_id The client_id property
    */
    private ?string $client_id = null;
    
    /**
     * @var string|null $client_secret The client_secret property
    */
    private ?string $client_secret = null;
    
    /**
     * @var string|null $project_id The project_id property
    */
    private ?string $project_id = null;
    
    /**
     * @var string|null $subject The subject property
    */
    private ?string $subject = null;
    
    /**
     * @var int|null $ttl_minutes The ttl_minutes property
    */
    private ?int $ttl_minutes = null;
    
    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return MintClientTokenRequest
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): MintClientTokenRequest {
        return new MintClientTokenRequest();
    }

    /**
     * Gets the client_id property value. The client_id property
     * @return string|null
    */
    public function getClientId(): ?string {
        return $this->client_id;
    }

    /**
     * Gets the client_secret property value. The client_secret property
     * @return string|null
    */
    public function getClientSecret(): ?string {
        return $this->client_secret;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'client_id' => fn(ParseNode $n) => $o->setClientId($n->getStringValue()),
            'client_secret' => fn(ParseNode $n) => $o->setClientSecret($n->getStringValue()),
            'project_id' => fn(ParseNode $n) => $o->setProjectId($n->getStringValue()),
            'subject' => fn(ParseNode $n) => $o->setSubject($n->getStringValue()),
            'ttl_minutes' => fn(ParseNode $n) => $o->setTtlMinutes($n->getIntegerValue()),
        ];
    }

    /**
     * Gets the project_id property value. The project_id property
     * @return string|null
    */
    public function getProjectId(): ?string {
        return $this->project_id;
    }

    /**
     * Gets the subject property value. The subject property
     * @return string|null
    */
    public function getSubject(): ?string {
        return $this->subject;
    }

    /**
     * Gets the ttl_minutes property value. The ttl_minutes property
     * @return int|null
    */
    public function getTtlMinutes(): ?int {
        return $this->ttl_minutes;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('client_id', $this->getClientId());
        $writer->writeStringValue('client_secret', $this->getClientSecret());
        $writer->writeStringValue('project_id', $this->getProjectId());
        $writer->writeStringValue('subject', $this->getSubject());
        $writer->writeIntegerValue('ttl_minutes', $this->getTtlMinutes());
    }

    /**
     * Sets the client_id property value. The client_id property
     * @param string|null $value Value to set for the client_id property.
    */
    public function setClientId(?string $value): void {
        $this->client_id = $value;
    }

    /**
     * Sets the client_secret property value. The client_secret property
     * @param string|null $value Value to set for the client_secret property.
    */
    public function setClientSecret(?string $value): void {
        $this->client_secret = $value;
    }

    /**
     * Sets the project_id property value. The project_id property
     * @param string|null $value Value to set for the project_id property.
    */
    public function setProjectId(?string $value): void {
        $this->project_id = $value;
    }

    /**
     * Sets the subject property value. The subject property
     * @param string|null $value Value to set for the subject property.
    */
    public function setSubject(?string $value): void {
        $this->subject = $value;
    }

    /**
     * Sets the ttl_minutes property value. The ttl_minutes property
     * @param int|null $value Value to set for the ttl_minutes property.
    */
    public function setTtlMinutes(?int $value): void {
        $this->ttl_minutes = $value;
    }

}
