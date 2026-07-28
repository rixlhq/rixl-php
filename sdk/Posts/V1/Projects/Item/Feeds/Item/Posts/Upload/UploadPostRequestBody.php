<?php

namespace Rixl\Sdk\Posts\V1\Projects\Item\Feeds\Item\Posts\Upload;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Rixl\Sdk\Models\Common\V1\ImageFormat;
use Rixl\Sdk\Models\Common\V1\MediaType;
use Rixl\Sdk\Models\Common\V1\VideoQuality;

class UploadPostRequestBody implements Parsable 
{
    /**
     * @var MediaType|null $content_type The content_type property
    */
    private ?MediaType $content_type = null;
    
    /**
     * @var string|null $creator_id The creator_id property
    */
    private ?string $creator_id = null;
    
    /**
     * @var string|null $description The description property
    */
    private ?string $description = null;
    
    /**
     * @var string|null $feed_id The feed_id property
    */
    private ?string $feed_id = null;
    
    /**
     * @var string|null $file_name The file_name property
    */
    private ?string $file_name = null;
    
    /**
     * @var string|null $format The format property
    */
    private ?string $format = null;
    
    /**
     * @var ImageFormat|null $image_format The image_format property
    */
    private ?ImageFormat $image_format = null;
    
    /**
     * @var string|null $org_id The org_id property
    */
    private ?string $org_id = null;
    
    /**
     * @var string|null $project_id The project_id property
    */
    private ?string $project_id = null;
    
    /**
     * @var VideoQuality|null $video_quality The video_quality property
    */
    private ?VideoQuality $video_quality = null;
    
    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return UploadPostRequestBody
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): UploadPostRequestBody {
        return new UploadPostRequestBody();
    }

    /**
     * Gets the content_type property value. The content_type property
     * @return MediaType|null
    */
    public function getContentType(): ?MediaType {
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
     * Gets the feed_id property value. The feed_id property
     * @return string|null
    */
    public function getFeedId(): ?string {
        return $this->feed_id;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'content_type' => fn(ParseNode $n) => $o->setContentType($n->getEnumValue(MediaType::class)),
            'creator_id' => fn(ParseNode $n) => $o->setCreatorId($n->getStringValue()),
            'description' => fn(ParseNode $n) => $o->setDescription($n->getStringValue()),
            'feed_id' => fn(ParseNode $n) => $o->setFeedId($n->getStringValue()),
            'file_name' => fn(ParseNode $n) => $o->setFileName($n->getStringValue()),
            'format' => fn(ParseNode $n) => $o->setFormat($n->getStringValue()),
            'image_format' => fn(ParseNode $n) => $o->setImageFormat($n->getEnumValue(ImageFormat::class)),
            'org_id' => fn(ParseNode $n) => $o->setOrgId($n->getStringValue()),
            'project_id' => fn(ParseNode $n) => $o->setProjectId($n->getStringValue()),
            'video_quality' => fn(ParseNode $n) => $o->setVideoQuality($n->getEnumValue(VideoQuality::class)),
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
     * @return ImageFormat|null
    */
    public function getImageFormat(): ?ImageFormat {
        return $this->image_format;
    }

    /**
     * Gets the org_id property value. The org_id property
     * @return string|null
    */
    public function getOrgId(): ?string {
        return $this->org_id;
    }

    /**
     * Gets the project_id property value. The project_id property
     * @return string|null
    */
    public function getProjectId(): ?string {
        return $this->project_id;
    }

    /**
     * Gets the video_quality property value. The video_quality property
     * @return VideoQuality|null
    */
    public function getVideoQuality(): ?VideoQuality {
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
        $writer->writeStringValue('feed_id', $this->getFeedId());
        $writer->writeStringValue('file_name', $this->getFileName());
        $writer->writeStringValue('format', $this->getFormat());
        $writer->writeEnumValue('image_format', $this->getImageFormat());
        $writer->writeStringValue('org_id', $this->getOrgId());
        $writer->writeStringValue('project_id', $this->getProjectId());
        $writer->writeEnumValue('video_quality', $this->getVideoQuality());
    }

    /**
     * Sets the content_type property value. The content_type property
     * @param MediaType|null $value Value to set for the content_type property.
    */
    public function setContentType(?MediaType $value): void {
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
     * Sets the feed_id property value. The feed_id property
     * @param string|null $value Value to set for the feed_id property.
    */
    public function setFeedId(?string $value): void {
        $this->feed_id = $value;
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
     * @param ImageFormat|null $value Value to set for the image_format property.
    */
    public function setImageFormat(?ImageFormat $value): void {
        $this->image_format = $value;
    }

    /**
     * Sets the org_id property value. The org_id property
     * @param string|null $value Value to set for the org_id property.
    */
    public function setOrgId(?string $value): void {
        $this->org_id = $value;
    }

    /**
     * Sets the project_id property value. The project_id property
     * @param string|null $value Value to set for the project_id property.
    */
    public function setProjectId(?string $value): void {
        $this->project_id = $value;
    }

    /**
     * Sets the video_quality property value. The video_quality property
     * @param VideoQuality|null $value Value to set for the video_quality property.
    */
    public function setVideoQuality(?VideoQuality $value): void {
        $this->video_quality = $value;
    }

}
