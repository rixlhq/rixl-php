<?php

namespace Rixl\Sdk\Support\V1\Tickets\Item\Messages;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class MessagesPostRequestBody implements Parsable 
{
    /**
     * @var string|null $body The body property
    */
    private ?string $body = null;
    
    /**
     * @var string|null $ticket_id The ticket_id property
    */
    private ?string $ticket_id = null;
    
    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return MessagesPostRequestBody
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): MessagesPostRequestBody {
        return new MessagesPostRequestBody();
    }

    /**
     * Gets the body property value. The body property
     * @return string|null
    */
    public function getBody(): ?string {
        return $this->body;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'body' => fn(ParseNode $n) => $o->setBody($n->getStringValue()),
            'ticket_id' => fn(ParseNode $n) => $o->setTicketId($n->getStringValue()),
        ];
    }

    /**
     * Gets the ticket_id property value. The ticket_id property
     * @return string|null
    */
    public function getTicketId(): ?string {
        return $this->ticket_id;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('body', $this->getBody());
        $writer->writeStringValue('ticket_id', $this->getTicketId());
    }

    /**
     * Sets the body property value. The body property
     * @param string|null $value Value to set for the body property.
    */
    public function setBody(?string $value): void {
        $this->body = $value;
    }

    /**
     * Sets the ticket_id property value. The ticket_id property
     * @param string|null $value Value to set for the ticket_id property.
    */
    public function setTicketId(?string $value): void {
        $this->ticket_id = $value;
    }

}
