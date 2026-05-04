<?php

namespace Rixl\Sdk\Models\Internal_images_handler;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class InitResponse implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var string|null $image_id The image_id property
    */
    private ?string $image_id = null;
    
    /**
     * @var string|null $presigned_url The presigned_url property
    */
    private ?string $presigned_url = null;
    
    /**
     * @var int|null $upload_expires The upload_expires property
    */
    private ?int $upload_expires = null;
    
    /**
     * Instantiates a new InitResponse and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return InitResponse
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): InitResponse {
        return new InitResponse();
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
            'image_id' => fn(ParseNode $n) => $o->setImageId($n->getStringValue()),
            'presigned_url' => fn(ParseNode $n) => $o->setPresignedUrl($n->getStringValue()),
            'upload_expires' => fn(ParseNode $n) => $o->setUploadExpires($n->getIntegerValue()),
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
     * Gets the presigned_url property value. The presigned_url property
     * @return string|null
    */
    public function getPresignedUrl(): ?string {
        return $this->presigned_url;
    }

    /**
     * Gets the upload_expires property value. The upload_expires property
     * @return int|null
    */
    public function getUploadExpires(): ?int {
        return $this->upload_expires;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('image_id', $this->getImageId());
        $writer->writeStringValue('presigned_url', $this->getPresignedUrl());
        $writer->writeIntegerValue('upload_expires', $this->getUploadExpires());
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
     * Sets the image_id property value. The image_id property
     * @param string|null $value Value to set for the image_id property.
    */
    public function setImageId(?string $value): void {
        $this->image_id = $value;
    }

    /**
     * Sets the presigned_url property value. The presigned_url property
     * @param string|null $value Value to set for the presigned_url property.
    */
    public function setPresignedUrl(?string $value): void {
        $this->presigned_url = $value;
    }

    /**
     * Sets the upload_expires property value. The upload_expires property
     * @param int|null $value Value to set for the upload_expires property.
    */
    public function setUploadExpires(?int $value): void {
        $this->upload_expires = $value;
    }

}
