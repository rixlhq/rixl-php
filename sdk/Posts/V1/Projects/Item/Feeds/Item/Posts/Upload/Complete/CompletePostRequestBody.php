<?php

namespace Rixl\Sdk\Posts\V1\Projects\Item\Feeds\Item\Posts\Upload\Complete;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class CompletePostRequestBody implements Parsable 
{
    /**
     * @var string|null $orgId The orgId property
    */
    private ?string $orgId = null;
    
    /**
     * @var string|null $postId The postId property
    */
    private ?string $postId = null;
    
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
            'orgId' => fn(ParseNode $n) => $o->setOrgId($n->getStringValue()),
            'postId' => fn(ParseNode $n) => $o->setPostId($n->getStringValue()),
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
     * Gets the postId property value. The postId property
     * @return string|null
    */
    public function getPostId(): ?string {
        return $this->postId;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('orgId', $this->getOrgId());
        $writer->writeStringValue('postId', $this->getPostId());
    }

    /**
     * Sets the orgId property value. The orgId property
     * @param string|null $value Value to set for the orgId property.
    */
    public function setOrgId(?string $value): void {
        $this->orgId = $value;
    }

    /**
     * Sets the postId property value. The postId property
     * @param string|null $value Value to set for the postId property.
    */
    public function setPostId(?string $value): void {
        $this->postId = $value;
    }

}
