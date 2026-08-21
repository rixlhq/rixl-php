<?php

namespace Rixl\Sdk\Models\Analytics\V1;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class TrackEventsRequest implements Parsable 
{
    /**
     * @var string|null $browser The browser property
    */
    private ?string $browser = null;
    
    /**
     * @var string|null $city The city property
    */
    private ?string $city = null;
    
    /**
     * @var string|null $country The country property
    */
    private ?string $country = null;
    
    /**
     * @var string|null $device The device property
    */
    private ?string $device = null;
    
    /**
     * @var array<AnalyticsEvent>|null $events The events property
    */
    private ?array $events = null;
    
    /**
     * @var string|null $language The language property
    */
    private ?string $language = null;
    
    /**
     * @var string|null $os The os property
    */
    private ?string $os = null;
    
    /**
     * @var string|null $os_version The os_version property
    */
    private ?string $os_version = null;
    
    /**
     * @var string|null $project_id Project the events belong to (Organization > Project > Videos/Images/Posts/Feeds). Sent alongside the other envelope-level context because a client session is scoped to one project. org_id is still derived server-side from the credential and is never taken from the body, so a wrong project_id can only mis-attribute within the caller's own organization.
    */
    private ?string $project_id = null;
    
    /**
     * @var string|null $region The region property
    */
    private ?string $region = null;
    
    /**
     * @var string|null $user_id The user_id property
    */
    private ?string $user_id = null;
    
    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return TrackEventsRequest
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): TrackEventsRequest {
        return new TrackEventsRequest();
    }

    /**
     * Gets the browser property value. The browser property
     * @return string|null
    */
    public function getBrowser(): ?string {
        return $this->browser;
    }

    /**
     * Gets the city property value. The city property
     * @return string|null
    */
    public function getCity(): ?string {
        return $this->city;
    }

    /**
     * Gets the country property value. The country property
     * @return string|null
    */
    public function getCountry(): ?string {
        return $this->country;
    }

    /**
     * Gets the device property value. The device property
     * @return string|null
    */
    public function getDevice(): ?string {
        return $this->device;
    }

    /**
     * Gets the events property value. The events property
     * @return array<AnalyticsEvent>|null
    */
    public function getEvents(): ?array {
        return $this->events;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'browser' => fn(ParseNode $n) => $o->setBrowser($n->getStringValue()),
            'city' => fn(ParseNode $n) => $o->setCity($n->getStringValue()),
            'country' => fn(ParseNode $n) => $o->setCountry($n->getStringValue()),
            'device' => fn(ParseNode $n) => $o->setDevice($n->getStringValue()),
            'events' => fn(ParseNode $n) => $o->setEvents($n->getCollectionOfObjectValues([AnalyticsEvent::class, 'createFromDiscriminatorValue'])),
            'language' => fn(ParseNode $n) => $o->setLanguage($n->getStringValue()),
            'os' => fn(ParseNode $n) => $o->setOs($n->getStringValue()),
            'os_version' => fn(ParseNode $n) => $o->setOsVersion($n->getStringValue()),
            'project_id' => fn(ParseNode $n) => $o->setProjectId($n->getStringValue()),
            'region' => fn(ParseNode $n) => $o->setRegion($n->getStringValue()),
            'user_id' => fn(ParseNode $n) => $o->setUserId($n->getStringValue()),
        ];
    }

    /**
     * Gets the language property value. The language property
     * @return string|null
    */
    public function getLanguage(): ?string {
        return $this->language;
    }

    /**
     * Gets the os property value. The os property
     * @return string|null
    */
    public function getOs(): ?string {
        return $this->os;
    }

    /**
     * Gets the os_version property value. The os_version property
     * @return string|null
    */
    public function getOsVersion(): ?string {
        return $this->os_version;
    }

    /**
     * Gets the project_id property value. Project the events belong to (Organization > Project > Videos/Images/Posts/Feeds). Sent alongside the other envelope-level context because a client session is scoped to one project. org_id is still derived server-side from the credential and is never taken from the body, so a wrong project_id can only mis-attribute within the caller's own organization.
     * @return string|null
    */
    public function getProjectId(): ?string {
        return $this->project_id;
    }

    /**
     * Gets the region property value. The region property
     * @return string|null
    */
    public function getRegion(): ?string {
        return $this->region;
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
        $writer->writeStringValue('browser', $this->getBrowser());
        $writer->writeStringValue('city', $this->getCity());
        $writer->writeStringValue('country', $this->getCountry());
        $writer->writeStringValue('device', $this->getDevice());
        $writer->writeCollectionOfObjectValues('events', $this->getEvents());
        $writer->writeStringValue('language', $this->getLanguage());
        $writer->writeStringValue('os', $this->getOs());
        $writer->writeStringValue('os_version', $this->getOsVersion());
        $writer->writeStringValue('project_id', $this->getProjectId());
        $writer->writeStringValue('region', $this->getRegion());
        $writer->writeStringValue('user_id', $this->getUserId());
    }

    /**
     * Sets the browser property value. The browser property
     * @param string|null $value Value to set for the browser property.
    */
    public function setBrowser(?string $value): void {
        $this->browser = $value;
    }

    /**
     * Sets the city property value. The city property
     * @param string|null $value Value to set for the city property.
    */
    public function setCity(?string $value): void {
        $this->city = $value;
    }

    /**
     * Sets the country property value. The country property
     * @param string|null $value Value to set for the country property.
    */
    public function setCountry(?string $value): void {
        $this->country = $value;
    }

    /**
     * Sets the device property value. The device property
     * @param string|null $value Value to set for the device property.
    */
    public function setDevice(?string $value): void {
        $this->device = $value;
    }

    /**
     * Sets the events property value. The events property
     * @param array<AnalyticsEvent>|null $value Value to set for the events property.
    */
    public function setEvents(?array $value): void {
        $this->events = $value;
    }

    /**
     * Sets the language property value. The language property
     * @param string|null $value Value to set for the language property.
    */
    public function setLanguage(?string $value): void {
        $this->language = $value;
    }

    /**
     * Sets the os property value. The os property
     * @param string|null $value Value to set for the os property.
    */
    public function setOs(?string $value): void {
        $this->os = $value;
    }

    /**
     * Sets the os_version property value. The os_version property
     * @param string|null $value Value to set for the os_version property.
    */
    public function setOsVersion(?string $value): void {
        $this->os_version = $value;
    }

    /**
     * Sets the project_id property value. Project the events belong to (Organization > Project > Videos/Images/Posts/Feeds). Sent alongside the other envelope-level context because a client session is scoped to one project. org_id is still derived server-side from the credential and is never taken from the body, so a wrong project_id can only mis-attribute within the caller's own organization.
     * @param string|null $value Value to set for the project_id property.
    */
    public function setProjectId(?string $value): void {
        $this->project_id = $value;
    }

    /**
     * Sets the region property value. The region property
     * @param string|null $value Value to set for the region property.
    */
    public function setRegion(?string $value): void {
        $this->region = $value;
    }

    /**
     * Sets the user_id property value. The user_id property
     * @param string|null $value Value to set for the user_id property.
    */
    public function setUserId(?string $value): void {
        $this->user_id = $value;
    }

}
