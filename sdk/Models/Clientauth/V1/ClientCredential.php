<?php

namespace Rixl\Sdk\Models\Clientauth\V1;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class ClientCredential implements Parsable 
{
    /**
     * @var string|null $alg The alg property
    */
    private ?string $alg = null;
    
    /**
     * @var string|null $client_id The client_id property
    */
    private ?string $client_id = null;
    
    /**
     * @var DateTime|null $created_at The created_at property
    */
    private ?DateTime $created_at = null;
    
    /**
     * @var string|null $id The id property
    */
    private ?string $id = null;
    
    /**
     * @var string|null $kid The kid property
    */
    private ?string $kid = null;
    
    /**
     * @var DateTime|null $last_used_at The last_used_at property
    */
    private ?DateTime $last_used_at = null;
    
    /**
     * @var string|null $name The name property
    */
    private ?string $name = null;
    
    /**
     * @var ClientCredentialStatus|null $status The status property
    */
    private ?ClientCredentialStatus $status = null;
    
    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return ClientCredential
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): ClientCredential {
        return new ClientCredential();
    }

    /**
     * Gets the alg property value. The alg property
     * @return string|null
    */
    public function getAlg(): ?string {
        return $this->alg;
    }

    /**
     * Gets the client_id property value. The client_id property
     * @return string|null
    */
    public function getClientId(): ?string {
        return $this->client_id;
    }

    /**
     * Gets the created_at property value. The created_at property
     * @return DateTime|null
    */
    public function getCreatedAt(): ?DateTime {
        return $this->created_at;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'alg' => fn(ParseNode $n) => $o->setAlg($n->getStringValue()),
            'client_id' => fn(ParseNode $n) => $o->setClientId($n->getStringValue()),
            'created_at' => fn(ParseNode $n) => $o->setCreatedAt($n->getDateTimeValue()),
            'id' => fn(ParseNode $n) => $o->setId($n->getStringValue()),
            'kid' => fn(ParseNode $n) => $o->setKid($n->getStringValue()),
            'last_used_at' => fn(ParseNode $n) => $o->setLastUsedAt($n->getDateTimeValue()),
            'name' => fn(ParseNode $n) => $o->setName($n->getStringValue()),
            'status' => fn(ParseNode $n) => $o->setStatus($n->getEnumValue(ClientCredentialStatus::class)),
        ];
    }

    /**
     * Gets the id property value. The id property
     * @return string|null
    */
    public function getId(): ?string {
        return $this->id;
    }

    /**
     * Gets the kid property value. The kid property
     * @return string|null
    */
    public function getKid(): ?string {
        return $this->kid;
    }

    /**
     * Gets the last_used_at property value. The last_used_at property
     * @return DateTime|null
    */
    public function getLastUsedAt(): ?DateTime {
        return $this->last_used_at;
    }

    /**
     * Gets the name property value. The name property
     * @return string|null
    */
    public function getName(): ?string {
        return $this->name;
    }

    /**
     * Gets the status property value. The status property
     * @return ClientCredentialStatus|null
    */
    public function getStatus(): ?ClientCredentialStatus {
        return $this->status;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('alg', $this->getAlg());
        $writer->writeStringValue('client_id', $this->getClientId());
        $writer->writeDateTimeValue('created_at', $this->getCreatedAt());
        $writer->writeStringValue('id', $this->getId());
        $writer->writeStringValue('kid', $this->getKid());
        $writer->writeDateTimeValue('last_used_at', $this->getLastUsedAt());
        $writer->writeStringValue('name', $this->getName());
        $writer->writeEnumValue('status', $this->getStatus());
    }

    /**
     * Sets the alg property value. The alg property
     * @param string|null $value Value to set for the alg property.
    */
    public function setAlg(?string $value): void {
        $this->alg = $value;
    }

    /**
     * Sets the client_id property value. The client_id property
     * @param string|null $value Value to set for the client_id property.
    */
    public function setClientId(?string $value): void {
        $this->client_id = $value;
    }

    /**
     * Sets the created_at property value. The created_at property
     * @param DateTime|null $value Value to set for the created_at property.
    */
    public function setCreatedAt(?DateTime $value): void {
        $this->created_at = $value;
    }

    /**
     * Sets the id property value. The id property
     * @param string|null $value Value to set for the id property.
    */
    public function setId(?string $value): void {
        $this->id = $value;
    }

    /**
     * Sets the kid property value. The kid property
     * @param string|null $value Value to set for the kid property.
    */
    public function setKid(?string $value): void {
        $this->kid = $value;
    }

    /**
     * Sets the last_used_at property value. The last_used_at property
     * @param DateTime|null $value Value to set for the last_used_at property.
    */
    public function setLastUsedAt(?DateTime $value): void {
        $this->last_used_at = $value;
    }

    /**
     * Sets the name property value. The name property
     * @param string|null $value Value to set for the name property.
    */
    public function setName(?string $value): void {
        $this->name = $value;
    }

    /**
     * Sets the status property value. The status property
     * @param ClientCredentialStatus|null $value Value to set for the status property.
    */
    public function setStatus(?ClientCredentialStatus $value): void {
        $this->status = $value;
    }

}
