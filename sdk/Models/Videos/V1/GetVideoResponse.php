<?php

namespace Rixl\Sdk\Models\Videos\V1;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class GetVideoResponse implements Parsable 
{
    /**
     * @var Video|null $video The video property
    */
    private ?Video $video = null;
    
    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return GetVideoResponse
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): GetVideoResponse {
        return new GetVideoResponse();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'video' => fn(ParseNode $n) => $o->setVideo($n->getObjectValue([Video::class, 'createFromDiscriminatorValue'])),
        ];
    }

    /**
     * Gets the video property value. The video property
     * @return Video|null
    */
    public function getVideo(): ?Video {
        return $this->video;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeObjectValue('video', $this->getVideo());
    }

    /**
     * Sets the video property value. The video property
     * @param Video|null $value Value to set for the video property.
    */
    public function setVideo(?Video $value): void {
        $this->video = $value;
    }

}
