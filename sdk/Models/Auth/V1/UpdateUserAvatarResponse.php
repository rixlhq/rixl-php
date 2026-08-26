<?php

namespace Rixl\Sdk\Models\Auth\V1;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class UpdateUserAvatarResponse implements Parsable 
{
    /**
     * @var string|null $image_id The image_id property
    */
    private ?string $image_id = null;
    
    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return UpdateUserAvatarResponse
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): UpdateUserAvatarResponse {
        return new UpdateUserAvatarResponse();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'image_id' => fn(ParseNode $n) => $o->setImageId($n->getStringValue()),
        ];
    }

    /**
     * Gets the image_id property value. The image_id property
     * @return string|null
    */
    public function getImageId(): ?string {
        return $this->image_id;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('image_id', $this->getImageId());
    }

    /**
     * Sets the image_id property value. The image_id property
     * @param string|null $value Value to set for the image_id property.
    */
    public function setImageId(?string $value): void {
        $this->image_id = $value;
    }

}
