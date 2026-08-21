<?php

namespace Rixl\Sdk\Models\Analytics\V1;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class Dashboard implements Parsable 
{
    /**
     * @var string|null $created_at The created_at property
    */
    private ?string $created_at = null;
    
    /**
     * @var string|null $id The id property
    */
    private ?string $id = null;
    
    /**
     * @var bool|null $is_default The is_default property
    */
    private ?bool $is_default = null;
    
    /**
     * @var string|null $name The name property
    */
    private ?string $name = null;
    
    /**
     * @var string|null $org_id The org_id property
    */
    private ?string $org_id = null;
    
    /**
     * @var string|null $owner_user_id The owner_user_id property
    */
    private ?string $owner_user_id = null;
    
    /**
     * @var int|null $revision The revision property
    */
    private ?int $revision = null;
    
    /**
     * @var string|null $updated_at The updated_at property
    */
    private ?string $updated_at = null;
    
    /**
     * @var string|null $updated_by The updated_by property
    */
    private ?string $updated_by = null;
    
    /**
     * @var string|null $visibility The visibility property
    */
    private ?string $visibility = null;
    
    /**
     * @var array<Widget>|null $widgets The widgets property
    */
    private ?array $widgets = null;
    
    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return Dashboard
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): Dashboard {
        return new Dashboard();
    }

    /**
     * Gets the created_at property value. The created_at property
     * @return string|null
    */
    public function getCreatedAt(): ?string {
        return $this->created_at;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'created_at' => fn(ParseNode $n) => $o->setCreatedAt($n->getStringValue()),
            'id' => fn(ParseNode $n) => $o->setId($n->getStringValue()),
            'is_default' => fn(ParseNode $n) => $o->setIsDefault($n->getBooleanValue()),
            'name' => fn(ParseNode $n) => $o->setName($n->getStringValue()),
            'org_id' => fn(ParseNode $n) => $o->setOrgId($n->getStringValue()),
            'owner_user_id' => fn(ParseNode $n) => $o->setOwnerUserId($n->getStringValue()),
            'revision' => fn(ParseNode $n) => $o->setRevision($n->getIntegerValue()),
            'updated_at' => fn(ParseNode $n) => $o->setUpdatedAt($n->getStringValue()),
            'updated_by' => fn(ParseNode $n) => $o->setUpdatedBy($n->getStringValue()),
            'visibility' => fn(ParseNode $n) => $o->setVisibility($n->getStringValue()),
            'widgets' => fn(ParseNode $n) => $o->setWidgets($n->getCollectionOfObjectValues([Widget::class, 'createFromDiscriminatorValue'])),
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
     * Gets the is_default property value. The is_default property
     * @return bool|null
    */
    public function getIsDefault(): ?bool {
        return $this->is_default;
    }

    /**
     * Gets the name property value. The name property
     * @return string|null
    */
    public function getName(): ?string {
        return $this->name;
    }

    /**
     * Gets the org_id property value. The org_id property
     * @return string|null
    */
    public function getOrgId(): ?string {
        return $this->org_id;
    }

    /**
     * Gets the owner_user_id property value. The owner_user_id property
     * @return string|null
    */
    public function getOwnerUserId(): ?string {
        return $this->owner_user_id;
    }

    /**
     * Gets the revision property value. The revision property
     * @return int|null
    */
    public function getRevision(): ?int {
        return $this->revision;
    }

    /**
     * Gets the updated_at property value. The updated_at property
     * @return string|null
    */
    public function getUpdatedAt(): ?string {
        return $this->updated_at;
    }

    /**
     * Gets the updated_by property value. The updated_by property
     * @return string|null
    */
    public function getUpdatedBy(): ?string {
        return $this->updated_by;
    }

    /**
     * Gets the visibility property value. The visibility property
     * @return string|null
    */
    public function getVisibility(): ?string {
        return $this->visibility;
    }

    /**
     * Gets the widgets property value. The widgets property
     * @return array<Widget>|null
    */
    public function getWidgets(): ?array {
        return $this->widgets;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('created_at', $this->getCreatedAt());
        $writer->writeStringValue('id', $this->getId());
        $writer->writeBooleanValue('is_default', $this->getIsDefault());
        $writer->writeStringValue('name', $this->getName());
        $writer->writeStringValue('org_id', $this->getOrgId());
        $writer->writeStringValue('owner_user_id', $this->getOwnerUserId());
        $writer->writeIntegerValue('revision', $this->getRevision());
        $writer->writeStringValue('updated_at', $this->getUpdatedAt());
        $writer->writeStringValue('updated_by', $this->getUpdatedBy());
        $writer->writeStringValue('visibility', $this->getVisibility());
        $writer->writeCollectionOfObjectValues('widgets', $this->getWidgets());
    }

    /**
     * Sets the created_at property value. The created_at property
     * @param string|null $value Value to set for the created_at property.
    */
    public function setCreatedAt(?string $value): void {
        $this->created_at = $value;
    }

    /**
     * Sets the id property value. The id property
     * @param string|null $value Value to set for the id property.
    */
    public function setId(?string $value): void {
        $this->id = $value;
    }

    /**
     * Sets the is_default property value. The is_default property
     * @param bool|null $value Value to set for the is_default property.
    */
    public function setIsDefault(?bool $value): void {
        $this->is_default = $value;
    }

    /**
     * Sets the name property value. The name property
     * @param string|null $value Value to set for the name property.
    */
    public function setName(?string $value): void {
        $this->name = $value;
    }

    /**
     * Sets the org_id property value. The org_id property
     * @param string|null $value Value to set for the org_id property.
    */
    public function setOrgId(?string $value): void {
        $this->org_id = $value;
    }

    /**
     * Sets the owner_user_id property value. The owner_user_id property
     * @param string|null $value Value to set for the owner_user_id property.
    */
    public function setOwnerUserId(?string $value): void {
        $this->owner_user_id = $value;
    }

    /**
     * Sets the revision property value. The revision property
     * @param int|null $value Value to set for the revision property.
    */
    public function setRevision(?int $value): void {
        $this->revision = $value;
    }

    /**
     * Sets the updated_at property value. The updated_at property
     * @param string|null $value Value to set for the updated_at property.
    */
    public function setUpdatedAt(?string $value): void {
        $this->updated_at = $value;
    }

    /**
     * Sets the updated_by property value. The updated_by property
     * @param string|null $value Value to set for the updated_by property.
    */
    public function setUpdatedBy(?string $value): void {
        $this->updated_by = $value;
    }

    /**
     * Sets the visibility property value. The visibility property
     * @param string|null $value Value to set for the visibility property.
    */
    public function setVisibility(?string $value): void {
        $this->visibility = $value;
    }

    /**
     * Sets the widgets property value. The widgets property
     * @param array<Widget>|null $value Value to set for the widgets property.
    */
    public function setWidgets(?array $value): void {
        $this->widgets = $value;
    }

}
