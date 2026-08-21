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
     * @var string|null $image_id The image_id property
    */
    private ?string $image_id = null;
    
    /**
     * @var float|null $total_view_duration_ms The total_view_duration_ms property
    */
    private ?float $total_view_duration_ms = null;
    
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
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'avg_view_duration_ms' => fn(ParseNode $n) => $o->setAvgViewDurationMs($n->getFloatValue()),
            'image_id' => fn(ParseNode $n) => $o->setImageId($n->getStringValue()),
            'total_view_duration_ms' => fn(ParseNode $n) => $o->setTotalViewDurationMs($n->getFloatValue()),
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
     * Gets the total_view_duration_ms property value. The total_view_duration_ms property
     * @return float|null
    */
    public function getTotalViewDurationMs(): ?float {
        return $this->total_view_duration_ms;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeFloatValue('avg_view_duration_ms', $this->getAvgViewDurationMs());
        $writer->writeStringValue('image_id', $this->getImageId());
        $writer->writeFloatValue('total_view_duration_ms', $this->getTotalViewDurationMs());
    }

    /**
     * Sets the avg_view_duration_ms property value. Dwell time; images have no playback.
     * @param float|null $value Value to set for the avg_view_duration_ms property.
    */
    public function setAvgViewDurationMs(?float $value): void {
        $this->avg_view_duration_ms = $value;
    }

    /**
     * Sets the image_id property value. The image_id property
     * @param string|null $value Value to set for the image_id property.
    */
    public function setImageId(?string $value): void {
        $this->image_id = $value;
    }

    /**
     * Sets the total_view_duration_ms property value. The total_view_duration_ms property
     * @param float|null $value Value to set for the total_view_duration_ms property.
    */
    public function setTotalViewDurationMs(?float $value): void {
        $this->total_view_duration_ms = $value;
    }

}
