<?php

namespace Rixl\Sdk\Models\Analytics\V1;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

/**
 * WidgetPosition is expressed in grid units, never pixels.
*/
class WidgetPosition implements Parsable 
{
    /**
     * @var int|null $height The height property
    */
    private ?int $height = null;
    
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
     * @var string|null $widget_id The widget_id property
    */
    private ?string $widget_id = null;
    
    /**
     * @var int|null $width The width property
    */
    private ?int $width = null;
    
    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return WidgetPosition
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): WidgetPosition {
        return new WidgetPosition();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'height' => fn(ParseNode $n) => $o->setHeight($n->getIntegerValue()),
            'pos_x' => fn(ParseNode $n) => $o->setPosX($n->getIntegerValue()),
            'pos_y' => fn(ParseNode $n) => $o->setPosY($n->getIntegerValue()),
            'sort_order' => fn(ParseNode $n) => $o->setSortOrder($n->getIntegerValue()),
            'widget_id' => fn(ParseNode $n) => $o->setWidgetId($n->getStringValue()),
            'width' => fn(ParseNode $n) => $o->setWidth($n->getIntegerValue()),
        ];
    }

    /**
     * Gets the height property value. The height property
     * @return int|null
    */
    public function getHeight(): ?int {
        return $this->height;
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
     * Gets the widget_id property value. The widget_id property
     * @return string|null
    */
    public function getWidgetId(): ?string {
        return $this->widget_id;
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
        $writer->writeIntegerValue('height', $this->getHeight());
        $writer->writeIntegerValue('pos_x', $this->getPosX());
        $writer->writeIntegerValue('pos_y', $this->getPosY());
        $writer->writeIntegerValue('sort_order', $this->getSortOrder());
        $writer->writeStringValue('widget_id', $this->getWidgetId());
        $writer->writeIntegerValue('width', $this->getWidth());
    }

    /**
     * Sets the height property value. The height property
     * @param int|null $value Value to set for the height property.
    */
    public function setHeight(?int $value): void {
        $this->height = $value;
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
     * Sets the widget_id property value. The widget_id property
     * @param string|null $value Value to set for the widget_id property.
    */
    public function setWidgetId(?string $value): void {
        $this->widget_id = $value;
    }

    /**
     * Sets the width property value. The width property
     * @param int|null $value Value to set for the width property.
    */
    public function setWidth(?int $value): void {
        $this->width = $value;
    }

}
