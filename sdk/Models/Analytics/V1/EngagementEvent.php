<?php

namespace Rixl\Sdk\Models\Analytics\V1;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class EngagementEvent implements Parsable 
{
    /**
     * @var string|null $comment_text The comment_text property
    */
    private ?string $comment_text = null;
    
    /**
     * @var string|null $country The country property
    */
    private ?string $country = null;
    
    /**
     * @var string|null $device_type The device_type property
    */
    private ?string $device_type = null;
    
    /**
     * @var string|null $engagement_type The engagement_type property
    */
    private ?string $engagement_type = null;
    
    /**
     * @var string|null $page The page property
    */
    private ?string $page = null;
    
    /**
     * @var string|null $resource_id The resource_id property
    */
    private ?string $resource_id = null;
    
    /**
     * @var string|null $resource_type The resource_type property
    */
    private ?string $resource_type = null;
    
    /**
     * @var string|null $share_platform The share_platform property
    */
    private ?string $share_platform = null;
    
    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return EngagementEvent
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): EngagementEvent {
        return new EngagementEvent();
    }

    /**
     * Gets the comment_text property value. The comment_text property
     * @return string|null
    */
    public function getCommentText(): ?string {
        return $this->comment_text;
    }

    /**
     * Gets the country property value. The country property
     * @return string|null
    */
    public function getCountry(): ?string {
        return $this->country;
    }

    /**
     * Gets the device_type property value. The device_type property
     * @return string|null
    */
    public function getDeviceType(): ?string {
        return $this->device_type;
    }

    /**
     * Gets the engagement_type property value. The engagement_type property
     * @return string|null
    */
    public function getEngagementType(): ?string {
        return $this->engagement_type;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'comment_text' => fn(ParseNode $n) => $o->setCommentText($n->getStringValue()),
            'country' => fn(ParseNode $n) => $o->setCountry($n->getStringValue()),
            'device_type' => fn(ParseNode $n) => $o->setDeviceType($n->getStringValue()),
            'engagement_type' => fn(ParseNode $n) => $o->setEngagementType($n->getStringValue()),
            'page' => fn(ParseNode $n) => $o->setPage($n->getStringValue()),
            'resource_id' => fn(ParseNode $n) => $o->setResourceId($n->getStringValue()),
            'resource_type' => fn(ParseNode $n) => $o->setResourceType($n->getStringValue()),
            'share_platform' => fn(ParseNode $n) => $o->setSharePlatform($n->getStringValue()),
        ];
    }

    /**
     * Gets the page property value. The page property
     * @return string|null
    */
    public function getPage(): ?string {
        return $this->page;
    }

    /**
     * Gets the resource_id property value. The resource_id property
     * @return string|null
    */
    public function getResourceId(): ?string {
        return $this->resource_id;
    }

    /**
     * Gets the resource_type property value. The resource_type property
     * @return string|null
    */
    public function getResourceType(): ?string {
        return $this->resource_type;
    }

    /**
     * Gets the share_platform property value. The share_platform property
     * @return string|null
    */
    public function getSharePlatform(): ?string {
        return $this->share_platform;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('comment_text', $this->getCommentText());
        $writer->writeStringValue('country', $this->getCountry());
        $writer->writeStringValue('device_type', $this->getDeviceType());
        $writer->writeStringValue('engagement_type', $this->getEngagementType());
        $writer->writeStringValue('page', $this->getPage());
        $writer->writeStringValue('resource_id', $this->getResourceId());
        $writer->writeStringValue('resource_type', $this->getResourceType());
        $writer->writeStringValue('share_platform', $this->getSharePlatform());
    }

    /**
     * Sets the comment_text property value. The comment_text property
     * @param string|null $value Value to set for the comment_text property.
    */
    public function setCommentText(?string $value): void {
        $this->comment_text = $value;
    }

    /**
     * Sets the country property value. The country property
     * @param string|null $value Value to set for the country property.
    */
    public function setCountry(?string $value): void {
        $this->country = $value;
    }

    /**
     * Sets the device_type property value. The device_type property
     * @param string|null $value Value to set for the device_type property.
    */
    public function setDeviceType(?string $value): void {
        $this->device_type = $value;
    }

    /**
     * Sets the engagement_type property value. The engagement_type property
     * @param string|null $value Value to set for the engagement_type property.
    */
    public function setEngagementType(?string $value): void {
        $this->engagement_type = $value;
    }

    /**
     * Sets the page property value. The page property
     * @param string|null $value Value to set for the page property.
    */
    public function setPage(?string $value): void {
        $this->page = $value;
    }

    /**
     * Sets the resource_id property value. The resource_id property
     * @param string|null $value Value to set for the resource_id property.
    */
    public function setResourceId(?string $value): void {
        $this->resource_id = $value;
    }

    /**
     * Sets the resource_type property value. The resource_type property
     * @param string|null $value Value to set for the resource_type property.
    */
    public function setResourceType(?string $value): void {
        $this->resource_type = $value;
    }

    /**
     * Sets the share_platform property value. The share_platform property
     * @param string|null $value Value to set for the share_platform property.
    */
    public function setSharePlatform(?string $value): void {
        $this->share_platform = $value;
    }

}
