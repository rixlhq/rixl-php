<?php

namespace Rixl\Sdk\Models\Auth\V1;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Rixl\Sdk\Models\Google\Protobuf\Struct;

class OrganizationAuditEvent implements Parsable 
{
    /**
     * @var string|null $action The action property
    */
    private ?string $action = null;
    
    /**
     * @var string|null $actor_id The actor_id property
    */
    private ?string $actor_id = null;
    
    /**
     * @var string|null $actor_type The actor_type property
    */
    private ?string $actor_type = null;
    
    /**
     * @var string|null $id The id property
    */
    private ?string $id = null;
    
    /**
     * @var Struct|null $metadata A JSON object whose property values may be any JSON value.
    */
    private ?Struct $metadata = null;
    
    /**
     * @var DateTime|null $occurred_at A point in time in RFC 3339 format, with up to nanosecond precision. Output uses UTC (`Z`); input may use an offset from UTC.
    */
    private ?DateTime $occurred_at = null;
    
    /**
     * @var string|null $org_id The org_id property
    */
    private ?string $org_id = null;
    
    /**
     * @var string|null $target_id The target_id property
    */
    private ?string $target_id = null;
    
    /**
     * @var string|null $target_type The target_type property
    */
    private ?string $target_type = null;
    
    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return OrganizationAuditEvent
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): OrganizationAuditEvent {
        return new OrganizationAuditEvent();
    }

    /**
     * Gets the action property value. The action property
     * @return string|null
    */
    public function getAction(): ?string {
        return $this->action;
    }

    /**
     * Gets the actor_id property value. The actor_id property
     * @return string|null
    */
    public function getActorId(): ?string {
        return $this->actor_id;
    }

    /**
     * Gets the actor_type property value. The actor_type property
     * @return string|null
    */
    public function getActorType(): ?string {
        return $this->actor_type;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'action' => fn(ParseNode $n) => $o->setAction($n->getStringValue()),
            'actor_id' => fn(ParseNode $n) => $o->setActorId($n->getStringValue()),
            'actor_type' => fn(ParseNode $n) => $o->setActorType($n->getStringValue()),
            'id' => fn(ParseNode $n) => $o->setId($n->getStringValue()),
            'metadata' => fn(ParseNode $n) => $o->setMetadata($n->getObjectValue([Struct::class, 'createFromDiscriminatorValue'])),
            'occurred_at' => fn(ParseNode $n) => $o->setOccurredAt($n->getDateTimeValue()),
            'org_id' => fn(ParseNode $n) => $o->setOrgId($n->getStringValue()),
            'target_id' => fn(ParseNode $n) => $o->setTargetId($n->getStringValue()),
            'target_type' => fn(ParseNode $n) => $o->setTargetType($n->getStringValue()),
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
     * Gets the metadata property value. A JSON object whose property values may be any JSON value.
     * @return Struct|null
    */
    public function getMetadata(): ?Struct {
        return $this->metadata;
    }

    /**
     * Gets the occurred_at property value. A point in time in RFC 3339 format, with up to nanosecond precision. Output uses UTC (`Z`); input may use an offset from UTC.
     * @return DateTime|null
    */
    public function getOccurredAt(): ?DateTime {
        return $this->occurred_at;
    }

    /**
     * Gets the org_id property value. The org_id property
     * @return string|null
    */
    public function getOrgId(): ?string {
        return $this->org_id;
    }

    /**
     * Gets the target_id property value. The target_id property
     * @return string|null
    */
    public function getTargetId(): ?string {
        return $this->target_id;
    }

    /**
     * Gets the target_type property value. The target_type property
     * @return string|null
    */
    public function getTargetType(): ?string {
        return $this->target_type;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('action', $this->getAction());
        $writer->writeStringValue('actor_id', $this->getActorId());
        $writer->writeStringValue('actor_type', $this->getActorType());
        $writer->writeStringValue('id', $this->getId());
        $writer->writeObjectValue('metadata', $this->getMetadata());
        $writer->writeDateTimeValue('occurred_at', $this->getOccurredAt());
        $writer->writeStringValue('org_id', $this->getOrgId());
        $writer->writeStringValue('target_id', $this->getTargetId());
        $writer->writeStringValue('target_type', $this->getTargetType());
    }

    /**
     * Sets the action property value. The action property
     * @param string|null $value Value to set for the action property.
    */
    public function setAction(?string $value): void {
        $this->action = $value;
    }

    /**
     * Sets the actor_id property value. The actor_id property
     * @param string|null $value Value to set for the actor_id property.
    */
    public function setActorId(?string $value): void {
        $this->actor_id = $value;
    }

    /**
     * Sets the actor_type property value. The actor_type property
     * @param string|null $value Value to set for the actor_type property.
    */
    public function setActorType(?string $value): void {
        $this->actor_type = $value;
    }

    /**
     * Sets the id property value. The id property
     * @param string|null $value Value to set for the id property.
    */
    public function setId(?string $value): void {
        $this->id = $value;
    }

    /**
     * Sets the metadata property value. A JSON object whose property values may be any JSON value.
     * @param Struct|null $value Value to set for the metadata property.
    */
    public function setMetadata(?Struct $value): void {
        $this->metadata = $value;
    }

    /**
     * Sets the occurred_at property value. A point in time in RFC 3339 format, with up to nanosecond precision. Output uses UTC (`Z`); input may use an offset from UTC.
     * @param DateTime|null $value Value to set for the occurred_at property.
    */
    public function setOccurredAt(?DateTime $value): void {
        $this->occurred_at = $value;
    }

    /**
     * Sets the org_id property value. The org_id property
     * @param string|null $value Value to set for the org_id property.
    */
    public function setOrgId(?string $value): void {
        $this->org_id = $value;
    }

    /**
     * Sets the target_id property value. The target_id property
     * @param string|null $value Value to set for the target_id property.
    */
    public function setTargetId(?string $value): void {
        $this->target_id = $value;
    }

    /**
     * Sets the target_type property value. The target_type property
     * @param string|null $value Value to set for the target_type property.
    */
    public function setTargetType(?string $value): void {
        $this->target_type = $value;
    }

}
