<?php

namespace Rixl\Sdk\Models\Auth\V1;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

class Passkey implements Parsable 
{
    /**
     * @var string|null $aaguid The aaguid property
    */
    private ?string $aaguid = null;
    
    /**
     * @var bool|null $backupState The backupState property
    */
    private ?bool $backupState = null;
    
    /**
     * @var string|null $createdAt The createdAt property
    */
    private ?string $createdAt = null;
    
    /**
     * @var string|null $credentialId The credentialId property
    */
    private ?string $credentialId = null;
    
    /**
     * @var string|null $id The id property
    */
    private ?string $id = null;
    
    /**
     * @var string|null $lastUsedAt The lastUsedAt property
    */
    private ?string $lastUsedAt = null;
    
    /**
     * @var string|null $name The name property
    */
    private ?string $name = null;
    
    /**
     * @var array<string>|null $transports The transports property
    */
    private ?array $transports = null;
    
    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return Passkey
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): Passkey {
        return new Passkey();
    }

    /**
     * Gets the aaguid property value. The aaguid property
     * @return string|null
    */
    public function getAaguid(): ?string {
        return $this->aaguid;
    }

    /**
     * Gets the backupState property value. The backupState property
     * @return bool|null
    */
    public function getBackupState(): ?bool {
        return $this->backupState;
    }

    /**
     * Gets the createdAt property value. The createdAt property
     * @return string|null
    */
    public function getCreatedAt(): ?string {
        return $this->createdAt;
    }

    /**
     * Gets the credentialId property value. The credentialId property
     * @return string|null
    */
    public function getCredentialId(): ?string {
        return $this->credentialId;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'aaguid' => fn(ParseNode $n) => $o->setAaguid($n->getStringValue()),
            'backupState' => fn(ParseNode $n) => $o->setBackupState($n->getBooleanValue()),
            'createdAt' => fn(ParseNode $n) => $o->setCreatedAt($n->getStringValue()),
            'credentialId' => fn(ParseNode $n) => $o->setCredentialId($n->getStringValue()),
            'id' => fn(ParseNode $n) => $o->setId($n->getStringValue()),
            'lastUsedAt' => fn(ParseNode $n) => $o->setLastUsedAt($n->getStringValue()),
            'name' => fn(ParseNode $n) => $o->setName($n->getStringValue()),
            'transports' => function (ParseNode $n) {
                $val = $n->getCollectionOfPrimitiveValues();
                if (is_array($val)) {
                    TypeUtils::validateCollectionValues($val, 'string');
                }
                /** @var array<string>|null $val */
                $this->setTransports($val);
            },
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
     * Gets the lastUsedAt property value. The lastUsedAt property
     * @return string|null
    */
    public function getLastUsedAt(): ?string {
        return $this->lastUsedAt;
    }

    /**
     * Gets the name property value. The name property
     * @return string|null
    */
    public function getName(): ?string {
        return $this->name;
    }

    /**
     * Gets the transports property value. The transports property
     * @return array<string>|null
    */
    public function getTransports(): ?array {
        return $this->transports;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('aaguid', $this->getAaguid());
        $writer->writeBooleanValue('backupState', $this->getBackupState());
        $writer->writeStringValue('createdAt', $this->getCreatedAt());
        $writer->writeStringValue('credentialId', $this->getCredentialId());
        $writer->writeStringValue('id', $this->getId());
        $writer->writeStringValue('lastUsedAt', $this->getLastUsedAt());
        $writer->writeStringValue('name', $this->getName());
        $writer->writeCollectionOfPrimitiveValues('transports', $this->getTransports());
    }

    /**
     * Sets the aaguid property value. The aaguid property
     * @param string|null $value Value to set for the aaguid property.
    */
    public function setAaguid(?string $value): void {
        $this->aaguid = $value;
    }

    /**
     * Sets the backupState property value. The backupState property
     * @param bool|null $value Value to set for the backupState property.
    */
    public function setBackupState(?bool $value): void {
        $this->backupState = $value;
    }

    /**
     * Sets the createdAt property value. The createdAt property
     * @param string|null $value Value to set for the createdAt property.
    */
    public function setCreatedAt(?string $value): void {
        $this->createdAt = $value;
    }

    /**
     * Sets the credentialId property value. The credentialId property
     * @param string|null $value Value to set for the credentialId property.
    */
    public function setCredentialId(?string $value): void {
        $this->credentialId = $value;
    }

    /**
     * Sets the id property value. The id property
     * @param string|null $value Value to set for the id property.
    */
    public function setId(?string $value): void {
        $this->id = $value;
    }

    /**
     * Sets the lastUsedAt property value. The lastUsedAt property
     * @param string|null $value Value to set for the lastUsedAt property.
    */
    public function setLastUsedAt(?string $value): void {
        $this->lastUsedAt = $value;
    }

    /**
     * Sets the name property value. The name property
     * @param string|null $value Value to set for the name property.
    */
    public function setName(?string $value): void {
        $this->name = $value;
    }

    /**
     * Sets the transports property value. The transports property
     * @param array<string>|null $value Value to set for the transports property.
    */
    public function setTransports(?array $value): void {
        $this->transports = $value;
    }

}
