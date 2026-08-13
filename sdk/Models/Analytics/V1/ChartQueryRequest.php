<?php

namespace Rixl\Sdk\Models\Analytics\V1;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

class ChartQueryRequest implements Parsable 
{
    /**
     * @var string|null $dataset The dataset property
    */
    private ?string $dataset = null;
    
    /**
     * @var array<ChartFilter>|null $filters The filters property
    */
    private ?array $filters = null;
    
    /**
     * @var array<string>|null $group_by The group_by property
    */
    private ?array $group_by = null;
    
    /**
     * @var string|null $interval The interval property
    */
    private ?string $interval = null;
    
    /**
     * @var int|null $limit The limit property
    */
    private ?int $limit = null;
    
    /**
     * @var string|null $metric The metric property
    */
    private ?string $metric = null;
    
    /**
     * @var string|null $time_end The time_end property
    */
    private ?string $time_end = null;
    
    /**
     * @var string|null $time_start The time_start property
    */
    private ?string $time_start = null;
    
    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return ChartQueryRequest
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): ChartQueryRequest {
        return new ChartQueryRequest();
    }

    /**
     * Gets the dataset property value. The dataset property
     * @return string|null
    */
    public function getDataset(): ?string {
        return $this->dataset;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'dataset' => fn(ParseNode $n) => $o->setDataset($n->getStringValue()),
            'filters' => fn(ParseNode $n) => $o->setFilters($n->getCollectionOfObjectValues([ChartFilter::class, 'createFromDiscriminatorValue'])),
            'group_by' => function (ParseNode $n) {
                $val = $n->getCollectionOfPrimitiveValues();
                if (is_array($val)) {
                    TypeUtils::validateCollectionValues($val, 'string');
                }
                /** @var array<string>|null $val */
                $this->setGroupBy($val);
            },
            'interval' => fn(ParseNode $n) => $o->setInterval($n->getStringValue()),
            'limit' => fn(ParseNode $n) => $o->setLimit($n->getIntegerValue()),
            'metric' => fn(ParseNode $n) => $o->setMetric($n->getStringValue()),
            'time_end' => fn(ParseNode $n) => $o->setTimeEnd($n->getStringValue()),
            'time_start' => fn(ParseNode $n) => $o->setTimeStart($n->getStringValue()),
        ];
    }

    /**
     * Gets the filters property value. The filters property
     * @return array<ChartFilter>|null
    */
    public function getFilters(): ?array {
        return $this->filters;
    }

    /**
     * Gets the group_by property value. The group_by property
     * @return array<string>|null
    */
    public function getGroupBy(): ?array {
        return $this->group_by;
    }

    /**
     * Gets the interval property value. The interval property
     * @return string|null
    */
    public function getInterval(): ?string {
        return $this->interval;
    }

    /**
     * Gets the limit property value. The limit property
     * @return int|null
    */
    public function getLimit(): ?int {
        return $this->limit;
    }

    /**
     * Gets the metric property value. The metric property
     * @return string|null
    */
    public function getMetric(): ?string {
        return $this->metric;
    }

    /**
     * Gets the time_end property value. The time_end property
     * @return string|null
    */
    public function getTimeEnd(): ?string {
        return $this->time_end;
    }

    /**
     * Gets the time_start property value. The time_start property
     * @return string|null
    */
    public function getTimeStart(): ?string {
        return $this->time_start;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('dataset', $this->getDataset());
        $writer->writeCollectionOfObjectValues('filters', $this->getFilters());
        $writer->writeCollectionOfPrimitiveValues('group_by', $this->getGroupBy());
        $writer->writeStringValue('interval', $this->getInterval());
        $writer->writeIntegerValue('limit', $this->getLimit());
        $writer->writeStringValue('metric', $this->getMetric());
        $writer->writeStringValue('time_end', $this->getTimeEnd());
        $writer->writeStringValue('time_start', $this->getTimeStart());
    }

    /**
     * Sets the dataset property value. The dataset property
     * @param string|null $value Value to set for the dataset property.
    */
    public function setDataset(?string $value): void {
        $this->dataset = $value;
    }

    /**
     * Sets the filters property value. The filters property
     * @param array<ChartFilter>|null $value Value to set for the filters property.
    */
    public function setFilters(?array $value): void {
        $this->filters = $value;
    }

    /**
     * Sets the group_by property value. The group_by property
     * @param array<string>|null $value Value to set for the group_by property.
    */
    public function setGroupBy(?array $value): void {
        $this->group_by = $value;
    }

    /**
     * Sets the interval property value. The interval property
     * @param string|null $value Value to set for the interval property.
    */
    public function setInterval(?string $value): void {
        $this->interval = $value;
    }

    /**
     * Sets the limit property value. The limit property
     * @param int|null $value Value to set for the limit property.
    */
    public function setLimit(?int $value): void {
        $this->limit = $value;
    }

    /**
     * Sets the metric property value. The metric property
     * @param string|null $value Value to set for the metric property.
    */
    public function setMetric(?string $value): void {
        $this->metric = $value;
    }

    /**
     * Sets the time_end property value. The time_end property
     * @param string|null $value Value to set for the time_end property.
    */
    public function setTimeEnd(?string $value): void {
        $this->time_end = $value;
    }

    /**
     * Sets the time_start property value. The time_start property
     * @param string|null $value Value to set for the time_start property.
    */
    public function setTimeStart(?string $value): void {
        $this->time_start = $value;
    }

}
