<?php

namespace Rixl\Sdk\Models\Videos\V1;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class ListSubtitlesResponse implements Parsable 
{
    /**
     * @var array<Subtitle>|null $subtitles The subtitles property
    */
    private ?array $subtitles = null;
    
    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return ListSubtitlesResponse
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): ListSubtitlesResponse {
        return new ListSubtitlesResponse();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'subtitles' => fn(ParseNode $n) => $o->setSubtitles($n->getCollectionOfObjectValues([Subtitle::class, 'createFromDiscriminatorValue'])),
        ];
    }

    /**
     * Gets the subtitles property value. The subtitles property
     * @return array<Subtitle>|null
    */
    public function getSubtitles(): ?array {
        return $this->subtitles;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeCollectionOfObjectValues('subtitles', $this->getSubtitles());
    }

    /**
     * Sets the subtitles property value. The subtitles property
     * @param array<Subtitle>|null $value Value to set for the subtitles property.
    */
    public function setSubtitles(?array $value): void {
        $this->subtitles = $value;
    }

}
