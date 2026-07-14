<?php

namespace Rixl\Sdk\Media\V1\Projects\Item\Videos\Item\Subtitles\Upload\Complete;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Rixl\Sdk\Models\Videos\V1\CompleteTrackUploadItem;

class CompletePostRequestBody implements Parsable 
{
    /**
     * @var array<CompleteTrackUploadItem>|null $items The items property
    */
    private ?array $items = null;
    
    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return CompletePostRequestBody
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): CompletePostRequestBody {
        return new CompletePostRequestBody();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'items' => fn(ParseNode $n) => $o->setItems($n->getCollectionOfObjectValues([CompleteTrackUploadItem::class, 'createFromDiscriminatorValue'])),
        ];
    }

    /**
     * Gets the items property value. The items property
     * @return array<CompleteTrackUploadItem>|null
    */
    public function getItems(): ?array {
        return $this->items;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeCollectionOfObjectValues('items', $this->getItems());
    }

    /**
     * Sets the items property value. The items property
     * @param array<CompleteTrackUploadItem>|null $value Value to set for the items property.
    */
    public function setItems(?array $value): void {
        $this->items = $value;
    }

}
