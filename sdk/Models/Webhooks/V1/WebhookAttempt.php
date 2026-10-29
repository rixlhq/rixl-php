<?php

namespace Rixl\Sdk\Models\Webhooks\V1;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

/**
 * WebhookAttempt is one recorded delivery attempt for an event/endpoint pair.
*/
class WebhookAttempt implements Parsable 
{
    /**
     * @var int|null $attempt The attempt property
    */
    private ?int $attempt = null;
    
    /**
     * @var DateTime|null $created_at The created_at property
    */
    private ?DateTime $created_at = null;
    
    /**
     * @var int|null $duration_ms The duration_ms property
    */
    private ?int $duration_ms = null;
    
    /**
     * @var string|null $error The error property
    */
    private ?string $error = null;
    
    /**
     * @var string|null $event_id The event_id property
    */
    private ?string $event_id = null;
    
    /**
     * @var string|null $id The id property
    */
    private ?string $id = null;
    
    /**
     * @var bool|null $replay True when this delivery was triggered by ReplayEvent or SendTestEvent rather than the original subscription fan-out.
    */
    private ?bool $replay = null;
    
    /**
     * @var string|null $response_snippet First 1 KiB of the endpoint's response body.
    */
    private ?string $response_snippet = null;
    
    /**
     * @var int|null $status_code The status_code property
    */
    private ?int $status_code = null;
    
    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return WebhookAttempt
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): WebhookAttempt {
        return new WebhookAttempt();
    }

    /**
     * Gets the attempt property value. The attempt property
     * @return int|null
    */
    public function getAttempt(): ?int {
        return $this->attempt;
    }

    /**
     * Gets the created_at property value. The created_at property
     * @return DateTime|null
    */
    public function getCreatedAt(): ?DateTime {
        return $this->created_at;
    }

    /**
     * Gets the duration_ms property value. The duration_ms property
     * @return int|null
    */
    public function getDurationMs(): ?int {
        return $this->duration_ms;
    }

    /**
     * Gets the error property value. The error property
     * @return string|null
    */
    public function getError(): ?string {
        return $this->error;
    }

    /**
     * Gets the event_id property value. The event_id property
     * @return string|null
    */
    public function getEventId(): ?string {
        return $this->event_id;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'attempt' => fn(ParseNode $n) => $o->setAttempt($n->getIntegerValue()),
            'created_at' => fn(ParseNode $n) => $o->setCreatedAt($n->getDateTimeValue()),
            'duration_ms' => fn(ParseNode $n) => $o->setDurationMs($n->getIntegerValue()),
            'error' => fn(ParseNode $n) => $o->setError($n->getStringValue()),
            'event_id' => fn(ParseNode $n) => $o->setEventId($n->getStringValue()),
            'id' => fn(ParseNode $n) => $o->setId($n->getStringValue()),
            'replay' => fn(ParseNode $n) => $o->setReplay($n->getBooleanValue()),
            'response_snippet' => fn(ParseNode $n) => $o->setResponseSnippet($n->getStringValue()),
            'status_code' => fn(ParseNode $n) => $o->setStatusCode($n->getIntegerValue()),
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
     * Gets the replay property value. True when this delivery was triggered by ReplayEvent or SendTestEvent rather than the original subscription fan-out.
     * @return bool|null
    */
    public function getReplay(): ?bool {
        return $this->replay;
    }

    /**
     * Gets the response_snippet property value. First 1 KiB of the endpoint's response body.
     * @return string|null
    */
    public function getResponseSnippet(): ?string {
        return $this->response_snippet;
    }

    /**
     * Gets the status_code property value. The status_code property
     * @return int|null
    */
    public function getStatusCode(): ?int {
        return $this->status_code;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeIntegerValue('attempt', $this->getAttempt());
        $writer->writeDateTimeValue('created_at', $this->getCreatedAt());
        $writer->writeIntegerValue('duration_ms', $this->getDurationMs());
        $writer->writeStringValue('error', $this->getError());
        $writer->writeStringValue('event_id', $this->getEventId());
        $writer->writeStringValue('id', $this->getId());
        $writer->writeBooleanValue('replay', $this->getReplay());
        $writer->writeStringValue('response_snippet', $this->getResponseSnippet());
        $writer->writeIntegerValue('status_code', $this->getStatusCode());
    }

    /**
     * Sets the attempt property value. The attempt property
     * @param int|null $value Value to set for the attempt property.
    */
    public function setAttempt(?int $value): void {
        $this->attempt = $value;
    }

    /**
     * Sets the created_at property value. The created_at property
     * @param DateTime|null $value Value to set for the created_at property.
    */
    public function setCreatedAt(?DateTime $value): void {
        $this->created_at = $value;
    }

    /**
     * Sets the duration_ms property value. The duration_ms property
     * @param int|null $value Value to set for the duration_ms property.
    */
    public function setDurationMs(?int $value): void {
        $this->duration_ms = $value;
    }

    /**
     * Sets the error property value. The error property
     * @param string|null $value Value to set for the error property.
    */
    public function setError(?string $value): void {
        $this->error = $value;
    }

    /**
     * Sets the event_id property value. The event_id property
     * @param string|null $value Value to set for the event_id property.
    */
    public function setEventId(?string $value): void {
        $this->event_id = $value;
    }

    /**
     * Sets the id property value. The id property
     * @param string|null $value Value to set for the id property.
    */
    public function setId(?string $value): void {
        $this->id = $value;
    }

    /**
     * Sets the replay property value. True when this delivery was triggered by ReplayEvent or SendTestEvent rather than the original subscription fan-out.
     * @param bool|null $value Value to set for the replay property.
    */
    public function setReplay(?bool $value): void {
        $this->replay = $value;
    }

    /**
     * Sets the response_snippet property value. First 1 KiB of the endpoint's response body.
     * @param string|null $value Value to set for the response_snippet property.
    */
    public function setResponseSnippet(?string $value): void {
        $this->response_snippet = $value;
    }

    /**
     * Sets the status_code property value. The status_code property
     * @param int|null $value Value to set for the status_code property.
    */
    public function setStatusCode(?int $value): void {
        $this->status_code = $value;
    }

}
