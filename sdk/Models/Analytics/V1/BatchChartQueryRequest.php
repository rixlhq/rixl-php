<?php

namespace Rixl\Sdk\Models\Analytics\V1;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class BatchChartQueryRequest implements Parsable 
{
    /**
     * @var array<ChartQueryRequest>|null $queries The queries property
    */
    private ?array $queries = null;
    
    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return BatchChartQueryRequest
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): BatchChartQueryRequest {
        return new BatchChartQueryRequest();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'queries' => fn(ParseNode $n) => $o->setQueries($n->getCollectionOfObjectValues([ChartQueryRequest::class, 'createFromDiscriminatorValue'])),
        ];
    }

    /**
     * Gets the queries property value. The queries property
     * @return array<ChartQueryRequest>|null
    */
    public function getQueries(): ?array {
        return $this->queries;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeCollectionOfObjectValues('queries', $this->getQueries());
    }

    /**
     * Sets the queries property value. The queries property
     * @param array<ChartQueryRequest>|null $value Value to set for the queries property.
    */
    public function setQueries(?array $value): void {
        $this->queries = $value;
    }

}
