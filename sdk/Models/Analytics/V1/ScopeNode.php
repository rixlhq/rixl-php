<?php

namespace Rixl\Sdk\Models\Analytics\V1;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class ScopeNode implements Parsable 
{
    /**
     * @var array<ChartFilter>|null $filters The filters property
    */
    private ?array $filters = null;
    
    /**
     * @var bool|null $has_children The has_children property
    */
    private ?bool $has_children = null;
    
    /**
     * @var string|null $id The id property
    */
    private ?string $id = null;
    
    /**
     * @var string|null $kind The kind property
    */
    private ?string $kind = null;
    
    /**
     * @var string|null $label The label property
    */
    private ?string $label = null;
    
    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return ScopeNode
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): ScopeNode {
        return new ScopeNode();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'filters' => fn(ParseNode $n) => $o->setFilters($n->getCollectionOfObjectValues([ChartFilter::class, 'createFromDiscriminatorValue'])),
            'has_children' => fn(ParseNode $n) => $o->setHasChildren($n->getBooleanValue()),
            'id' => fn(ParseNode $n) => $o->setId($n->getStringValue()),
            'kind' => fn(ParseNode $n) => $o->setKind($n->getStringValue()),
            'label' => fn(ParseNode $n) => $o->setLabel($n->getStringValue()),
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
     * Gets the has_children property value. The has_children property
     * @return bool|null
    */
    public function getHasChildren(): ?bool {
        return $this->has_children;
    }

    /**
     * Gets the id property value. The id property
     * @return string|null
    */
    public function getId(): ?string {
        return $this->id;
    }

    /**
     * Gets the kind property value. The kind property
     * @return string|null
    */
    public function getKind(): ?string {
        return $this->kind;
    }

    /**
     * Gets the label property value. The label property
     * @return string|null
    */
    public function getLabel(): ?string {
        return $this->label;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeCollectionOfObjectValues('filters', $this->getFilters());
        $writer->writeBooleanValue('has_children', $this->getHasChildren());
        $writer->writeStringValue('id', $this->getId());
        $writer->writeStringValue('kind', $this->getKind());
        $writer->writeStringValue('label', $this->getLabel());
    }

    /**
     * Sets the filters property value. The filters property
     * @param array<ChartFilter>|null $value Value to set for the filters property.
    */
    public function setFilters(?array $value): void {
        $this->filters = $value;
    }

    /**
     * Sets the has_children property value. The has_children property
     * @param bool|null $value Value to set for the has_children property.
    */
    public function setHasChildren(?bool $value): void {
        $this->has_children = $value;
    }

    /**
     * Sets the id property value. The id property
     * @param string|null $value Value to set for the id property.
    */
    public function setId(?string $value): void {
        $this->id = $value;
    }

    /**
     * Sets the kind property value. The kind property
     * @param string|null $value Value to set for the kind property.
    */
    public function setKind(?string $value): void {
        $this->kind = $value;
    }

    /**
     * Sets the label property value. The label property
     * @param string|null $value Value to set for the label property.
    */
    public function setLabel(?string $value): void {
        $this->label = $value;
    }

}
