<?php

namespace Rixl\Sdk\Models\Images\V1;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Rixl\Sdk\Models\Common\V1\Visibility;

class GetImageResponse implements Parsable 
{
    /**
     * @var bool|null $attachedToVideo The attachedToVideo property
    */
    private ?bool $attachedToVideo = null;
    
    /**
     * @var ImageFile|null $file The file property
    */
    private ?ImageFile $file = null;
    
    /**
     * @var int|null $height The height property
    */
    private ?int $height = null;
    
    /**
     * @var string|null $id The id property
    */
    private ?string $id = null;
    
    /**
     * @var string|null $thumbhash The thumbhash property
    */
    private ?string $thumbhash = null;
    
    /**
     * @var Visibility|null $visibility The visibility property
    */
    private ?Visibility $visibility = null;
    
    /**
     * @var int|null $width The width property
    */
    private ?int $width = null;
    
    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return GetImageResponse
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): GetImageResponse {
        return new GetImageResponse();
    }

    /**
     * Gets the attachedToVideo property value. The attachedToVideo property
     * @return bool|null
    */
    public function getAttachedToVideo(): ?bool {
        return $this->attachedToVideo;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'attachedToVideo' => fn(ParseNode $n) => $o->setAttachedToVideo($n->getBooleanValue()),
            'file' => fn(ParseNode $n) => $o->setFile($n->getObjectValue([ImageFile::class, 'createFromDiscriminatorValue'])),
            'height' => fn(ParseNode $n) => $o->setHeight($n->getIntegerValue()),
            'id' => fn(ParseNode $n) => $o->setId($n->getStringValue()),
            'thumbhash' => fn(ParseNode $n) => $o->setThumbhash($n->getStringValue()),
            'visibility' => fn(ParseNode $n) => $o->setVisibility($n->getEnumValue(Visibility::class)),
            'width' => fn(ParseNode $n) => $o->setWidth($n->getIntegerValue()),
        ];
    }

    /**
     * Gets the file property value. The file property
     * @return ImageFile|null
    */
    public function getFile(): ?ImageFile {
        return $this->file;
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
     * Gets the thumbhash property value. The thumbhash property
     * @return string|null
    */
    public function getThumbhash(): ?string {
        return $this->thumbhash;
    }

    /**
     * Gets the visibility property value. The visibility property
     * @return Visibility|null
    */
    public function getVisibility(): ?Visibility {
        return $this->visibility;
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
        $writer->writeBooleanValue('attachedToVideo', $this->getAttachedToVideo());
        $writer->writeObjectValue('file', $this->getFile());
        $writer->writeIntegerValue('height', $this->getHeight());
        $writer->writeStringValue('id', $this->getId());
        $writer->writeStringValue('thumbhash', $this->getThumbhash());
        $writer->writeEnumValue('visibility', $this->getVisibility());
        $writer->writeIntegerValue('width', $this->getWidth());
    }

    /**
     * Sets the attachedToVideo property value. The attachedToVideo property
     * @param bool|null $value Value to set for the attachedToVideo property.
    */
    public function setAttachedToVideo(?bool $value): void {
        $this->attachedToVideo = $value;
    }

    /**
     * Sets the file property value. The file property
     * @param ImageFile|null $value Value to set for the file property.
    */
    public function setFile(?ImageFile $value): void {
        $this->file = $value;
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
     * Sets the thumbhash property value. The thumbhash property
     * @param string|null $value Value to set for the thumbhash property.
    */
    public function setThumbhash(?string $value): void {
        $this->thumbhash = $value;
    }

    /**
     * Sets the visibility property value. The visibility property
     * @param Visibility|null $value Value to set for the visibility property.
    */
    public function setVisibility(?Visibility $value): void {
        $this->visibility = $value;
    }

    /**
     * Sets the width property value. The width property
     * @param int|null $value Value to set for the width property.
    */
    public function setWidth(?int $value): void {
        $this->width = $value;
    }

}
