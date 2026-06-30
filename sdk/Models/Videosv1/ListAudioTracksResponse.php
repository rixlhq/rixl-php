<?php

namespace Rixl\Sdk\Models\Videosv1;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class ListAudioTracksResponse implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var array<AudioTrack>|null $audio_tracks The audio_tracks property
    */
    private ?array $audio_tracks = null;
    
    /**
     * Instantiates a new ListAudioTracksResponse and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return ListAudioTracksResponse
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): ListAudioTracksResponse {
        return new ListAudioTracksResponse();
    }

    /**
     * Gets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        return $this->additionalData;
    }

    /**
     * Gets the audio_tracks property value. The audio_tracks property
     * @return array<AudioTrack>|null
    */
    public function getAudioTracks(): ?array {
        return $this->audio_tracks;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'audio_tracks' => fn(ParseNode $n) => $o->setAudioTracks($n->getCollectionOfObjectValues([AudioTrack::class, 'createFromDiscriminatorValue'])),
        ];
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeCollectionOfObjectValues('audio_tracks', $this->getAudioTracks());
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
     * Sets the audio_tracks property value. The audio_tracks property
     * @param array<AudioTrack>|null $value Value to set for the audio_tracks property.
    */
    public function setAudioTracks(?array $value): void {
        $this->audio_tracks = $value;
    }

}
