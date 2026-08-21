<?php

namespace Rixl\Sdk\Models\Auth\V1;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

class BackupCodesResponse implements Parsable 
{
    /**
     * @var array<string>|null $backup_codes The backup_codes property
    */
    private ?array $backup_codes = null;
    
    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return BackupCodesResponse
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): BackupCodesResponse {
        return new BackupCodesResponse();
    }

    /**
     * Gets the backup_codes property value. The backup_codes property
     * @return array<string>|null
    */
    public function getBackupCodes(): ?array {
        return $this->backup_codes;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'backup_codes' => function (ParseNode $n) {
                $val = $n->getCollectionOfPrimitiveValues();
                if (is_array($val)) {
                    TypeUtils::validateCollectionValues($val, 'string');
                }
                /** @var array<string>|null $val */
                $this->setBackupCodes($val);
            },
        ];
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeCollectionOfPrimitiveValues('backup_codes', $this->getBackupCodes());
    }

    /**
     * Sets the backup_codes property value. The backup_codes property
     * @param array<string>|null $value Value to set for the backup_codes property.
    */
    public function setBackupCodes(?array $value): void {
        $this->backup_codes = $value;
    }

}
