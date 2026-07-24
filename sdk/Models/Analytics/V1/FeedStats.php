<?php

namespace Rixl\Sdk\Models\Analytics\V1;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class FeedStats implements Parsable 
{
    /**
     * @var float|null $avg_time_per_visit_ms The avg_time_per_visit_ms property
    */
    private ?float $avg_time_per_visit_ms = null;
    
    /**
     * @var string|null $feed_id The feed_id property
    */
    private ?string $feed_id = null;
    
    /**
     * @var float|null $total_watch_time_ms The total_watch_time_ms property
    */
    private ?float $total_watch_time_ms = null;
    
    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return FeedStats
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): FeedStats {
        return new FeedStats();
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
            'total_watch_time_ms' => fn(ParseNode $n) => $o->setTotalWatchTimeMs($n->getFloatValue()),
        ];
    }

    /**
     * Gets the total_watch_time_ms property value. The total_watch_time_ms property
     * @return float|null
    */
    public function getTotalWatchTimeMs(): ?float {
        return $this->total_watch_time_ms;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeFloatValue('avg_time_per_visit_ms', $this->getAvgTimePerVisitMs());
        $writer->writeStringValue('feed_id', $this->getFeedId());
        $writer->writeFloatValue('total_watch_time_ms', $this->getTotalWatchTimeMs());
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
     * Sets the total_watch_time_ms property value. The total_watch_time_ms property
     * @param float|null $value Value to set for the total_watch_time_ms property.
    */
    public function setTotalWatchTimeMs(?float $value): void {
        $this->total_watch_time_ms = $value;
    }

}
