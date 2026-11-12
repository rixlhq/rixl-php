<?php

namespace Rixl\Sdk\Posts\V1\Projects\Item\Feeds\Item\Posts;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Rixl\Sdk\Models\Common\V1\MediaType;

/**
 * At most one of `image_id`, `video_id` may be set.
*/
class PostsPostRequestBody implements Parsable 
{
    /**
     * @var string|null $creator_id The creator_id property
    */
    private ?string $creator_id = null;
    
    /**
     * @var string|null $description The description property
    */
    private ?string $description = null;
    
    /**
     * @var string|null $image_id The image_id property
    */
    private ?string $image_id = null;
    
    /**
     * @var string|null $org_id The org_id property
    */
    private ?string $org_id = null;
    
    /**
     * @var MediaType|null $type The type property
    */
    private ?MediaType $type = null;
    
    /**
     * @var string|null $video_id The video_id property
    */
    private ?string $video_id = null;
    
    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return PostsPostRequestBody
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): PostsPostRequestBody {
        return new PostsPostRequestBody();
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
            'creator_id' => fn(ParseNode $n) => $o->setCreatorId($n->getStringValue()),
            'description' => fn(ParseNode $n) => $o->setDescription($n->getStringValue()),
            'image_id' => fn(ParseNode $n) => $o->setImageId($n->getStringValue()),
            'org_id' => fn(ParseNode $n) => $o->setOrgId($n->getStringValue()),
            'type' => fn(ParseNode $n) => $o->setType($n->getEnumValue(MediaType::class)),
            'video_id' => fn(ParseNode $n) => $o->setVideoId($n->getStringValue()),
        ];
    }

    /**
     * Gets the image_id property value. The image_id property
     * @return string|null
    */
    public function getImageId(): ?string {
        return $this->image_id;
    }

    /**
     * Gets the org_id property value. The org_id property
     * @return string|null
    */
    public function getOrgId(): ?string {
        return $this->org_id;
    }

    /**
     * Gets the type property value. The type property
     * @return MediaType|null
    */
    public function getType(): ?MediaType {
        return $this->type;
    }

    /**
     * Gets the video_id property value. The video_id property
     * @return string|null
    */
    public function getVideoId(): ?string {
        return $this->video_id;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('creator_id', $this->getCreatorId());
        $writer->writeStringValue('description', $this->getDescription());
        $writer->writeStringValue('image_id', $this->getImageId());
        $writer->writeStringValue('org_id', $this->getOrgId());
        $writer->writeEnumValue('type', $this->getType());
        $writer->writeStringValue('video_id', $this->getVideoId());
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
     * Sets the image_id property value. The image_id property
     * @param string|null $value Value to set for the image_id property.
    */
    public function setImageId(?string $value): void {
        $this->image_id = $value;
    }

    /**
     * Sets the org_id property value. The org_id property
     * @param string|null $value Value to set for the org_id property.
    */
    public function setOrgId(?string $value): void {
        $this->org_id = $value;
    }

    /**
     * Sets the type property value. The type property
     * @param MediaType|null $value Value to set for the type property.
    */
    public function setType(?MediaType $value): void {
        $this->type = $value;
    }

    /**
     * Sets the video_id property value. The video_id property
     * @param string|null $value Value to set for the video_id property.
    */
    public function setVideoId(?string $value): void {
        $this->video_id = $value;
    }

}
