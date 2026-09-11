<?php

namespace Rixl\Sdk\Models\Posts\V1;

use Microsoft\Kiota\Abstractions\Serialization\ComposedTypeWrapper;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\ParseNodeHelper;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

/**
 * Composed type wrapper for classes PostMember1, PostMember2
*/
class Post implements ComposedTypeWrapper, Parsable 
{
    /**
     * @var PostMember1|null $postMember1 Composed type representation for type PostMember1
    */
    private ?PostMember1 $postMember1 = null;
    
    /**
     * @var PostMember2|null $postMember2 Composed type representation for type PostMember2
    */
    private ?PostMember2 $postMember2 = null;
    
    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return Post
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): Post {
        $result = new Post();
        $result->setPostMember1(new PostMember1());
        $result->setPostMember2(new PostMember2());
        return $result;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        if ($this->getPostMember1() !== null || $this->getPostMember2() !== null) {
            return ParseNodeHelper::mergeDeserializersForIntersectionWrapper($this->getPostMember1(), $this->getPostMember2());
        }
        return [];
    }

    /**
     * Gets the PostMember1 property value. Composed type representation for type PostMember1
     * @return PostMember1|null
    */
    public function getPostMember1(): ?PostMember1 {
        return $this->postMember1;
    }

    /**
     * Gets the PostMember2 property value. Composed type representation for type PostMember2
     * @return PostMember2|null
    */
    public function getPostMember2(): ?PostMember2 {
        return $this->postMember2;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeObjectValue(null, $this->getPostMember1(), $this->getPostMember2());
    }

    /**
     * Sets the PostMember1 property value. Composed type representation for type PostMember1
     * @param PostMember1|null $value Value to set for the PostMember1 property.
    */
    public function setPostMember1(?PostMember1 $value): void {
        $this->postMember1 = $value;
    }

    /**
     * Sets the PostMember2 property value. Composed type representation for type PostMember2
     * @param PostMember2|null $value Value to set for the PostMember2 property.
    */
    public function setPostMember2(?PostMember2 $value): void {
        $this->postMember2 = $value;
    }

}
