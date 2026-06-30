<?php

namespace Rixl\Sdk\Models\Authv1;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

class Passkey implements AdditionalDataHolder, Parsable 
{
    /**
     * @var string|null $aaguid The aaguid property
    */
    private ?string $aaguid = null;
    
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var bool|null $backup_state The backup_state property
    */
    private ?bool $backup_state = null;
    
    /**
     * @var string|null $created_at The created_at property
    */
    private ?string $created_at = null;
    
    /**
     * @var string|null $credential_id The credential_id property
    */
    private ?string $credential_id = null;
    
    /**
     * @var string|null $id The id property
    */
    private ?string $id = null;
    
    /**
     * @var string|null $last_used_at The last_used_at property
    */
    private ?string $last_used_at = null;
    
    /**
     * @var string|null $name The name property
    */
    private ?string $name = null;
    
    /**
     * @var array<string>|null $transports The transports property
    */
    private ?array $transports = null;
    
    /**
     * Instantiates a new Passkey and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

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
     * Gets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        return $this->additionalData;
    }

    /**
     * Gets the backup_state property value. The backup_state property
     * @return bool|null
    */
    public function getBackupState(): ?bool {
        return $this->backup_state;
    }

    /**
     * Gets the created_at property value. The created_at property
     * @return string|null
    */
    public function getCreatedAt(): ?string {
        return $this->created_at;
    }

    /**
     * Gets the credential_id property value. The credential_id property
     * @return string|null
    */
    public function getCredentialId(): ?string {
        return $this->credential_id;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'aaguid' => fn(ParseNode $n) => $o->setAaguid($n->getStringValue()),
            'backup_state' => fn(ParseNode $n) => $o->setBackupState($n->getBooleanValue()),
            'created_at' => fn(ParseNode $n) => $o->setCreatedAt($n->getStringValue()),
            'credential_id' => fn(ParseNode $n) => $o->setCredentialId($n->getStringValue()),
            'id' => fn(ParseNode $n) => $o->setId($n->getStringValue()),
            'last_used_at' => fn(ParseNode $n) => $o->setLastUsedAt($n->getStringValue()),
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
     * Gets the last_used_at property value. The last_used_at property
     * @return string|null
    */
    public function getLastUsedAt(): ?string {
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
        $writer->writeBooleanValue('backup_state', $this->getBackupState());
        $writer->writeStringValue('created_at', $this->getCreatedAt());
        $writer->writeStringValue('credential_id', $this->getCredentialId());
        $writer->writeStringValue('id', $this->getId());
        $writer->writeStringValue('last_used_at', $this->getLastUsedAt());
        $writer->writeStringValue('name', $this->getName());
        $writer->writeCollectionOfPrimitiveValues('transports', $this->getTransports());
        $writer->writeAdditionalData($this->getAdditionalData());
    }

    /**
     * Sets the aaguid property value. The aaguid property
     * @param string|null $value Value to set for the aaguid property.
    */
    public function setAaguid(?string $value): void {
        $this->aaguid = $value;
    }

    /**
     * Sets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @param array<string,mixed> $value Value to set for the AdditionalData property.
    */
    public function setAdditionalData(?array $value): void {
        $this->additionalData = $value;
    }

    /**
     * Sets the backup_state property value. The backup_state property
     * @param bool|null $value Value to set for the backup_state property.
    */
    public function setBackupState(?bool $value): void {
        $this->backup_state = $value;
    }

    /**
     * Sets the created_at property value. The created_at property
     * @param string|null $value Value to set for the created_at property.
    */
    public function setCreatedAt(?string $value): void {
        $this->created_at = $value;
    }

    /**
     * Sets the credential_id property value. The credential_id property
     * @param string|null $value Value to set for the credential_id property.
    */
    public function setCredentialId(?string $value): void {
        $this->credential_id = $value;
    }

    /**
     * Sets the id property value. The id property
     * @param string|null $value Value to set for the id property.
    */
    public function setId(?string $value): void {
        $this->id = $value;
    }

    /**
     * Sets the last_used_at property value. The last_used_at property
     * @param string|null $value Value to set for the last_used_at property.
    */
    public function setLastUsedAt(?string $value): void {
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
     * Sets the transports property value. The transports property
     * @param array<string>|null $value Value to set for the transports property.
    */
    public function setTransports(?array $value): void {
        $this->transports = $value;
    }

}
