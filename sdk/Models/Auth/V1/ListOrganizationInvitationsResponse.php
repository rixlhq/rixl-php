<?php

namespace Rixl\Sdk\Models\Auth\V1;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class ListOrganizationInvitationsResponse implements Parsable 
{
    /**
     * @var array<Invitation>|null $invitations The invitations property
    */
    private ?array $invitations = null;
    
    /**
     * @var string|null $next_page_token The next_page_token property
    */
    private ?string $next_page_token = null;
    
    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return ListOrganizationInvitationsResponse
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): ListOrganizationInvitationsResponse {
        return new ListOrganizationInvitationsResponse();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'invitations' => fn(ParseNode $n) => $o->setInvitations($n->getCollectionOfObjectValues([Invitation::class, 'createFromDiscriminatorValue'])),
            'next_page_token' => fn(ParseNode $n) => $o->setNextPageToken($n->getStringValue()),
        ];
    }

    /**
     * Gets the invitations property value. The invitations property
     * @return array<Invitation>|null
    */
    public function getInvitations(): ?array {
        return $this->invitations;
    }

    /**
     * Gets the next_page_token property value. The next_page_token property
     * @return string|null
    */
    public function getNextPageToken(): ?string {
        return $this->next_page_token;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeCollectionOfObjectValues('invitations', $this->getInvitations());
        $writer->writeStringValue('next_page_token', $this->getNextPageToken());
    }

    /**
     * Sets the invitations property value. The invitations property
     * @param array<Invitation>|null $value Value to set for the invitations property.
    */
    public function setInvitations(?array $value): void {
        $this->invitations = $value;
    }

    /**
     * Sets the next_page_token property value. The next_page_token property
     * @param string|null $value Value to set for the next_page_token property.
    */
    public function setNextPageToken(?string $value): void {
        $this->next_page_token = $value;
    }

}
