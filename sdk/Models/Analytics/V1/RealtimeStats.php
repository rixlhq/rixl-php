<?php

namespace Rixl\Sdk\Models\Analytics\V1;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class RealtimeStats implements Parsable 
{
    /**
     * @var array<RecentEvent>|null $recentEvents The recentEvents property
    */
    private ?array $recentEvents = null;
    
    /**
     * @var string|null $timestamp The timestamp property
    */
    private ?string $timestamp = null;
    
    /**
     * @var array<CountryCount>|null $topCountries The topCountries property
    */
    private ?array $topCountries = null;
    
    /**
     * @var array<EventCount>|null $topEvents The topEvents property
    */
    private ?array $topEvents = null;
    
    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return RealtimeStats
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): RealtimeStats {
        return new RealtimeStats();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'recentEvents' => fn(ParseNode $n) => $o->setRecentEvents($n->getCollectionOfObjectValues([RecentEvent::class, 'createFromDiscriminatorValue'])),
            'timestamp' => fn(ParseNode $n) => $o->setTimestamp($n->getStringValue()),
            'topCountries' => fn(ParseNode $n) => $o->setTopCountries($n->getCollectionOfObjectValues([CountryCount::class, 'createFromDiscriminatorValue'])),
            'topEvents' => fn(ParseNode $n) => $o->setTopEvents($n->getCollectionOfObjectValues([EventCount::class, 'createFromDiscriminatorValue'])),
        ];
    }

    /**
     * Gets the recentEvents property value. The recentEvents property
     * @return array<RecentEvent>|null
    */
    public function getRecentEvents(): ?array {
        return $this->recentEvents;
    }

    /**
     * Gets the timestamp property value. The timestamp property
     * @return string|null
    */
    public function getTimestamp(): ?string {
        return $this->timestamp;
    }

    /**
     * Gets the topCountries property value. The topCountries property
     * @return array<CountryCount>|null
    */
    public function getTopCountries(): ?array {
        return $this->topCountries;
    }

    /**
     * Gets the topEvents property value. The topEvents property
     * @return array<EventCount>|null
    */
    public function getTopEvents(): ?array {
        return $this->topEvents;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeCollectionOfObjectValues('recentEvents', $this->getRecentEvents());
        $writer->writeStringValue('timestamp', $this->getTimestamp());
        $writer->writeCollectionOfObjectValues('topCountries', $this->getTopCountries());
        $writer->writeCollectionOfObjectValues('topEvents', $this->getTopEvents());
    }

    /**
     * Sets the recentEvents property value. The recentEvents property
     * @param array<RecentEvent>|null $value Value to set for the recentEvents property.
    */
    public function setRecentEvents(?array $value): void {
        $this->recentEvents = $value;
    }

    /**
     * Sets the timestamp property value. The timestamp property
     * @param string|null $value Value to set for the timestamp property.
    */
    public function setTimestamp(?string $value): void {
        $this->timestamp = $value;
    }

    /**
     * Sets the topCountries property value. The topCountries property
     * @param array<CountryCount>|null $value Value to set for the topCountries property.
    */
    public function setTopCountries(?array $value): void {
        $this->topCountries = $value;
    }

    /**
     * Sets the topEvents property value. The topEvents property
     * @param array<EventCount>|null $value Value to set for the topEvents property.
    */
    public function setTopEvents(?array $value): void {
        $this->topEvents = $value;
    }

}
