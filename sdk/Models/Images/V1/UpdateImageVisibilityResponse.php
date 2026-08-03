<?php

namespace Rixl\Sdk\Models\Images\V1;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class UpdateImageVisibilityResponse implements Parsable 
{
    /**
     * @var Image|null $image The image property
    */
    private ?Image $image = null;
    
    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return UpdateImageVisibilityResponse
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): UpdateImageVisibilityResponse {
        return new UpdateImageVisibilityResponse();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'image' => fn(ParseNode $n) => $o->setImage($n->getObjectValue([Image::class, 'createFromDiscriminatorValue'])),
        ];
    }

    /**
     * Gets the image property value. The image property
     * @return Image|null
    */
    public function getImage(): ?Image {
        return $this->image;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeObjectValue('image', $this->getImage());
    }

    /**
     * Sets the image property value. The image property
     * @param Image|null $value Value to set for the image property.
    */
    public function setImage(?Image $value): void {
        $this->image = $value;
    }

}
