<?php

namespace Rixl\Sdk\Models\Analytics\V1;

use Microsoft\Kiota\Abstractions\Serialization\ComposedTypeWrapper;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

/**
 * Composed type wrapper for classes Filters, WidgetPatch_filtersMember1
*/
class WidgetPatch_filters implements ComposedTypeWrapper, Parsable 
{
    /**
     * @var Filters|null $filters Composed type representation for type Filters
    */
    private ?Filters $filters = null;
    
    /**
     * @var WidgetPatch_filtersMember1|null $widgetPatch_filtersMember1 Composed type representation for type WidgetPatch_filtersMember1
    */
    private ?WidgetPatch_filtersMember1 $widgetPatch_filtersMember1 = null;
    
    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return WidgetPatch_filters
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): WidgetPatch_filters {
        $result = new WidgetPatch_filters();
        return $result;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        if ($this->getFilters() !== null) {
            return $this->getFilters()->getFieldDeserializers();
        } else if ($this->getWidgetPatchFiltersMember1() !== null) {
            return $this->getWidgetPatchFiltersMember1()->getFieldDeserializers();
        }
        return [];
    }

    /**
     * Gets the Filters property value. Composed type representation for type Filters
     * @return Filters|null
    */
    public function getFilters(): ?Filters {
        return $this->filters;
    }

    /**
     * Gets the WidgetPatch_filtersMember1 property value. Composed type representation for type WidgetPatch_filtersMember1
     * @return WidgetPatch_filtersMember1|null
    */
    public function getWidgetPatchFiltersMember1(): ?WidgetPatch_filtersMember1 {
        return $this->widgetPatch_filtersMember1;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        if ($this->getFilters() !== null) {
            $writer->writeObjectValue(null, $this->getFilters());
        } else if ($this->getWidgetPatchFiltersMember1() !== null) {
            $writer->writeObjectValue(null, $this->getWidgetPatchFiltersMember1());
        }
    }

    /**
     * Sets the Filters property value. Composed type representation for type Filters
     * @param Filters|null $value Value to set for the Filters property.
    */
    public function setFilters(?Filters $value): void {
        $this->filters = $value;
    }

    /**
     * Sets the WidgetPatch_filtersMember1 property value. Composed type representation for type WidgetPatch_filtersMember1
     * @param WidgetPatch_filtersMember1|null $value Value to set for the WidgetPatch_filtersMember1 property.
    */
    public function setWidgetPatchFiltersMember1(?WidgetPatch_filtersMember1 $value): void {
        $this->widgetPatch_filtersMember1 = $value;
    }

}
