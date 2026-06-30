<?php

namespace Rixl\Sdk\Models\Analyticsv1;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class VideoStats implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var float|null $avg_watch_time_ms The avg_watch_time_ms property
    */
    private ?float $avg_watch_time_ms = null;
    
    /**
     * @var float|null $completion_rate The completion_rate property
    */
    private ?float $completion_rate = null;
    
    /**
     * @var int|null $completions The completions property
    */
    private ?int $completions = null;
    
    /**
     * @var int|null $starts The starts property
    */
    private ?int $starts = null;
    
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
     * @var string|null $video_id The video_id property
    */
    private ?string $video_id = null;
    
    /**
     * @var int|null $watches The watches property
    */
    private ?int $watches = null;
    
    /**
     * Instantiates a new VideoStats and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return VideoStats
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): VideoStats {
        return new VideoStats();
    }

    /**
     * Gets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        return $this->additionalData;
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
     * @return int|null
    */
    public function getCompletions(): ?int {
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
            'completions' => fn(ParseNode $n) => $o->setCompletions($n->getIntegerValue()),
            'starts' => fn(ParseNode $n) => $o->setStarts($n->getIntegerValue()),
            'total_views' => fn(ParseNode $n) => $o->setTotalViews($n->getIntegerValue()),
            'total_watch_time_ms' => fn(ParseNode $n) => $o->setTotalWatchTimeMs($n->getFloatValue()),
            'unique_viewers' => fn(ParseNode $n) => $o->setUniqueViewers($n->getIntegerValue()),
            'video_id' => fn(ParseNode $n) => $o->setVideoId($n->getStringValue()),
            'watches' => fn(ParseNode $n) => $o->setWatches($n->getIntegerValue()),
        ];
    }

    /**
     * Gets the starts property value. The starts property
     * @return int|null
    */
    public function getStarts(): ?int {
        return $this->starts;
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
     * Gets the video_id property value. The video_id property
     * @return string|null
    */
    public function getVideoId(): ?string {
        return $this->video_id;
    }

    /**
     * Gets the watches property value. The watches property
     * @return int|null
    */
    public function getWatches(): ?int {
        return $this->watches;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeFloatValue('avg_watch_time_ms', $this->getAvgWatchTimeMs());
        $writer->writeIntegerValue('completions', $this->getCompletions());
        $writer->writeFloatValue('completion_rate', $this->getCompletionRate());
        $writer->writeIntegerValue('starts', $this->getStarts());
        $writer->writeIntegerValue('total_views', $this->getTotalViews());
        $writer->writeFloatValue('total_watch_time_ms', $this->getTotalWatchTimeMs());
        $writer->writeIntegerValue('unique_viewers', $this->getUniqueViewers());
        $writer->writeStringValue('video_id', $this->getVideoId());
        $writer->writeIntegerValue('watches', $this->getWatches());
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
     * @param int|null $value Value to set for the completions property.
    */
    public function setCompletions(?int $value): void {
        $this->completions = $value;
    }

    /**
     * Sets the starts property value. The starts property
     * @param int|null $value Value to set for the starts property.
    */
    public function setStarts(?int $value): void {
        $this->starts = $value;
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

    /**
     * Sets the video_id property value. The video_id property
     * @param string|null $value Value to set for the video_id property.
    */
    public function setVideoId(?string $value): void {
        $this->video_id = $value;
    }

    /**
     * Sets the watches property value. The watches property
     * @param int|null $value Value to set for the watches property.
    */
    public function setWatches(?int $value): void {
        $this->watches = $value;
    }

}
