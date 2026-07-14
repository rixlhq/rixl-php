<?php

namespace Rixl\Sdk\Models\Videos\V1;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class Chapter implements Parsable 
{
    /**
     * @var float|null $startTimeSec The startTimeSec property
    */
    private ?float $startTimeSec = null;
    
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
            'startTimeSec' => fn(ParseNode $n) => $o->setStartTimeSec($n->getFloatValue()),
            'title' => fn(ParseNode $n) => $o->setTitle($n->getStringValue()),
        ];
    }

    /**
     * Gets the startTimeSec property value. The startTimeSec property
     * @return float|null
    */
    public function getStartTimeSec(): ?float {
        return $this->startTimeSec;
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
        $writer->writeFloatValue('startTimeSec', $this->getStartTimeSec());
        $writer->writeStringValue('title', $this->getTitle());
    }

    /**
     * Sets the startTimeSec property value. The startTimeSec property
     * @param float|null $value Value to set for the startTimeSec property.
    */
    public function setStartTimeSec(?float $value): void {
        $this->startTimeSec = $value;
    }

    /**
     * Sets the title property value. The title property
     * @param string|null $value Value to set for the title property.
    */
    public function setTitle(?string $value): void {
        $this->title = $value;
    }

}
