<?php

namespace Rixl\Sdk\Models\Analytics\V1;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class ListDatasetsResponse implements Parsable 
{
    /**
     * @var array<Dataset>|null $datasets The datasets property
    */
    private ?array $datasets = null;
    
    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return ListDatasetsResponse
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): ListDatasetsResponse {
        return new ListDatasetsResponse();
    }

    /**
     * Gets the datasets property value. The datasets property
     * @return array<Dataset>|null
    */
    public function getDatasets(): ?array {
        return $this->datasets;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'datasets' => fn(ParseNode $n) => $o->setDatasets($n->getCollectionOfObjectValues([Dataset::class, 'createFromDiscriminatorValue'])),
        ];
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeCollectionOfObjectValues('datasets', $this->getDatasets());
    }

    /**
     * Sets the datasets property value. The datasets property
     * @param array<Dataset>|null $value Value to set for the datasets property.
    */
    public function setDatasets(?array $value): void {
        $this->datasets = $value;
    }

}
