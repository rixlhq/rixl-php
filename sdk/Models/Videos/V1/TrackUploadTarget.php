<?php

namespace Rixl\Sdk\Models\Videos\V1;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class TrackUploadTarget implements Parsable 
{
    /**
     * @var string|null $id The id property
    */
    private ?string $id = null;
    
    /**
     * @var string|null $languageCode The languageCode property
    */
    private ?string $languageCode = null;
    
    /**
     * @var string|null $objectKey The objectKey property
    */
    private ?string $objectKey = null;
    
    /**
     * @var string|null $uploadUrl The uploadUrl property
    */
    private ?string $uploadUrl = null;
    
    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return TrackUploadTarget
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): TrackUploadTarget {
        return new TrackUploadTarget();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'id' => fn(ParseNode $n) => $o->setId($n->getStringValue()),
            'languageCode' => fn(ParseNode $n) => $o->setLanguageCode($n->getStringValue()),
            'objectKey' => fn(ParseNode $n) => $o->setObjectKey($n->getStringValue()),
            'uploadUrl' => fn(ParseNode $n) => $o->setUploadUrl($n->getStringValue()),
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
     * Gets the languageCode property value. The languageCode property
     * @return string|null
    */
    public function getLanguageCode(): ?string {
        return $this->languageCode;
    }

    /**
     * Gets the objectKey property value. The objectKey property
     * @return string|null
    */
    public function getObjectKey(): ?string {
        return $this->objectKey;
    }

    /**
     * Gets the uploadUrl property value. The uploadUrl property
     * @return string|null
    */
    public function getUploadUrl(): ?string {
        return $this->uploadUrl;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('id', $this->getId());
        $writer->writeStringValue('languageCode', $this->getLanguageCode());
        $writer->writeStringValue('objectKey', $this->getObjectKey());
        $writer->writeStringValue('uploadUrl', $this->getUploadUrl());
    }

    /**
     * Sets the id property value. The id property
     * @param string|null $value Value to set for the id property.
    */
    public function setId(?string $value): void {
        $this->id = $value;
    }

    /**
     * Sets the languageCode property value. The languageCode property
     * @param string|null $value Value to set for the languageCode property.
    */
    public function setLanguageCode(?string $value): void {
        $this->languageCode = $value;
    }

    /**
     * Sets the objectKey property value. The objectKey property
     * @param string|null $value Value to set for the objectKey property.
    */
    public function setObjectKey(?string $value): void {
        $this->objectKey = $value;
    }

    /**
     * Sets the uploadUrl property value. The uploadUrl property
     * @param string|null $value Value to set for the uploadUrl property.
    */
    public function setUploadUrl(?string $value): void {
        $this->uploadUrl = $value;
    }

}
