<?php

namespace Rixl\Sdk\Models\Analyticsv1;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

class VideoHeatmap implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var array<float>|null $data The data property
    */
    private ?array $data = null;
    
    /**
     * @var int|null $total_duration_ms The total_duration_ms property
    */
    private ?int $total_duration_ms = null;
    
    /**
     * @var string|null $video_id The video_id property
    */
    private ?string $video_id = null;
    
    /**
     * Instantiates a new VideoHeatmap and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return VideoHeatmap
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): VideoHeatmap {
        return new VideoHeatmap();
    }

    /**
     * Gets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        return $this->additionalData;
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
            'total_duration_ms' => fn(ParseNode $n) => $o->setTotalDurationMs($n->getIntegerValue()),
            'video_id' => fn(ParseNode $n) => $o->setVideoId($n->getStringValue()),
        ];
    }

    /**
     * Gets the total_duration_ms property value. The total_duration_ms property
     * @return int|null
    */
    public function getTotalDurationMs(): ?int {
        return $this->total_duration_ms;
    }

    /**
     * Gets the video_id property value. The video_id property
     * @return string|null
    */
    public function getVideoId(): ?string {
        return $this->video_id;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeCollectionOfPrimitiveValues('data', $this->getData());
        $writer->writeIntegerValue('total_duration_ms', $this->getTotalDurationMs());
        $writer->writeStringValue('video_id', $this->getVideoId());
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
     * Sets the data property value. The data property
     * @param array<float>|null $value Value to set for the data property.
    */
    public function setData(?array $value): void {
        $this->data = $value;
    }

    /**
     * Sets the total_duration_ms property value. The total_duration_ms property
     * @param int|null $value Value to set for the total_duration_ms property.
    */
    public function setTotalDurationMs(?int $value): void {
        $this->total_duration_ms = $value;
    }

    /**
     * Sets the video_id property value. The video_id property
     * @param string|null $value Value to set for the video_id property.
    */
    public function setVideoId(?string $value): void {
        $this->video_id = $value;
    }

}
