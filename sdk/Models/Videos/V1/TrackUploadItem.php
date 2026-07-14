<?php

namespace Rixl\Sdk\Models\Videos\V1;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class TrackUploadItem implements Parsable 
{
    /**
     * @var string|null $fileName The fileName property
    */
    private ?string $fileName = null;
    
    /**
     * @var string|null $format The format property
    */
    private ?string $format = null;
    
    /**
     * @var string|null $label The label property
    */
    private ?string $label = null;
    
    /**
     * @var string|null $languageCode The languageCode property
    */
    private ?string $languageCode = null;
    
    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return TrackUploadItem
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): TrackUploadItem {
        return new TrackUploadItem();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'fileName' => fn(ParseNode $n) => $o->setFileName($n->getStringValue()),
            'format' => fn(ParseNode $n) => $o->setFormat($n->getStringValue()),
            'label' => fn(ParseNode $n) => $o->setLabel($n->getStringValue()),
            'languageCode' => fn(ParseNode $n) => $o->setLanguageCode($n->getStringValue()),
        ];
    }

    /**
     * Gets the fileName property value. The fileName property
     * @return string|null
    */
    public function getFileName(): ?string {
        return $this->fileName;
    }

    /**
     * Gets the format property value. The format property
     * @return string|null
    */
    public function getFormat(): ?string {
        return $this->format;
    }

    /**
     * Gets the label property value. The label property
     * @return string|null
    */
    public function getLabel(): ?string {
        return $this->label;
    }

    /**
     * Gets the languageCode property value. The languageCode property
     * @return string|null
    */
    public function getLanguageCode(): ?string {
        return $this->languageCode;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('fileName', $this->getFileName());
        $writer->writeStringValue('format', $this->getFormat());
        $writer->writeStringValue('label', $this->getLabel());
        $writer->writeStringValue('languageCode', $this->getLanguageCode());
    }

    /**
     * Sets the fileName property value. The fileName property
     * @param string|null $value Value to set for the fileName property.
    */
    public function setFileName(?string $value): void {
        $this->fileName = $value;
    }

    /**
     * Sets the format property value. The format property
     * @param string|null $value Value to set for the format property.
    */
    public function setFormat(?string $value): void {
        $this->format = $value;
    }

    /**
     * Sets the label property value. The label property
     * @param string|null $value Value to set for the label property.
    */
    public function setLabel(?string $value): void {
        $this->label = $value;
    }

    /**
     * Sets the languageCode property value. The languageCode property
     * @param string|null $value Value to set for the languageCode property.
    */
    public function setLanguageCode(?string $value): void {
        $this->languageCode = $value;
    }

}
