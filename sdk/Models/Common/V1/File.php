<?php

namespace Rixl\Sdk\Models\Common\V1;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class File implements Parsable 
{
    /**
     * @var DateTime|null $created_at The created_at property
    */
    private ?DateTime $created_at = null;
    
    /**
     * @var string|null $format format describes the artifact currently served at url, not the uploaded source, and is only meaningful once status is FILE_STATUS_READY. Video flips from "mp4" to "hls" when packaging completes; that is the only signal for choosing a progressive player over an HLS one. Known values: jpg, png, webp, avif, gif, mp4, hls, srt, vtt.
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
     * @var string|null $project_id The project_id property
    */
    private ?string $project_id = null;
    
    /**
     * @var string|null $size size is the uploaded source's byte size for usage accounting; it is not updated when packaging replaces the artifact, so it does not describe the object at url.
    */
    private ?string $size = null;
    
    /**
     * @var FileStatus|null $status The status property
    */
    private ?FileStatus $status = null;
    
    /**
     * @var DateTime|null $updated_at The updated_at property
    */
    private ?DateTime $updated_at = null;
    
    /**
     * @var string|null $url The url property
    */
    private ?string $url = null;
    
    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return File
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): File {
        return new File();
    }

    /**
     * Gets the created_at property value. The created_at property
     * @return DateTime|null
    */
    public function getCreatedAt(): ?DateTime {
        return $this->created_at;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'created_at' => fn(ParseNode $n) => $o->setCreatedAt($n->getDateTimeValue()),
            'format' => fn(ParseNode $n) => $o->setFormat($n->getStringValue()),
            'id' => fn(ParseNode $n) => $o->setId($n->getStringValue()),
            'name' => fn(ParseNode $n) => $o->setName($n->getStringValue()),
            'project_id' => fn(ParseNode $n) => $o->setProjectId($n->getStringValue()),
            'size' => fn(ParseNode $n) => $o->setSize($n->getStringValue()),
            'status' => fn(ParseNode $n) => $o->setStatus($n->getEnumValue(FileStatus::class)),
            'updated_at' => fn(ParseNode $n) => $o->setUpdatedAt($n->getDateTimeValue()),
            'url' => fn(ParseNode $n) => $o->setUrl($n->getStringValue()),
        ];
    }

    /**
     * Gets the format property value. format describes the artifact currently served at url, not the uploaded source, and is only meaningful once status is FILE_STATUS_READY. Video flips from "mp4" to "hls" when packaging completes; that is the only signal for choosing a progressive player over an HLS one. Known values: jpg, png, webp, avif, gif, mp4, hls, srt, vtt.
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
     * Gets the project_id property value. The project_id property
     * @return string|null
    */
    public function getProjectId(): ?string {
        return $this->project_id;
    }

    /**
     * Gets the size property value. size is the uploaded source's byte size for usage accounting; it is not updated when packaging replaces the artifact, so it does not describe the object at url.
     * @return string|null
    */
    public function getSize(): ?string {
        return $this->size;
    }

    /**
     * Gets the status property value. The status property
     * @return FileStatus|null
    */
    public function getStatus(): ?FileStatus {
        return $this->status;
    }

    /**
     * Gets the updated_at property value. The updated_at property
     * @return DateTime|null
    */
    public function getUpdatedAt(): ?DateTime {
        return $this->updated_at;
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
        $writer->writeDateTimeValue('created_at', $this->getCreatedAt());
        $writer->writeStringValue('format', $this->getFormat());
        $writer->writeStringValue('id', $this->getId());
        $writer->writeStringValue('name', $this->getName());
        $writer->writeStringValue('project_id', $this->getProjectId());
        $writer->writeStringValue('size', $this->getSize());
        $writer->writeEnumValue('status', $this->getStatus());
        $writer->writeDateTimeValue('updated_at', $this->getUpdatedAt());
        $writer->writeStringValue('url', $this->getUrl());
    }

    /**
     * Sets the created_at property value. The created_at property
     * @param DateTime|null $value Value to set for the created_at property.
    */
    public function setCreatedAt(?DateTime $value): void {
        $this->created_at = $value;
    }

    /**
     * Sets the format property value. format describes the artifact currently served at url, not the uploaded source, and is only meaningful once status is FILE_STATUS_READY. Video flips from "mp4" to "hls" when packaging completes; that is the only signal for choosing a progressive player over an HLS one. Known values: jpg, png, webp, avif, gif, mp4, hls, srt, vtt.
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
     * Sets the project_id property value. The project_id property
     * @param string|null $value Value to set for the project_id property.
    */
    public function setProjectId(?string $value): void {
        $this->project_id = $value;
    }

    /**
     * Sets the size property value. size is the uploaded source's byte size for usage accounting; it is not updated when packaging replaces the artifact, so it does not describe the object at url.
     * @param string|null $value Value to set for the size property.
    */
    public function setSize(?string $value): void {
        $this->size = $value;
    }

    /**
     * Sets the status property value. The status property
     * @param FileStatus|null $value Value to set for the status property.
    */
    public function setStatus(?FileStatus $value): void {
        $this->status = $value;
    }

    /**
     * Sets the updated_at property value. The updated_at property
     * @param DateTime|null $value Value to set for the updated_at property.
    */
    public function setUpdatedAt(?DateTime $value): void {
        $this->updated_at = $value;
    }

    /**
     * Sets the url property value. The url property
     * @param string|null $value Value to set for the url property.
    */
    public function setUrl(?string $value): void {
        $this->url = $value;
    }

}
