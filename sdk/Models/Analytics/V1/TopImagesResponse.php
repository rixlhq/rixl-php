<?php

namespace Rixl\Sdk\Models\Analytics\V1;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class TopImagesResponse implements Parsable 
{
    /**
     * @var array<ImageStats>|null $images The images property
    */
    private ?array $images = null;
    
    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return TopImagesResponse
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): TopImagesResponse {
        return new TopImagesResponse();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'images' => fn(ParseNode $n) => $o->setImages($n->getCollectionOfObjectValues([ImageStats::class, 'createFromDiscriminatorValue'])),
        ];
    }

    /**
     * Gets the images property value. The images property
     * @return array<ImageStats>|null
    */
    public function getImages(): ?array {
        return $this->images;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeCollectionOfObjectValues('images', $this->getImages());
    }

    /**
     * Sets the images property value. The images property
     * @param array<ImageStats>|null $value Value to set for the images property.
    */
    public function setImages(?array $value): void {
        $this->images = $value;
    }

}
