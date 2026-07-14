<?php

namespace Rixl\Sdk\Media\V1\Projects\Item\Images\Item\Upload\Complete;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class CompletePostRequestBody implements Parsable 
{
    /**
     * @var bool|null $attachedToVideo The attachedToVideo property
    */
    private ?bool $attachedToVideo = null;
    
    /**
     * @var string|null $orgId The orgId property
    */
    private ?string $orgId = null;
    
    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return CompletePostRequestBody
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): CompletePostRequestBody {
        return new CompletePostRequestBody();
    }

    /**
     * Gets the attachedToVideo property value. The attachedToVideo property
     * @return bool|null
    */
    public function getAttachedToVideo(): ?bool {
        return $this->attachedToVideo;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'attachedToVideo' => fn(ParseNode $n) => $o->setAttachedToVideo($n->getBooleanValue()),
            'orgId' => fn(ParseNode $n) => $o->setOrgId($n->getStringValue()),
        ];
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
        $writer->writeBooleanValue('attachedToVideo', $this->getAttachedToVideo());
        $writer->writeStringValue('orgId', $this->getOrgId());
    }

    /**
     * Sets the attachedToVideo property value. The attachedToVideo property
     * @param bool|null $value Value to set for the attachedToVideo property.
    */
    public function setAttachedToVideo(?bool $value): void {
        $this->attachedToVideo = $value;
    }

    /**
     * Sets the orgId property value. The orgId property
     * @param string|null $value Value to set for the orgId property.
    */
    public function setOrgId(?string $value): void {
        $this->orgId = $value;
    }

}
