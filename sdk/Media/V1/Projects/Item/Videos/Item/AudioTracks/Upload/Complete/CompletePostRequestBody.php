<?php

namespace Rixl\Sdk\Media\V1\Projects\Item\Videos\Item\AudioTracks\Upload\Complete;

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
     * @var string|null $project_id The project_id property
    */
    private ?string $project_id = null;
    
    /**
     * @var string|null $video_id The video_id property
    */
    private ?string $video_id = null;
    
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
            'project_id' => fn(ParseNode $n) => $o->setProjectId($n->getStringValue()),
            'video_id' => fn(ParseNode $n) => $o->setVideoId($n->getStringValue()),
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
     * Gets the project_id property value. The project_id property
     * @return string|null
    */
    public function getProjectId(): ?string {
        return $this->project_id;
    }

    /**
     * Gets the video_id property value. The video_id property
     * @return string|null
    */
    public function getVideoId(): ?string {
        return $this->video_id;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeCollectionOfObjectValues('items', $this->getItems());
        $writer->writeStringValue('project_id', $this->getProjectId());
        $writer->writeStringValue('video_id', $this->getVideoId());
    }

    /**
     * Sets the items property value. The items property
     * @param array<CompleteTrackUploadItem>|null $value Value to set for the items property.
    */
    public function setItems(?array $value): void {
        $this->items = $value;
    }

    /**
     * Sets the project_id property value. The project_id property
     * @param string|null $value Value to set for the project_id property.
    */
    public function setProjectId(?string $value): void {
        $this->project_id = $value;
    }

    /**
     * Sets the video_id property value. The video_id property
     * @param string|null $value Value to set for the video_id property.
    */
    public function setVideoId(?string $value): void {
        $this->video_id = $value;
    }

}
