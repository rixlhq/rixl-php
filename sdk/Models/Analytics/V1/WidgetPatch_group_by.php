<?php

namespace Rixl\Sdk\Models\Analytics\V1;

use Microsoft\Kiota\Abstractions\Serialization\ComposedTypeWrapper;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

/**
 * Composed type wrapper for classes GroupBy, WidgetPatch_group_byMember1
*/
class WidgetPatch_group_by implements ComposedTypeWrapper, Parsable 
{
    /**
     * @var GroupBy|null $groupBy Composed type representation for type GroupBy
    */
    private ?GroupBy $groupBy = null;
    
    /**
     * @var WidgetPatch_group_byMember1|null $widgetPatch_group_byMember1 Composed type representation for type WidgetPatch_group_byMember1
    */
    private ?WidgetPatch_group_byMember1 $widgetPatch_group_byMember1 = null;
    
    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return WidgetPatch_group_by
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): WidgetPatch_group_by {
        $result = new WidgetPatch_group_by();
        return $result;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        if ($this->getGroupBy() !== null) {
            return $this->getGroupBy()->getFieldDeserializers();
        } else if ($this->getWidgetPatchGroupByMember1() !== null) {
            return $this->getWidgetPatchGroupByMember1()->getFieldDeserializers();
        }
        return [];
    }

    /**
     * Gets the GroupBy property value. Composed type representation for type GroupBy
     * @return GroupBy|null
    */
    public function getGroupBy(): ?GroupBy {
        return $this->groupBy;
    }

    /**
     * Gets the WidgetPatch_group_byMember1 property value. Composed type representation for type WidgetPatch_group_byMember1
     * @return WidgetPatch_group_byMember1|null
    */
    public function getWidgetPatchGroupByMember1(): ?WidgetPatch_group_byMember1 {
        return $this->widgetPatch_group_byMember1;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        if ($this->getGroupBy() !== null) {
            $writer->writeObjectValue(null, $this->getGroupBy());
        } else if ($this->getWidgetPatchGroupByMember1() !== null) {
            $writer->writeObjectValue(null, $this->getWidgetPatchGroupByMember1());
        }
    }

    /**
     * Sets the GroupBy property value. Composed type representation for type GroupBy
     * @param GroupBy|null $value Value to set for the GroupBy property.
    */
    public function setGroupBy(?GroupBy $value): void {
        $this->groupBy = $value;
    }

    /**
     * Sets the WidgetPatch_group_byMember1 property value. Composed type representation for type WidgetPatch_group_byMember1
     * @param WidgetPatch_group_byMember1|null $value Value to set for the WidgetPatch_group_byMember1 property.
    */
    public function setWidgetPatchGroupByMember1(?WidgetPatch_group_byMember1 $value): void {
        $this->widgetPatch_group_byMember1 = $value;
    }

}
