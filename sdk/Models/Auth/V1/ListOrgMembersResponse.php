<?php

namespace Rixl\Sdk\Models\Auth\V1;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class ListOrgMembersResponse implements Parsable 
{
    /**
     * @var array<OrgMember>|null $members The members property
    */
    private ?array $members = null;
    
    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return ListOrgMembersResponse
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): ListOrgMembersResponse {
        return new ListOrgMembersResponse();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'members' => fn(ParseNode $n) => $o->setMembers($n->getCollectionOfObjectValues([OrgMember::class, 'createFromDiscriminatorValue'])),
        ];
    }

    /**
     * Gets the members property value. The members property
     * @return array<OrgMember>|null
    */
    public function getMembers(): ?array {
        return $this->members;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeCollectionOfObjectValues('members', $this->getMembers());
    }

    /**
     * Sets the members property value. The members property
     * @param array<OrgMember>|null $value Value to set for the members property.
    */
    public function setMembers(?array $value): void {
        $this->members = $value;
    }

}
