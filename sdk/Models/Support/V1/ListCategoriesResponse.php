<?php

namespace Rixl\Sdk\Models\Support\V1;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class ListCategoriesResponse implements Parsable 
{
    /**
     * @var array<Category>|null $categories The categories property
    */
    private ?array $categories = null;
    
    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return ListCategoriesResponse
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): ListCategoriesResponse {
        return new ListCategoriesResponse();
    }

    /**
     * Gets the categories property value. The categories property
     * @return array<Category>|null
    */
    public function getCategories(): ?array {
        return $this->categories;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'categories' => fn(ParseNode $n) => $o->setCategories($n->getCollectionOfObjectValues([Category::class, 'createFromDiscriminatorValue'])),
        ];
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeCollectionOfObjectValues('categories', $this->getCategories());
    }

    /**
     * Sets the categories property value. The categories property
     * @param array<Category>|null $value Value to set for the categories property.
    */
    public function setCategories(?array $value): void {
        $this->categories = $value;
    }

}
