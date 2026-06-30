<?php

namespace Rixl\Sdk\Models\Types;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

/**
 * Updated feed details
*/
class UpdateFeedRequest implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var bool|null $allow_images The allow_images property
    */
    private ?bool $allow_images = null;
    
    /**
     * @var bool|null $allow_videos The allow_videos property
    */
    private ?bool $allow_videos = null;
    
    /**
     * @var string|null $description The description property
    */
    private ?string $description = null;
    
    /**
     * @var bool|null $has_comments The has_comments property
    */
    private ?bool $has_comments = null;
    
    /**
     * @var bool|null $has_likes The has_likes property
    */
    private ?bool $has_likes = null;
    
    /**
     * @var bool|null $has_shares The has_shares property
    */
    private ?bool $has_shares = null;
    
    /**
     * @var string|null $name The name property
    */
    private ?string $name = null;
    
    /**
     * Instantiates a new UpdateFeedRequest and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return UpdateFeedRequest
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): UpdateFeedRequest {
        return new UpdateFeedRequest();
    }

    /**
     * Gets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        return $this->additionalData;
    }

    /**
     * Gets the allow_images property value. The allow_images property
     * @return bool|null
    */
    public function getAllowImages(): ?bool {
        return $this->allow_images;
    }

    /**
     * Gets the allow_videos property value. The allow_videos property
     * @return bool|null
    */
    public function getAllowVideos(): ?bool {
        return $this->allow_videos;
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
            'allow_images' => fn(ParseNode $n) => $o->setAllowImages($n->getBooleanValue()),
            'allow_videos' => fn(ParseNode $n) => $o->setAllowVideos($n->getBooleanValue()),
            'description' => fn(ParseNode $n) => $o->setDescription($n->getStringValue()),
            'has_comments' => fn(ParseNode $n) => $o->setHasComments($n->getBooleanValue()),
            'has_likes' => fn(ParseNode $n) => $o->setHasLikes($n->getBooleanValue()),
            'has_shares' => fn(ParseNode $n) => $o->setHasShares($n->getBooleanValue()),
            'name' => fn(ParseNode $n) => $o->setName($n->getStringValue()),
        ];
    }

    /**
     * Gets the has_comments property value. The has_comments property
     * @return bool|null
    */
    public function getHasComments(): ?bool {
        return $this->has_comments;
    }

    /**
     * Gets the has_likes property value. The has_likes property
     * @return bool|null
    */
    public function getHasLikes(): ?bool {
        return $this->has_likes;
    }

    /**
     * Gets the has_shares property value. The has_shares property
     * @return bool|null
    */
    public function getHasShares(): ?bool {
        return $this->has_shares;
    }

    /**
     * Gets the name property value. The name property
     * @return string|null
    */
    public function getName(): ?string {
        return $this->name;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeBooleanValue('allow_images', $this->getAllowImages());
        $writer->writeBooleanValue('allow_videos', $this->getAllowVideos());
        $writer->writeStringValue('description', $this->getDescription());
        $writer->writeBooleanValue('has_comments', $this->getHasComments());
        $writer->writeBooleanValue('has_likes', $this->getHasLikes());
        $writer->writeBooleanValue('has_shares', $this->getHasShares());
        $writer->writeStringValue('name', $this->getName());
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
     * Sets the allow_images property value. The allow_images property
     * @param bool|null $value Value to set for the allow_images property.
    */
    public function setAllowImages(?bool $value): void {
        $this->allow_images = $value;
    }

    /**
     * Sets the allow_videos property value. The allow_videos property
     * @param bool|null $value Value to set for the allow_videos property.
    */
    public function setAllowVideos(?bool $value): void {
        $this->allow_videos = $value;
    }

    /**
     * Sets the description property value. The description property
     * @param string|null $value Value to set for the description property.
    */
    public function setDescription(?string $value): void {
        $this->description = $value;
    }

    /**
     * Sets the has_comments property value. The has_comments property
     * @param bool|null $value Value to set for the has_comments property.
    */
    public function setHasComments(?bool $value): void {
        $this->has_comments = $value;
    }

    /**
     * Sets the has_likes property value. The has_likes property
     * @param bool|null $value Value to set for the has_likes property.
    */
    public function setHasLikes(?bool $value): void {
        $this->has_likes = $value;
    }

    /**
     * Sets the has_shares property value. The has_shares property
     * @param bool|null $value Value to set for the has_shares property.
    */
    public function setHasShares(?bool $value): void {
        $this->has_shares = $value;
    }

    /**
     * Sets the name property value. The name property
     * @param string|null $value Value to set for the name property.
    */
    public function setName(?string $value): void {
        $this->name = $value;
    }

}
