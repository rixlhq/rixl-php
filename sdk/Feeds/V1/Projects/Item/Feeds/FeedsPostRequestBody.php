<?php

namespace Rixl\Sdk\Feeds\V1\Projects\Item\Feeds;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class FeedsPostRequestBody implements Parsable 
{
    /**
     * @var bool|null $allowImages The allowImages property
    */
    private ?bool $allowImages = null;
    
    /**
     * @var bool|null $allowVideos The allowVideos property
    */
    private ?bool $allowVideos = null;
    
    /**
     * @var string|null $description The description property
    */
    private ?string $description = null;
    
    /**
     * @var bool|null $hasComments The hasComments property
    */
    private ?bool $hasComments = null;
    
    /**
     * @var bool|null $hasLikes The hasLikes property
    */
    private ?bool $hasLikes = null;
    
    /**
     * @var bool|null $hasShares The hasShares property
    */
    private ?bool $hasShares = null;
    
    /**
     * @var string|null $name The name property
    */
    private ?string $name = null;
    
    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return FeedsPostRequestBody
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): FeedsPostRequestBody {
        return new FeedsPostRequestBody();
    }

    /**
     * Gets the allowImages property value. The allowImages property
     * @return bool|null
    */
    public function getAllowImages(): ?bool {
        return $this->allowImages;
    }

    /**
     * Gets the allowVideos property value. The allowVideos property
     * @return bool|null
    */
    public function getAllowVideos(): ?bool {
        return $this->allowVideos;
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
            'allowImages' => fn(ParseNode $n) => $o->setAllowImages($n->getBooleanValue()),
            'allowVideos' => fn(ParseNode $n) => $o->setAllowVideos($n->getBooleanValue()),
            'description' => fn(ParseNode $n) => $o->setDescription($n->getStringValue()),
            'hasComments' => fn(ParseNode $n) => $o->setHasComments($n->getBooleanValue()),
            'hasLikes' => fn(ParseNode $n) => $o->setHasLikes($n->getBooleanValue()),
            'hasShares' => fn(ParseNode $n) => $o->setHasShares($n->getBooleanValue()),
            'name' => fn(ParseNode $n) => $o->setName($n->getStringValue()),
        ];
    }

    /**
     * Gets the hasComments property value. The hasComments property
     * @return bool|null
    */
    public function getHasComments(): ?bool {
        return $this->hasComments;
    }

    /**
     * Gets the hasLikes property value. The hasLikes property
     * @return bool|null
    */
    public function getHasLikes(): ?bool {
        return $this->hasLikes;
    }

    /**
     * Gets the hasShares property value. The hasShares property
     * @return bool|null
    */
    public function getHasShares(): ?bool {
        return $this->hasShares;
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
        $writer->writeBooleanValue('allowImages', $this->getAllowImages());
        $writer->writeBooleanValue('allowVideos', $this->getAllowVideos());
        $writer->writeStringValue('description', $this->getDescription());
        $writer->writeBooleanValue('hasComments', $this->getHasComments());
        $writer->writeBooleanValue('hasLikes', $this->getHasLikes());
        $writer->writeBooleanValue('hasShares', $this->getHasShares());
        $writer->writeStringValue('name', $this->getName());
    }

    /**
     * Sets the allowImages property value. The allowImages property
     * @param bool|null $value Value to set for the allowImages property.
    */
    public function setAllowImages(?bool $value): void {
        $this->allowImages = $value;
    }

    /**
     * Sets the allowVideos property value. The allowVideos property
     * @param bool|null $value Value to set for the allowVideos property.
    */
    public function setAllowVideos(?bool $value): void {
        $this->allowVideos = $value;
    }

    /**
     * Sets the description property value. The description property
     * @param string|null $value Value to set for the description property.
    */
    public function setDescription(?string $value): void {
        $this->description = $value;
    }

    /**
     * Sets the hasComments property value. The hasComments property
     * @param bool|null $value Value to set for the hasComments property.
    */
    public function setHasComments(?bool $value): void {
        $this->hasComments = $value;
    }

    /**
     * Sets the hasLikes property value. The hasLikes property
     * @param bool|null $value Value to set for the hasLikes property.
    */
    public function setHasLikes(?bool $value): void {
        $this->hasLikes = $value;
    }

    /**
     * Sets the hasShares property value. The hasShares property
     * @param bool|null $value Value to set for the hasShares property.
    */
    public function setHasShares(?bool $value): void {
        $this->hasShares = $value;
    }

    /**
     * Sets the name property value. The name property
     * @param string|null $value Value to set for the name property.
    */
    public function setName(?string $value): void {
        $this->name = $value;
    }

}
