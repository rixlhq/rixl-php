<?php

namespace Rixl\Sdk\Models\Analytics\V1;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class FeedStats implements Parsable 
{
    /**
     * @var float|null $avgTimePerVisitMs The avgTimePerVisitMs property
    */
    private ?float $avgTimePerVisitMs = null;
    
    /**
     * @var string|null $feedId The feedId property
    */
    private ?string $feedId = null;
    
    /**
     * @var float|null $totalWatchTimeMs The totalWatchTimeMs property
    */
    private ?float $totalWatchTimeMs = null;
    
    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return FeedStats
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): FeedStats {
        return new FeedStats();
    }

    /**
     * Gets the avgTimePerVisitMs property value. The avgTimePerVisitMs property
     * @return float|null
    */
    public function getAvgTimePerVisitMs(): ?float {
        return $this->avgTimePerVisitMs;
    }

    /**
     * Gets the feedId property value. The feedId property
     * @return string|null
    */
    public function getFeedId(): ?string {
        return $this->feedId;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'avgTimePerVisitMs' => fn(ParseNode $n) => $o->setAvgTimePerVisitMs($n->getFloatValue()),
            'feedId' => fn(ParseNode $n) => $o->setFeedId($n->getStringValue()),
            'totalWatchTimeMs' => fn(ParseNode $n) => $o->setTotalWatchTimeMs($n->getFloatValue()),
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
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeFloatValue('avgTimePerVisitMs', $this->getAvgTimePerVisitMs());
        $writer->writeStringValue('feedId', $this->getFeedId());
        $writer->writeFloatValue('totalWatchTimeMs', $this->getTotalWatchTimeMs());
    }

    /**
     * Sets the avgTimePerVisitMs property value. The avgTimePerVisitMs property
     * @param float|null $value Value to set for the avgTimePerVisitMs property.
    */
    public function setAvgTimePerVisitMs(?float $value): void {
        $this->avgTimePerVisitMs = $value;
    }

    /**
     * Sets the feedId property value. The feedId property
     * @param string|null $value Value to set for the feedId property.
    */
    public function setFeedId(?string $value): void {
        $this->feedId = $value;
    }

    /**
     * Sets the totalWatchTimeMs property value. The totalWatchTimeMs property
     * @param float|null $value Value to set for the totalWatchTimeMs property.
    */
    public function setTotalWatchTimeMs(?float $value): void {
        $this->totalWatchTimeMs = $value;
    }

}
