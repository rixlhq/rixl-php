<?php

namespace Rixl\Sdk\Models\Videosv1;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class ListVideosResponse implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var array<VideoSummary>|null $videos The videos property
    */
    private ?array $videos = null;
    
    /**
     * Instantiates a new ListVideosResponse and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return ListVideosResponse
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): ListVideosResponse {
        return new ListVideosResponse();
    }

    /**
     * Gets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        return $this->additionalData;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'videos' => fn(ParseNode $n) => $o->setVideos($n->getCollectionOfObjectValues([VideoSummary::class, 'createFromDiscriminatorValue'])),
        ];
    }

    /**
     * Gets the videos property value. The videos property
     * @return array<VideoSummary>|null
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
     * Sets the videos property value. The videos property
     * @param array<VideoSummary>|null $value Value to set for the videos property.
    */
    public function setVideos(?array $value): void {
        $this->videos = $value;
    }

}
