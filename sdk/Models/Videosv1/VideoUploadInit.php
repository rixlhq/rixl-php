<?php

namespace Rixl\Sdk\Models\Videosv1;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class VideoUploadInit implements AdditionalDataHolder, Parsable 
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
     * @var string|null $poster_id The poster_id property
    */
    private ?string $poster_id = null;
    
    /**
     * @var string|null $poster_upload_url The poster_upload_url property
    */
    private ?string $poster_upload_url = null;
    
    /**
     * @var string|null $video_id The video_id property
    */
    private ?string $video_id = null;
    
    /**
     * @var string|null $video_upload_url The video_upload_url property
    */
    private ?string $video_upload_url = null;
    
    /**
     * Instantiates a new VideoUploadInit and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return VideoUploadInit
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): VideoUploadInit {
        return new VideoUploadInit();
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
            'poster_id' => fn(ParseNode $n) => $o->setPosterId($n->getStringValue()),
            'poster_upload_url' => fn(ParseNode $n) => $o->setPosterUploadUrl($n->getStringValue()),
            'video_id' => fn(ParseNode $n) => $o->setVideoId($n->getStringValue()),
            'video_upload_url' => fn(ParseNode $n) => $o->setVideoUploadUrl($n->getStringValue()),
        ];
    }

    /**
     * Gets the poster_id property value. The poster_id property
     * @return string|null
    */
    public function getPosterId(): ?string {
        return $this->poster_id;
    }

    /**
     * Gets the poster_upload_url property value. The poster_upload_url property
     * @return string|null
    */
    public function getPosterUploadUrl(): ?string {
        return $this->poster_upload_url;
    }

    /**
     * Gets the video_id property value. The video_id property
     * @return string|null
    */
    public function getVideoId(): ?string {
        return $this->video_id;
    }

    /**
     * Gets the video_upload_url property value. The video_upload_url property
     * @return string|null
    */
    public function getVideoUploadUrl(): ?string {
        return $this->video_upload_url;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('expires_at', $this->getExpiresAt());
        $writer->writeStringValue('poster_id', $this->getPosterId());
        $writer->writeStringValue('poster_upload_url', $this->getPosterUploadUrl());
        $writer->writeStringValue('video_id', $this->getVideoId());
        $writer->writeStringValue('video_upload_url', $this->getVideoUploadUrl());
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
     * Sets the poster_id property value. The poster_id property
     * @param string|null $value Value to set for the poster_id property.
    */
    public function setPosterId(?string $value): void {
        $this->poster_id = $value;
    }

    /**
     * Sets the poster_upload_url property value. The poster_upload_url property
     * @param string|null $value Value to set for the poster_upload_url property.
    */
    public function setPosterUploadUrl(?string $value): void {
        $this->poster_upload_url = $value;
    }

    /**
     * Sets the video_id property value. The video_id property
     * @param string|null $value Value to set for the video_id property.
    */
    public function setVideoId(?string $value): void {
        $this->video_id = $value;
    }

    /**
     * Sets the video_upload_url property value. The video_upload_url property
     * @param string|null $value Value to set for the video_upload_url property.
    */
    public function setVideoUploadUrl(?string $value): void {
        $this->video_upload_url = $value;
    }

}
