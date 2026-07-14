<?php

namespace Rixl\Sdk\Posts\V1\Projects\Item\Feeds\Item\Posts\Upload\Init;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Rixl\Sdk\Models\Common\V1\ImageFormat;
use Rixl\Sdk\Models\Common\V1\MediaType;
use Rixl\Sdk\Models\Common\V1\VideoQuality;

class InitPostRequestBody implements Parsable 
{
    /**
     * @var MediaType|null $contentType The contentType property
    */
    private ?MediaType $contentType = null;
    
    /**
     * @var string|null $creatorId The creatorId property
    */
    private ?string $creatorId = null;
    
    /**
     * @var string|null $description The description property
    */
    private ?string $description = null;
    
    /**
     * @var string|null $fileName The fileName property
    */
    private ?string $fileName = null;
    
    /**
     * @var string|null $format The format property
    */
    private ?string $format = null;
    
    /**
     * @var ImageFormat|null $imageFormat The imageFormat property
    */
    private ?ImageFormat $imageFormat = null;
    
    /**
     * @var string|null $orgId The orgId property
    */
    private ?string $orgId = null;
    
    /**
     * @var VideoQuality|null $videoQuality The videoQuality property
    */
    private ?VideoQuality $videoQuality = null;
    
    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return InitPostRequestBody
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): InitPostRequestBody {
        return new InitPostRequestBody();
    }

    /**
     * Gets the contentType property value. The contentType property
     * @return MediaType|null
    */
    public function getContentType(): ?MediaType {
        return $this->contentType;
    }

    /**
     * Gets the creatorId property value. The creatorId property
     * @return string|null
    */
    public function getCreatorId(): ?string {
        return $this->creatorId;
    }

    /**
     * Gets the description property value. The description property
     * @return string|null
    */
    public function getDescription(): ?string {
        return $this->description;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'contentType' => fn(ParseNode $n) => $o->setContentType($n->getEnumValue(MediaType::class)),
            'creatorId' => fn(ParseNode $n) => $o->setCreatorId($n->getStringValue()),
            'description' => fn(ParseNode $n) => $o->setDescription($n->getStringValue()),
            'fileName' => fn(ParseNode $n) => $o->setFileName($n->getStringValue()),
            'format' => fn(ParseNode $n) => $o->setFormat($n->getStringValue()),
            'imageFormat' => fn(ParseNode $n) => $o->setImageFormat($n->getEnumValue(ImageFormat::class)),
            'orgId' => fn(ParseNode $n) => $o->setOrgId($n->getStringValue()),
            'videoQuality' => fn(ParseNode $n) => $o->setVideoQuality($n->getEnumValue(VideoQuality::class)),
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
     * Gets the imageFormat property value. The imageFormat property
     * @return ImageFormat|null
    */
    public function getImageFormat(): ?ImageFormat {
        return $this->imageFormat;
    }

    /**
     * Gets the orgId property value. The orgId property
     * @return string|null
    */
    public function getOrgId(): ?string {
        return $this->orgId;
    }

    /**
     * Gets the videoQuality property value. The videoQuality property
     * @return VideoQuality|null
    */
    public function getVideoQuality(): ?VideoQuality {
        return $this->videoQuality;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeEnumValue('contentType', $this->getContentType());
        $writer->writeStringValue('creatorId', $this->getCreatorId());
        $writer->writeStringValue('description', $this->getDescription());
        $writer->writeStringValue('fileName', $this->getFileName());
        $writer->writeStringValue('format', $this->getFormat());
        $writer->writeEnumValue('imageFormat', $this->getImageFormat());
        $writer->writeStringValue('orgId', $this->getOrgId());
        $writer->writeEnumValue('videoQuality', $this->getVideoQuality());
    }

    /**
     * Sets the contentType property value. The contentType property
     * @param MediaType|null $value Value to set for the contentType property.
    */
    public function setContentType(?MediaType $value): void {
        $this->contentType = $value;
    }

    /**
     * Sets the creatorId property value. The creatorId property
     * @param string|null $value Value to set for the creatorId property.
    */
    public function setCreatorId(?string $value): void {
        $this->creatorId = $value;
    }

    /**
     * Sets the description property value. The description property
     * @param string|null $value Value to set for the description property.
    */
    public function setDescription(?string $value): void {
        $this->description = $value;
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
     * Sets the imageFormat property value. The imageFormat property
     * @param ImageFormat|null $value Value to set for the imageFormat property.
    */
    public function setImageFormat(?ImageFormat $value): void {
        $this->imageFormat = $value;
    }

    /**
     * Sets the orgId property value. The orgId property
     * @param string|null $value Value to set for the orgId property.
    */
    public function setOrgId(?string $value): void {
        $this->orgId = $value;
    }

    /**
     * Sets the videoQuality property value. The videoQuality property
     * @param VideoQuality|null $value Value to set for the videoQuality property.
    */
    public function setVideoQuality(?VideoQuality $value): void {
        $this->videoQuality = $value;
    }

}
