<?php

namespace Rixl\Sdk\Models\Auth\V1;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class ListMembershipsResponse implements Parsable 
{
    /**
     * @var array<Membership>|null $memberships The memberships property
    */
    private ?array $memberships = null;
    
    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return ListMembershipsResponse
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): ListMembershipsResponse {
        return new ListMembershipsResponse();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'memberships' => fn(ParseNode $n) => $o->setMemberships($n->getCollectionOfObjectValues([Membership::class, 'createFromDiscriminatorValue'])),
        ];
    }

    /**
     * Gets the memberships property value. The memberships property
     * @return array<Membership>|null
    */
    public function getMemberships(): ?array {
        return $this->memberships;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeCollectionOfObjectValues('memberships', $this->getMemberships());
    }

    /**
     * Sets the memberships property value. The memberships property
     * @param array<Membership>|null $value Value to set for the memberships property.
    */
    public function setMemberships(?array $value): void {
        $this->memberships = $value;
    }

}
