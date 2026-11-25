<?php

namespace Rixl\Sdk\Models\Auth\V1;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class ListOrganizationsResponse implements Parsable 
{
    /**
     * @var string|null $next_page_token The next_page_token property
    */
    private ?string $next_page_token = null;
    
    /**
     * @var array<OrganizationMembership>|null $organizations The organizations property
    */
    private ?array $organizations = null;
    
    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return ListOrganizationsResponse
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): ListOrganizationsResponse {
        return new ListOrganizationsResponse();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'next_page_token' => fn(ParseNode $n) => $o->setNextPageToken($n->getStringValue()),
            'organizations' => fn(ParseNode $n) => $o->setOrganizations($n->getCollectionOfObjectValues([OrganizationMembership::class, 'createFromDiscriminatorValue'])),
        ];
    }

    /**
     * Gets the next_page_token property value. The next_page_token property
     * @return string|null
    */
    public function getNextPageToken(): ?string {
        return $this->next_page_token;
    }

    /**
     * Gets the organizations property value. The organizations property
     * @return array<OrganizationMembership>|null
    */
    public function getOrganizations(): ?array {
        return $this->organizations;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('next_page_token', $this->getNextPageToken());
        $writer->writeCollectionOfObjectValues('organizations', $this->getOrganizations());
    }

    /**
     * Sets the next_page_token property value. The next_page_token property
     * @param string|null $value Value to set for the next_page_token property.
    */
    public function setNextPageToken(?string $value): void {
        $this->next_page_token = $value;
    }

    /**
     * Sets the organizations property value. The organizations property
     * @param array<OrganizationMembership>|null $value Value to set for the organizations property.
    */
    public function setOrganizations(?array $value): void {
        $this->organizations = $value;
    }

}
