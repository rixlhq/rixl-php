<?php

namespace Rixl\Sdk\Models\Analytics\V1;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

/**
 * At most one of `session_start`, `content_view`, `engagement`, `interaction`, `error` may be set.
*/
class AnalyticsEvent implements Parsable 
{
    /**
     * @var ContentViewEvent|null $content_view The content_view property
    */
    private ?ContentViewEvent $content_view = null;
    
    /**
     * @var EngagementEvent|null $engagement The engagement property
    */
    private ?EngagementEvent $engagement = null;
    
    /**
     * @var ErrorEvent|null $error The error property
    */
    private ?ErrorEvent $error = null;
    
    /**
     * @var InteractionEvent|null $interaction The interaction property
    */
    private ?InteractionEvent $interaction = null;
    
    /**
     * @var SessionStartEvent|null $session_start The session_start property
    */
    private ?SessionStartEvent $session_start = null;
    
    /**
     * @var DateTime|null $timestamp A point in time in RFC 3339 format, with up to nanosecond precision. Output uses UTC (`Z`); input may use an offset from UTC.
    */
    private ?DateTime $timestamp = null;
    
    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return AnalyticsEvent
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): AnalyticsEvent {
        return new AnalyticsEvent();
    }

    /**
     * Gets the content_view property value. The content_view property
     * @return ContentViewEvent|null
    */
    public function getContentView(): ?ContentViewEvent {
        return $this->content_view;
    }

    /**
     * Gets the engagement property value. The engagement property
     * @return EngagementEvent|null
    */
    public function getEngagement(): ?EngagementEvent {
        return $this->engagement;
    }

    /**
     * Gets the error property value. The error property
     * @return ErrorEvent|null
    */
    public function getError(): ?ErrorEvent {
        return $this->error;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'content_view' => fn(ParseNode $n) => $o->setContentView($n->getObjectValue([ContentViewEvent::class, 'createFromDiscriminatorValue'])),
            'engagement' => fn(ParseNode $n) => $o->setEngagement($n->getObjectValue([EngagementEvent::class, 'createFromDiscriminatorValue'])),
            'error' => fn(ParseNode $n) => $o->setError($n->getObjectValue([ErrorEvent::class, 'createFromDiscriminatorValue'])),
            'interaction' => fn(ParseNode $n) => $o->setInteraction($n->getObjectValue([InteractionEvent::class, 'createFromDiscriminatorValue'])),
            'session_start' => fn(ParseNode $n) => $o->setSessionStart($n->getObjectValue([SessionStartEvent::class, 'createFromDiscriminatorValue'])),
            'timestamp' => fn(ParseNode $n) => $o->setTimestamp($n->getDateTimeValue()),
        ];
    }

    /**
     * Gets the interaction property value. The interaction property
     * @return InteractionEvent|null
    */
    public function getInteraction(): ?InteractionEvent {
        return $this->interaction;
    }

    /**
     * Gets the session_start property value. The session_start property
     * @return SessionStartEvent|null
    */
    public function getSessionStart(): ?SessionStartEvent {
        return $this->session_start;
    }

    /**
     * Gets the timestamp property value. A point in time in RFC 3339 format, with up to nanosecond precision. Output uses UTC (`Z`); input may use an offset from UTC.
     * @return DateTime|null
    */
    public function getTimestamp(): ?DateTime {
        return $this->timestamp;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeObjectValue('content_view', $this->getContentView());
        $writer->writeObjectValue('engagement', $this->getEngagement());
        $writer->writeObjectValue('error', $this->getError());
        $writer->writeObjectValue('interaction', $this->getInteraction());
        $writer->writeObjectValue('session_start', $this->getSessionStart());
        $writer->writeDateTimeValue('timestamp', $this->getTimestamp());
    }

    /**
     * Sets the content_view property value. The content_view property
     * @param ContentViewEvent|null $value Value to set for the content_view property.
    */
    public function setContentView(?ContentViewEvent $value): void {
        $this->content_view = $value;
    }

    /**
     * Sets the engagement property value. The engagement property
     * @param EngagementEvent|null $value Value to set for the engagement property.
    */
    public function setEngagement(?EngagementEvent $value): void {
        $this->engagement = $value;
    }

    /**
     * Sets the error property value. The error property
     * @param ErrorEvent|null $value Value to set for the error property.
    */
    public function setError(?ErrorEvent $value): void {
        $this->error = $value;
    }

    /**
     * Sets the interaction property value. The interaction property
     * @param InteractionEvent|null $value Value to set for the interaction property.
    */
    public function setInteraction(?InteractionEvent $value): void {
        $this->interaction = $value;
    }

    /**
     * Sets the session_start property value. The session_start property
     * @param SessionStartEvent|null $value Value to set for the session_start property.
    */
    public function setSessionStart(?SessionStartEvent $value): void {
        $this->session_start = $value;
    }

    /**
     * Sets the timestamp property value. A point in time in RFC 3339 format, with up to nanosecond precision. Output uses UTC (`Z`); input may use an offset from UTC.
     * @param DateTime|null $value Value to set for the timestamp property.
    */
    public function setTimestamp(?DateTime $value): void {
        $this->timestamp = $value;
    }

}
