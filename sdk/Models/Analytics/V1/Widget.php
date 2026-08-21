<?php

namespace Rixl\Sdk\Models\Analytics\V1;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

class Widget implements Parsable 
{
    /**
     * @var string|null $chart_type The chart_type property
    */
    private ?string $chart_type = null;
    
    /**
     * @var string|null $created_at The created_at property
    */
    private ?string $created_at = null;
    
    /**
     * @var string|null $dashboard_id The dashboard_id property
    */
    private ?string $dashboard_id = null;
    
    /**
     * @var int|null $dashboard_revision The dashboard_revision property
    */
    private ?int $dashboard_revision = null;
    
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
     * @var string|null $id The id property
    */
    private ?string $id = null;
    
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
     * @var int|null $spec_version The spec_version property
    */
    private ?int $spec_version = null;
    
    /**
     * @var string|null $title The title property
    */
    private ?string $title = null;
    
    /**
     * @var string|null $updated_at The updated_at property
    */
    private ?string $updated_at = null;
    
    /**
     * @var int|null $width The width property
    */
    private ?int $width = null;
    
    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return Widget
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): Widget {
        return new Widget();
    }

    /**
     * Gets the chart_type property value. The chart_type property
     * @return string|null
    */
    public function getChartType(): ?string {
        return $this->chart_type;
    }

    /**
     * Gets the created_at property value. The created_at property
     * @return string|null
    */
    public function getCreatedAt(): ?string {
        return $this->created_at;
    }

    /**
     * Gets the dashboard_id property value. The dashboard_id property
     * @return string|null
    */
    public function getDashboardId(): ?string {
        return $this->dashboard_id;
    }

    /**
     * Gets the dashboard_revision property value. The dashboard_revision property
     * @return int|null
    */
    public function getDashboardRevision(): ?int {
        return $this->dashboard_revision;
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
            'created_at' => fn(ParseNode $n) => $o->setCreatedAt($n->getStringValue()),
            'dashboard_id' => fn(ParseNode $n) => $o->setDashboardId($n->getStringValue()),
            'dashboard_revision' => fn(ParseNode $n) => $o->setDashboardRevision($n->getIntegerValue()),
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
            'id' => fn(ParseNode $n) => $o->setId($n->getStringValue()),
            'interval' => fn(ParseNode $n) => $o->setInterval($n->getStringValue()),
            'limit' => fn(ParseNode $n) => $o->setLimit($n->getIntegerValue()),
            'metric' => fn(ParseNode $n) => $o->setMetric($n->getStringValue()),
            'pos_x' => fn(ParseNode $n) => $o->setPosX($n->getIntegerValue()),
            'pos_y' => fn(ParseNode $n) => $o->setPosY($n->getIntegerValue()),
            'sort_order' => fn(ParseNode $n) => $o->setSortOrder($n->getIntegerValue()),
            'spec_version' => fn(ParseNode $n) => $o->setSpecVersion($n->getIntegerValue()),
            'title' => fn(ParseNode $n) => $o->setTitle($n->getStringValue()),
            'updated_at' => fn(ParseNode $n) => $o->setUpdatedAt($n->getStringValue()),
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
     * Gets the id property value. The id property
     * @return string|null
    */
    public function getId(): ?string {
        return $this->id;
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
     * Gets the spec_version property value. The spec_version property
     * @return int|null
    */
    public function getSpecVersion(): ?int {
        return $this->spec_version;
    }

    /**
     * Gets the title property value. The title property
     * @return string|null
    */
    public function getTitle(): ?string {
        return $this->title;
    }

    /**
     * Gets the updated_at property value. The updated_at property
     * @return string|null
    */
    public function getUpdatedAt(): ?string {
        return $this->updated_at;
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
        $writer->writeStringValue('created_at', $this->getCreatedAt());
        $writer->writeStringValue('dashboard_id', $this->getDashboardId());
        $writer->writeIntegerValue('dashboard_revision', $this->getDashboardRevision());
        $writer->writeStringValue('dataset', $this->getDataset());
        $writer->writeCollectionOfObjectValues('filters', $this->getFilters());
        $writer->writeCollectionOfPrimitiveValues('group_by', $this->getGroupBy());
        $writer->writeIntegerValue('height', $this->getHeight());
        $writer->writeStringValue('id', $this->getId());
        $writer->writeStringValue('interval', $this->getInterval());
        $writer->writeIntegerValue('limit', $this->getLimit());
        $writer->writeStringValue('metric', $this->getMetric());
        $writer->writeIntegerValue('pos_x', $this->getPosX());
        $writer->writeIntegerValue('pos_y', $this->getPosY());
        $writer->writeIntegerValue('sort_order', $this->getSortOrder());
        $writer->writeIntegerValue('spec_version', $this->getSpecVersion());
        $writer->writeStringValue('title', $this->getTitle());
        $writer->writeStringValue('updated_at', $this->getUpdatedAt());
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
     * Sets the created_at property value. The created_at property
     * @param string|null $value Value to set for the created_at property.
    */
    public function setCreatedAt(?string $value): void {
        $this->created_at = $value;
    }

    /**
     * Sets the dashboard_id property value. The dashboard_id property
     * @param string|null $value Value to set for the dashboard_id property.
    */
    public function setDashboardId(?string $value): void {
        $this->dashboard_id = $value;
    }

    /**
     * Sets the dashboard_revision property value. The dashboard_revision property
     * @param int|null $value Value to set for the dashboard_revision property.
    */
    public function setDashboardRevision(?int $value): void {
        $this->dashboard_revision = $value;
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
     * Sets the id property value. The id property
     * @param string|null $value Value to set for the id property.
    */
    public function setId(?string $value): void {
        $this->id = $value;
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
     * Sets the spec_version property value. The spec_version property
     * @param int|null $value Value to set for the spec_version property.
    */
    public function setSpecVersion(?int $value): void {
        $this->spec_version = $value;
    }

    /**
     * Sets the title property value. The title property
     * @param string|null $value Value to set for the title property.
    */
    public function setTitle(?string $value): void {
        $this->title = $value;
    }

    /**
     * Sets the updated_at property value. The updated_at property
     * @param string|null $value Value to set for the updated_at property.
    */
    public function setUpdatedAt(?string $value): void {
        $this->updated_at = $value;
    }

    /**
     * Sets the width property value. The width property
     * @param int|null $value Value to set for the width property.
    */
    public function setWidth(?int $value): void {
        $this->width = $value;
    }

}
