<?php

namespace Rixl\Sdk\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Rixl\Sdk\Models\Github_com_rixlhq_api_db_sqlc\PlanType;

class Video implements AdditionalDataHolder, Parsable 
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
     * @var array<Chapter>|null $chapters The chapters property
    */
    private ?array $chapters = null;
    
    /**
     * @var string|null $codec The codec property
    */
    private ?string $codec = null;
    
    /**
     * @var float|null $duration The duration property
    */
    private ?float $duration = null;
    
    /**
     * @var File|null $file The file property
    */
    private ?File $file = null;
    
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
     * @var PlanType|null $plan_type The plan_type property
    */
    private ?PlanType $plan_type = null;
    
    /**
     * @var Image|null $poster The poster property
    */
    private ?Image $poster = null;
    
    /**
     * @var int|null $width The width property
    */
    private ?int $width = null;
    
    /**
     * Instantiates a new Video and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return Video
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): Video {
        return new Video();
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
     * Gets the chapters property value. The chapters property
     * @return array<Chapter>|null
    */
    public function getChapters(): ?array {
        return $this->chapters;
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
            'chapters' => fn(ParseNode $n) => $o->setChapters($n->getCollectionOfObjectValues([Chapter::class, 'createFromDiscriminatorValue'])),
            'codec' => fn(ParseNode $n) => $o->setCodec($n->getStringValue()),
            'duration' => fn(ParseNode $n) => $o->setDuration($n->getFloatValue()),
            'file' => fn(ParseNode $n) => $o->setFile($n->getObjectValue([File::class, 'createFromDiscriminatorValue'])),
            'framerate' => fn(ParseNode $n) => $o->setFramerate($n->getStringValue()),
            'hdr' => fn(ParseNode $n) => $o->setHdr($n->getBooleanValue()),
            'height' => fn(ParseNode $n) => $o->setHeight($n->getIntegerValue()),
            'id' => fn(ParseNode $n) => $o->setId($n->getStringValue()),
            'plan_type' => fn(ParseNode $n) => $o->setPlanType($n->getEnumValue(PlanType::class)),
            'poster' => fn(ParseNode $n) => $o->setPoster($n->getObjectValue([Image::class, 'createFromDiscriminatorValue'])),
            'width' => fn(ParseNode $n) => $o->setWidth($n->getIntegerValue()),
        ];
    }

    /**
     * Gets the file property value. The file property
     * @return File|null
    */
    public function getFile(): ?File {
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
     * Gets the plan_type property value. The plan_type property
     * @return PlanType|null
    */
    public function getPlanType(): ?PlanType {
        return $this->plan_type;
    }

    /**
     * Gets the poster property value. The poster property
     * @return Image|null
    */
    public function getPoster(): ?Image {
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
        $writer->writeCollectionOfObjectValues('chapters', $this->getChapters());
        $writer->writeStringValue('codec', $this->getCodec());
        $writer->writeFloatValue('duration', $this->getDuration());
        $writer->writeObjectValue('file', $this->getFile());
        $writer->writeStringValue('framerate', $this->getFramerate());
        $writer->writeBooleanValue('hdr', $this->getHdr());
        $writer->writeIntegerValue('height', $this->getHeight());
        $writer->writeStringValue('id', $this->getId());
        $writer->writeEnumValue('plan_type', $this->getPlanType());
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
     * Sets the chapters property value. The chapters property
     * @param array<Chapter>|null $value Value to set for the chapters property.
    */
    public function setChapters(?array $value): void {
        $this->chapters = $value;
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
     * @param File|null $value Value to set for the file property.
    */
    public function setFile(?File $value): void {
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
     * Sets the plan_type property value. The plan_type property
     * @param PlanType|null $value Value to set for the plan_type property.
    */
    public function setPlanType(?PlanType $value): void {
        $this->plan_type = $value;
    }

    /**
     * Sets the poster property value. The poster property
     * @param Image|null $value Value to set for the poster property.
    */
    public function setPoster(?Image $value): void {
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
