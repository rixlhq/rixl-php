<?php

namespace Rixl\Sdk\Media\V1\Projects\Item\Videos\Upload;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Rixl\Sdk\Models\Common\V1\ImageFormat;
use Rixl\Sdk\Models\Common\V1\VideoQuality;

class UploadPostRequestBody implements Parsable 
{
    /**
     * @var ImageFormat|null $imageFormat The imageFormat property
    */
    private ?ImageFormat $imageFormat = null;
    
    /**
     * @var string|null $name The name property
    */
    private ?string $name = null;
    
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
     * @return UploadPostRequestBody
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): UploadPostRequestBody {
        return new UploadPostRequestBody();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'imageFormat' => fn(ParseNode $n) => $o->setImageFormat($n->getEnumValue(ImageFormat::class)),
            'name' => fn(ParseNode $n) => $o->setName($n->getStringValue()),
            'orgId' => fn(ParseNode $n) => $o->setOrgId($n->getStringValue()),
            'videoQuality' => fn(ParseNode $n) => $o->setVideoQuality($n->getEnumValue(VideoQuality::class)),
        ];
    }

    /**
     * Gets the imageFormat property value. The imageFormat property
     * @return ImageFormat|null
    */
    public function getImageFormat(): ?ImageFormat {
        return $this->imageFormat;
    }

    /**
     * Gets the name property value. The name property
     * @return string|null
    */
    public function getName(): ?string {
        return $this->name;
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
        $writer->writeEnumValue('imageFormat', $this->getImageFormat());
        $writer->writeStringValue('name', $this->getName());
        $writer->writeStringValue('orgId', $this->getOrgId());
        $writer->writeEnumValue('videoQuality', $this->getVideoQuality());
    }

    /**
     * Sets the imageFormat property value. The imageFormat property
     * @param ImageFormat|null $value Value to set for the imageFormat property.
    */
    public function setImageFormat(?ImageFormat $value): void {
        $this->imageFormat = $value;
    }

    /**
     * Sets the name property value. The name property
     * @param string|null $value Value to set for the name property.
    */
    public function setName(?string $value): void {
        $this->name = $value;
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
