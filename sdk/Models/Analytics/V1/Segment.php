<?php

namespace Rixl\Sdk\Models\Analytics\V1;

use DateInterval;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Rixl\Sdk\Models\Analyticscommon\V1\VideoQuality;

class Segment implements Parsable 
{
    /**
     * @var string|null $audio_language The audio_language property
    */
    private ?string $audio_language = null;
    
    /**
     * @var string|null $chapter_title The chapter_title property
    */
    private ?string $chapter_title = null;
    
    /**
     * @var DateInterval|null $end_ms The end_ms property
    */
    private ?DateInterval $end_ms = null;
    
    /**
     * @var VideoQuality|null $quality The quality property
    */
    private ?VideoQuality $quality = null;
    
    /**
     * @var float|null $speed The speed property
    */
    private ?float $speed = null;
    
    /**
     * @var DateInterval|null $start_ms The start_ms property
    */
    private ?DateInterval $start_ms = null;
    
    /**
     * @var string|null $subtitle_language Unset fields inherit the value the view was opened with.
    */
    private ?string $subtitle_language = null;
    
    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return Segment
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): Segment {
        return new Segment();
    }

    /**
     * Gets the audio_language property value. The audio_language property
     * @return string|null
    */
    public function getAudioLanguage(): ?string {
        return $this->audio_language;
    }

    /**
     * Gets the chapter_title property value. The chapter_title property
     * @return string|null
    */
    public function getChapterTitle(): ?string {
        return $this->chapter_title;
    }

    /**
     * Gets the end_ms property value. The end_ms property
     * @return DateInterval|null
    */
    public function getEndMs(): ?DateInterval {
        return $this->end_ms;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'audio_language' => fn(ParseNode $n) => $o->setAudioLanguage($n->getStringValue()),
            'chapter_title' => fn(ParseNode $n) => $o->setChapterTitle($n->getStringValue()),
            'end_ms' => fn(ParseNode $n) => $o->setEndMs($n->getDateIntervalValue()),
            'quality' => fn(ParseNode $n) => $o->setQuality($n->getEnumValue(VideoQuality::class)),
            'speed' => fn(ParseNode $n) => $o->setSpeed($n->getFloatValue()),
            'start_ms' => fn(ParseNode $n) => $o->setStartMs($n->getDateIntervalValue()),
            'subtitle_language' => fn(ParseNode $n) => $o->setSubtitleLanguage($n->getStringValue()),
        ];
    }

    /**
     * Gets the quality property value. The quality property
     * @return VideoQuality|null
    */
    public function getQuality(): ?VideoQuality {
        return $this->quality;
    }

    /**
     * Gets the speed property value. The speed property
     * @return float|null
    */
    public function getSpeed(): ?float {
        return $this->speed;
    }

    /**
     * Gets the start_ms property value. The start_ms property
     * @return DateInterval|null
    */
    public function getStartMs(): ?DateInterval {
        return $this->start_ms;
    }

    /**
     * Gets the subtitle_language property value. Unset fields inherit the value the view was opened with.
     * @return string|null
    */
    public function getSubtitleLanguage(): ?string {
        return $this->subtitle_language;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('audio_language', $this->getAudioLanguage());
        $writer->writeStringValue('chapter_title', $this->getChapterTitle());
        $writer->writeDateIntervalValue('end_ms', $this->getEndMs());
        $writer->writeEnumValue('quality', $this->getQuality());
        $writer->writeFloatValue('speed', $this->getSpeed());
        $writer->writeDateIntervalValue('start_ms', $this->getStartMs());
        $writer->writeStringValue('subtitle_language', $this->getSubtitleLanguage());
    }

    /**
     * Sets the audio_language property value. The audio_language property
     * @param string|null $value Value to set for the audio_language property.
    */
    public function setAudioLanguage(?string $value): void {
        $this->audio_language = $value;
    }

    /**
     * Sets the chapter_title property value. The chapter_title property
     * @param string|null $value Value to set for the chapter_title property.
    */
    public function setChapterTitle(?string $value): void {
        $this->chapter_title = $value;
    }

    /**
     * Sets the end_ms property value. The end_ms property
     * @param DateInterval|null $value Value to set for the end_ms property.
    */
    public function setEndMs(?DateInterval $value): void {
        $this->end_ms = $value;
    }

    /**
     * Sets the quality property value. The quality property
     * @param VideoQuality|null $value Value to set for the quality property.
    */
    public function setQuality(?VideoQuality $value): void {
        $this->quality = $value;
    }

    /**
     * Sets the speed property value. The speed property
     * @param float|null $value Value to set for the speed property.
    */
    public function setSpeed(?float $value): void {
        $this->speed = $value;
    }

    /**
     * Sets the start_ms property value. The start_ms property
     * @param DateInterval|null $value Value to set for the start_ms property.
    */
    public function setStartMs(?DateInterval $value): void {
        $this->start_ms = $value;
    }

    /**
     * Sets the subtitle_language property value. Unset fields inherit the value the view was opened with.
     * @param string|null $value Value to set for the subtitle_language property.
    */
    public function setSubtitleLanguage(?string $value): void {
        $this->subtitle_language = $value;
    }

}
