<?php

namespace Rixl\Sdk\Models\Analytics\V1;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class Filters implements Parsable 
{
    /**
     * @var array<ChartFilter>|null $values The values property
    */
    private ?array $values = null;
    
    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return Filters
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): Filters {
        return new Filters();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'values' => fn(ParseNode $n) => $o->setValues($n->getCollectionOfObjectValues([ChartFilter::class, 'createFromDiscriminatorValue'])),
        ];
    }

    /**
     * Gets the values property value. The values property
     * @return array<ChartFilter>|null
    */
    public function getValues(): ?array {
        return $this->values;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeCollectionOfObjectValues('values', $this->getValues());
    }

    /**
     * Sets the values property value. The values property
     * @param array<ChartFilter>|null $value Value to set for the values property.
    */
    public function setValues(?array $value): void {
        $this->values = $value;
    }

}
