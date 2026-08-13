<?php

namespace Rixl\Sdk\Models\Analytics\V1;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class GetFilterOptionsResponse implements Parsable 
{
    /**
     * @var array<FilterOption>|null $options The options property
    */
    private ?array $options = null;
    
    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return GetFilterOptionsResponse
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): GetFilterOptionsResponse {
        return new GetFilterOptionsResponse();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'options' => fn(ParseNode $n) => $o->setOptions($n->getCollectionOfObjectValues([FilterOption::class, 'createFromDiscriminatorValue'])),
        ];
    }

    /**
     * Gets the options property value. The options property
     * @return array<FilterOption>|null
    */
    public function getOptions(): ?array {
        return $this->options;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeCollectionOfObjectValues('options', $this->getOptions());
    }

    /**
     * Sets the options property value. The options property
     * @param array<FilterOption>|null $value Value to set for the options property.
    */
    public function setOptions(?array $value): void {
        $this->options = $value;
    }

}
