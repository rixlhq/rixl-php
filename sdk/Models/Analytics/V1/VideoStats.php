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
     * @var float|null $total_watch_time_ms The total_watch_time_ms property
    */
    private ?float $total_watch_time_ms = null;
    
    /**
     * @var string|null $video_id The video_id property
    */
    private ?string $video_id = null;
    
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
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'avg_watch_time_ms' => fn(ParseNode $n) => $o->setAvgWatchTimeMs($n->getFloatValue()),
            'completion_rate' => fn(ParseNode $n) => $o->setCompletionRate($n->getFloatValue()),
            'total_watch_time_ms' => fn(ParseNode $n) => $o->setTotalWatchTimeMs($n->getFloatValue()),
            'video_id' => fn(ParseNode $n) => $o->setVideoId($n->getStringValue()),
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
     * Gets the video_id property value. The video_id property
     * @return string|null
    */
    public function getVideoId(): ?string {
        return $this->video_id;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeFloatValue('avg_watch_time_ms', $this->getAvgWatchTimeMs());
        $writer->writeFloatValue('completion_rate', $this->getCompletionRate());
        $writer->writeFloatValue('total_watch_time_ms', $this->getTotalWatchTimeMs());
        $writer->writeStringValue('video_id', $this->getVideoId());
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
     * Sets the total_watch_time_ms property value. The total_watch_time_ms property
     * @param float|null $value Value to set for the total_watch_time_ms property.
    */
    public function setTotalWatchTimeMs(?float $value): void {
        $this->total_watch_time_ms = $value;
    }

    /**
     * Sets the video_id property value. The video_id property
     * @param string|null $value Value to set for the video_id property.
    */
    public function setVideoId(?string $value): void {
        $this->video_id = $value;
    }

}
