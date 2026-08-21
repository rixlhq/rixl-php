<?php

namespace Rixl\Sdk\Analytics\V1\Dashboards\Item;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class Dashboard_PatchRequestBody implements Parsable 
{
    /**
     * @var int|null $expected_revision The expected_revision property
    */
    private ?int $expected_revision = null;
    
    /**
     * @var string|null $name The name property
    */
    private ?string $name = null;
    
    /**
     * @var Dashboard_PatchRequestBody_visibility|null $visibility The visibility property
    */
    private ?Dashboard_PatchRequestBody_visibility $visibility = null;
    
    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return Dashboard_PatchRequestBody
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): Dashboard_PatchRequestBody {
        return new Dashboard_PatchRequestBody();
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
            'name' => fn(ParseNode $n) => $o->setName($n->getStringValue()),
            'visibility' => fn(ParseNode $n) => $o->setVisibility($n->getEnumValue(Dashboard_PatchRequestBody_visibility::class)),
        ];
    }

    /**
     * Gets the name property value. The name property
     * @return string|null
    */
    public function getName(): ?string {
        return $this->name;
    }

    /**
     * Gets the visibility property value. The visibility property
     * @return Dashboard_PatchRequestBody_visibility|null
    */
    public function getVisibility(): ?Dashboard_PatchRequestBody_visibility {
        return $this->visibility;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeIntegerValue('expected_revision', $this->getExpectedRevision());
        $writer->writeStringValue('name', $this->getName());
        $writer->writeEnumValue('visibility', $this->getVisibility());
    }

    /**
     * Sets the expected_revision property value. The expected_revision property
     * @param int|null $value Value to set for the expected_revision property.
    */
    public function setExpectedRevision(?int $value): void {
        $this->expected_revision = $value;
    }

    /**
     * Sets the name property value. The name property
     * @param string|null $value Value to set for the name property.
    */
    public function setName(?string $value): void {
        $this->name = $value;
    }

    /**
     * Sets the visibility property value. The visibility property
     * @param Dashboard_PatchRequestBody_visibility|null $value Value to set for the visibility property.
    */
    public function setVisibility(?Dashboard_PatchRequestBody_visibility $value): void {
        $this->visibility = $value;
    }

}
