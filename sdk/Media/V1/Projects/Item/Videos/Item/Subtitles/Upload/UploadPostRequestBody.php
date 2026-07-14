<?php

namespace Rixl\Sdk\Media\V1\Projects\Item\Videos\Item\Subtitles\Upload;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Rixl\Sdk\Models\Videos\V1\TrackUploadItem;

class UploadPostRequestBody implements Parsable 
{
    /**
     * @var array<TrackUploadItem>|null $items The items property
    */
    private ?array $items = null;
    
    /**
     * @var string|null $orgId The orgId property
    */
    private ?string $orgId = null;
    
    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return UploadPostRequestBody
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): UploadPostRequestBody {
        return new UploadPostRequestBody();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'items' => fn(ParseNode $n) => $o->setItems($n->getCollectionOfObjectValues([TrackUploadItem::class, 'createFromDiscriminatorValue'])),
            'orgId' => fn(ParseNode $n) => $o->setOrgId($n->getStringValue()),
        ];
    }

    /**
     * Gets the items property value. The items property
     * @return array<TrackUploadItem>|null
    */
    public function getItems(): ?array {
        return $this->items;
    }

    /**
     * Gets the orgId property value. The orgId property
     * @return string|null
    */
    public function getOrgId(): ?string {
        return $this->orgId;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeCollectionOfObjectValues('items', $this->getItems());
        $writer->writeStringValue('orgId', $this->getOrgId());
    }

    /**
     * Sets the items property value. The items property
     * @param array<TrackUploadItem>|null $value Value to set for the items property.
    */
    public function setItems(?array $value): void {
        $this->items = $value;
    }

    /**
     * Sets the orgId property value. The orgId property
     * @param string|null $value Value to set for the orgId property.
    */
    public function setOrgId(?string $value): void {
        $this->orgId = $value;
    }

}
