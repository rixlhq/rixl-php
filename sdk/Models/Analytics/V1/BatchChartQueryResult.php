<?php

namespace Rixl\Sdk\Models\Analytics\V1;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class BatchChartQueryResult implements Parsable 
{
    /**
     * @var string|null $error The error property
    */
    private ?string $error = null;
    
    /**
     * @var array<ChartRow>|null $rows The rows property
    */
    private ?array $rows = null;
    
    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return BatchChartQueryResult
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): BatchChartQueryResult {
        return new BatchChartQueryResult();
    }

    /**
     * Gets the error property value. The error property
     * @return string|null
    */
    public function getError(): ?string {
        return $this->error;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'error' => fn(ParseNode $n) => $o->setError($n->getStringValue()),
            'rows' => fn(ParseNode $n) => $o->setRows($n->getCollectionOfObjectValues([ChartRow::class, 'createFromDiscriminatorValue'])),
        ];
    }

    /**
     * Gets the rows property value. The rows property
     * @return array<ChartRow>|null
    */
    public function getRows(): ?array {
        return $this->rows;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('error', $this->getError());
        $writer->writeCollectionOfObjectValues('rows', $this->getRows());
    }

    /**
     * Sets the error property value. The error property
     * @param string|null $value Value to set for the error property.
    */
    public function setError(?string $value): void {
        $this->error = $value;
    }

    /**
     * Sets the rows property value. The rows property
     * @param array<ChartRow>|null $value Value to set for the rows property.
    */
    public function setRows(?array $value): void {
        $this->rows = $value;
    }

}
