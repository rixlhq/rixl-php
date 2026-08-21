<?php

namespace Rixl\Sdk\Analytics\V1\Dashboards\Widgets\Item;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Rixl\Sdk\Models\Analytics\V1\WidgetPatch;

class WidgetsPatchRequestBody implements Parsable 
{
    /**
     * @var int|null $expected_revision The expected_revision property
    */
    private ?int $expected_revision = null;
    
    /**
     * @var WidgetPatch|null $patch The patch property
    */
    private ?WidgetPatch $patch = null;
    
    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return WidgetsPatchRequestBody
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): WidgetsPatchRequestBody {
        return new WidgetsPatchRequestBody();
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
            'patch' => fn(ParseNode $n) => $o->setPatch($n->getObjectValue([WidgetPatch::class, 'createFromDiscriminatorValue'])),
        ];
    }

    /**
     * Gets the patch property value. The patch property
     * @return WidgetPatch|null
    */
    public function getPatch(): ?WidgetPatch {
        return $this->patch;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeIntegerValue('expected_revision', $this->getExpectedRevision());
        $writer->writeObjectValue('patch', $this->getPatch());
    }

    /**
     * Sets the expected_revision property value. The expected_revision property
     * @param int|null $value Value to set for the expected_revision property.
    */
    public function setExpectedRevision(?int $value): void {
        $this->expected_revision = $value;
    }

    /**
     * Sets the patch property value. The patch property
     * @param WidgetPatch|null $value Value to set for the patch property.
    */
    public function setPatch(?WidgetPatch $value): void {
        $this->patch = $value;
    }

}
