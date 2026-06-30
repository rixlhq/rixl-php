<?php

namespace Rixl\Sdk\Models\Analyticsv1;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class RealtimeStats implements AdditionalDataHolder, Parsable 
{
    /**
     * @var int|null $active_users The active_users property
    */
    private ?int $active_users = null;
    
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var int|null $events_per_minute The events_per_minute property
    */
    private ?int $events_per_minute = null;
    
    /**
     * @var array<RecentEvent>|null $recent_events The recent_events property
    */
    private ?array $recent_events = null;
    
    /**
     * @var string|null $timestamp The timestamp property
    */
    private ?string $timestamp = null;
    
    /**
     * @var array<CountryCount>|null $top_countries The top_countries property
    */
    private ?array $top_countries = null;
    
    /**
     * @var array<EventCount>|null $top_events The top_events property
    */
    private ?array $top_events = null;
    
    /**
     * Instantiates a new RealtimeStats and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return RealtimeStats
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): RealtimeStats {
        return new RealtimeStats();
    }

    /**
     * Gets the active_users property value. The active_users property
     * @return int|null
    */
    public function getActiveUsers(): ?int {
        return $this->active_users;
    }

    /**
     * Gets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        return $this->additionalData;
    }

    /**
     * Gets the events_per_minute property value. The events_per_minute property
     * @return int|null
    */
    public function getEventsPerMinute(): ?int {
        return $this->events_per_minute;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'active_users' => fn(ParseNode $n) => $o->setActiveUsers($n->getIntegerValue()),
            'events_per_minute' => fn(ParseNode $n) => $o->setEventsPerMinute($n->getIntegerValue()),
            'recent_events' => fn(ParseNode $n) => $o->setRecentEvents($n->getCollectionOfObjectValues([RecentEvent::class, 'createFromDiscriminatorValue'])),
            'timestamp' => fn(ParseNode $n) => $o->setTimestamp($n->getStringValue()),
            'top_countries' => fn(ParseNode $n) => $o->setTopCountries($n->getCollectionOfObjectValues([CountryCount::class, 'createFromDiscriminatorValue'])),
            'top_events' => fn(ParseNode $n) => $o->setTopEvents($n->getCollectionOfObjectValues([EventCount::class, 'createFromDiscriminatorValue'])),
        ];
    }

    /**
     * Gets the recent_events property value. The recent_events property
     * @return array<RecentEvent>|null
    */
    public function getRecentEvents(): ?array {
        return $this->recent_events;
    }

    /**
     * Gets the timestamp property value. The timestamp property
     * @return string|null
    */
    public function getTimestamp(): ?string {
        return $this->timestamp;
    }

    /**
     * Gets the top_countries property value. The top_countries property
     * @return array<CountryCount>|null
    */
    public function getTopCountries(): ?array {
        return $this->top_countries;
    }

    /**
     * Gets the top_events property value. The top_events property
     * @return array<EventCount>|null
    */
    public function getTopEvents(): ?array {
        return $this->top_events;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeIntegerValue('active_users', $this->getActiveUsers());
        $writer->writeIntegerValue('events_per_minute', $this->getEventsPerMinute());
        $writer->writeCollectionOfObjectValues('recent_events', $this->getRecentEvents());
        $writer->writeStringValue('timestamp', $this->getTimestamp());
        $writer->writeCollectionOfObjectValues('top_countries', $this->getTopCountries());
        $writer->writeCollectionOfObjectValues('top_events', $this->getTopEvents());
        $writer->writeAdditionalData($this->getAdditionalData());
    }

    /**
     * Sets the active_users property value. The active_users property
     * @param int|null $value Value to set for the active_users property.
    */
    public function setActiveUsers(?int $value): void {
        $this->active_users = $value;
    }

    /**
     * Sets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @param array<string,mixed> $value Value to set for the AdditionalData property.
    */
    public function setAdditionalData(?array $value): void {
        $this->additionalData = $value;
    }

    /**
     * Sets the events_per_minute property value. The events_per_minute property
     * @param int|null $value Value to set for the events_per_minute property.
    */
    public function setEventsPerMinute(?int $value): void {
        $this->events_per_minute = $value;
    }

    /**
     * Sets the recent_events property value. The recent_events property
     * @param array<RecentEvent>|null $value Value to set for the recent_events property.
    */
    public function setRecentEvents(?array $value): void {
        $this->recent_events = $value;
    }

    /**
     * Sets the timestamp property value. The timestamp property
     * @param string|null $value Value to set for the timestamp property.
    */
    public function setTimestamp(?string $value): void {
        $this->timestamp = $value;
    }

    /**
     * Sets the top_countries property value. The top_countries property
     * @param array<CountryCount>|null $value Value to set for the top_countries property.
    */
    public function setTopCountries(?array $value): void {
        $this->top_countries = $value;
    }

    /**
     * Sets the top_events property value. The top_events property
     * @param array<EventCount>|null $value Value to set for the top_events property.
    */
    public function setTopEvents(?array $value): void {
        $this->top_events = $value;
    }

}
