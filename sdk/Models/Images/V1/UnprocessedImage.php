<?php

namespace Rixl\Sdk\Models\Images\V1;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Rixl\Sdk\Models\Common\V1\FileStatus;

class UnprocessedImage implements Parsable 
{
    /**
     * @var string|null $format The format property
    */
    private ?string $format = null;
    
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
     * @var string|null $s3Path The s3Path property
    */
    private ?string $s3Path = null;
    
    /**
     * @var FileStatus|null $status The status property
    */
    private ?FileStatus $status = null;
    
    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return UnprocessedImage
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): UnprocessedImage {
        return new UnprocessedImage();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'format' => fn(ParseNode $n) => $o->setFormat($n->getStringValue()),
            'id' => fn(ParseNode $n) => $o->setId($n->getStringValue()),
            'name' => fn(ParseNode $n) => $o->setName($n->getStringValue()),
            'projectId' => fn(ParseNode $n) => $o->setProjectId($n->getStringValue()),
            's3Path' => fn(ParseNode $n) => $o->setS3Path($n->getStringValue()),
            'status' => fn(ParseNode $n) => $o->setStatus($n->getEnumValue(FileStatus::class)),
        ];
    }

    /**
     * Gets the format property value. The format property
     * @return string|null
    */
    public function getFormat(): ?string {
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
     * Gets the s3Path property value. The s3Path property
     * @return string|null
    */
    public function getS3Path(): ?string {
        return $this->s3Path;
    }

    /**
     * Gets the status property value. The status property
     * @return FileStatus|null
    */
    public function getStatus(): ?FileStatus {
        return $this->status;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('format', $this->getFormat());
        $writer->writeStringValue('id', $this->getId());
        $writer->writeStringValue('name', $this->getName());
        $writer->writeStringValue('projectId', $this->getProjectId());
        $writer->writeStringValue('s3Path', $this->getS3Path());
        $writer->writeEnumValue('status', $this->getStatus());
    }

    /**
     * Sets the format property value. The format property
     * @param string|null $value Value to set for the format property.
    */
    public function setFormat(?string $value): void {
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
     * Sets the s3Path property value. The s3Path property
     * @param string|null $value Value to set for the s3Path property.
    */
    public function setS3Path(?string $value): void {
        $this->s3Path = $value;
    }

    /**
     * Sets the status property value. The status property
     * @param FileStatus|null $value Value to set for the status property.
    */
    public function setStatus(?FileStatus $value): void {
        $this->status = $value;
    }

}
