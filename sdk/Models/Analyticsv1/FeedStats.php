<?php

namespace Rixl\Sdk\Models\Analyticsv1;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class FeedStats implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var float|null $avg_time_per_visit_ms The avg_time_per_visit_ms property
    */
    private ?float $avg_time_per_visit_ms = null;
    
    /**
     * @var string|null $feed_id The feed_id property
    */
    private ?string $feed_id = null;
    
    /**
     * @var int|null $total_posts The total_posts property
    */
    private ?int $total_posts = null;
    
    /**
     * @var int|null $total_views The total_views property
    */
    private ?int $total_views = null;
    
    /**
     * @var float|null $total_watch_time_ms The total_watch_time_ms property
    */
    private ?float $total_watch_time_ms = null;
    
    /**
     * @var int|null $unique_viewers The unique_viewers property
    */
    private ?int $unique_viewers = null;
    
    /**
     * Instantiates a new FeedStats and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return FeedStats
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): FeedStats {
        return new FeedStats();
    }

    /**
     * Gets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        return $this->additionalData;
    }

    /**
     * Gets the avg_time_per_visit_ms property value. The avg_time_per_visit_ms property
     * @return float|null
    */
    public function getAvgTimePerVisitMs(): ?float {
        return $this->avg_time_per_visit_ms;
    }

    /**
     * Gets the feed_id property value. The feed_id property
     * @return string|null
    */
    public function getFeedId(): ?string {
        return $this->feed_id;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'avg_time_per_visit_ms' => fn(ParseNode $n) => $o->setAvgTimePerVisitMs($n->getFloatValue()),
            'feed_id' => fn(ParseNode $n) => $o->setFeedId($n->getStringValue()),
            'total_posts' => fn(ParseNode $n) => $o->setTotalPosts($n->getIntegerValue()),
            'total_views' => fn(ParseNode $n) => $o->setTotalViews($n->getIntegerValue()),
            'total_watch_time_ms' => fn(ParseNode $n) => $o->setTotalWatchTimeMs($n->getFloatValue()),
            'unique_viewers' => fn(ParseNode $n) => $o->setUniqueViewers($n->getIntegerValue()),
        ];
    }

    /**
     * Gets the total_posts property value. The total_posts property
     * @return int|null
    */
    public function getTotalPosts(): ?int {
        return $this->total_posts;
    }

    /**
     * Gets the total_views property value. The total_views property
     * @return int|null
    */
    public function getTotalViews(): ?int {
        return $this->total_views;
    }

    /**
     * Gets the total_watch_time_ms property value. The total_watch_time_ms property
     * @return float|null
    */
    public function getTotalWatchTimeMs(): ?float {
        return $this->total_watch_time_ms;
    }

    /**
     * Gets the unique_viewers property value. The unique_viewers property
     * @return int|null
    */
    public function getUniqueViewers(): ?int {
        return $this->unique_viewers;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeFloatValue('avg_time_per_visit_ms', $this->getAvgTimePerVisitMs());
        $writer->writeStringValue('feed_id', $this->getFeedId());
        $writer->writeIntegerValue('total_posts', $this->getTotalPosts());
        $writer->writeIntegerValue('total_views', $this->getTotalViews());
        $writer->writeFloatValue('total_watch_time_ms', $this->getTotalWatchTimeMs());
        $writer->writeIntegerValue('unique_viewers', $this->getUniqueViewers());
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
     * Sets the avg_time_per_visit_ms property value. The avg_time_per_visit_ms property
     * @param float|null $value Value to set for the avg_time_per_visit_ms property.
    */
    public function setAvgTimePerVisitMs(?float $value): void {
        $this->avg_time_per_visit_ms = $value;
    }

    /**
     * Sets the feed_id property value. The feed_id property
     * @param string|null $value Value to set for the feed_id property.
    */
    public function setFeedId(?string $value): void {
        $this->feed_id = $value;
    }

    /**
     * Sets the total_posts property value. The total_posts property
     * @param int|null $value Value to set for the total_posts property.
    */
    public function setTotalPosts(?int $value): void {
        $this->total_posts = $value;
    }

    /**
     * Sets the total_views property value. The total_views property
     * @param int|null $value Value to set for the total_views property.
    */
    public function setTotalViews(?int $value): void {
        $this->total_views = $value;
    }

    /**
     * Sets the total_watch_time_ms property value. The total_watch_time_ms property
     * @param float|null $value Value to set for the total_watch_time_ms property.
    */
    public function setTotalWatchTimeMs(?float $value): void {
        $this->total_watch_time_ms = $value;
    }

    /**
     * Sets the unique_viewers property value. The unique_viewers property
     * @param int|null $value Value to set for the unique_viewers property.
    */
    public function setUniqueViewers(?int $value): void {
        $this->unique_viewers = $value;
    }

}
