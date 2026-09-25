<?php

namespace Rixl\Sdk\Models\Analytics\V1;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class SessionStartEvent implements Parsable 
{
    /**
     * @var string|null $browser The browser property
    */
    private ?string $browser = null;
    
    /**
     * @var float|null $color_depth The color_depth property
    */
    private ?float $color_depth = null;
    
    /**
     * @var string|null $country The country property
    */
    private ?string $country = null;
    
    /**
     * @var string|null $language The language property
    */
    private ?string $language = null;
    
    /**
     * @var string|null $platform The platform property
    */
    private ?string $platform = null;
    
    /**
     * @var string|null $screen_resolution The screen_resolution property
    */
    private ?string $screen_resolution = null;
    
    /**
     * @var string|null $tg_platform The tg_platform property
    */
    private ?string $tg_platform = null;
    
    /**
     * @var string|null $tg_version The tg_version property
    */
    private ?string $tg_version = null;
    
    /**
     * @var string|null $timezone The timezone property
    */
    private ?string $timezone = null;
    
    /**
     * @var float|null $timezone_offset The timezone_offset property
    */
    private ?float $timezone_offset = null;
    
    /**
     * @var bool|null $touch_support The touch_support property
    */
    private ?bool $touch_support = null;
    
    /**
     * @var string|null $user_id The user_id property
    */
    private ?string $user_id = null;
    
    /**
     * @var string|null $utm_campaign The utm_campaign property
    */
    private ?string $utm_campaign = null;
    
