<?php

namespace Rixl\Sdk\Models\Analytics\V1;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class ErrorEvent implements Parsable 
{
    /**
     * @var string|null $browser The browser property
    */
    private ?string $browser = null;
    
    /**
     * @var string|null $device_type The device_type property
    */
    private ?string $device_type = null;
    
    /**
     * @var string|null $endpoint The endpoint property
    */
    private ?string $endpoint = null;
    
    /**
     * @var string|null $error_code The error_code property
    */
    private ?string $error_code = null;
    
    /**
     * @var string|null $error_message The error_message property
    */
    private ?string $error_message = null;
    
    /**
     * @var string|null $error_type The error_type property
    */
    private ?string $error_type = null;
    
    /**
     * @var string|null $os The os property
    */
    private ?string $os = null;
    
    /**
     * @var string|null $resource_id The resource_id property
    */
    private ?string $resource_id = null;
    
    /**
     * @var string|null $resource_type The resource_type property
    */
    private ?string $resource_type = null;
    
    /**
     * @var string|null $session_id The session_id property
    */
    private ?string $session_id = null;
    
    /**
     * @var string|null $stack_trace The stack_trace property
    */
    private ?string $stack_trace = null;
    
    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return ErrorEvent
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): ErrorEvent {
        return new ErrorEvent();
    }

    /**
     * Gets the browser property value. The browser property
     * @return string|null
    */
    public function getBrowser(): ?string {
        return $this->browser;
    }

    /**
     * Gets the device_type property value. The device_type property
     * @return string|null
    */
    public function getDeviceType(): ?string {
        return $this->device_type;
    }

    /**
     * Gets the endpoint property value. The endpoint property
     * @return string|null
    */
    public function getEndpoint(): ?string {
        return $this->endpoint;
    }

    /**
     * Gets the error_code property value. The error_code property
     * @return string|null
    */
    public function getErrorCode(): ?string {
        return $this->error_code;
    }

    /**
     * Gets the error_message property value. The error_message property
     * @return string|null
    */
    public function getErrorMessage(): ?string {
        return $this->error_message;
    }

    /**
     * Gets the error_type property value. The error_type property
     * @return string|null
    */
    public function getErrorType(): ?string {
        return $this->error_type;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'browser' => fn(ParseNode $n) => $o->setBrowser($n->getStringValue()),
            'device_type' => fn(ParseNode $n) => $o->setDeviceType($n->getStringValue()),
            'endpoint' => fn(ParseNode $n) => $o->setEndpoint($n->getStringValue()),
            'error_code' => fn(ParseNode $n) => $o->setErrorCode($n->getStringValue()),
            'error_message' => fn(ParseNode $n) => $o->setErrorMessage($n->getStringValue()),
            'error_type' => fn(ParseNode $n) => $o->setErrorType($n->getStringValue()),
            'os' => fn(ParseNode $n) => $o->setOs($n->getStringValue()),
            'resource_id' => fn(ParseNode $n) => $o->setResourceId($n->getStringValue()),
            'resource_type' => fn(ParseNode $n) => $o->setResourceType($n->getStringValue()),
            'session_id' => fn(ParseNode $n) => $o->setSessionId($n->getStringValue()),
            'stack_trace' => fn(ParseNode $n) => $o->setStackTrace($n->getStringValue()),
        ];
    }

    /**
     * Gets the os property value. The os property
     * @return string|null
    */
    public function getOs(): ?string {
        return $this->os;
    }

    /**
     * Gets the resource_id property value. The resource_id property
     * @return string|null
    */
    public function getResourceId(): ?string {
        return $this->resource_id;
    }

    /**
     * Gets the resource_type property value. The resource_type property
     * @return string|null
    */
    public function getResourceType(): ?string {
        return $this->resource_type;
    }

    /**
     * Gets the session_id property value. The session_id property
     * @return string|null
    */
    public function getSessionId(): ?string {
        return $this->session_id;
    }

    /**
     * Gets the stack_trace property value. The stack_trace property
     * @return string|null
    */
    public function getStackTrace(): ?string {
        return $this->stack_trace;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('browser', $this->getBrowser());
        $writer->writeStringValue('device_type', $this->getDeviceType());
        $writer->writeStringValue('endpoint', $this->getEndpoint());
        $writer->writeStringValue('error_code', $this->getErrorCode());
        $writer->writeStringValue('error_message', $this->getErrorMessage());
        $writer->writeStringValue('error_type', $this->getErrorType());
        $writer->writeStringValue('os', $this->getOs());
        $writer->writeStringValue('resource_id', $this->getResourceId());
        $writer->writeStringValue('resource_type', $this->getResourceType());
        $writer->writeStringValue('session_id', $this->getSessionId());
        $writer->writeStringValue('stack_trace', $this->getStackTrace());
    }

    /**
     * Sets the browser property value. The browser property
     * @param string|null $value Value to set for the browser property.
    */
    public function setBrowser(?string $value): void {
        $this->browser = $value;
    }

    /**
     * Sets the device_type property value. The device_type property
     * @param string|null $value Value to set for the device_type property.
    */
    public function setDeviceType(?string $value): void {
        $this->device_type = $value;
    }

    /**
     * Sets the endpoint property value. The endpoint property
     * @param string|null $value Value to set for the endpoint property.
    */
    public function setEndpoint(?string $value): void {
        $this->endpoint = $value;
    }

    /**
     * Sets the error_code property value. The error_code property
     * @param string|null $value Value to set for the error_code property.
    */
    public function setErrorCode(?string $value): void {
        $this->error_code = $value;
    }

    /**
     * Sets the error_message property value. The error_message property
     * @param string|null $value Value to set for the error_message property.
    */
    public function setErrorMessage(?string $value): void {
        $this->error_message = $value;
    }

    /**
     * Sets the error_type property value. The error_type property
     * @param string|null $value Value to set for the error_type property.
    */
    public function setErrorType(?string $value): void {
        $this->error_type = $value;
    }

    /**
     * Sets the os property value. The os property
     * @param string|null $value Value to set for the os property.
    */
    public function setOs(?string $value): void {
        $this->os = $value;
    }

    /**
     * Sets the resource_id property value. The resource_id property
     * @param string|null $value Value to set for the resource_id property.
    */
    public function setResourceId(?string $value): void {
        $this->resource_id = $value;
    }

    /**
     * Sets the resource_type property value. The resource_type property
     * @param string|null $value Value to set for the resource_type property.
    */
    public function setResourceType(?string $value): void {
        $this->resource_type = $value;
    }

    /**
     * Sets the session_id property value. The session_id property
     * @param string|null $value Value to set for the session_id property.
    */
    public function setSessionId(?string $value): void {
        $this->session_id = $value;
    }

    /**
     * Sets the stack_trace property value. The stack_trace property
     * @param string|null $value Value to set for the stack_trace property.
    */
    public function setStackTrace(?string $value): void {
        $this->stack_trace = $value;
    }

}
