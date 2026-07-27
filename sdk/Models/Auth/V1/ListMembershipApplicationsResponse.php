<?php

namespace Rixl\Sdk\Models\Auth\V1;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class ListMembershipApplicationsResponse implements Parsable 
{
    /**
     * @var array<MembershipApplication>|null $applications The applications property
    */
    private ?array $applications = null;
    
    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return ListMembershipApplicationsResponse
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): ListMembershipApplicationsResponse {
        return new ListMembershipApplicationsResponse();
    }

    /**
     * Gets the applications property value. The applications property
     * @return array<MembershipApplication>|null
    */
    public function getApplications(): ?array {
        return $this->applications;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'applications' => fn(ParseNode $n) => $o->setApplications($n->getCollectionOfObjectValues([MembershipApplication::class, 'createFromDiscriminatorValue'])),
        ];
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeCollectionOfObjectValues('applications', $this->getApplications());
    }

    /**
     * Sets the applications property value. The applications property
     * @param array<MembershipApplication>|null $value Value to set for the applications property.
    */
    public function setApplications(?array $value): void {
        $this->applications = $value;
    }

}
