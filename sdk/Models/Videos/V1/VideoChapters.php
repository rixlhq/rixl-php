<?php

namespace Rixl\Sdk\Models\Videos\V1;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class VideoChapters implements Parsable 
{
    /**
     * @var array<Chapter>|null $chapters The chapters property
    */
    private ?array $chapters = null;
    
    /**
     * @var string|null $videoId The videoId property
    */
    private ?string $videoId = null;
    
    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return VideoChapters
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): VideoChapters {
        return new VideoChapters();
    }

    /**
     * Gets the chapters property value. The chapters property
     * @return array<Chapter>|null
    */
    public function getChapters(): ?array {
        return $this->chapters;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'chapters' => fn(ParseNode $n) => $o->setChapters($n->getCollectionOfObjectValues([Chapter::class, 'createFromDiscriminatorValue'])),
            'videoId' => fn(ParseNode $n) => $o->setVideoId($n->getStringValue()),
        ];
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
        $writer->writeCollectionOfObjectValues('chapters', $this->getChapters());
        $writer->writeStringValue('videoId', $this->getVideoId());
    }

    /**
     * Sets the chapters property value. The chapters property
     * @param array<Chapter>|null $value Value to set for the chapters property.
    */
    public function setChapters(?array $value): void {
        $this->chapters = $value;
    }

    /**
     * Sets the videoId property value. The videoId property
     * @param string|null $value Value to set for the videoId property.
    */
    public function setVideoId(?string $value): void {
        $this->videoId = $value;
    }

}
