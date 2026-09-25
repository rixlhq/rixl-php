<?php

namespace Rixl\Sdk\Posts\V1\Projects\Item\Feeds\Item\Posts;

use Microsoft\Kiota\Abstractions\Serialization\ComposedTypeWrapper;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\ParseNodeHelper;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

/**
 * Composed type wrapper for classes PostsPostRequestBodyMember1, PostsPostRequestBodyMember2
*/
class PostsPostRequestBody implements ComposedTypeWrapper, Parsable 
{
    /**
     * @var PostsPostRequestBodyMember1|null $postsPostRequestBodyMember1 Composed type representation for type PostsPostRequestBodyMember1
    */
    private ?PostsPostRequestBodyMember1 $postsPostRequestBodyMember1 = null;
    
    /**
     * @var PostsPostRequestBodyMember2|null $postsPostRequestBodyMember2 Composed type representation for type PostsPostRequestBodyMember2
    */
    private ?PostsPostRequestBodyMember2 $postsPostRequestBodyMember2 = null;
    
    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return PostsPostRequestBody
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): PostsPostRequestBody {
        $result = new PostsPostRequestBody();
        $result->setPostsPostRequestBodyMember1(new PostsPostRequestBodyMember1());
        $result->setPostsPostRequestBodyMember2(new PostsPostRequestBodyMember2());
        return $result;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        if ($this->getPostsPostRequestBodyMember1() !== null || $this->getPostsPostRequestBodyMember2() !== null) {
            return ParseNodeHelper::mergeDeserializersForIntersectionWrapper($this->getPostsPostRequestBodyMember1(), $this->getPostsPostRequestBodyMember2());
        }
        return [];
    }

    /**
     * Gets the postsPostRequestBodyMember1 property value. Composed type representation for type PostsPostRequestBodyMember1
     * @return PostsPostRequestBodyMember1|null
    */
    public function getPostsPostRequestBodyMember1(): ?PostsPostRequestBodyMember1 {
        return $this->postsPostRequestBodyMember1;
    }

    /**
     * Gets the postsPostRequestBodyMember2 property value. Composed type representation for type PostsPostRequestBodyMember2
     * @return PostsPostRequestBodyMember2|null
    */
    public function getPostsPostRequestBodyMember2(): ?PostsPostRequestBodyMember2 {
        return $this->postsPostRequestBodyMember2;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeObjectValue(null, $this->getPostsPostRequestBodyMember1(), $this->getPostsPostRequestBodyMember2());
    }

    /**
     * Sets the postsPostRequestBodyMember1 property value. Composed type representation for type PostsPostRequestBodyMember1
     * @param PostsPostRequestBodyMember1|null $value Value to set for the postsPostRequestBodyMember1 property.
    */
    public function setPostsPostRequestBodyMember1(?PostsPostRequestBodyMember1 $value): void {
        $this->postsPostRequestBodyMember1 = $value;
    }

    /**
     * Sets the postsPostRequestBodyMember2 property value. Composed type representation for type PostsPostRequestBodyMember2
     * @param PostsPostRequestBodyMember2|null $value Value to set for the postsPostRequestBodyMember2 property.
    */
    public function setPostsPostRequestBodyMember2(?PostsPostRequestBodyMember2 $value): void {
        $this->postsPostRequestBodyMember2 = $value;
    }

}
