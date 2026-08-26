<?php

namespace Rixl\Sdk\Models\Support\V1;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class ListTicketsResponse implements Parsable 
{
    /**
     * @var int|null $limit Maximum number of items returned.
    */
    private ?int $limit = null;
    
    /**
     * @var int|null $offset Number of items skipped before this page.
    */
    private ?int $offset = null;
    
    /**
     * @var array<Ticket>|null $tickets The tickets property
    */
    private ?array $tickets = null;
    
    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return ListTicketsResponse
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): ListTicketsResponse {
        return new ListTicketsResponse();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'limit' => fn(ParseNode $n) => $o->setLimit($n->getIntegerValue()),
            'offset' => fn(ParseNode $n) => $o->setOffset($n->getIntegerValue()),
            'tickets' => fn(ParseNode $n) => $o->setTickets($n->getCollectionOfObjectValues([Ticket::class, 'createFromDiscriminatorValue'])),
        ];
    }

    /**
     * Gets the limit property value. Maximum number of items returned.
     * @return int|null
    */
    public function getLimit(): ?int {
        return $this->limit;
    }

    /**
     * Gets the offset property value. Number of items skipped before this page.
     * @return int|null
    */
    public function getOffset(): ?int {
        return $this->offset;
    }

    /**
     * Gets the tickets property value. The tickets property
     * @return array<Ticket>|null
    */
    public function getTickets(): ?array {
        return $this->tickets;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeIntegerValue('limit', $this->getLimit());
        $writer->writeIntegerValue('offset', $this->getOffset());
        $writer->writeCollectionOfObjectValues('tickets', $this->getTickets());
    }

    /**
     * Sets the limit property value. Maximum number of items returned.
     * @param int|null $value Value to set for the limit property.
    */
    public function setLimit(?int $value): void {
        $this->limit = $value;
    }

    /**
     * Sets the offset property value. Number of items skipped before this page.
     * @param int|null $value Value to set for the offset property.
    */
    public function setOffset(?int $value): void {
        $this->offset = $value;
    }

    /**
     * Sets the tickets property value. The tickets property
     * @param array<Ticket>|null $value Value to set for the tickets property.
    */
    public function setTickets(?array $value): void {
        $this->tickets = $value;
    }

}
