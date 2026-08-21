<?php

namespace Rixl\Sdk\Models\Analytics\V1;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class WidgetPatch implements Parsable 
{
    /**
     * @var string|null $chart_type The chart_type property
    */
    private ?string $chart_type = null;
    
    /**
     * @var string|null $dataset The dataset property
    */
    private ?string $dataset = null;
    
    /**
     * @var WidgetPatch_filters|null $filters The filters property
    */
    private ?WidgetPatch_filters $filters = null;
    
    /**
     * @var WidgetPatch_group_by|null $group_by The group_by property
    */
    private ?WidgetPatch_group_by $group_by = null;
    
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
     * @var string|null $title The title property
    */
    private ?string $title = null;
    
    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return WidgetPatch
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): WidgetPatch {
        return new WidgetPatch();
    }

    /**
     * Gets the chart_type property value. The chart_type property
     * @return string|null
    */
    public function getChartType(): ?string {
        return $this->chart_type;
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
            'chart_type' => fn(ParseNode $n) => $o->setChartType($n->getStringValue()),
            'dataset' => fn(ParseNode $n) => $o->setDataset($n->getStringValue()),
            'filters' => fn(ParseNode $n) => $o->setFilters($n->getObjectValue([WidgetPatch_filters::class, 'createFromDiscriminatorValue'])),
            'group_by' => fn(ParseNode $n) => $o->setGroupBy($n->getObjectValue([WidgetPatch_group_by::class, 'createFromDiscriminatorValue'])),
            'interval' => fn(ParseNode $n) => $o->setInterval($n->getStringValue()),
            'limit' => fn(ParseNode $n) => $o->setLimit($n->getIntegerValue()),
            'metric' => fn(ParseNode $n) => $o->setMetric($n->getStringValue()),
            'title' => fn(ParseNode $n) => $o->setTitle($n->getStringValue()),
        ];
    }

    /**
     * Gets the filters property value. The filters property
     * @return WidgetPatch_filters|null
    */
    public function getFilters(): ?WidgetPatch_filters {
        return $this->filters;
    }

    /**
     * Gets the group_by property value. The group_by property
     * @return WidgetPatch_group_by|null
    */
    public function getGroupBy(): ?WidgetPatch_group_by {
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
     * Gets the title property value. The title property
     * @return string|null
    */
    public function getTitle(): ?string {
        return $this->title;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('chart_type', $this->getChartType());
        $writer->writeStringValue('dataset', $this->getDataset());
        $writer->writeObjectValue('filters', $this->getFilters());
        $writer->writeObjectValue('group_by', $this->getGroupBy());
        $writer->writeStringValue('interval', $this->getInterval());
        $writer->writeIntegerValue('limit', $this->getLimit());
        $writer->writeStringValue('metric', $this->getMetric());
        $writer->writeStringValue('title', $this->getTitle());
    }

    /**
     * Sets the chart_type property value. The chart_type property
     * @param string|null $value Value to set for the chart_type property.
    */
    public function setChartType(?string $value): void {
        $this->chart_type = $value;
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
     * @param WidgetPatch_filters|null $value Value to set for the filters property.
    */
    public function setFilters(?WidgetPatch_filters $value): void {
        $this->filters = $value;
    }

    /**
     * Sets the group_by property value. The group_by property
     * @param WidgetPatch_group_by|null $value Value to set for the group_by property.
    */
    public function setGroupBy(?WidgetPatch_group_by $value): void {
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
     * Sets the title property value. The title property
     * @param string|null $value Value to set for the title property.
    */
    public function setTitle(?string $value): void {
        $this->title = $value;
    }

}
