<?php

namespace Rixl\Sdk\Models\Support\V1;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class CreateTicketResponse implements Parsable 
{
    /**
     * @var Ticket|null $ticket The ticket property
    */
    private ?Ticket $ticket = null;
    
    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return CreateTicketResponse
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): CreateTicketResponse {
        return new CreateTicketResponse();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'ticket' => fn(ParseNode $n) => $o->setTicket($n->getObjectValue([Ticket::class, 'createFromDiscriminatorValue'])),
        ];
    }

    /**
     * Gets the ticket property value. The ticket property
     * @return Ticket|null
    */
    public function getTicket(): ?Ticket {
        return $this->ticket;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeObjectValue('ticket', $this->getTicket());
    }

    /**
     * Sets the ticket property value. The ticket property
     * @param Ticket|null $value Value to set for the ticket property.
    */
    public function setTicket(?Ticket $value): void {
        $this->ticket = $value;
    }

}
