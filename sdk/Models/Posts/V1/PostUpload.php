<?php

namespace Rixl\Sdk\Models\Posts\V1;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class PostUpload implements Parsable 
{
    /**
     * @var string|null $content_id The content_id property
    */
    private ?string $content_id = null;
    
    /**
     * @var string|null $content_upload_url The content_upload_url property
    */
    private ?string $content_upload_url = null;
    
    /**
     * @var string|null $post_id The post_id property
    */
    private ?string $post_id = null;
    
    /**
     * @var string|null $poster_id The poster_id property
    */
    private ?string $poster_id = null;
    
    /**
     * @var string|null $poster_upload_url The poster_upload_url property
    */
    private ?string $poster_upload_url = null;
    
    /**
     * @var DateTime|null $upload_expires The upload_expires property
    */
    private ?DateTime $upload_expires = null;
    
    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return PostUpload
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): PostUpload {
        return new PostUpload();
    }

    /**
     * Gets the content_id property value. The content_id property
     * @return string|null
    */
    public function getContentId(): ?string {
        return $this->content_id;
    }

    /**
     * Gets the content_upload_url property value. The content_upload_url property
     * @return string|null
    */
    public function getContentUploadUrl(): ?string {
        return $this->content_upload_url;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'content_id' => fn(ParseNode $n) => $o->setContentId($n->getStringValue()),
            'content_upload_url' => fn(ParseNode $n) => $o->setContentUploadUrl($n->getStringValue()),
            'post_id' => fn(ParseNode $n) => $o->setPostId($n->getStringValue()),
            'poster_id' => fn(ParseNode $n) => $o->setPosterId($n->getStringValue()),
            'poster_upload_url' => fn(ParseNode $n) => $o->setPosterUploadUrl($n->getStringValue()),
            'upload_expires' => fn(ParseNode $n) => $o->setUploadExpires($n->getDateTimeValue()),
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
     * Gets the post_id property value. The post_id property
     * @return string|null
    */
    public function getPostId(): ?string {
        return $this->post_id;
    }

    /**
     * Gets the upload_expires property value. The upload_expires property
     * @return DateTime|null
    */
    public function getUploadExpires(): ?DateTime {
        return $this->upload_expires;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('content_id', $this->getContentId());
        $writer->writeStringValue('content_upload_url', $this->getContentUploadUrl());
        $writer->writeStringValue('poster_id', $this->getPosterId());
        $writer->writeStringValue('poster_upload_url', $this->getPosterUploadUrl());
        $writer->writeStringValue('post_id', $this->getPostId());
        $writer->writeDateTimeValue('upload_expires', $this->getUploadExpires());
    }

    /**
     * Sets the content_id property value. The content_id property
     * @param string|null $value Value to set for the content_id property.
    */
    public function setContentId(?string $value): void {
        $this->content_id = $value;
    }

    /**
     * Sets the content_upload_url property value. The content_upload_url property
     * @param string|null $value Value to set for the content_upload_url property.
    */
    public function setContentUploadUrl(?string $value): void {
        $this->content_upload_url = $value;
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
     * Sets the post_id property value. The post_id property
     * @param string|null $value Value to set for the post_id property.
    */
    public function setPostId(?string $value): void {
        $this->post_id = $value;
    }

    /**
     * Sets the upload_expires property value. The upload_expires property
     * @param DateTime|null $value Value to set for the upload_expires property.
    */
    public function setUploadExpires(?DateTime $value): void {
        $this->upload_expires = $value;
    }

}
