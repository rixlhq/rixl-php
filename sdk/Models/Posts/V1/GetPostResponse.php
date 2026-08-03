<?php

namespace Rixl\Sdk\Models\Posts\V1;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class GetPostResponse implements Parsable 
{
    /**
     * @var Post|null $post The post property
    */
    private ?Post $post = null;
    
    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return GetPostResponse
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): GetPostResponse {
        return new GetPostResponse();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'post' => fn(ParseNode $n) => $o->setPost($n->getObjectValue([Post::class, 'createFromDiscriminatorValue'])),
        ];
    }

    /**
     * Gets the post property value. The post property
     * @return Post|null
    */
    public function getPost(): ?Post {
        return $this->post;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeObjectValue('post', $this->getPost());
    }

    /**
     * Sets the post property value. The post property
     * @param Post|null $value Value to set for the post property.
    */
    public function setPost(?Post $value): void {
        $this->post = $value;
    }

}
