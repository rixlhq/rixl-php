<?php

namespace Rixl\Sdk\Models\Analytics\V1;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class VideoStats implements Parsable 
{
    /**
     * @var float|null $avgWatchTimeMs The avgWatchTimeMs property
    */
    private ?float $avgWatchTimeMs = null;
    
    /**
     * @var float|null $completionRate The completionRate property
    */
    private ?float $completionRate = null;
    
    /**
     * @var float|null $totalWatchTimeMs The totalWatchTimeMs property
    */
    private ?float $totalWatchTimeMs = null;
    
    /**
     * @var string|null $videoId The videoId property
    */
    private ?string $videoId = null;
    
    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return VideoStats
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): VideoStats {
        return new VideoStats();
    }

    /**
     * Gets the avgWatchTimeMs property value. The avgWatchTimeMs property
     * @return float|null
    */
    public function getAvgWatchTimeMs(): ?float {
        return $this->avgWatchTimeMs;
    }

    /**
     * Gets the completionRate property value. The completionRate property
     * @return float|null
    */
    public function getCompletionRate(): ?float {
        return $this->completionRate;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'avgWatchTimeMs' => fn(ParseNode $n) => $o->setAvgWatchTimeMs($n->getFloatValue()),
            'completionRate' => fn(ParseNode $n) => $o->setCompletionRate($n->getFloatValue()),
            'totalWatchTimeMs' => fn(ParseNode $n) => $o->setTotalWatchTimeMs($n->getFloatValue()),
            'videoId' => fn(ParseNode $n) => $o->setVideoId($n->getStringValue()),
        ];
    }

    /**
     * Gets the totalWatchTimeMs property value. The totalWatchTimeMs property
     * @return float|null
    */
    public function getTotalWatchTimeMs(): ?float {
        return $this->totalWatchTimeMs;
    }

    /**
     * Gets the videoId property value. The videoId property
     * @return string|null
    */
    public function getVideoId(): ?string {
        return $this->videoId;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeFloatValue('avgWatchTimeMs', $this->getAvgWatchTimeMs());
        $writer->writeFloatValue('completionRate', $this->getCompletionRate());
        $writer->writeFloatValue('totalWatchTimeMs', $this->getTotalWatchTimeMs());
        $writer->writeStringValue('videoId', $this->getVideoId());
    }

    /**
     * Sets the avgWatchTimeMs property value. The avgWatchTimeMs property
     * @param float|null $value Value to set for the avgWatchTimeMs property.
    */
    public function setAvgWatchTimeMs(?float $value): void {
        $this->avgWatchTimeMs = $value;
    }

    /**
     * Sets the completionRate property value. The completionRate property
     * @param float|null $value Value to set for the completionRate property.
    */
    public function setCompletionRate(?float $value): void {
        $this->completionRate = $value;
    }

    /**
     * Sets the totalWatchTimeMs property value. The totalWatchTimeMs property
     * @param float|null $value Value to set for the totalWatchTimeMs property.
    */
    public function setTotalWatchTimeMs(?float $value): void {
        $this->totalWatchTimeMs = $value;
    }

    /**
     * Sets the videoId property value. The videoId property
     * @param string|null $value Value to set for the videoId property.
    */
    public function setVideoId(?string $value): void {
        $this->videoId = $value;
    }

}