    /**
     * @var string|null $utm_source The utm_source property
    */
    private ?string $utm_source = null;
    
    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return SessionStartEvent
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): SessionStartEvent {
        return new SessionStartEvent();
    }

    /**
     * Gets the browser property value. The browser property
     * @return string|null
    */
    public function getBrowser(): ?string {
        return $this->browser;
    }

    /**
     * Gets the color_depth property value. The color_depth property
     * @return float|null
    */
    public function getColorDepth(): ?float {
        return $this->color_depth;
    }

    /**
     * Gets the country property value. The country property
     * @return string|null
    */
    public function getCountry(): ?string {
        return $this->country;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'browser' => fn(ParseNode $n) => $o->setBrowser($n->getStringValue()),
            'color_depth' => fn(ParseNode $n) => $o->setColorDepth($n->getFloatValue()),
            'country' => fn(ParseNode $n) => $o->setCountry($n->getStringValue()),
            'language' => fn(ParseNode $n) => $o->setLanguage($n->getStringValue()),
            'platform' => fn(ParseNode $n) => $o->setPlatform($n->getStringValue()),
            'screen_resolution' => fn(ParseNode $n) => $o->setScreenResolution($n->getStringValue()),
            'tg_platform' => fn(ParseNode $n) => $o->setTgPlatform($n->getStringValue()),
            'tg_version' => fn(ParseNode $n) => $o->setTgVersion($n->getStringValue()),
            'timezone' => fn(ParseNode $n) => $o->setTimezone($n->getStringValue()),
            'timezone_offset' => fn(ParseNode $n) => $o->setTimezoneOffset($n->getFloatValue()),
            'touch_support' => fn(ParseNode $n) => $o->setTouchSupport($n->getBooleanValue()),
            'user_id' => fn(ParseNode $n) => $o->setUserId($n->getStringValue()),
            'utm_campaign' => fn(ParseNode $n) => $o->setUtmCampaign($n->getStringValue()),
            'utm_source' => fn(ParseNode $n) => $o->setUtmSource($n->getStringValue()),
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
     * Gets the platform property value. The platform property
     * @return string|null
    */
    public function getPlatform(): ?string {
        return $this->platform;
    }

    /**
     * Gets the screen_resolution property value. The screen_resolution property
     * @return string|null
    */
    public function getScreenResolution(): ?string {
        return $this->screen_resolution;
    }

    /**
     * Gets the tg_platform property value. The tg_platform property
     * @return string|null
    */
    public function getTgPlatform(): ?string {
        return $this->tg_platform;
    }

    /**
     * Gets the tg_version property value. The tg_version property
     * @return string|null
    */
    public function getTgVersion(): ?string {
        return $this->tg_version;
    }

    /**
     * Gets the timezone property value. The timezone property
     * @return string|null
    */
    public function getTimezone(): ?string {
        return $this->timezone;
    }

    /**
     * Gets the timezone_offset property value. The timezone_offset property
     * @return float|null
    */
    public function getTimezoneOffset(): ?float {
        return $this->timezone_offset;
    }

    /**
     * Gets the touch_support property value. The touch_support property
     * @return bool|null
    */
    public function getTouchSupport(): ?bool {
        return $this->touch_support;
    }

    /**
     * Gets the user_id property value. The user_id property
     * @return string|null
    */
    public function getUserId(): ?string {
        return $this->user_id;
    }

    /**
     * Gets the utm_campaign property value. The utm_campaign property
     * @return string|null
    */
    public function getUtmCampaign(): ?string {
        return $this->utm_campaign;
    }

    /**
     * Gets the utm_source property value. The utm_source property
     * @return string|null
    */
    public function getUtmSource(): ?string {
        return $this->utm_source;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('browser', $this->getBrowser());
        $writer->writeFloatValue('color_depth', $this->getColorDepth());
        $writer->writeStringValue('country', $this->getCountry());
        $writer->writeStringValue('language', $this->getLanguage());
        $writer->writeStringValue('platform', $this->getPlatform());
        $writer->writeStringValue('screen_resolution', $this->getScreenResolution());
        $writer->writeStringValue('tg_platform', $this->getTgPlatform());
        $writer->writeStringValue('tg_version', $this->getTgVersion());
        $writer->writeStringValue('timezone', $this->getTimezone());
        $writer->writeFloatValue('timezone_offset', $this->getTimezoneOffset());
        $writer->writeBooleanValue('touch_support', $this->getTouchSupport());
        $writer->writeStringValue('user_id', $this->getUserId());
        $writer->writeStringValue('utm_campaign', $this->getUtmCampaign());
        $writer->writeStringValue('utm_source', $this->getUtmSource());
    }

    /**
     * Sets the browser property value. The browser property
     * @param string|null $value Value to set for the browser property.
    */
    public function setBrowser(?string $value): void {
        $this->browser = $value;
    }

    /**
     * Sets the color_depth property value. The color_depth property
     * @param float|null $value Value to set for the color_depth property.
    */
    public function setColorDepth(?float $value): void {
        $this->color_depth = $value;
    }

    /**
     * Sets the country property value. The country property
     * @param string|null $value Value to set for the country property.
    */
    public function setCountry(?string $value): void {
        $this->country = $value;
    }

    /**
     * Sets the language property value. The language property
     * @param string|null $value Value to set for the language property.
    */
    public function setLanguage(?string $value): void {
        $this->language = $value;
    }

    /**
     * Sets the platform property value. The platform property
     * @param string|null $value Value to set for the platform property.
    */
    public function setPlatform(?string $value): void {
        $this->platform = $value;
    }

    /**
     * Sets the screen_resolution property value. The screen_resolution property
     * @param string|null $value Value to set for the screen_resolution property.
    */
    public function setScreenResolution(?string $value): void {
        $this->screen_resolution = $value;
    }

    /**
     * Sets the tg_platform property value. The tg_platform property
     * @param string|null $value Value to set for the tg_platform property.
    */
    public function setTgPlatform(?string $value): void {
        $this->tg_platform = $value;
    }

    /**
     * Sets the tg_version property value. The tg_version property
     * @param string|null $value Value to set for the tg_version property.
    */
    public function setTgVersion(?string $value): void {
        $this->tg_version = $value;
    }

    /**
     * Sets the timezone property value. The timezone property
     * @param string|null $value Value to set for the timezone property.
    */
    public function setTimezone(?string $value): void {
        $this->timezone = $value;
    }

    /**
     * Sets the timezone_offset property value. The timezone_offset property
     * @param float|null $value Value to set for the timezone_offset property.
    */
    public function setTimezoneOffset(?float $value): void {
        $this->timezone_offset = $value;
    }

    /**
     * Sets the touch_support property value. The touch_support property
     * @param bool|null $value Value to set for the touch_support property.
    */
    public function setTouchSupport(?bool $value): void {
        $this->touch_support = $value;
    }

    /**
     * Sets the user_id property value. The user_id property
     * @param string|null $value Value to set for the user_id property.
    */
    public function setUserId(?string $value): void {
        $this->user_id = $value;
    }

    /**
     * Sets the utm_campaign property value. The utm_campaign property
     * @param string|null $value Value to set for the utm_campaign property.
    */
    public function setUtmCampaign(?string $value): void {
        $this->utm_campaign = $value;
    }

    /**
     * Sets the utm_source property value. The utm_source property
     * @param string|null $value Value to set for the utm_source property.
    */
    public function setUtmSource(?string $value): void {
        $this->utm_source = $value;
    }

}
