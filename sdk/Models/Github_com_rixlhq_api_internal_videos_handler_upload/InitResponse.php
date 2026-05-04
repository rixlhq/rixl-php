<?php

namespace Rixl\Sdk\Models\Github_com_rixlhq_api_internal_videos_handler_upload;

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
     * @var string|null $poster_id The poster_id property
    */
    private ?string $poster_id = null;
    
    /**
     * @var string|null $poster_presigned_url The poster_presigned_url property
    */
    private ?string $poster_presigned_url = null;
    
    /**
     * @var int|null $upload_expires The upload_expires property
    */
    private ?int $upload_expires = null;
    
    /**
     * @var string|null $video_id The video_id property
    */
    private ?string $video_id = null;
    
    /**
     * @var string|null $video_presigned_url The video_presigned_url property
    */
    private ?string $video_presigned_url = null;
    
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
            'poster_id' => fn(ParseNode $n) => $o->setPosterId($n->getStringValue()),
            'poster_presigned_url' => fn(ParseNode $n) => $o->setPosterPresignedUrl($n->getStringValue()),
            'upload_expires' => fn(ParseNode $n) => $o->setUploadExpires($n->getIntegerValue()),
            'video_id' => fn(ParseNode $n) => $o->setVideoId($n->getStringValue()),
            'video_presigned_url' => fn(ParseNode $n) => $o->setVideoPresignedUrl($n->getStringValue()),
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
     * Gets the poster_presigned_url property value. The poster_presigned_url property
     * @return string|null
    */
    public function getPosterPresignedUrl(): ?string {
        return $this->poster_presigned_url;
    }

    /**
     * Gets the upload_expires property value. The upload_expires property
     * @return int|null
    */
    public function getUploadExpires(): ?int {
        return $this->upload_expires;
    }

    /**
     * Gets the video_id property value. The video_id property
     * @return string|null
    */
    public function getVideoId(): ?string {
        return $this->video_id;
    }

    /**
     * Gets the video_presigned_url property value. The video_presigned_url property
     * @return string|null
    */
    public function getVideoPresignedUrl(): ?string {
        return $this->video_presigned_url;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('poster_id', $this->getPosterId());
        $writer->writeStringValue('poster_presigned_url', $this->getPosterPresignedUrl());
        $writer->writeIntegerValue('upload_expires', $this->getUploadExpires());
        $writer->writeStringValue('video_id', $this->getVideoId());
        $writer->writeStringValue('video_presigned_url', $this->getVideoPresignedUrl());
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
     * Sets the poster_id property value. The poster_id property
     * @param string|null $value Value to set for the poster_id property.
    */
    public function setPosterId(?string $value): void {
        $this->poster_id = $value;
    }

    /**
     * Sets the poster_presigned_url property value. The poster_presigned_url property
     * @param string|null $value Value to set for the poster_presigned_url property.
    */
    public function setPosterPresignedUrl(?string $value): void {
        $this->poster_presigned_url = $value;
    }

    /**
     * Sets the upload_expires property value. The upload_expires property
     * @param int|null $value Value to set for the upload_expires property.
    */
    public function setUploadExpires(?int $value): void {
        $this->upload_expires = $value;
    }

    /**
     * Sets the video_id property value. The video_id property
     * @param string|null $value Value to set for the video_id property.
    */
    public function setVideoId(?string $value): void {
        $this->video_id = $value;
    }

    /**
     * Sets the video_presigned_url property value. The video_presigned_url property
     * @param string|null $value Value to set for the video_presigned_url property.
    */
    public function setVideoPresignedUrl(?string $value): void {
        $this->video_presigned_url = $value;
    }

}
