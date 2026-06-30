<?php

namespace Rixl\Sdk\Models\Gateway;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

/**
 * Post to create
*/
class CreatePostBody implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
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
     * @var CreatePostBody_type|null $type The type property
    */
    private ?CreatePostBody_type $type = null;
    
    /**
     * @var string|null $video_id The video_id property
    */
    private ?string $video_id = null;
    
    /**
     * Instantiates a new CreatePostBody and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return CreatePostBody
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): CreatePostBody {
        return new CreatePostBody();
    }

    /**
     * Gets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        return $this->additionalData;
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
            'type' => fn(ParseNode $n) => $o->setType($n->getEnumValue(CreatePostBody_type::class)),
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
     * Gets the type property value. The type property
     * @return CreatePostBody_type|null
    */
    public function getType(): ?CreatePostBody_type {
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
        $writer->writeEnumValue('type', $this->getType());
        $writer->writeStringValue('video_id', $this->getVideoId());
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
     * Sets the type property value. The type property
     * @param CreatePostBody_type|null $value Value to set for the type property.
    */
    public function setType(?CreatePostBody_type $value): void {
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
