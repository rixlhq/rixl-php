<?php

namespace Rixl\Sdk\Models\Imagesv1;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class ImageUploadInit implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var string|null $expires_at The expires_at property
    */
    private ?string $expires_at = null;
    
    /**
     * @var string|null $image_id The image_id property
    */
    private ?string $image_id = null;
    
    /**
     * @var string|null $upload_url The upload_url property
    */
    private ?string $upload_url = null;
    
    /**
     * Instantiates a new ImageUploadInit and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return ImageUploadInit
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): ImageUploadInit {
        return new ImageUploadInit();
    }

    /**
     * Gets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        return $this->additionalData;
    }

    /**
     * Gets the expires_at property value. The expires_at property
     * @return string|null
    */
    public function getExpiresAt(): ?string {
        return $this->expires_at;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'expires_at' => fn(ParseNode $n) => $o->setExpiresAt($n->getStringValue()),
            'image_id' => fn(ParseNode $n) => $o->setImageId($n->getStringValue()),
            'upload_url' => fn(ParseNode $n) => $o->setUploadUrl($n->getStringValue()),
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
     * Gets the upload_url property value. The upload_url property
     * @return string|null
    */
    public function getUploadUrl(): ?string {
        return $this->upload_url;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('expires_at', $this->getExpiresAt());
        $writer->writeStringValue('image_id', $this->getImageId());
        $writer->writeStringValue('upload_url', $this->getUploadUrl());
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
     * Sets the expires_at property value. The expires_at property
     * @param string|null $value Value to set for the expires_at property.
    */
    public function setExpiresAt(?string $value): void {
        $this->expires_at = $value;
    }

    /**
     * Sets the image_id property value. The image_id property
     * @param string|null $value Value to set for the image_id property.
    */
    public function setImageId(?string $value): void {
        $this->image_id = $value;
    }

    /**
     * Sets the upload_url property value. The upload_url property
     * @param string|null $value Value to set for the upload_url property.
    */
    public function setUploadUrl(?string $value): void {
        $this->upload_url = $value;
    }

}
