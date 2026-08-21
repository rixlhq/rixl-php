<?php

namespace Rixl\Sdk\Models\Analytics\V1;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class BatchChartQueryResponse implements Parsable 
{
    /**
     * @var array<BatchChartQueryResult>|null $results The results property
    */
    private ?array $results = null;
    
    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return BatchChartQueryResponse
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): BatchChartQueryResponse {
        return new BatchChartQueryResponse();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'results' => fn(ParseNode $n) => $o->setResults($n->getCollectionOfObjectValues([BatchChartQueryResult::class, 'createFromDiscriminatorValue'])),
        ];
    }

    /**
     * Gets the results property value. The results property
     * @return array<BatchChartQueryResult>|null
    */
    public function getResults(): ?array {
        return $this->results;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeCollectionOfObjectValues('results', $this->getResults());
    }

    /**
     * Sets the results property value. The results property
     * @param array<BatchChartQueryResult>|null $value Value to set for the results property.
    */
    public function setResults(?array $value): void {
        $this->results = $value;
    }

}
