<?php

namespace Rixl\Sdk\Models\Types;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

/**
 * Target organization ID
*/
class MoveProjectRequest implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var string|null $target_organization_id The target_organization_id property
    */
    private ?string $target_organization_id = null;
    
    /**
     * Instantiates a new MoveProjectRequest and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return MoveProjectRequest
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): MoveProjectRequest {
        return new MoveProjectRequest();
    }

    /**
     * Gets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        return $this->additionalData;
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
        $writer->writeAdditionalData($this->getAdditionalData());
    }

    /**
     * Sets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @param array<string,mixed> $value Value to set for the AdditionalData property.
    */
    public function setAdditionalData(?array $value): void {
        $this->additionalData = $value;
    }

    /**
     * Sets the target_organization_id property value. The target_organization_id property
     * @param string|null $value Value to set for the target_organization_id property.
    */
    public function setTargetOrganizationId(?string $value): void {
        $this->target_organization_id = $value;
    }

}
