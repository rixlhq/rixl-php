<?php

namespace Rixl\Sdk\Models\Analytics\V1;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class GetFilterOptionsRequest implements Parsable 
{
    /**
     * @var string|null $dataset The dataset property
    */
    private ?string $dataset = null;
    
    /**
     * @var string|null $field The field property
    */
    private ?string $field = null;
    
    /**
     * @var int|null $limit The limit property
    */
    private ?int $limit = null;
    
    /**
     * @var string|null $search The search property
    */
    private ?string $search = null;
    
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
     * @return GetFilterOptionsRequest
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): GetFilterOptionsRequest {
        return new GetFilterOptionsRequest();
    }

    /**
     * Gets the dataset property value. The dataset property
     * @return string|null
    */
    public function getDataset(): ?string {
        return $this->dataset;
    }

    /**
     * Gets the field property value. The field property
     * @return string|null
    */
    public function getField(): ?string {
        return $this->field;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'dataset' => fn(ParseNode $n) => $o->setDataset($n->getStringValue()),
            'field' => fn(ParseNode $n) => $o->setField($n->getStringValue()),
            'limit' => fn(ParseNode $n) => $o->setLimit($n->getIntegerValue()),
            'search' => fn(ParseNode $n) => $o->setSearch($n->getStringValue()),
            'time_end' => fn(ParseNode $n) => $o->setTimeEnd($n->getStringValue()),
            'time_start' => fn(ParseNode $n) => $o->setTimeStart($n->getStringValue()),
        ];
    }

    /**
     * Gets the limit property value. The limit property
     * @return int|null
    */
    public function getLimit(): ?int {
        return $this->limit;
    }

    /**
     * Gets the search property value. The search property
     * @return string|null
    */
    public function getSearch(): ?string {
        return $this->search;
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
        $writer->writeStringValue('field', $this->getField());
        $writer->writeIntegerValue('limit', $this->getLimit());
        $writer->writeStringValue('search', $this->getSearch());
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
     * Sets the field property value. The field property
     * @param string|null $value Value to set for the field property.
    */
    public function setField(?string $value): void {
        $this->field = $value;
    }

    /**
     * Sets the limit property value. The limit property
     * @param int|null $value Value to set for the limit property.
    */
    public function setLimit(?int $value): void {
        $this->limit = $value;
    }

    /**
     * Sets the search property value. The search property
     * @param string|null $value Value to set for the search property.
    */
    public function setSearch(?string $value): void {
        $this->search = $value;
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
