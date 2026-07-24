<?php

namespace Rixl\Sdk\Models\Videos\V1;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Rixl\Sdk\Models\Common\V1\SubtitleFormat;

class Subtitle implements Parsable 
{
    /**
     * @var SubtitleFormat|null $format The format property
    */
    private ?SubtitleFormat $format = null;
    
    /**
     * @var string|null $id The id property
    */
    private ?string $id = null;
    
    /**
     * @var string|null $label The label property
    */
    private ?string $label = null;
    
    /**
     * @var string|null $language_code The language_code property
    */
    private ?string $language_code = null;
    
    /**
     * @var string|null $video_id The video_id property
    */
    private ?string $video_id = null;
    
    /**
     * @var string|null $vtt_path The vtt_path property
    */
    private ?string $vtt_path = null;
    
    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return Subtitle
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): Subtitle {
        return new Subtitle();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'format' => fn(ParseNode $n) => $o->setFormat($n->getEnumValue(SubtitleFormat::class)),
            'id' => fn(ParseNode $n) => $o->setId($n->getStringValue()),
            'label' => fn(ParseNode $n) => $o->setLabel($n->getStringValue()),
            'language_code' => fn(ParseNode $n) => $o->setLanguageCode($n->getStringValue()),
            'video_id' => fn(ParseNode $n) => $o->setVideoId($n->getStringValue()),
            'vtt_path' => fn(ParseNode $n) => $o->setVttPath($n->getStringValue()),
        ];
    }

    /**
     * Gets the format property value. The format property
     * @return SubtitleFormat|null
    */
    public function getFormat(): ?SubtitleFormat {
        return $this->format;
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
     * Gets the language_code property value. The language_code property
     * @return string|null
    */
    public function getLanguageCode(): ?string {
        return $this->language_code;
    }

    /**
     * Gets the video_id property value. The video_id property
     * @return string|null
    */
    public function getVideoId(): ?string {
        return $this->video_id;
    }

    /**
     * Gets the vtt_path property value. The vtt_path property
     * @return string|null
    */
    public function getVttPath(): ?string {
        return $this->vtt_path;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeEnumValue('format', $this->getFormat());
        $writer->writeStringValue('id', $this->getId());
        $writer->writeStringValue('label', $this->getLabel());
        $writer->writeStringValue('language_code', $this->getLanguageCode());
        $writer->writeStringValue('video_id', $this->getVideoId());
        $writer->writeStringValue('vtt_path', $this->getVttPath());
    }

    /**
     * Sets the format property value. The format property
     * @param SubtitleFormat|null $value Value to set for the format property.
    */
    public function setFormat(?SubtitleFormat $value): void {
        $this->format = $value;
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
     * Sets the language_code property value. The language_code property
     * @param string|null $value Value to set for the language_code property.
    */
    public function setLanguageCode(?string $value): void {
        $this->language_code = $value;
    }

    /**
     * Sets the video_id property value. The video_id property
     * @param string|null $value Value to set for the video_id property.
    */
    public function setVideoId(?string $value): void {
        $this->video_id = $value;
    }

    /**
     * Sets the vtt_path property value. The vtt_path property
     * @param string|null $value Value to set for the vtt_path property.
    */
    public function setVttPath(?string $value): void {
        $this->vtt_path = $value;
    }

}
