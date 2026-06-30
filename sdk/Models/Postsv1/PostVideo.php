<?php

namespace Rixl\Sdk\Models\Postsv1;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class PostVideo implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var int|null $bitrate The bitrate property
    */
    private ?int $bitrate = null;
    
    /**
     * @var string|null $codec The codec property
    */
    private ?string $codec = null;
    
    /**
     * @var float|null $duration The duration property
    */
    private ?float $duration = null;
    
    /**
     * @var PostFile|null $file The file property
    */
    private ?PostFile $file = null;
    
    /**
     * @var string|null $framerate The framerate property
    */
    private ?string $framerate = null;
    
    /**
     * @var bool|null $hdr The hdr property
    */
    private ?bool $hdr = null;
    
    /**
     * @var int|null $height The height property
    */
    private ?int $height = null;
    
    /**
     * @var string|null $id The id property
    */
    private ?string $id = null;
    
    /**
     * @var PostImage|null $poster The poster property
    */
    private ?PostImage $poster = null;
    
    /**
     * @var int|null $width The width property
    */
    private ?int $width = null;
    
    /**
     * Instantiates a new PostVideo and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return PostVideo
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): PostVideo {
        return new PostVideo();
    }

    /**
     * Gets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        return $this->additionalData;
    }

    /**
     * Gets the bitrate property value. The bitrate property
     * @return int|null
    */
    public function getBitrate(): ?int {
        return $this->bitrate;
    }

    /**
     * Gets the codec property value. The codec property
     * @return string|null
    */
    public function getCodec(): ?string {
        return $this->codec;
    }

    /**
     * Gets the duration property value. The duration property
     * @return float|null
    */
    public function getDuration(): ?float {
        return $this->duration;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'bitrate' => fn(ParseNode $n) => $o->setBitrate($n->getIntegerValue()),
            'codec' => fn(ParseNode $n) => $o->setCodec($n->getStringValue()),
            'duration' => fn(ParseNode $n) => $o->setDuration($n->getFloatValue()),
            'file' => fn(ParseNode $n) => $o->setFile($n->getObjectValue([PostFile::class, 'createFromDiscriminatorValue'])),
            'framerate' => fn(ParseNode $n) => $o->setFramerate($n->getStringValue()),
            'hdr' => fn(ParseNode $n) => $o->setHdr($n->getBooleanValue()),
            'height' => fn(ParseNode $n) => $o->setHeight($n->getIntegerValue()),
            'id' => fn(ParseNode $n) => $o->setId($n->getStringValue()),
            'poster' => fn(ParseNode $n) => $o->setPoster($n->getObjectValue([PostImage::class, 'createFromDiscriminatorValue'])),
            'width' => fn(ParseNode $n) => $o->setWidth($n->getIntegerValue()),
        ];
    }

    /**
     * Gets the file property value. The file property
     * @return PostFile|null
    */
    public function getFile(): ?PostFile {
        return $this->file;
    }

    /**
     * Gets the framerate property value. The framerate property
     * @return string|null
    */
    public function getFramerate(): ?string {
        return $this->framerate;
    }

    /**
     * Gets the hdr property value. The hdr property
     * @return bool|null
    */
    public function getHdr(): ?bool {
        return $this->hdr;
    }

    /**
     * Gets the height property value. The height property
     * @return int|null
    */
    public function getHeight(): ?int {
        return $this->height;
    }

    /**
     * Gets the id property value. The id property
     * @return string|null
    */
    public function getId(): ?string {
        return $this->id;
    }

    /**
     * Gets the poster property value. The poster property
     * @return PostImage|null
    */
    public function getPoster(): ?PostImage {
        return $this->poster;
    }

    /**
     * Gets the width property value. The width property
     * @return int|null
    */
    public function getWidth(): ?int {
        return $this->width;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeIntegerValue('bitrate', $this->getBitrate());
        $writer->writeStringValue('codec', $this->getCodec());
        $writer->writeFloatValue('duration', $this->getDuration());
        $writer->writeObjectValue('file', $this->getFile());
        $writer->writeStringValue('framerate', $this->getFramerate());
        $writer->writeBooleanValue('hdr', $this->getHdr());
        $writer->writeIntegerValue('height', $this->getHeight());
        $writer->writeStringValue('id', $this->getId());
        $writer->writeObjectValue('poster', $this->getPoster());
        $writer->writeIntegerValue('width', $this->getWidth());
        $writer->writeAdditionalData($this->getAdditionalData());
    }

    /**
     * Sets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @param array<string,mixed> $value Value to set for the AdditionalData property.
    */
    public function setAdditionalData(?array $value): void {
        $this->additionalData = $value;
    }

    /**
     * Sets the bitrate property value. The bitrate property
     * @param int|null $value Value to set for the bitrate property.
    */
    public function setBitrate(?int $value): void {
        $this->bitrate = $value;
    }

    /**
     * Sets the codec property value. The codec property
     * @param string|null $value Value to set for the codec property.
    */
    public function setCodec(?string $value): void {
        $this->codec = $value;
    }

    /**
     * Sets the duration property value. The duration property
     * @param float|null $value Value to set for the duration property.
    */
    public function setDuration(?float $value): void {
        $this->duration = $value;
    }

    /**
     * Sets the file property value. The file property
     * @param PostFile|null $value Value to set for the file property.
    */
    public function setFile(?PostFile $value): void {
        $this->file = $value;
    }

    /**
     * Sets the framerate property value. The framerate property
     * @param string|null $value Value to set for the framerate property.
    */
    public function setFramerate(?string $value): void {
        $this->framerate = $value;
    }

    /**
     * Sets the hdr property value. The hdr property
     * @param bool|null $value Value to set for the hdr property.
    */
    public function setHdr(?bool $value): void {
        $this->hdr = $value;
    }

    /**
     * Sets the height property value. The height property
     * @param int|null $value Value to set for the height property.
    */
    public function setHeight(?int $value): void {
        $this->height = $value;
    }

    /**
     * Sets the id property value. The id property
     * @param string|null $value Value to set for the id property.
    */
    public function setId(?string $value): void {
        $this->id = $value;
    }

    /**
     * Sets the poster property value. The poster property
     * @param PostImage|null $value Value to set for the poster property.
    */
    public function setPoster(?PostImage $value): void {
        $this->poster = $value;
    }

    /**
     * Sets the width property value. The width property
     * @param int|null $value Value to set for the width property.
    */
    public function setWidth(?int $value): void {
        $this->width = $value;
    }

}
