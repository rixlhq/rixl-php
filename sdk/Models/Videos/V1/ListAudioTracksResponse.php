<?php

namespace Rixl\Sdk\Models\Videos\V1;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class ListAudioTracksResponse implements Parsable 
{
    /**
     * @var array<AudioTrack>|null $audio_tracks The audio_tracks property
    */
    private ?array $audio_tracks = null;
    
    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return ListAudioTracksResponse
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): ListAudioTracksResponse {
        return new ListAudioTracksResponse();
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
    }

    /**
     * Sets the audio_tracks property value. The audio_tracks property
     * @param array<AudioTrack>|null $value Value to set for the audio_tracks property.
    */
    public function setAudioTracks(?array $value): void {
        $this->audio_tracks = $value;
    }

}
