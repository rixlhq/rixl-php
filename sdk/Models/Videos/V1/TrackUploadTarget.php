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
     * @var string|null $language_code The language_code property
    */
    private ?string $language_code = null;
    
    /**
     * @var string|null $object_key The object_key property
    */
    private ?string $object_key = null;
    
    /**
     * @var string|null $upload_url The upload_url property
    */
    private ?string $upload_url = null;
    
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
            'language_code' => fn(ParseNode $n) => $o->setLanguageCode($n->getStringValue()),
            'object_key' => fn(ParseNode $n) => $o->setObjectKey($n->getStringValue()),
            'upload_url' => fn(ParseNode $n) => $o->setUploadUrl($n->getStringValue()),
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
     * Gets the language_code property value. The language_code property
     * @return string|null
    */
    public function getLanguageCode(): ?string {
        return $this->language_code;
    }

    /**
     * Gets the object_key property value. The object_key property
     * @return string|null
    */
    public function getObjectKey(): ?string {
        return $this->object_key;
    }

    /**
     * Gets the upload_url property value. The upload_url property
     * @return string|null
    */
    public function getUploadUrl(): ?string {
        return $this->upload_url;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('id', $this->getId());
        $writer->writeStringValue('language_code', $this->getLanguageCode());
        $writer->writeStringValue('object_key', $this->getObjectKey());
        $writer->writeStringValue('upload_url', $this->getUploadUrl());
    }

    /**
     * Sets the id property value. The id property
     * @param string|null $value Value to set for the id property.
    */
    public function setId(?string $value): void {
        $this->id = $value;
    }

    /**
     * Sets the language_code property value. The language_code property
     * @param string|null $value Value to set for the language_code property.
    */
    public function setLanguageCode(?string $value): void {
        $this->language_code = $value;
    }

    /**
     * Sets the object_key property value. The object_key property
     * @param string|null $value Value to set for the object_key property.
    */
    public function setObjectKey(?string $value): void {
        $this->object_key = $value;
    }

    /**
     * Sets the upload_url property value. The upload_url property
     * @param string|null $value Value to set for the upload_url property.
    */
    public function setUploadUrl(?string $value): void {
        $this->upload_url = $value;
    }

}
