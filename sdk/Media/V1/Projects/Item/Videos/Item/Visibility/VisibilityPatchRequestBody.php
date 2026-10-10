<?php

namespace Rixl\Sdk\Media\V1\Projects\Item\Videos\Item\Visibility;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Rixl\Sdk\Models\Common\V1\Visibility;

class VisibilityPatchRequestBody implements Parsable 
{
    /**
     * @var string|null $project_id The project_id property
    */
    private ?string $project_id = null;
    
    /**
     * @var string|null $video_id The video_id property
    */
    private ?string $video_id = null;
    
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
            'project_id' => fn(ParseNode $n) => $o->setProjectId($n->getStringValue()),
            'video_id' => fn(ParseNode $n) => $o->setVideoId($n->getStringValue()),
            'visibility' => fn(ParseNode $n) => $o->setVisibility($n->getEnumValue(Visibility::class)),
        ];
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
        $writer->writeStringValue('project_id', $this->getProjectId());
        $writer->writeStringValue('video_id', $this->getVideoId());
        $writer->writeEnumValue('visibility', $this->getVisibility());
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

    /**
     * Sets the visibility property value. The visibility property
     * @param Visibility|null $value Value to set for the visibility property.
    */
    public function setVisibility(?Visibility $value): void {
        $this->visibility = $value;
    }

}
