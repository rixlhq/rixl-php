<?php

namespace Rixl\Sdk\Auth\V1\Organizations\Item;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Rixl\Sdk\Models\Auth\V1\Organization;

class WithOrg_PatchRequestBody implements Parsable 
{
    /**
     * @var Organization|null $organization The organization property
    */
    private ?Organization $organization = null;
    
    /**
     * @var string|null $update_mask Supported paths are name, slug and image_id.
    */
    private ?string $update_mask = null;
    
    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return WithOrg_PatchRequestBody
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): WithOrg_PatchRequestBody {
        return new WithOrg_PatchRequestBody();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'organization' => fn(ParseNode $n) => $o->setOrganization($n->getObjectValue([Organization::class, 'createFromDiscriminatorValue'])),
            'update_mask' => fn(ParseNode $n) => $o->setUpdateMask($n->getStringValue()),
        ];
    }

    /**
     * Gets the organization property value. The organization property
     * @return Organization|null
    */
    public function getOrganization(): ?Organization {
        return $this->organization;
    }

    /**
     * Gets the update_mask property value. Supported paths are name, slug and image_id.
     * @return string|null
    */
    public function getUpdateMask(): ?string {
        return $this->update_mask;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeObjectValue('organization', $this->getOrganization());
        $writer->writeStringValue('update_mask', $this->getUpdateMask());
    }

    /**
     * Sets the organization property value. The organization property
     * @param Organization|null $value Value to set for the organization property.
    */
    public function setOrganization(?Organization $value): void {
        $this->organization = $value;
    }

    /**
     * Sets the update_mask property value. Supported paths are name, slug and image_id.
     * @param string|null $value Value to set for the update_mask property.
    */
    public function setUpdateMask(?string $value): void {
        $this->update_mask = $value;
    }

}
