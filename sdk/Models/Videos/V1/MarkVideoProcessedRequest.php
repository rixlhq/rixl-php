<?php

namespace Rixl\Sdk\Models\Videos\V1;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class MarkVideoProcessedRequest implements Parsable 
{
    /**
     * @var string|null $fileId The fileId property
    */
    private ?string $fileId = null;
    
    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return MarkVideoProcessedRequest
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): MarkVideoProcessedRequest {
        return new MarkVideoProcessedRequest();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'fileId' => fn(ParseNode $n) => $o->setFileId($n->getStringValue()),
        ];
    }

    /**
     * Gets the fileId property value. The fileId property
     * @return string|null
    */
    public function getFileId(): ?string {
        return $this->fileId;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('fileId', $this->getFileId());
    }

    /**
     * Sets the fileId property value. The fileId property
     * @param string|null $value Value to set for the fileId property.
    */
    public function setFileId(?string $value): void {
        $this->fileId = $value;
    }

}
