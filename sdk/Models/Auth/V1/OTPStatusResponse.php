<?php

namespace Rixl\Sdk\Models\Auth\V1;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class OTPStatusResponse implements Parsable 
{
    /**
     * @var int|null $backup_codes_remaining The backup_codes_remaining property
    */
    private ?int $backup_codes_remaining = null;
    
    /**
     * @var DateTime|null $created_at The created_at property
    */
    private ?DateTime $created_at = null;
    
    /**
     * @var bool|null $is_setup The is_setup property
    */
    private ?bool $is_setup = null;
    
    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return OTPStatusResponse
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): OTPStatusResponse {
        return new OTPStatusResponse();
    }

    /**
     * Gets the backup_codes_remaining property value. The backup_codes_remaining property
     * @return int|null
    */
    public function getBackupCodesRemaining(): ?int {
        return $this->backup_codes_remaining;
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
            'backup_codes_remaining' => fn(ParseNode $n) => $o->setBackupCodesRemaining($n->getIntegerValue()),
            'created_at' => fn(ParseNode $n) => $o->setCreatedAt($n->getDateTimeValue()),
            'is_setup' => fn(ParseNode $n) => $o->setIsSetup($n->getBooleanValue()),
        ];
    }

    /**
     * Gets the is_setup property value. The is_setup property
     * @return bool|null
    */
    public function getIsSetup(): ?bool {
        return $this->is_setup;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeIntegerValue('backup_codes_remaining', $this->getBackupCodesRemaining());
        $writer->writeDateTimeValue('created_at', $this->getCreatedAt());
        $writer->writeBooleanValue('is_setup', $this->getIsSetup());
    }

    /**
     * Sets the backup_codes_remaining property value. The backup_codes_remaining property
     * @param int|null $value Value to set for the backup_codes_remaining property.
    */
    public function setBackupCodesRemaining(?int $value): void {
        $this->backup_codes_remaining = $value;
    }

    /**
     * Sets the created_at property value. The created_at property
     * @param DateTime|null $value Value to set for the created_at property.
    */
    public function setCreatedAt(?DateTime $value): void {
        $this->created_at = $value;
    }

    /**
     * Sets the is_setup property value. The is_setup property
     * @param bool|null $value Value to set for the is_setup property.
    */
    public function setIsSetup(?bool $value): void {
        $this->is_setup = $value;
    }

}
