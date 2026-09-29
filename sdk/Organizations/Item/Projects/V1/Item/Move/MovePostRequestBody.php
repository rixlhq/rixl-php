<?php

namespace Rixl\Sdk\Organizations\Item\Projects\V1\Item\Move;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class MovePostRequestBody implements Parsable 
{
    /**
     * @var string|null $target_organization_id The target_organization_id property
    */
    private ?string $target_organization_id = null;
    
    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return MovePostRequestBody
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): MovePostRequestBody {
        return new MovePostRequestBody();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'target_organization_id' => fn(ParseNode $n) => $o->setTargetOrganizationId($n->getStringValue()),
        ];
    }

    /**
     * Gets the target_organization_id property value. The target_organization_id property
     * @return string|null
    */
    public function getTargetOrganizationId(): ?string {
        return $this->target_organization_id;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('target_organization_id', $this->getTargetOrganizationId());
    }

    /**
     * Sets the target_organization_id property value. The target_organization_id property
     * @param string|null $value Value to set for the target_organization_id property.
    */
    public function setTargetOrganizationId(?string $value): void {
        $this->target_organization_id = $value;
    }

}
