<?php

namespace Rixl\Sdk\Models\Images\V1;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Rixl\Sdk\Models\Common\V1\FileStatus;
use Rixl\Sdk\Models\Common\V1\ImageFormat;

class ImageFile implements Parsable 
{
    /**
     * @var ImageFormat|null $format The format property
    */
    private ?ImageFormat $format = null;
    
    /**
     * @var string|null $id The id property
    */
    private ?string $id = null;
    
    /**
     * @var string|null $name The name property
    */
    private ?string $name = null;
    
    /**
     * @var string|null $projectId The projectId property
    */
    private ?string $projectId = null;
    
    /**
     * @var FileStatus|null $status The status property
    */
    private ?FileStatus $status = null;
    
    /**
     * @var string|null $url The url property
    */
    private ?string $url = null;
    
    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return ImageFile
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): ImageFile {
        return new ImageFile();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'format' => fn(ParseNode $n) => $o->setFormat($n->getEnumValue(ImageFormat::class)),
            'id' => fn(ParseNode $n) => $o->setId($n->getStringValue()),
            'name' => fn(ParseNode $n) => $o->setName($n->getStringValue()),
            'projectId' => fn(ParseNode $n) => $o->setProjectId($n->getStringValue()),
            'status' => fn(ParseNode $n) => $o->setStatus($n->getEnumValue(FileStatus::class)),
            'url' => fn(ParseNode $n) => $o->setUrl($n->getStringValue()),
        ];
    }

    /**
     * Gets the format property value. The format property
     * @return ImageFormat|null
    */
    public function getFormat(): ?ImageFormat {
        return $this->format;
    }

    /**
     * Gets the id property value. The id property
     * @return string|null
    */
    public function getId(): ?string {
        return $this->id;
    }

    /**
     * Gets the name property value. The name property
     * @return string|null
    */
    public function getName(): ?string {
        return $this->name;
    }

    /**
     * Gets the projectId property value. The projectId property
     * @return string|null
    */
    public function getProjectId(): ?string {
        return $this->projectId;
    }

    /**
     * Gets the status property value. The status property
     * @return FileStatus|null
    */
    public function getStatus(): ?FileStatus {
        return $this->status;
    }

    /**
     * Gets the url property value. The url property
     * @return string|null
    */
    public function getUrl(): ?string {
        return $this->url;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeEnumValue('format', $this->getFormat());
        $writer->writeStringValue('id', $this->getId());
        $writer->writeStringValue('name', $this->getName());
        $writer->writeStringValue('projectId', $this->getProjectId());
        $writer->writeEnumValue('status', $this->getStatus());
        $writer->writeStringValue('url', $this->getUrl());
    }

    /**
     * Sets the format property value. The format property
     * @param ImageFormat|null $value Value to set for the format property.
    */
    public function setFormat(?ImageFormat $value): void {
        $this->format = $value;
    }

    /**
     * Sets the id property value. The id property
     * @param string|null $value Value to set for the id property.
    */
    public function setId(?string $value): void {
        $this->id = $value;
    }

    /**
     * Sets the name property value. The name property
     * @param string|null $value Value to set for the name property.
    */
    public function setName(?string $value): void {
        $this->name = $value;
    }

    /**
     * Sets the projectId property value. The projectId property
     * @param string|null $value Value to set for the projectId property.
    */
    public function setProjectId(?string $value): void {
        $this->projectId = $value;
    }

    /**
     * Sets the status property value. The status property
     * @param FileStatus|null $value Value to set for the status property.
    */
    public function setStatus(?FileStatus $value): void {
        $this->status = $value;
    }

    /**
     * Sets the url property value. The url property
     * @param string|null $value Value to set for the url property.
    */
    public function setUrl(?string $value): void {
        $this->url = $value;
    }

}
