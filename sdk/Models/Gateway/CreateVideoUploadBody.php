<?php

namespace Rixl\Sdk\Models\Gateway;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

/**
 * Video upload details
*/
class CreateVideoUploadBody implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var string|null $image_format The image_format property
    */
    private ?string $image_format = null;
    
    /**
     * @var string|null $name The name property
    */
    private ?string $name = null;
    
    /**
     * @var string|null $video_quality The video_quality property
    */
    private ?string $video_quality = null;
    
    /**
     * Instantiates a new CreateVideoUploadBody and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return CreateVideoUploadBody
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): CreateVideoUploadBody {
        return new CreateVideoUploadBody();
    }

    /**
     * Gets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        return $this->additionalData;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'image_format' => fn(ParseNode $n) => $o->setImageFormat($n->getStringValue()),
            'name' => fn(ParseNode $n) => $o->setName($n->getStringValue()),
            'video_quality' => fn(ParseNode $n) => $o->setVideoQuality($n->getStringValue()),
        ];
    }

    /**
     * Gets the image_format property value. The image_format property
     * @return string|null
    */
    public function getImageFormat(): ?string {
        return $this->image_format;
    }

    /**
     * Gets the name property value. The name property
     * @return string|null
    */
    public function getName(): ?string {
        return $this->name;
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
        $writer->writeStringValue('image_format', $this->getImageFormat());
        $writer->writeStringValue('name', $this->getName());
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
     * Sets the image_format property value. The image_format property
     * @param string|null $value Value to set for the image_format property.
    */
    public function setImageFormat(?string $value): void {
        $this->image_format = $value;
    }

    /**
     * Sets the name property value. The name property
     * @param string|null $value Value to set for the name property.
    */
    public function setName(?string $value): void {
        $this->name = $value;
    }

    /**
     * Sets the video_quality property value. The video_quality property
     * @param string|null $value Value to set for the video_quality property.
    */
    public function setVideoQuality(?string $value): void {
        $this->video_quality = $value;
    }

}
