<?php

namespace Rixl\Sdk\Models\Analytics\V1;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class GetPostStatsResponse implements Parsable 
{
    /**
     * @var string|null $postId The postId property
    */
    private ?string $postId = null;
    
    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return GetPostStatsResponse
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): GetPostStatsResponse {
        return new GetPostStatsResponse();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'postId' => fn(ParseNode $n) => $o->setPostId($n->getStringValue()),
        ];
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
        $writer->writeStringValue('postId', $this->getPostId());
    }

    /**
     * Sets the postId property value. The postId property
     * @param string|null $value Value to set for the postId property.
    */
    public function setPostId(?string $value): void {
        $this->postId = $value;
    }

}
