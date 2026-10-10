<?php

namespace Rixl\Sdk\Models\Analytics\V1;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class VideoStats implements Parsable 
{
    /**
     * @var float|null $avg_watch_time_ms The avg_watch_time_ms property
    */
    private ?float $avg_watch_time_ms = null;
    
    /**
     * @var float|null $completion_rate The completion_rate property
    */
    private ?float $completion_rate = null;
    
    /**
     * @var string|null $completions The completions property
    */
    private ?string $completions = null;
    
    /**
     * @var string|null $starts The starts property
    */
    private ?string $starts = null;
    
    /**
     * @var string|null $total_views The total_views property
    */
    private ?string $total_views = null;
    
    /**
     * @var float|null $total_watch_time_ms The total_watch_time_ms property
    */
    private ?float $total_watch_time_ms = null;
    
    /**
     * @var string|null $unique_viewers The unique_viewers property
    */
    private ?string $unique_viewers = null;
    
    /**
     * @var string|null $video_id The video_id property
    */
    private ?string $video_id = null;
    
    /**
     * @var string|null $watches The watches property
    */
    private ?string $watches = null;
    
    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return VideoStats
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): VideoStats {
        return new VideoStats();
    }

    /**
     * Gets the avg_watch_time_ms property value. The avg_watch_time_ms property
     * @return float|null
    */
    public function getAvgWatchTimeMs(): ?float {
        return $this->avg_watch_time_ms;
    }

    /**
     * Gets the completion_rate property value. The completion_rate property
     * @return float|null
    */
    public function getCompletionRate(): ?float {
        return $this->completion_rate;
    }

    /**
     * Gets the completions property value. The completions property
     * @return string|null
    */
    public function getCompletions(): ?string {
        return $this->completions;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'avg_watch_time_ms' => fn(ParseNode $n) => $o->setAvgWatchTimeMs($n->getFloatValue()),
            'completion_rate' => fn(ParseNode $n) => $o->setCompletionRate($n->getFloatValue()),
            'completions' => fn(ParseNode $n) => $o->setCompletions($n->getStringValue()),
            'starts' => fn(ParseNode $n) => $o->setStarts($n->getStringValue()),
            'total_views' => fn(ParseNode $n) => $o->setTotalViews($n->getStringValue()),
            'total_watch_time_ms' => fn(ParseNode $n) => $o->setTotalWatchTimeMs($n->getFloatValue()),
            'unique_viewers' => fn(ParseNode $n) => $o->setUniqueViewers($n->getStringValue()),
            'video_id' => fn(ParseNode $n) => $o->setVideoId($n->getStringValue()),
            'watches' => fn(ParseNode $n) => $o->setWatches($n->getStringValue()),
        ];
    }

    /**
     * Gets the starts property value. The starts property
     * @return string|null
    */
    public function getStarts(): ?string {
        return $this->starts;
    }

    /**
     * Gets the total_views property value. The total_views property
     * @return string|null
    */
    public function getTotalViews(): ?string {
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
     * @return string|null
    */
    public function getUniqueViewers(): ?string {
        return $this->unique_viewers;
    }

    /**
     * Gets the video_id property value. The video_id property
     * @return string|null
    */
    public function getVideoId(): ?string {
        return $this->video_id;
    }

    /**
     * Gets the watches property value. The watches property
     * @return string|null
    */
    public function getWatches(): ?string {
        return $this->watches;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeFloatValue('avg_watch_time_ms', $this->getAvgWatchTimeMs());
        $writer->writeStringValue('completions', $this->getCompletions());
        $writer->writeFloatValue('completion_rate', $this->getCompletionRate());
        $writer->writeStringValue('starts', $this->getStarts());
        $writer->writeStringValue('total_views', $this->getTotalViews());
        $writer->writeFloatValue('total_watch_time_ms', $this->getTotalWatchTimeMs());
        $writer->writeStringValue('unique_viewers', $this->getUniqueViewers());
        $writer->writeStringValue('video_id', $this->getVideoId());
        $writer->writeStringValue('watches', $this->getWatches());
    }

    /**
     * Sets the avg_watch_time_ms property value. The avg_watch_time_ms property
     * @param float|null $value Value to set for the avg_watch_time_ms property.
    */
    public function setAvgWatchTimeMs(?float $value): void {
        $this->avg_watch_time_ms = $value;
    }

    /**
     * Sets the completion_rate property value. The completion_rate property
     * @param float|null $value Value to set for the completion_rate property.
    */
    public function setCompletionRate(?float $value): void {
        $this->completion_rate = $value;
    }

    /**
     * Sets the completions property value. The completions property
     * @param string|null $value Value to set for the completions property.
    */
    public function setCompletions(?string $value): void {
        $this->completions = $value;
    }

    /**
     * Sets the starts property value. The starts property
     * @param string|null $value Value to set for the starts property.
    */
    public function setStarts(?string $value): void {
        $this->starts = $value;
    }

    /**
     * Sets the total_views property value. The total_views property
     * @param string|null $value Value to set for the total_views property.
    */
    public function setTotalViews(?string $value): void {
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
     * @param string|null $value Value to set for the unique_viewers property.
    */
    public function setUniqueViewers(?string $value): void {
        $this->unique_viewers = $value;
    }

    /**
     * Sets the video_id property value. The video_id property
     * @param string|null $value Value to set for the video_id property.
    */
    public function setVideoId(?string $value): void {
        $this->video_id = $value;
    }

    /**
     * Sets the watches property value. The watches property
     * @param string|null $value Value to set for the watches property.
    */
    public function setWatches(?string $value): void {
        $this->watches = $value;
    }

}
