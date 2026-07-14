<?php

namespace Rixl\Sdk\Organizations\Item\Projects\V1\Item\VideoQuality;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Rixl\Sdk\Models\Common\V1\VideoQuality;

class VideoQualityPatchRequestBody implements Parsable 
{
    /**
     * @var VideoQuality|null $videoQuality The videoQuality property
    */
    private ?VideoQuality $videoQuality = null;
    
    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return VideoQualityPatchRequestBody
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): VideoQualityPatchRequestBody {
        return new VideoQualityPatchRequestBody();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'videoQuality' => fn(ParseNode $n) => $o->setVideoQuality($n->getEnumValue(VideoQuality::class)),
        ];
    }

    /**
     * Gets the videoQuality property value. The videoQuality property
     * @return VideoQuality|null
    */
    public function getVideoQuality(): ?VideoQuality {
        return $this->videoQuality;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeEnumValue('videoQuality', $this->getVideoQuality());
    }

    /**
     * Sets the videoQuality property value. The videoQuality property
     * @param VideoQuality|null $value Value to set for the videoQuality property.
    */
    public function setVideoQuality(?VideoQuality $value): void {
        $this->videoQuality = $value;
    }

}
