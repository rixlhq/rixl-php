<?php

namespace Rixl\Sdk\Models\Support\V1;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class Ticket implements Parsable 
{
    /**
     * @var string|null $category_id The category_id property
    */
    private ?string $category_id = null;
    
    /**
     * @var DateTime|null $created_at The created_at property
    */
    private ?DateTime $created_at = null;
    
    /**
     * @var string|null $id The id property
    */
    private ?string $id = null;
    
    /**
     * @var string|null $org_id The org_id property
    */
    private ?string $org_id = null;
    
    /**
     * @var TicketPriority|null $priority The priority property
    */
    private ?TicketPriority $priority = null;
    
    /**
     * @var string|null $project_id The project_id property
    */
    private ?string $project_id = null;
    
    /**
     * @var TicketStatus|null $status The status property
    */
    private ?TicketStatus $status = null;
    
    /**
     * @var string|null $subject The subject property
    */
    private ?string $subject = null;
    
    /**
     * @var string|null $topic_id The topic_id property
    */
    private ?string $topic_id = null;
    
    /**
     * @var DateTime|null $updated_at The updated_at property
    */
    private ?DateTime $updated_at = null;
    
    /**
     * @var string|null $user_id The user_id property
    */
    private ?string $user_id = null;
    
    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return Ticket
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): Ticket {
        return new Ticket();
    }

    /**
     * Gets the category_id property value. The category_id property
     * @return string|null
    */
    public function getCategoryId(): ?string {
        return $this->category_id;
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
            'category_id' => fn(ParseNode $n) => $o->setCategoryId($n->getStringValue()),
            'created_at' => fn(ParseNode $n) => $o->setCreatedAt($n->getDateTimeValue()),
            'id' => fn(ParseNode $n) => $o->setId($n->getStringValue()),
            'org_id' => fn(ParseNode $n) => $o->setOrgId($n->getStringValue()),
            'priority' => fn(ParseNode $n) => $o->setPriority($n->getEnumValue(TicketPriority::class)),
            'project_id' => fn(ParseNode $n) => $o->setProjectId($n->getStringValue()),
            'status' => fn(ParseNode $n) => $o->setStatus($n->getEnumValue(TicketStatus::class)),
            'subject' => fn(ParseNode $n) => $o->setSubject($n->getStringValue()),
            'topic_id' => fn(ParseNode $n) => $o->setTopicId($n->getStringValue()),
            'updated_at' => fn(ParseNode $n) => $o->setUpdatedAt($n->getDateTimeValue()),
            'user_id' => fn(ParseNode $n) => $o->setUserId($n->getStringValue()),
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
     * Gets the org_id property value. The org_id property
     * @return string|null
    */
    public function getOrgId(): ?string {
        return $this->org_id;
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
     * Gets the status property value. The status property
     * @return TicketStatus|null
    */
    public function getStatus(): ?TicketStatus {
        return $this->status;
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
     * Gets the updated_at property value. The updated_at property
     * @return DateTime|null
    */
    public function getUpdatedAt(): ?DateTime {
        return $this->updated_at;
    }

    /**
     * Gets the user_id property value. The user_id property
     * @return string|null
    */
    public function getUserId(): ?string {
        return $this->user_id;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('category_id', $this->getCategoryId());
        $writer->writeDateTimeValue('created_at', $this->getCreatedAt());
        $writer->writeStringValue('id', $this->getId());
        $writer->writeStringValue('org_id', $this->getOrgId());
        $writer->writeEnumValue('priority', $this->getPriority());
        $writer->writeStringValue('project_id', $this->getProjectId());
        $writer->writeEnumValue('status', $this->getStatus());
        $writer->writeStringValue('subject', $this->getSubject());
        $writer->writeStringValue('topic_id', $this->getTopicId());
        $writer->writeDateTimeValue('updated_at', $this->getUpdatedAt());
        $writer->writeStringValue('user_id', $this->getUserId());
    }

    /**
     * Sets the category_id property value. The category_id property
     * @param string|null $value Value to set for the category_id property.
    */
    public function setCategoryId(?string $value): void {
        $this->category_id = $value;
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
     * Sets the org_id property value. The org_id property
     * @param string|null $value Value to set for the org_id property.
    */
    public function setOrgId(?string $value): void {
        $this->org_id = $value;
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
     * Sets the status property value. The status property
     * @param TicketStatus|null $value Value to set for the status property.
    */
    public function setStatus(?TicketStatus $value): void {
        $this->status = $value;
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

    /**
     * Sets the updated_at property value. The updated_at property
     * @param DateTime|null $value Value to set for the updated_at property.
    */
    public function setUpdatedAt(?DateTime $value): void {
        $this->updated_at = $value;
    }

    /**
     * Sets the user_id property value. The user_id property
     * @param string|null $value Value to set for the user_id property.
    */
    public function setUserId(?string $value): void {
        $this->user_id = $value;
    }

}
