<?php

namespace Rixl\Sdk\Models\Videos\V1;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class AudioTrack implements Parsable 
{
    /**
     * @var string|null $codec The codec property
    */
    private ?string $codec = null;
    
    /**
     * @var string|null $id The id property
    */
    private ?string $id = null;
    
    /**
     * @var string|null $label The label property
    */
    private ?string $label = null;
    
    /**
     * @var string|null $languageCode The languageCode property
    */
    private ?string $languageCode = null;
    
    /**
     * @var string|null $videoId The videoId property
    */
    private ?string $videoId = null;
    
    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return AudioTrack
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): AudioTrack {
        return new AudioTrack();
    }

    /**
     * Gets the codec property value. The codec property
     * @return string|null
    */
    public function getCodec(): ?string {
        return $this->codec;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'codec' => fn(ParseNode $n) => $o->setCodec($n->getStringValue()),
            'id' => fn(ParseNode $n) => $o->setId($n->getStringValue()),
            'label' => fn(ParseNode $n) => $o->setLabel($n->getStringValue()),
            'languageCode' => fn(ParseNode $n) => $o->setLanguageCode($n->getStringValue()),
            'videoId' => fn(ParseNode $n) => $o->setVideoId($n->getStringValue()),
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
     * Gets the videoId property value. The videoId property
     * @return string|null
    */
    public function getVideoId(): ?string {
        return $this->videoId;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('codec', $this->getCodec());
        $writer->writeStringValue('id', $this->getId());
        $writer->writeStringValue('label', $this->getLabel());
        $writer->writeStringValue('languageCode', $this->getLanguageCode());
        $writer->writeStringValue('videoId', $this->getVideoId());
    }

    /**
     * Sets the codec property value. The codec property
     * @param string|null $value Value to set for the codec property.
    */
    public function setCodec(?string $value): void {
        $this->codec = $value;
    }

    /**
     * Sets the id property value. The id property
     * @param string|null $value Value to set for the id property.
    */
    public function setId(?string $value): void {
        $this->id = $value;
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

    /**
     * Sets the videoId property value. The videoId property
     * @param string|null $value Value to set for the videoId property.
    */
    public function setVideoId(?string $value): void {
        $this->videoId = $value;
    }

}
