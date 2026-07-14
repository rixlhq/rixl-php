<?php

namespace Rixl\Sdk\Models\Analytics\V1;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

class VideoHeatmap implements Parsable 
{
    /**
     * @var array<float>|null $data The data property
    */
    private ?array $data = null;
    
    /**
     * @var string|null $videoId The videoId property
    */
    private ?string $videoId = null;
    
    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return VideoHeatmap
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): VideoHeatmap {
        return new VideoHeatmap();
    }

    /**
     * Gets the data property value. The data property
     * @return array<float>|null
    */
    public function getData(): ?array {
        return $this->data;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'data' => function (ParseNode $n) {
                $val = $n->getCollectionOfPrimitiveValues();
                if (is_array($val)) {
                    TypeUtils::validateCollectionValues($val, 'float');
                }
                /** @var array<float>|null $val */
                $this->setData($val);
            },
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
        $writer->writeCollectionOfPrimitiveValues('data', $this->getData());
        $writer->writeStringValue('videoId', $this->getVideoId());
    }

    /**
     * Sets the data property value. The data property
     * @param array<float>|null $value Value to set for the data property.
    */
    public function setData(?array $value): void {
        $this->data = $value;
    }

    /**
     * Sets the videoId property value. The videoId property
     * @param string|null $value Value to set for the videoId property.
    */
    public function setVideoId(?string $value): void {
        $this->videoId = $value;
    }

}
