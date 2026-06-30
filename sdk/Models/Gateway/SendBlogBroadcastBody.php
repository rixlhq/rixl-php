<?php

namespace Rixl\Sdk\Models\Gateway;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

/**
 * Broadcast payload
*/
class SendBlogBroadcastBody implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var string|null $category The category property
    */
    private ?string $category = null;
    
    /**
     * @var string|null $commit_sha The commit_sha property
    */
    private ?string $commit_sha = null;
    
    /**
     * @var string|null $description The description property
    */
    private ?string $description = null;
    
    /**
     * @var string|null $published_at The published_at property
    */
    private ?string $published_at = null;
    
    /**
     * @var string|null $read_more_url The read_more_url property
    */
    private ?string $read_more_url = null;
    
    /**
     * @var string|null $slug The slug property
    */
    private ?string $slug = null;
    
    /**
     * @var string|null $title The title property
    */
    private ?string $title = null;
    
    /**
     * Instantiates a new SendBlogBroadcastBody and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return SendBlogBroadcastBody
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): SendBlogBroadcastBody {
        return new SendBlogBroadcastBody();
    }

    /**
     * Gets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        return $this->additionalData;
    }

    /**
     * Gets the category property value. The category property
     * @return string|null
    */
    public function getCategory(): ?string {
        return $this->category;
    }

    /**
     * Gets the commit_sha property value. The commit_sha property
     * @return string|null
    */
    public function getCommitSha(): ?string {
        return $this->commit_sha;
    }

    /**
     * Gets the description property value. The description property
     * @return string|null
    */
    public function getDescription(): ?string {
        return $this->description;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'category' => fn(ParseNode $n) => $o->setCategory($n->getStringValue()),
            'commit_sha' => fn(ParseNode $n) => $o->setCommitSha($n->getStringValue()),
            'description' => fn(ParseNode $n) => $o->setDescription($n->getStringValue()),
            'published_at' => fn(ParseNode $n) => $o->setPublishedAt($n->getStringValue()),
            'read_more_url' => fn(ParseNode $n) => $o->setReadMoreUrl($n->getStringValue()),
            'slug' => fn(ParseNode $n) => $o->setSlug($n->getStringValue()),
            'title' => fn(ParseNode $n) => $o->setTitle($n->getStringValue()),
        ];
    }

    /**
     * Gets the published_at property value. The published_at property
     * @return string|null
    */
    public function getPublishedAt(): ?string {
        return $this->published_at;
    }

    /**
     * Gets the read_more_url property value. The read_more_url property
     * @return string|null
    */
    public function getReadMoreUrl(): ?string {
        return $this->read_more_url;
    }

    /**
     * Gets the slug property value. The slug property
     * @return string|null
    */
    public function getSlug(): ?string {
        return $this->slug;
    }

    /**
     * Gets the title property value. The title property
     * @return string|null
    */
    public function getTitle(): ?string {
        return $this->title;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('category', $this->getCategory());
        $writer->writeStringValue('commit_sha', $this->getCommitSha());
        $writer->writeStringValue('description', $this->getDescription());
        $writer->writeStringValue('published_at', $this->getPublishedAt());
        $writer->writeStringValue('read_more_url', $this->getReadMoreUrl());
        $writer->writeStringValue('slug', $this->getSlug());
        $writer->writeStringValue('title', $this->getTitle());
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
     * Sets the category property value. The category property
     * @param string|null $value Value to set for the category property.
    */
    public function setCategory(?string $value): void {
        $this->category = $value;
    }

    /**
     * Sets the commit_sha property value. The commit_sha property
     * @param string|null $value Value to set for the commit_sha property.
    */
    public function setCommitSha(?string $value): void {
        $this->commit_sha = $value;
    }

    /**
     * Sets the description property value. The description property
     * @param string|null $value Value to set for the description property.
    */
    public function setDescription(?string $value): void {
        $this->description = $value;
    }

    /**
     * Sets the published_at property value. The published_at property
     * @param string|null $value Value to set for the published_at property.
    */
    public function setPublishedAt(?string $value): void {
        $this->published_at = $value;
    }

    /**
     * Sets the read_more_url property value. The read_more_url property
     * @param string|null $value Value to set for the read_more_url property.
    */
    public function setReadMoreUrl(?string $value): void {
        $this->read_more_url = $value;
    }

    /**
     * Sets the slug property value. The slug property
     * @param string|null $value Value to set for the slug property.
    */
    public function setSlug(?string $value): void {
        $this->slug = $value;
    }

    /**
     * Sets the title property value. The title property
     * @param string|null $value Value to set for the title property.
    */
    public function setTitle(?string $value): void {
        $this->title = $value;
    }

}
