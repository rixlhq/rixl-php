<?php

namespace Rixl\Sdk\Models\Support\V1;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class TicketMessage implements Parsable 
{
    /**
     * @var string|null $author_id The author_id property
    */
    private ?string $author_id = null;
    
    /**
     * @var MessageAuthor|null $author_type The author_type property
    */
    private ?MessageAuthor $author_type = null;
    
    /**
     * @var string|null $body The body property
    */
    private ?string $body = null;
    
    /**
     * @var DateTime|null $created_at The created_at property
    */
    private ?DateTime $created_at = null;
    
    /**
     * @var string|null $id The id property
    */
    private ?string $id = null;
    
    /**
     * @var string|null $ticket_id The ticket_id property
    */
    private ?string $ticket_id = null;
    
    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return TicketMessage
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): TicketMessage {
        return new TicketMessage();
    }

    /**
     * Gets the author_id property value. The author_id property
     * @return string|null
    */
    public function getAuthorId(): ?string {
        return $this->author_id;
    }

    /**
     * Gets the author_type property value. The author_type property
     * @return MessageAuthor|null
    */
    public function getAuthorType(): ?MessageAuthor {
        return $this->author_type;
    }

    /**
     * Gets the body property value. The body property
     * @return string|null
    */
    public function getBody(): ?string {
        return $this->body;
    }

    /**
     * Gets the created_at property value. The created_at property
     * @return DateTime|null
    */
    public function getCreatedAt(): ?DateTime {
        return $this->created_at;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'author_id' => fn(ParseNode $n) => $o->setAuthorId($n->getStringValue()),
            'author_type' => fn(ParseNode $n) => $o->setAuthorType($n->getEnumValue(MessageAuthor::class)),
            'body' => fn(ParseNode $n) => $o->setBody($n->getStringValue()),
            'created_at' => fn(ParseNode $n) => $o->setCreatedAt($n->getDateTimeValue()),
            'id' => fn(ParseNode $n) => $o->setId($n->getStringValue()),
            'ticket_id' => fn(ParseNode $n) => $o->setTicketId($n->getStringValue()),
        ];
    }

    /**
     * Gets the id property value. The id property
     * @return string|null
    */
    public function getId(): ?string {
        return $this->id;
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
        $writer->writeStringValue('author_id', $this->getAuthorId());
        $writer->writeEnumValue('author_type', $this->getAuthorType());
        $writer->writeStringValue('body', $this->getBody());
        $writer->writeDateTimeValue('created_at', $this->getCreatedAt());
        $writer->writeStringValue('id', $this->getId());
        $writer->writeStringValue('ticket_id', $this->getTicketId());
    }

    /**
     * Sets the author_id property value. The author_id property
     * @param string|null $value Value to set for the author_id property.
    */
    public function setAuthorId(?string $value): void {
        $this->author_id = $value;
    }

    /**
     * Sets the author_type property value. The author_type property
     * @param MessageAuthor|null $value Value to set for the author_type property.
    */
    public function setAuthorType(?MessageAuthor $value): void {
        $this->author_type = $value;
    }

    /**
     * Sets the body property value. The body property
     * @param string|null $value Value to set for the body property.
    */
    public function setBody(?string $value): void {
        $this->body = $value;
    }

    /**
     * Sets the created_at property value. The created_at property
     * @param DateTime|null $value Value to set for the created_at property.
    */
    public function setCreatedAt(?DateTime $value): void {
        $this->created_at = $value;
    }

    /**
     * Sets the id property value. The id property
     * @param string|null $value Value to set for the id property.
    */
    public function setId(?string $value): void {
        $this->id = $value;
    }

    /**
     * Sets the ticket_id property value. The ticket_id property
     * @param string|null $value Value to set for the ticket_id property.
    */
    public function setTicketId(?string $value): void {
        $this->ticket_id = $value;
    }

}
