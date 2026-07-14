<?php

namespace Rixl\Sdk\Models\Analytics\V1;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class TopPostsResponse implements Parsable 
{
    /**
     * @var array<PostStats>|null $posts The posts property
    */
    private ?array $posts = null;
    
    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return TopPostsResponse
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): TopPostsResponse {
        return new TopPostsResponse();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'posts' => fn(ParseNode $n) => $o->setPosts($n->getCollectionOfObjectValues([PostStats::class, 'createFromDiscriminatorValue'])),
        ];
    }

    /**
     * Gets the posts property value. The posts property
     * @return array<PostStats>|null
    */
    public function getPosts(): ?array {
        return $this->posts;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeCollectionOfObjectValues('posts', $this->getPosts());
    }

    /**
     * Sets the posts property value. The posts property
     * @param array<PostStats>|null $value Value to set for the posts property.
    */
    public function setPosts(?array $value): void {
        $this->posts = $value;
    }

}
