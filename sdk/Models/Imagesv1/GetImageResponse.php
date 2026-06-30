<?php

namespace Rixl\Sdk\Models\Imagesv1;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class GetImageResponse implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var bool|null $attached_to_video The attached_to_video property
    */
    private ?bool $attached_to_video = null;
    
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
     * @var int|null $visibility The visibility property
    */
    private ?int $visibility = null;
    
    /**
     * @var int|null $width The width property
    */
    private ?int $width = null;
    
    /**
     * Instantiates a new GetImageResponse and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return GetImageResponse
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): GetImageResponse {
        return new GetImageResponse();
    }

    /**
     * Gets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        return $this->additionalData;
    }

    /**
     * Gets the attached_to_video property value. The attached_to_video property
     * @return bool|null
    */
    public function getAttachedToVideo(): ?bool {
        return $this->attached_to_video;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'attached_to_video' => fn(ParseNode $n) => $o->setAttachedToVideo($n->getBooleanValue()),
            'file' => fn(ParseNode $n) => $o->setFile($n->getObjectValue([ImageFile::class, 'createFromDiscriminatorValue'])),
            'height' => fn(ParseNode $n) => $o->setHeight($n->getIntegerValue()),
            'id' => fn(ParseNode $n) => $o->setId($n->getStringValue()),
            'thumbhash' => fn(ParseNode $n) => $o->setThumbhash($n->getStringValue()),
            'visibility' => fn(ParseNode $n) => $o->setVisibility($n->getIntegerValue()),
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
     * @return int|null
    */
    public function getVisibility(): ?int {
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
        $writer->writeBooleanValue('attached_to_video', $this->getAttachedToVideo());
        $writer->writeObjectValue('file', $this->getFile());
        $writer->writeIntegerValue('height', $this->getHeight());
        $writer->writeStringValue('id', $this->getId());
        $writer->writeStringValue('thumbhash', $this->getThumbhash());
        $writer->writeIntegerValue('visibility', $this->getVisibility());
        $writer->writeIntegerValue('width', $this->getWidth());
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
     * Sets the attached_to_video property value. The attached_to_video property
     * @param bool|null $value Value to set for the attached_to_video property.
    */
    public function setAttachedToVideo(?bool $value): void {
        $this->attached_to_video = $value;
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
     * @param int|null $value Value to set for the visibility property.
    */
    public function setVisibility(?int $value): void {
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
