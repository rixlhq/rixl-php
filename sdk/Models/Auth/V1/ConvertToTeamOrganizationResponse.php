<?php

namespace Rixl\Sdk\Models\Auth\V1;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class ConvertToTeamOrganizationResponse implements Parsable 
{
    /**
     * @var Organization|null $organization The organization property
    */
    private ?Organization $organization = null;
    
    /**
     * @var Organization|null $personal_organization The personal_organization property
    */
    private ?Organization $personal_organization = null;
    
    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return ConvertToTeamOrganizationResponse
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): ConvertToTeamOrganizationResponse {
        return new ConvertToTeamOrganizationResponse();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'organization' => fn(ParseNode $n) => $o->setOrganization($n->getObjectValue([Organization::class, 'createFromDiscriminatorValue'])),
            'personal_organization' => fn(ParseNode $n) => $o->setPersonalOrganization($n->getObjectValue([Organization::class, 'createFromDiscriminatorValue'])),
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
     * Gets the personal_organization property value. The personal_organization property
     * @return Organization|null
    */
    public function getPersonalOrganization(): ?Organization {
        return $this->personal_organization;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeObjectValue('organization', $this->getOrganization());
        $writer->writeObjectValue('personal_organization', $this->getPersonalOrganization());
    }

    /**
     * Sets the organization property value. The organization property
     * @param Organization|null $value Value to set for the organization property.
    */
    public function setOrganization(?Organization $value): void {
        $this->organization = $value;
    }

    /**
     * Sets the personal_organization property value. The personal_organization property
     * @param Organization|null $value Value to set for the personal_organization property.
    */
    public function setPersonalOrganization(?Organization $value): void {
        $this->personal_organization = $value;
    }

}
