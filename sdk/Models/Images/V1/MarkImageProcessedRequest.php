<?php

namespace Rixl\Sdk\Models\Images\V1;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class MarkImageProcessedRequest implements Parsable 
{
    /**
     * @var string|null $file_id The file_id property
    */
    private ?string $file_id = null;
    
    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return MarkImageProcessedRequest
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): MarkImageProcessedRequest {
        return new MarkImageProcessedRequest();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'file_id' => fn(ParseNode $n) => $o->setFileId($n->getStringValue()),
        ];
    }

    /**
     * Gets the file_id property value. The file_id property
     * @return string|null
    */
    public function getFileId(): ?string {
        return $this->file_id;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('file_id', $this->getFileId());
    }

    /**
     * Sets the file_id property value. The file_id property
     * @param string|null $value Value to set for the file_id property.
    */
    public function setFileId(?string $value): void {
        $this->file_id = $value;
    }

}
