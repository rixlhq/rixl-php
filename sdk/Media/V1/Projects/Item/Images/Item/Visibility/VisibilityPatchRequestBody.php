<?php

namespace Rixl\Sdk\Media\V1\Projects\Item\Images\Item\Visibility;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Rixl\Sdk\Models\Common\V1\Visibility;

class VisibilityPatchRequestBody implements Parsable 
{
    /**
     * @var Visibility|null $visibility The visibility property
    */
    private ?Visibility $visibility = null;
    
    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return VisibilityPatchRequestBody
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): VisibilityPatchRequestBody {
        return new VisibilityPatchRequestBody();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'visibility' => fn(ParseNode $n) => $o->setVisibility($n->getEnumValue(Visibility::class)),
        ];
    }

    /**
     * Gets the visibility property value. The visibility property
     * @return Visibility|null
    */
    public function getVisibility(): ?Visibility {
        return $this->visibility;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeEnumValue('visibility', $this->getVisibility());
    }

    /**
     * Sets the visibility property value. The visibility property
     * @param Visibility|null $value Value to set for the visibility property.
    */
    public function setVisibility(?Visibility $value): void {
        $this->visibility = $value;
    }

}
