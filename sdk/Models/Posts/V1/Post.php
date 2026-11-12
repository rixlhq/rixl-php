<?php

namespace Rixl\Sdk\Models\Posts\V1;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Rixl\Sdk\Models\Common\V1\MediaType;
use Rixl\Sdk\Models\Images\V1\Image;
use Rixl\Sdk\Models\Videos\V1\Video;

/**
 * At most one of `image`, `video` may be set.
*/
class Post implements Parsable 
{
    /**
     * @var DateTime|null $created_at A point in time in RFC 3339 format, with up to nanosecond precision. Output uses UTC (`Z`); input may use an offset from UTC.
    */
    private ?DateTime $created_at = null;
    
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
     * @var string|null $id The id property
    */
    private ?string $id = null;
    
    /**
     * @var Image|null $image The image property
    */
    private ?Image $image = null;
    
    /**
     * @var MediaType|null $type The type property
    */
    private ?MediaType $type = null;
    
    /**
     * @var Video|null $video The video property
    */
    private ?Video $video = null;
    
    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return Post
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): Post {
        return new Post();
    }

    /**
     * Gets the created_at property value. A point in time in RFC 3339 format, with up to nanosecond precision. Output uses UTC (`Z`); input may use an offset from UTC.
     * @return DateTime|null
    */
    public function getCreatedAt(): ?DateTime {
        return $this->created_at;
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
            'created_at' => fn(ParseNode $n) => $o->setCreatedAt($n->getDateTimeValue()),
            'creator_id' => fn(ParseNode $n) => $o->setCreatorId($n->getStringValue()),
            'description' => fn(ParseNode $n) => $o->setDescription($n->getStringValue()),
            'feed_id' => fn(ParseNode $n) => $o->setFeedId($n->getStringValue()),
            'id' => fn(ParseNode $n) => $o->setId($n->getStringValue()),
            'image' => fn(ParseNode $n) => $o->setImage($n->getObjectValue([Image::class, 'createFromDiscriminatorValue'])),
            'type' => fn(ParseNode $n) => $o->setType($n->getEnumValue(MediaType::class)),
            'video' => fn(ParseNode $n) => $o->setVideo($n->getObjectValue([Video::class, 'createFromDiscriminatorValue'])),
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
     * Gets the image property value. The image property
     * @return Image|null
    */
    public function getImage(): ?Image {
        return $this->image;
    }

    /**
     * Gets the type property value. The type property
     * @return MediaType|null
    */
    public function getType(): ?MediaType {
        return $this->type;
    }

    /**
     * Gets the video property value. The video property
     * @return Video|null
    */
    public function getVideo(): ?Video {
        return $this->video;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeDateTimeValue('created_at', $this->getCreatedAt());
        $writer->writeStringValue('creator_id', $this->getCreatorId());
        $writer->writeStringValue('description', $this->getDescription());
        $writer->writeStringValue('feed_id', $this->getFeedId());
        $writer->writeStringValue('id', $this->getId());
        $writer->writeObjectValue('image', $this->getImage());
        $writer->writeEnumValue('type', $this->getType());
        $writer->writeObjectValue('video', $this->getVideo());
    }

    /**
     * Sets the created_at property value. A point in time in RFC 3339 format, with up to nanosecond precision. Output uses UTC (`Z`); input may use an offset from UTC.
     * @param DateTime|null $value Value to set for the created_at property.
    */
    public function setCreatedAt(?DateTime $value): void {
        $this->created_at = $value;
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
     * Sets the id property value. The id property
     * @param string|null $value Value to set for the id property.
    */
    public function setId(?string $value): void {
        $this->id = $value;
    }

    /**
     * Sets the image property value. The image property
     * @param Image|null $value Value to set for the image property.
    */
    public function setImage(?Image $value): void {
        $this->image = $value;
    }

    /**
     * Sets the type property value. The type property
     * @param MediaType|null $value Value to set for the type property.
    */
    public function setType(?MediaType $value): void {
        $this->type = $value;
    }

    /**
     * Sets the video property value. The video property
     * @param Video|null $value Value to set for the video property.
    */
    public function setVideo(?Video $value): void {
        $this->video = $value;
    }

}
