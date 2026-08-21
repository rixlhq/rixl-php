<?php

namespace Rixl\Sdk\Models\Analytics\V1;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

class WidgetInput implements Parsable 
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
     * @var array<ChartFilter>|null $filters The filters property
    */
    private ?array $filters = null;
    
    /**
     * @var array<string>|null $group_by The group_by property
    */
    private ?array $group_by = null;
    
    /**
     * @var int|null $height The height property
    */
    private ?int $height = null;
    
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
     * @var int|null $pos_x The pos_x property
    */
    private ?int $pos_x = null;
    
    /**
     * @var int|null $pos_y The pos_y property
    */
    private ?int $pos_y = null;
    
    /**
     * @var int|null $sort_order The sort_order property
    */
    private ?int $sort_order = null;
    
    /**
     * @var string|null $title The title property
    */
    private ?string $title = null;
    
    /**
     * @var int|null $width The width property
    */
    private ?int $width = null;
    
    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return WidgetInput
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): WidgetInput {
        return new WidgetInput();
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
            'filters' => fn(ParseNode $n) => $o->setFilters($n->getCollectionOfObjectValues([ChartFilter::class, 'createFromDiscriminatorValue'])),
            'group_by' => function (ParseNode $n) {
                $val = $n->getCollectionOfPrimitiveValues();
                if (is_array($val)) {
                    TypeUtils::validateCollectionValues($val, 'string');
                }
                /** @var array<string>|null $val */
                $this->setGroupBy($val);
            },
            'height' => fn(ParseNode $n) => $o->setHeight($n->getIntegerValue()),
            'interval' => fn(ParseNode $n) => $o->setInterval($n->getStringValue()),
            'limit' => fn(ParseNode $n) => $o->setLimit($n->getIntegerValue()),
            'metric' => fn(ParseNode $n) => $o->setMetric($n->getStringValue()),
            'pos_x' => fn(ParseNode $n) => $o->setPosX($n->getIntegerValue()),
            'pos_y' => fn(ParseNode $n) => $o->setPosY($n->getIntegerValue()),
            'sort_order' => fn(ParseNode $n) => $o->setSortOrder($n->getIntegerValue()),
            'title' => fn(ParseNode $n) => $o->setTitle($n->getStringValue()),
            'width' => fn(ParseNode $n) => $o->setWidth($n->getIntegerValue()),
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
     * Gets the height property value. The height property
     * @return int|null
    */
    public function getHeight(): ?int {
        return $this->height;
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
     * Gets the pos_x property value. The pos_x property
     * @return int|null
    */
    public function getPosX(): ?int {
        return $this->pos_x;
    }

    /**
     * Gets the pos_y property value. The pos_y property
     * @return int|null
    */
    public function getPosY(): ?int {
        return $this->pos_y;
    }

    /**
     * Gets the sort_order property value. The sort_order property
     * @return int|null
    */
    public function getSortOrder(): ?int {
        return $this->sort_order;
    }

    /**
     * Gets the title property value. The title property
     * @return string|null
    */
    public function getTitle(): ?string {
        return $this->title;
    }

    /**
     * Gets the width property value. The width property
     * @return int|null
    */
    public function getWidth(): ?int {
        return $this->width;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('chart_type', $this->getChartType());
        $writer->writeStringValue('dataset', $this->getDataset());
        $writer->writeCollectionOfObjectValues('filters', $this->getFilters());
        $writer->writeCollectionOfPrimitiveValues('group_by', $this->getGroupBy());
        $writer->writeIntegerValue('height', $this->getHeight());
        $writer->writeStringValue('interval', $this->getInterval());
        $writer->writeIntegerValue('limit', $this->getLimit());
        $writer->writeStringValue('metric', $this->getMetric());
        $writer->writeIntegerValue('pos_x', $this->getPosX());
        $writer->writeIntegerValue('pos_y', $this->getPosY());
        $writer->writeIntegerValue('sort_order', $this->getSortOrder());
        $writer->writeStringValue('title', $this->getTitle());
        $writer->writeIntegerValue('width', $this->getWidth());
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
     * Sets the height property value. The height property
     * @param int|null $value Value to set for the height property.
    */
    public function setHeight(?int $value): void {
        $this->height = $value;
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
     * Sets the pos_x property value. The pos_x property
     * @param int|null $value Value to set for the pos_x property.
    */
    public function setPosX(?int $value): void {
        $this->pos_x = $value;
    }

    /**
     * Sets the pos_y property value. The pos_y property
     * @param int|null $value Value to set for the pos_y property.
    */
    public function setPosY(?int $value): void {
        $this->pos_y = $value;
    }

    /**
     * Sets the sort_order property value. The sort_order property
     * @param int|null $value Value to set for the sort_order property.
    */
    public function setSortOrder(?int $value): void {
        $this->sort_order = $value;
    }

    /**
     * Sets the title property value. The title property
     * @param string|null $value Value to set for the title property.
    */
    public function setTitle(?string $value): void {
        $this->title = $value;
    }

    /**
     * Sets the width property value. The width property
     * @param int|null $value Value to set for the width property.
    */
    public function setWidth(?int $value): void {
        $this->width = $value;
    }

}
