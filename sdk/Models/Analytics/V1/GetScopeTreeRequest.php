<?php

namespace Rixl\Sdk\Models\Analytics\V1;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class GetScopeTreeRequest implements Parsable 
{
    /**
     * @var GetScopeTreeRequest_level|null $level Which level to expand. Empty returns the projects at the root.
    */
    private ?GetScopeTreeRequest_level $level = null;
    
    /**
     * @var int|null $limit The limit property
    */
    private ?int $limit = null;
    
    /**
     * @var string|null $project_id The project_id property
    */
    private ?string $project_id = null;
    
    /**
     * @var GetScopeTreeRequest_resource_type|null $resource_type The resource_type property
    */
    private ?GetScopeTreeRequest_resource_type $resource_type = null;
    
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
     * @return GetScopeTreeRequest
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): GetScopeTreeRequest {
        return new GetScopeTreeRequest();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'level' => fn(ParseNode $n) => $o->setLevel($n->getEnumValue(GetScopeTreeRequest_level::class)),
            'limit' => fn(ParseNode $n) => $o->setLimit($n->getIntegerValue()),
            'project_id' => fn(ParseNode $n) => $o->setProjectId($n->getStringValue()),
            'resource_type' => fn(ParseNode $n) => $o->setResourceType($n->getEnumValue(GetScopeTreeRequest_resource_type::class)),
            'search' => fn(ParseNode $n) => $o->setSearch($n->getStringValue()),
            'time_end' => fn(ParseNode $n) => $o->setTimeEnd($n->getStringValue()),
            'time_start' => fn(ParseNode $n) => $o->setTimeStart($n->getStringValue()),
        ];
    }

    /**
     * Gets the level property value. Which level to expand. Empty returns the projects at the root.
     * @return GetScopeTreeRequest_level|null
    */
    public function getLevel(): ?GetScopeTreeRequest_level {
        return $this->level;
    }

    /**
     * Gets the limit property value. The limit property
     * @return int|null
    */
    public function getLimit(): ?int {
        return $this->limit;
    }

    /**
     * Gets the project_id property value. The project_id property
     * @return string|null
    */
    public function getProjectId(): ?string {
        return $this->project_id;
    }

    /**
     * Gets the resource_type property value. The resource_type property
     * @return GetScopeTreeRequest_resource_type|null
    */
    public function getResourceType(): ?GetScopeTreeRequest_resource_type {
        return $this->resource_type;
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
        $writer->writeEnumValue('level', $this->getLevel());
        $writer->writeIntegerValue('limit', $this->getLimit());
        $writer->writeStringValue('project_id', $this->getProjectId());
        $writer->writeEnumValue('resource_type', $this->getResourceType());
        $writer->writeStringValue('search', $this->getSearch());
        $writer->writeStringValue('time_end', $this->getTimeEnd());
        $writer->writeStringValue('time_start', $this->getTimeStart());
    }

    /**
     * Sets the level property value. Which level to expand. Empty returns the projects at the root.
     * @param GetScopeTreeRequest_level|null $value Value to set for the level property.
    */
    public function setLevel(?GetScopeTreeRequest_level $value): void {
        $this->level = $value;
    }

    /**
     * Sets the limit property value. The limit property
     * @param int|null $value Value to set for the limit property.
    */
    public function setLimit(?int $value): void {
        $this->limit = $value;
    }

    /**
     * Sets the project_id property value. The project_id property
     * @param string|null $value Value to set for the project_id property.
    */
    public function setProjectId(?string $value): void {
        $this->project_id = $value;
    }

    /**
     * Sets the resource_type property value. The resource_type property
     * @param GetScopeTreeRequest_resource_type|null $value Value to set for the resource_type property.
    */
    public function setResourceType(?GetScopeTreeRequest_resource_type $value): void {
        $this->resource_type = $value;
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
