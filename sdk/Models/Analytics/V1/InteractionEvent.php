<?php

namespace Rixl\Sdk\Models\Analytics\V1;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class InteractionEvent implements Parsable 
{
    /**
     * @var string|null $browser The browser property
    */
    private ?string $browser = null;
    
    /**
     * @var int|null $click_x The click_x property
    */
    private ?int $click_x = null;
    
    /**
     * @var int|null $click_y The click_y property
    */
    private ?int $click_y = null;
    
    /**
     * @var string|null $device_type The device_type property
    */
    private ?string $device_type = null;
    
    /**
     * @var string|null $element_id The element_id property
    */
    private ?string $element_id = null;
    
    /**
     * @var string|null $element_type The element_type property
    */
    private ?string $element_type = null;
    
    /**
     * @var string|null $interaction_type The interaction_type property
    */
    private ?string $interaction_type = null;
    
    /**
     * @var string|null $page The page property
    */
    private ?string $page = null;
    
    /**
     * @var string|null $page_url The page_url property
    */
    private ?string $page_url = null;
    
    /**
     * @var float|null $scroll_depth The scroll_depth property
    */
    private ?float $scroll_depth = null;
    
    /**
     * @var string|null $search_query The search_query property
    */
    private ?string $search_query = null;
    
    /**
     * @var string|null $session_id The session_id property
    */
    private ?string $session_id = null;
    
    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return InteractionEvent
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): InteractionEvent {
        return new InteractionEvent();
    }

    /**
     * Gets the browser property value. The browser property
     * @return string|null
    */
    public function getBrowser(): ?string {
        return $this->browser;
    }

    /**
     * Gets the click_x property value. The click_x property
     * @return int|null
    */
    public function getClickX(): ?int {
        return $this->click_x;
    }

    /**
     * Gets the click_y property value. The click_y property
     * @return int|null
    */
    public function getClickY(): ?int {
        return $this->click_y;
    }

    /**
     * Gets the device_type property value. The device_type property
     * @return string|null
    */
    public function getDeviceType(): ?string {
        return $this->device_type;
    }

    /**
     * Gets the element_id property value. The element_id property
     * @return string|null
    */
    public function getElementId(): ?string {
        return $this->element_id;
    }

    /**
     * Gets the element_type property value. The element_type property
     * @return string|null
    */
    public function getElementType(): ?string {
        return $this->element_type;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'browser' => fn(ParseNode $n) => $o->setBrowser($n->getStringValue()),
            'click_x' => fn(ParseNode $n) => $o->setClickX($n->getIntegerValue()),
            'click_y' => fn(ParseNode $n) => $o->setClickY($n->getIntegerValue()),
            'device_type' => fn(ParseNode $n) => $o->setDeviceType($n->getStringValue()),
            'element_id' => fn(ParseNode $n) => $o->setElementId($n->getStringValue()),
            'element_type' => fn(ParseNode $n) => $o->setElementType($n->getStringValue()),
            'interaction_type' => fn(ParseNode $n) => $o->setInteractionType($n->getStringValue()),
            'page' => fn(ParseNode $n) => $o->setPage($n->getStringValue()),
            'page_url' => fn(ParseNode $n) => $o->setPageUrl($n->getStringValue()),
            'scroll_depth' => fn(ParseNode $n) => $o->setScrollDepth($n->getFloatValue()),
            'search_query' => fn(ParseNode $n) => $o->setSearchQuery($n->getStringValue()),
            'session_id' => fn(ParseNode $n) => $o->setSessionId($n->getStringValue()),
        ];
    }

    /**
     * Gets the interaction_type property value. The interaction_type property
     * @return string|null
    */
    public function getInteractionType(): ?string {
        return $this->interaction_type;
    }

    /**
     * Gets the page property value. The page property
     * @return string|null
    */
    public function getPage(): ?string {
        return $this->page;
    }

    /**
     * Gets the page_url property value. The page_url property
     * @return string|null
    */
    public function getPageUrl(): ?string {
        return $this->page_url;
    }

    /**
     * Gets the scroll_depth property value. The scroll_depth property
     * @return float|null
    */
    public function getScrollDepth(): ?float {
        return $this->scroll_depth;
    }

    /**
     * Gets the search_query property value. The search_query property
     * @return string|null
    */
    public function getSearchQuery(): ?string {
        return $this->search_query;
    }

    /**
     * Gets the session_id property value. The session_id property
     * @return string|null
    */
    public function getSessionId(): ?string {
        return $this->session_id;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('browser', $this->getBrowser());
        $writer->writeIntegerValue('click_x', $this->getClickX());
        $writer->writeIntegerValue('click_y', $this->getClickY());
        $writer->writeStringValue('device_type', $this->getDeviceType());
        $writer->writeStringValue('element_id', $this->getElementId());
        $writer->writeStringValue('element_type', $this->getElementType());
        $writer->writeStringValue('interaction_type', $this->getInteractionType());
        $writer->writeStringValue('page', $this->getPage());
        $writer->writeStringValue('page_url', $this->getPageUrl());
        $writer->writeFloatValue('scroll_depth', $this->getScrollDepth());
        $writer->writeStringValue('search_query', $this->getSearchQuery());
        $writer->writeStringValue('session_id', $this->getSessionId());
    }

    /**
     * Sets the browser property value. The browser property
     * @param string|null $value Value to set for the browser property.
    */
    public function setBrowser(?string $value): void {
        $this->browser = $value;
    }

    /**
     * Sets the click_x property value. The click_x property
     * @param int|null $value Value to set for the click_x property.
    */
    public function setClickX(?int $value): void {
        $this->click_x = $value;
    }

    /**
     * Sets the click_y property value. The click_y property
     * @param int|null $value Value to set for the click_y property.
    */
    public function setClickY(?int $value): void {
        $this->click_y = $value;
    }

    /**
     * Sets the device_type property value. The device_type property
     * @param string|null $value Value to set for the device_type property.
    */
    public function setDeviceType(?string $value): void {
        $this->device_type = $value;
    }

    /**
     * Sets the element_id property value. The element_id property
     * @param string|null $value Value to set for the element_id property.
    */
    public function setElementId(?string $value): void {
        $this->element_id = $value;
    }

    /**
     * Sets the element_type property value. The element_type property
     * @param string|null $value Value to set for the element_type property.
    */
    public function setElementType(?string $value): void {
        $this->element_type = $value;
    }

    /**
     * Sets the interaction_type property value. The interaction_type property
     * @param string|null $value Value to set for the interaction_type property.
    */
    public function setInteractionType(?string $value): void {
        $this->interaction_type = $value;
    }

    /**
     * Sets the page property value. The page property
     * @param string|null $value Value to set for the page property.
    */
    public function setPage(?string $value): void {
        $this->page = $value;
    }

    /**
     * Sets the page_url property value. The page_url property
     * @param string|null $value Value to set for the page_url property.
    */
    public function setPageUrl(?string $value): void {
        $this->page_url = $value;
    }

    /**
     * Sets the scroll_depth property value. The scroll_depth property
     * @param float|null $value Value to set for the scroll_depth property.
    */
    public function setScrollDepth(?float $value): void {
        $this->scroll_depth = $value;
    }

    /**
     * Sets the search_query property value. The search_query property
     * @param string|null $value Value to set for the search_query property.
    */
    public function setSearchQuery(?string $value): void {
        $this->search_query = $value;
    }

    /**
     * Sets the session_id property value. The session_id property
     * @param string|null $value Value to set for the session_id property.
    */
    public function setSessionId(?string $value): void {
        $this->session_id = $value;
    }

}
