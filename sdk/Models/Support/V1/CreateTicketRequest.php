<?php

namespace Rixl\Sdk\Models\Support\V1;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class CreateTicketRequest implements Parsable 
{
    /**
     * @var string|null $category_id The category_id property
    */
    private ?string $category_id = null;
    
    /**
     * @var string|null $message The message property
    */
    private ?string $message = null;
    
    /**
     * @var TicketPriority|null $priority The priority property
    */
    private ?TicketPriority $priority = null;
    
    /**
     * @var string|null $project_id The project_id property
    */
    private ?string $project_id = null;
    
    /**
     * @var string|null $subject The subject property
    */
    private ?string $subject = null;
    
    /**
     * @var string|null $topic_id The topic_id property
    */
    private ?string $topic_id = null;
    
    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return CreateTicketRequest
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): CreateTicketRequest {
        return new CreateTicketRequest();
    }

    /**
     * Gets the category_id property value. The category_id property
     * @return string|null
    */
    public function getCategoryId(): ?string {
        return $this->category_id;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'category_id' => fn(ParseNode $n) => $o->setCategoryId($n->getStringValue()),
            'message' => fn(ParseNode $n) => $o->setMessage($n->getStringValue()),
            'priority' => fn(ParseNode $n) => $o->setPriority($n->getEnumValue(TicketPriority::class)),
            'project_id' => fn(ParseNode $n) => $o->setProjectId($n->getStringValue()),
            'subject' => fn(ParseNode $n) => $o->setSubject($n->getStringValue()),
            'topic_id' => fn(ParseNode $n) => $o->setTopicId($n->getStringValue()),
        ];
    }

    /**
     * Gets the message property value. The message property
     * @return string|null
    */
    public function getMessage(): ?string {
        return $this->message;
    }

    /**
     * Gets the priority property value. The priority property
     * @return TicketPriority|null
    */
    public function getPriority(): ?TicketPriority {
        return $this->priority;
    }

    /**
     * Gets the project_id property value. The project_id property
     * @return string|null
    */
    public function getProjectId(): ?string {
        return $this->project_id;
    }

    /**
     * Gets the subject property value. The subject property
     * @return string|null
    */
    public function getSubject(): ?string {
        return $this->subject;
    }

    /**
     * Gets the topic_id property value. The topic_id property
     * @return string|null
    */
    public function getTopicId(): ?string {
        return $this->topic_id;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('category_id', $this->getCategoryId());
        $writer->writeStringValue('message', $this->getMessage());
        $writer->writeEnumValue('priority', $this->getPriority());
        $writer->writeStringValue('project_id', $this->getProjectId());
        $writer->writeStringValue('subject', $this->getSubject());
        $writer->writeStringValue('topic_id', $this->getTopicId());
    }

    /**
     * Sets the category_id property value. The category_id property
     * @param string|null $value Value to set for the category_id property.
    */
    public function setCategoryId(?string $value): void {
        $this->category_id = $value;
    }

    /**
     * Sets the message property value. The message property
     * @param string|null $value Value to set for the message property.
    */
    public function setMessage(?string $value): void {
        $this->message = $value;
    }

    /**
     * Sets the priority property value. The priority property
     * @param TicketPriority|null $value Value to set for the priority property.
    */
    public function setPriority(?TicketPriority $value): void {
        $this->priority = $value;
    }

    /**
     * Sets the project_id property value. The project_id property
     * @param string|null $value Value to set for the project_id property.
    */
    public function setProjectId(?string $value): void {
        $this->project_id = $value;
    }

    /**
     * Sets the subject property value. The subject property
     * @param string|null $value Value to set for the subject property.
    */
    public function setSubject(?string $value): void {
        $this->subject = $value;
    }

    /**
     * Sets the topic_id property value. The topic_id property
     * @param string|null $value Value to set for the topic_id property.
    */
    public function setTopicId(?string $value): void {
        $this->topic_id = $value;
    }

}
