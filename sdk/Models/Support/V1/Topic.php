<?php

namespace Rixl\Sdk\Models\Support\V1;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class Topic implements Parsable 
{
    /**
     * @var string|null $category_id The category_id property
    */
    private ?string $category_id = null;
    
    /**
     * @var string|null $description The description property
    */
    private ?string $description = null;
    
    /**
     * @var string|null $id The id property
    */
    private ?string $id = null;
    
    /**
     * @var string|null $name The name property
    */
    private ?string $name = null;
    
    /**
     * @var string|null $resolution_url The resolution_url property
    */
    private ?string $resolution_url = null;
    
    /**
     * @var string|null $slug The slug property
    */
    private ?string $slug = null;
    
    /**
     * @var int|null $sort_order The sort_order property
    */
    private ?int $sort_order = null;
    
    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return Topic
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): Topic {
        return new Topic();
    }

    /**
     * Gets the category_id property value. The category_id property
     * @return string|null
    */
    public function getCategoryId(): ?string {
        return $this->category_id;
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
            'category_id' => fn(ParseNode $n) => $o->setCategoryId($n->getStringValue()),
            'description' => fn(ParseNode $n) => $o->setDescription($n->getStringValue()),
            'id' => fn(ParseNode $n) => $o->setId($n->getStringValue()),
            'name' => fn(ParseNode $n) => $o->setName($n->getStringValue()),
            'resolution_url' => fn(ParseNode $n) => $o->setResolutionUrl($n->getStringValue()),
            'slug' => fn(ParseNode $n) => $o->setSlug($n->getStringValue()),
            'sort_order' => fn(ParseNode $n) => $o->setSortOrder($n->getIntegerValue()),
        ];
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
     * Gets the resolution_url property value. The resolution_url property
     * @return string|null
    */
    public function getResolutionUrl(): ?string {
        return $this->resolution_url;
    }

    /**
     * Gets the slug property value. The slug property
     * @return string|null
    */
    public function getSlug(): ?string {
        return $this->slug;
    }

    /**
     * Gets the sort_order property value. The sort_order property
     * @return int|null
    */
    public function getSortOrder(): ?int {
        return $this->sort_order;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('category_id', $this->getCategoryId());
        $writer->writeStringValue('description', $this->getDescription());
        $writer->writeStringValue('id', $this->getId());
        $writer->writeStringValue('name', $this->getName());
        $writer->writeStringValue('resolution_url', $this->getResolutionUrl());
        $writer->writeStringValue('slug', $this->getSlug());
        $writer->writeIntegerValue('sort_order', $this->getSortOrder());
    }

    /**
     * Sets the category_id property value. The category_id property
     * @param string|null $value Value to set for the category_id property.
    */
    public function setCategoryId(?string $value): void {
        $this->category_id = $value;
    }

    /**
     * Sets the description property value. The description property
     * @param string|null $value Value to set for the description property.
    */
    public function setDescription(?string $value): void {
        $this->description = $value;
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
     * Sets the resolution_url property value. The resolution_url property
     * @param string|null $value Value to set for the resolution_url property.
    */
    public function setResolutionUrl(?string $value): void {
        $this->resolution_url = $value;
    }

    /**
     * Sets the slug property value. The slug property
     * @param string|null $value Value to set for the slug property.
    */
    public function setSlug(?string $value): void {
        $this->slug = $value;
    }

    /**
     * Sets the sort_order property value. The sort_order property
     * @param int|null $value Value to set for the sort_order property.
    */
    public function setSortOrder(?int $value): void {
        $this->sort_order = $value;
    }

}
