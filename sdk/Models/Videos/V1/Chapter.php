<?php

namespace Rixl\Sdk\Models\Videos\V1;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class Chapter implements Parsable 
{
    /**
     * @var float|null $start_time_sec The start_time_sec property
    */
    private ?float $start_time_sec = null;
    
    /**
     * @var string|null $title The title property
    */
    private ?string $title = null;
    
    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return Chapter
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): Chapter {
        return new Chapter();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
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
        $writer->writeFloatValue('start_time_sec', $this->getStartTimeSec());
        $writer->writeStringValue('title', $this->getTitle());
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
