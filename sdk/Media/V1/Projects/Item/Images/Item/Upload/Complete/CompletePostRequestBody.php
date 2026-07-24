<?php

namespace Rixl\Sdk\Media\V1\Projects\Item\Images\Item\Upload\Complete;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class CompletePostRequestBody implements Parsable 
{
    /**
     * @var bool|null $attached_to_video The attached_to_video property
    */
    private ?bool $attached_to_video = null;
    
    /**
     * @var string|null $image_id The image_id property
    */
    private ?string $image_id = null;
    
    /**
     * @var string|null $org_id The org_id property
    */
    private ?string $org_id = null;
    
    /**
     * @var string|null $project_id The project_id property
    */
    private ?string $project_id = null;
    
    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return CompletePostRequestBody
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): CompletePostRequestBody {
        return new CompletePostRequestBody();
    }

    /**
     * Gets the attached_to_video property value. The attached_to_video property
     * @return bool|null
    */
    public function getAttachedToVideo(): ?bool {
        return $this->attached_to_video;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'attached_to_video' => fn(ParseNode $n) => $o->setAttachedToVideo($n->getBooleanValue()),
            'image_id' => fn(ParseNode $n) => $o->setImageId($n->getStringValue()),
            'org_id' => fn(ParseNode $n) => $o->setOrgId($n->getStringValue()),
            'project_id' => fn(ParseNode $n) => $o->setProjectId($n->getStringValue()),
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
     * Gets the org_id property value. The org_id property
     * @return string|null
    */
    public function getOrgId(): ?string {
        return $this->org_id;
    }

    /**
     * Gets the project_id property value. The project_id property
     * @return string|null
    */
    public function getProjectId(): ?string {
        return $this->project_id;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeBooleanValue('attached_to_video', $this->getAttachedToVideo());
        $writer->writeStringValue('image_id', $this->getImageId());
        $writer->writeStringValue('org_id', $this->getOrgId());
        $writer->writeStringValue('project_id', $this->getProjectId());
    }

    /**
     * Sets the attached_to_video property value. The attached_to_video property
     * @param bool|null $value Value to set for the attached_to_video property.
    */
    public function setAttachedToVideo(?bool $value): void {
        $this->attached_to_video = $value;
    }

    /**
     * Sets the image_id property value. The image_id property
     * @param string|null $value Value to set for the image_id property.
    */
    public function setImageId(?string $value): void {
        $this->image_id = $value;
    }

    /**
     * Sets the org_id property value. The org_id property
     * @param string|null $value Value to set for the org_id property.
    */
    public function setOrgId(?string $value): void {
        $this->org_id = $value;
    }

    /**
     * Sets the project_id property value. The project_id property
     * @param string|null $value Value to set for the project_id property.
    */
    public function setProjectId(?string $value): void {
        $this->project_id = $value;
    }

}
