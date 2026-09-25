<?php

namespace Rixl\Sdk\Support\V1\Tickets\Item\Close;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class ClosePostRequestBody implements Parsable 
{
    /**
     * @var string|null $ticket_id The ticket_id property
    */
    private ?string $ticket_id = null;
    
    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return ClosePostRequestBody
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): ClosePostRequestBody {
        return new ClosePostRequestBody();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
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
        $writer->writeStringValue('ticket_id', $this->getTicketId());
    }

    /**
     * Sets the ticket_id property value. The ticket_id property
     * @param string|null $value Value to set for the ticket_id property.
    */
    public function setTicketId(?string $value): void {
        $this->ticket_id = $value;
    }

}
