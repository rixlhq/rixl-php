<?php

namespace Rixl\Sdk\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Rixl\Sdk\Models\Github_com_rixlhq_api_db_sqlc\VideoQuality;

/**
 * Video upload initialization request
*/
class VideoUploadInitRequest implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var string|null $file_name The file_name property
    */
    private ?string $file_name = null;
    
    /**
     * @var string|null $image_format The image_format property
    */
    private ?string $image_format = null;
    
    /**
     * @var VideoQuality|null $video_quality The video_quality property
    */
    private ?VideoQuality $video_quality = null;
    
    /**
     * Instantiates a new VideoUploadInitRequest and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return VideoUploadInitRequest
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): VideoUploadInitRequest {
        return new VideoUploadInitRequest();
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
            'file_name' => fn(ParseNode $n) => $o->setFileName($n->getStringValue()),
            'image_format' => fn(ParseNode $n) => $o->setImageFormat($n->getStringValue()),
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
     * Gets the image_format property value. The image_format property
     * @return string|null
    */
    public function getImageFormat(): ?string {
        return $this->image_format;
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
        $writer->writeStringValue('file_name', $this->getFileName());
        $writer->writeStringValue('image_format', $this->getImageFormat());
        $writer->writeEnumValue('video_quality', $this->getVideoQuality());
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
     * Sets the file_name property value. The file_name property
     * @param string|null $value Value to set for the file_name property.
    */
    public function setFileName(?string $value): void {
        $this->file_name = $value;
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
     * @param VideoQuality|null $value Value to set for the video_quality property.
    */
    public function setVideoQuality(?VideoQuality $value): void {
        $this->video_quality = $value;
    }

}
