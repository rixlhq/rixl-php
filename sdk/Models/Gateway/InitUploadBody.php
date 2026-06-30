<?php

namespace Rixl\Sdk\Models\Gateway;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

/**
 * Upload initialization request
*/
class InitUploadBody implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var InitUploadBody_content_type|null $content_type The content_type property
    */
    private ?InitUploadBody_content_type $content_type = null;
    
    /**
     * @var string|null $creator_id The creator_id property
    */
    private ?string $creator_id = null;
    
    /**
     * @var string|null $description The description property
    */
    private ?string $description = null;
    
    /**
     * @var string|null $file_name The file_name property
    */
    private ?string $file_name = null;
    
    /**
     * @var string|null $format The format property
    */
    private ?string $format = null;
    
    /**
     * @var string|null $image_format The image_format property
    */
    private ?string $image_format = null;
    
    /**
     * @var string|null $video_quality The video_quality property
    */
    private ?string $video_quality = null;
    
    /**
     * Instantiates a new InitUploadBody and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return InitUploadBody
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): InitUploadBody {
        return new InitUploadBody();
    }

    /**
     * Gets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        return $this->additionalData;
    }

    /**
     * Gets the content_type property value. The content_type property
     * @return InitUploadBody_content_type|null
    */
    public function getContentType(): ?InitUploadBody_content_type {
        return $this->content_type;
    }

    /**
     * Gets the creator_id property value. The creator_id property
     * @return string|null
    */
    public function getCreatorId(): ?string {
        return $this->creator_id;
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
            'content_type' => fn(ParseNode $n) => $o->setContentType($n->getEnumValue(InitUploadBody_content_type::class)),
            'creator_id' => fn(ParseNode $n) => $o->setCreatorId($n->getStringValue()),
            'description' => fn(ParseNode $n) => $o->setDescription($n->getStringValue()),
            'file_name' => fn(ParseNode $n) => $o->setFileName($n->getStringValue()),
            'format' => fn(ParseNode $n) => $o->setFormat($n->getStringValue()),
            'image_format' => fn(ParseNode $n) => $o->setImageFormat($n->getStringValue()),
            'video_quality' => fn(ParseNode $n) => $o->setVideoQuality($n->getStringValue()),
        ];
    }

    /**
     * Gets the file_name property value. The file_name property
     * @return string|null
    */
    public function getFileName(): ?string {
        return $this->file_name;
    }

    /**
     * Gets the format property value. The format property
     * @return string|null
    */
    public function getFormat(): ?string {
        return $this->format;
    }

    /**
     * Gets the image_format property value. The image_format property
     * @return string|null
    */
    public function getImageFormat(): ?string {
        return $this->image_format;
    }

    /**
     * Gets the video_quality property value. The video_quality property
     * @return string|null
    */
    public function getVideoQuality(): ?string {
        return $this->video_quality;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeEnumValue('content_type', $this->getContentType());
        $writer->writeStringValue('creator_id', $this->getCreatorId());
        $writer->writeStringValue('description', $this->getDescription());
        $writer->writeStringValue('file_name', $this->getFileName());
        $writer->writeStringValue('format', $this->getFormat());
        $writer->writeStringValue('image_format', $this->getImageFormat());
        $writer->writeStringValue('video_quality', $this->getVideoQuality());
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
     * Sets the content_type property value. The content_type property
     * @param InitUploadBody_content_type|null $value Value to set for the content_type property.
    */
    public function setContentType(?InitUploadBody_content_type $value): void {
        $this->content_type = $value;
    }

    /**
     * Sets the creator_id property value. The creator_id property
     * @param string|null $value Value to set for the creator_id property.
    */
    public function setCreatorId(?string $value): void {
        $this->creator_id = $value;
    }

    /**
     * Sets the description property value. The description property
     * @param string|null $value Value to set for the description property.
    */
    public function setDescription(?string $value): void {
        $this->description = $value;
    }

    /**
     * Sets the file_name property value. The file_name property
     * @param string|null $value Value to set for the file_name property.
    */
    public function setFileName(?string $value): void {
        $this->file_name = $value;
    }

    /**
     * Sets the format property value. The format property
     * @param string|null $value Value to set for the format property.
    */
    public function setFormat(?string $value): void {
        $this->format = $value;
    }

    /**
     * Sets the image_format property value. The image_format property
     * @param string|null $value Value to set for the image_format property.
    */
    public function setImageFormat(?string $value): void {
        $this->image_format = $value;
    }

    /**
     * Sets the video_quality property value. The video_quality property
     * @param string|null $value Value to set for the video_quality property.
    */
    public function setVideoQuality(?string $value): void {
        $this->video_quality = $value;
    }

}
