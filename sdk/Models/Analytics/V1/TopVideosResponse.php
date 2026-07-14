<?php

namespace Rixl\Sdk\Models\Analytics\V1;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class TopVideosResponse implements Parsable 
{
    /**
     * @var array<VideoStats>|null $videos The videos property
    */
    private ?array $videos = null;
    
    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return TopVideosResponse
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): TopVideosResponse {
        return new TopVideosResponse();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'videos' => fn(ParseNode $n) => $o->setVideos($n->getCollectionOfObjectValues([VideoStats::class, 'createFromDiscriminatorValue'])),
        ];
    }

    /**
     * Gets the videos property value. The videos property
     * @return array<VideoStats>|null
    */
    public function getVideos(): ?array {
        return $this->videos;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeCollectionOfObjectValues('videos', $this->getVideos());
    }

    /**
     * Sets the videos property value. The videos property
     * @param array<VideoStats>|null $value Value to set for the videos property.
    */
    public function setVideos(?array $value): void {
        $this->videos = $value;
    }

}
