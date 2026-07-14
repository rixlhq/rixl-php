<?php

namespace Rixl\Sdk\Organizations\Item\Projects\V1\Item\Move;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class MovePostRequestBody implements Parsable 
{
    /**
     * @var string|null $targetOrganizationId The targetOrganizationId property
    */
    private ?string $targetOrganizationId = null;
    
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
            'targetOrganizationId' => fn(ParseNode $n) => $o->setTargetOrganizationId($n->getStringValue()),
        ];
    }

    /**
     * Gets the targetOrganizationId property value. The targetOrganizationId property
     * @return string|null
    */
    public function getTargetOrganizationId(): ?string {
        return $this->targetOrganizationId;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('targetOrganizationId', $this->getTargetOrganizationId());
    }

    /**
     * Sets the targetOrganizationId property value. The targetOrganizationId property
     * @param string|null $value Value to set for the targetOrganizationId property.
    */
    public function setTargetOrganizationId(?string $value): void {
        $this->targetOrganizationId = $value;
    }

}
