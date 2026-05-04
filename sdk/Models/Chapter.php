<?php

namespace Rixl\Sdk\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class Chapter implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var string|null $duration_label The duration_label property
    */
    private ?string $duration_label = null;
    
    /**
     * @var float|null $end_time_sec The end_time_sec property
    */
    private ?float $end_time_sec = null;
    
    /**
     * @var float|null $start_time_sec The start_time_sec property
    */
    private ?float $start_time_sec = null;
    
    /**
     * @var string|null $title The title property
    */
    private ?string $title = null;
    
    /**
     * Instantiates a new Chapter and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return Chapter
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): Chapter {
        return new Chapter();
    }

    /**
     * Gets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        return $this->additionalData;
    }

    /**
     * Gets the duration_label property value. The duration_label property
     * @return string|null
    */
    public function getDurationLabel(): ?string {
        return $this->duration_label;
    }

    /**
     * Gets the end_time_sec property value. The end_time_sec property
     * @return float|null
    */
    public function getEndTimeSec(): ?float {
        return $this->end_time_sec;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'duration_label' => fn(ParseNode $n) => $o->setDurationLabel($n->getStringValue()),
            'end_time_sec' => fn(ParseNode $n) => $o->setEndTimeSec($n->getFloatValue()),
            'start_time_sec' => fn(ParseNode $n) => $o->setStartTimeSec($n->getFloatValue()),
            'title' => fn(ParseNode $n) => $o->setTitle($n->getStringValue()),
        ];
    }

    /**
     * Gets the start_time_sec property value. The start_time_sec property
     * @return float|null
    */
    public function getStartTimeSec(): ?float {
        return $this->start_time_sec;
    }

    /**
     * Gets the title property value. The title property
     * @return string|null
    */
    public function getTitle(): ?string {
        return $this->title;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('duration_label', $this->getDurationLabel());
        $writer->writeFloatValue('end_time_sec', $this->getEndTimeSec());
        $writer->writeFloatValue('start_time_sec', $this->getStartTimeSec());
        $writer->writeStringValue('title', $this->getTitle());
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
     * Sets the duration_label property value. The duration_label property
     * @param string|null $value Value to set for the duration_label property.
    */
    public function setDurationLabel(?string $value): void {
        $this->duration_label = $value;
    }

    /**
     * Sets the end_time_sec property value. The end_time_sec property
     * @param float|null $value Value to set for the end_time_sec property.
    */
    public function setEndTimeSec(?float $value): void {
        $this->end_time_sec = $value;
    }

    /**
     * Sets the start_time_sec property value. The start_time_sec property
     * @param float|null $value Value to set for the start_time_sec property.
    */
    public function setStartTimeSec(?float $value): void {
        $this->start_time_sec = $value;
    }

    /**
     * Sets the title property value. The title property
     * @param string|null $value Value to set for the title property.
    */
    public function setTitle(?string $value): void {
        $this->title = $value;
    }

}
