<?php

namespace Rixl\Sdk\Analytics\V1\Dashboards\Item\Layout;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Rixl\Sdk\Models\Analytics\V1\WidgetPosition;

class LayoutPostRequestBody implements Parsable 
{
    /**
     * @var int|null $expected_revision The expected_revision property
    */
    private ?int $expected_revision = null;
    
    /**
     * @var array<WidgetPosition>|null $positions The positions property
    */
    private ?array $positions = null;
    
    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return LayoutPostRequestBody
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): LayoutPostRequestBody {
        return new LayoutPostRequestBody();
    }

    /**
     * Gets the expected_revision property value. The expected_revision property
     * @return int|null
    */
    public function getExpectedRevision(): ?int {
        return $this->expected_revision;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'expected_revision' => fn(ParseNode $n) => $o->setExpectedRevision($n->getIntegerValue()),
            'positions' => fn(ParseNode $n) => $o->setPositions($n->getCollectionOfObjectValues([WidgetPosition::class, 'createFromDiscriminatorValue'])),
        ];
    }

    /**
     * Gets the positions property value. The positions property
     * @return array<WidgetPosition>|null
    */
    public function getPositions(): ?array {
        return $this->positions;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeIntegerValue('expected_revision', $this->getExpectedRevision());
        $writer->writeCollectionOfObjectValues('positions', $this->getPositions());
    }

    /**
     * Sets the expected_revision property value. The expected_revision property
     * @param int|null $value Value to set for the expected_revision property.
    */
    public function setExpectedRevision(?int $value): void {
        $this->expected_revision = $value;
    }

    /**
     * Sets the positions property value. The positions property
     * @param array<WidgetPosition>|null $value Value to set for the positions property.
    */
    public function setPositions(?array $value): void {
        $this->positions = $value;
    }

}
