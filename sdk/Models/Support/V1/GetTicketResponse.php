<?php

namespace Rixl\Sdk\Models\Support\V1;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class GetTicketResponse implements Parsable 
{
    /**
     * @var array<TicketMessage>|null $messages The messages property
    */
    private ?array $messages = null;
    
    /**
     * @var Ticket|null $ticket The ticket property
    */
    private ?Ticket $ticket = null;
    
    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return GetTicketResponse
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): GetTicketResponse {
        return new GetTicketResponse();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'messages' => fn(ParseNode $n) => $o->setMessages($n->getCollectionOfObjectValues([TicketMessage::class, 'createFromDiscriminatorValue'])),
            'ticket' => fn(ParseNode $n) => $o->setTicket($n->getObjectValue([Ticket::class, 'createFromDiscriminatorValue'])),
        ];
    }

    /**
     * Gets the messages property value. The messages property
     * @return array<TicketMessage>|null
    */
    public function getMessages(): ?array {
        return $this->messages;
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
        $writer->writeCollectionOfObjectValues('messages', $this->getMessages());
        $writer->writeObjectValue('ticket', $this->getTicket());
    }

    /**
     * Sets the messages property value. The messages property
     * @param array<TicketMessage>|null $value Value to set for the messages property.
    */
    public function setMessages(?array $value): void {
        $this->messages = $value;
    }

    /**
     * Sets the ticket property value. The ticket property
     * @param Ticket|null $value Value to set for the ticket property.
    */
    public function setTicket(?Ticket $value): void {
        $this->ticket = $value;
    }

}
