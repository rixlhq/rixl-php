<?php

namespace Rixl\Sdk\Models\Posts\V1;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class ListPostsResponse implements Parsable 
{
    /**
     * @var int|null $limit Maximum number of items returned.
    */
    private ?int $limit = null;
    
    /**
     * @var int|null $offset Number of items skipped before this page.
    */
    private ?int $offset = null;
    
    /**
     * @var array<Post>|null $posts The posts property
    */
    private ?array $posts = null;
    
    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return ListPostsResponse
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): ListPostsResponse {
        return new ListPostsResponse();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'limit' => fn(ParseNode $n) => $o->setLimit($n->getIntegerValue()),
            'offset' => fn(ParseNode $n) => $o->setOffset($n->getIntegerValue()),
            'posts' => fn(ParseNode $n) => $o->setPosts($n->getCollectionOfObjectValues([Post::class, 'createFromDiscriminatorValue'])),
        ];
    }

    /**
     * Gets the limit property value. Maximum number of items returned.
     * @return int|null
    */
    public function getLimit(): ?int {
        return $this->limit;
    }

    /**
     * Gets the offset property value. Number of items skipped before this page.
     * @return int|null
    */
    public function getOffset(): ?int {
        return $this->offset;
    }

    /**
     * Gets the posts property value. The posts property
     * @return array<Post>|null
    */
    public function getPosts(): ?array {
        return $this->posts;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeIntegerValue('limit', $this->getLimit());
        $writer->writeIntegerValue('offset', $this->getOffset());
        $writer->writeCollectionOfObjectValues('posts', $this->getPosts());
    }

    /**
     * Sets the limit property value. Maximum number of items returned.
     * @param int|null $value Value to set for the limit property.
    */
    public function setLimit(?int $value): void {
        $this->limit = $value;
    }

    /**
     * Sets the offset property value. Number of items skipped before this page.
     * @param int|null $value Value to set for the offset property.
    */
    public function setOffset(?int $value): void {
        $this->offset = $value;
    }

    /**
     * Sets the posts property value. The posts property
     * @param array<Post>|null $value Value to set for the posts property.
    */
    public function setPosts(?array $value): void {
        $this->posts = $value;
    }

}
