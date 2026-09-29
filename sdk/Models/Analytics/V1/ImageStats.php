<?php

namespace Rixl\Sdk\Models\Analytics\V1;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class ImageStats implements Parsable 
{
    /**
     * @var float|null $avg_view_duration_ms Dwell time; images have no playback.
    */
    private ?float $avg_view_duration_ms = null;
    
    /**
     * @var string|null $feed_views The feed_views property
    */
    private ?string $feed_views = null;
    
    /**
     * @var string|null $image_id The image_id property
    */
    private ?string $image_id = null;
    
    /**
     * @var string|null $standalone_views The standalone_views property
    */
    private ?string $standalone_views = null;
    
    /**
     * @var float|null $total_view_duration_ms The total_view_duration_ms property
    */
    private ?float $total_view_duration_ms = null;
    
    /**
     * @var string|null $total_views The total_views property
    */
    private ?string $total_views = null;
    
    /**
     * @var string|null $unique_viewers The unique_viewers property
    */
    private ?string $unique_viewers = null;
    
    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return ImageStats
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): ImageStats {
        return new ImageStats();
    }

    /**
     * Gets the avg_view_duration_ms property value. Dwell time; images have no playback.
     * @return float|null
    */
    public function getAvgViewDurationMs(): ?float {
        return $this->avg_view_duration_ms;
    }

    /**
     * Gets the feed_views property value. The feed_views property
     * @return string|null
    */
    public function getFeedViews(): ?string {
        return $this->feed_views;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'avg_view_duration_ms' => fn(ParseNode $n) => $o->setAvgViewDurationMs($n->getFloatValue()),
            'feed_views' => fn(ParseNode $n) => $o->setFeedViews($n->getStringValue()),
            'image_id' => fn(ParseNode $n) => $o->setImageId($n->getStringValue()),
            'standalone_views' => fn(ParseNode $n) => $o->setStandaloneViews($n->getStringValue()),
            'total_view_duration_ms' => fn(ParseNode $n) => $o->setTotalViewDurationMs($n->getFloatValue()),
            'total_views' => fn(ParseNode $n) => $o->setTotalViews($n->getStringValue()),
            'unique_viewers' => fn(ParseNode $n) => $o->setUniqueViewers($n->getStringValue()),
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
     * Gets the standalone_views property value. The standalone_views property
     * @return string|null
    */
    public function getStandaloneViews(): ?string {
        return $this->standalone_views;
    }

    /**
     * Gets the total_view_duration_ms property value. The total_view_duration_ms property
     * @return float|null
    */
    public function getTotalViewDurationMs(): ?float {
        return $this->total_view_duration_ms;
    }

    /**
     * Gets the total_views property value. The total_views property
     * @return string|null
    */
    public function getTotalViews(): ?string {
        return $this->total_views;
    }

    /**
     * Gets the unique_viewers property value. The unique_viewers property
     * @return string|null
    */
    public function getUniqueViewers(): ?string {
        return $this->unique_viewers;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeFloatValue('avg_view_duration_ms', $this->getAvgViewDurationMs());
        $writer->writeStringValue('feed_views', $this->getFeedViews());
        $writer->writeStringValue('image_id', $this->getImageId());
        $writer->writeStringValue('standalone_views', $this->getStandaloneViews());
        $writer->writeStringValue('total_views', $this->getTotalViews());
        $writer->writeFloatValue('total_view_duration_ms', $this->getTotalViewDurationMs());
        $writer->writeStringValue('unique_viewers', $this->getUniqueViewers());
    }

    /**
     * Sets the avg_view_duration_ms property value. Dwell time; images have no playback.
     * @param float|null $value Value to set for the avg_view_duration_ms property.
    */
    public function setAvgViewDurationMs(?float $value): void {
        $this->avg_view_duration_ms = $value;
    }

    /**
     * Sets the feed_views property value. The feed_views property
     * @param string|null $value Value to set for the feed_views property.
    */
    public function setFeedViews(?string $value): void {
        $this->feed_views = $value;
    }

    /**
     * Sets the image_id property value. The image_id property
     * @param string|null $value Value to set for the image_id property.
    */
    public function setImageId(?string $value): void {
        $this->image_id = $value;
    }

    /**
     * Sets the standalone_views property value. The standalone_views property
     * @param string|null $value Value to set for the standalone_views property.
    */
    public function setStandaloneViews(?string $value): void {
        $this->standalone_views = $value;
    }

    /**
     * Sets the total_view_duration_ms property value. The total_view_duration_ms property
     * @param float|null $value Value to set for the total_view_duration_ms property.
    */
    public function setTotalViewDurationMs(?float $value): void {
        $this->total_view_duration_ms = $value;
    }

    /**
     * Sets the total_views property value. The total_views property
     * @param string|null $value Value to set for the total_views property.
    */
    public function setTotalViews(?string $value): void {
        $this->total_views = $value;
    }

    /**
     * Sets the unique_viewers property value. The unique_viewers property
     * @param string|null $value Value to set for the unique_viewers property.
    */
    public function setUniqueViewers(?string $value): void {
        $this->unique_viewers = $value;
    }

}
