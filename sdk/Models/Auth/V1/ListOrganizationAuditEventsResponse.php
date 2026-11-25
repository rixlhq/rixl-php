<?php

namespace Rixl\Sdk\Models\Auth\V1;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class ListOrganizationAuditEventsResponse implements Parsable 
{
    /**
     * @var array<OrganizationAuditEvent>|null $events The events property
    */
    private ?array $events = null;
    
    /**
     * @var string|null $next_page_token The next_page_token property
    */
    private ?string $next_page_token = null;
    
    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return ListOrganizationAuditEventsResponse
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): ListOrganizationAuditEventsResponse {
        return new ListOrganizationAuditEventsResponse();
    }

    /**
     * Gets the events property value. The events property
     * @return array<OrganizationAuditEvent>|null
    */
    public function getEvents(): ?array {
        return $this->events;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'events' => fn(ParseNode $n) => $o->setEvents($n->getCollectionOfObjectValues([OrganizationAuditEvent::class, 'createFromDiscriminatorValue'])),
            'next_page_token' => fn(ParseNode $n) => $o->setNextPageToken($n->getStringValue()),
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
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeCollectionOfObjectValues('events', $this->getEvents());
        $writer->writeStringValue('next_page_token', $this->getNextPageToken());
    }

    /**
     * Sets the events property value. The events property
     * @param array<OrganizationAuditEvent>|null $value Value to set for the events property.
    */
    public function setEvents(?array $value): void {
        $this->events = $value;
    }

    /**
     * Sets the next_page_token property value. The next_page_token property
     * @param string|null $value Value to set for the next_page_token property.
    */
    public function setNextPageToken(?string $value): void {
        $this->next_page_token = $value;
    }

}
