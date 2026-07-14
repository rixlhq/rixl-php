<?php

namespace Rixl\Sdk\Models\Auth\V1;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class ListAttachmentsResponse implements Parsable 
{
    /**
     * @var array<PolicyAttachment>|null $attachments The attachments property
    */
    private ?array $attachments = null;
    
    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return ListAttachmentsResponse
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): ListAttachmentsResponse {
        return new ListAttachmentsResponse();
    }

    /**
     * Gets the attachments property value. The attachments property
     * @return array<PolicyAttachment>|null
    */
    public function getAttachments(): ?array {
        return $this->attachments;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'attachments' => fn(ParseNode $n) => $o->setAttachments($n->getCollectionOfObjectValues([PolicyAttachment::class, 'createFromDiscriminatorValue'])),
        ];
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeCollectionOfObjectValues('attachments', $this->getAttachments());
    }

    /**
     * Sets the attachments property value. The attachments property
     * @param array<PolicyAttachment>|null $value Value to set for the attachments property.
    */
    public function setAttachments(?array $value): void {
        $this->attachments = $value;
    }

}
