<?php

namespace Rixl\Sdk\Models\Auth\V1;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class SignIn implements Parsable 
{
    /**
     * @var string|null $auth_method auth_method is how the sign-in was started: "password", "passkey", "passkey_2fa", "totp", or "provider:<name>".
    */
    private ?string $auth_method = null;
    
    /**
     * @var string|null $country The country property
    */
    private ?string $country = null;
    
    /**
     * @var DateTime|null $created_at A point in time in RFC 3339 format, with up to nanosecond precision. Output uses UTC (`Z`); input may use an offset from UTC.
    */
    private ?DateTime $created_at = null;
    
    /**
     * @var bool|null $current current marks the sign-in of the access token making the request.
    */
    private ?bool $current = null;
    
    /**
     * @var DateTime|null $expires_at A point in time in RFC 3339 format, with up to nanosecond precision. Output uses UTC (`Z`); input may use an offset from UTC.
    */
    private ?DateTime $expires_at = null;
    
    /**
     * @var string|null $id The id property
    */
    private ?string $id = null;
    
    /**
     * @var string|null $ip The ip property
    */
    private ?string $ip = null;
    
    /**
     * @var DateTime|null $last_used_at A point in time in RFC 3339 format, with up to nanosecond precision. Output uses UTC (`Z`); input may use an offset from UTC.
    */
    private ?DateTime $last_used_at = null;
    
    /**
     * @var string|null $user_agent The user_agent property
    */
    private ?string $user_agent = null;
    
    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return SignIn
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): SignIn {
        return new SignIn();
    }

    /**
     * Gets the auth_method property value. auth_method is how the sign-in was started: "password", "passkey", "passkey_2fa", "totp", or "provider:<name>".
     * @return string|null
    */
    public function getAuthMethod(): ?string {
        return $this->auth_method;
    }

    /**
     * Gets the country property value. The country property
     * @return string|null
    */
    public function getCountry(): ?string {
        return $this->country;
    }

    /**
     * Gets the created_at property value. A point in time in RFC 3339 format, with up to nanosecond precision. Output uses UTC (`Z`); input may use an offset from UTC.
     * @return DateTime|null
    */
    public function getCreatedAt(): ?DateTime {
        return $this->created_at;
    }

    /**
     * Gets the current property value. current marks the sign-in of the access token making the request.
     * @return bool|null
    */
    public function getCurrent(): ?bool {
        return $this->current;
    }

    /**
     * Gets the expires_at property value. A point in time in RFC 3339 format, with up to nanosecond precision. Output uses UTC (`Z`); input may use an offset from UTC.
     * @return DateTime|null
    */
    public function getExpiresAt(): ?DateTime {
        return $this->expires_at;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'auth_method' => fn(ParseNode $n) => $o->setAuthMethod($n->getStringValue()),
            'country' => fn(ParseNode $n) => $o->setCountry($n->getStringValue()),
            'created_at' => fn(ParseNode $n) => $o->setCreatedAt($n->getDateTimeValue()),
            'current' => fn(ParseNode $n) => $o->setCurrent($n->getBooleanValue()),
            'expires_at' => fn(ParseNode $n) => $o->setExpiresAt($n->getDateTimeValue()),
            'id' => fn(ParseNode $n) => $o->setId($n->getStringValue()),
            'ip' => fn(ParseNode $n) => $o->setIp($n->getStringValue()),
            'last_used_at' => fn(ParseNode $n) => $o->setLastUsedAt($n->getDateTimeValue()),
            'user_agent' => fn(ParseNode $n) => $o->setUserAgent($n->getStringValue()),
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
     * Gets the ip property value. The ip property
     * @return string|null
    */
    public function getIp(): ?string {
        return $this->ip;
    }

    /**
     * Gets the last_used_at property value. A point in time in RFC 3339 format, with up to nanosecond precision. Output uses UTC (`Z`); input may use an offset from UTC.
     * @return DateTime|null
    */
    public function getLastUsedAt(): ?DateTime {
        return $this->last_used_at;
    }

    /**
     * Gets the user_agent property value. The user_agent property
     * @return string|null
    */
    public function getUserAgent(): ?string {
        return $this->user_agent;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('auth_method', $this->getAuthMethod());
        $writer->writeStringValue('country', $this->getCountry());
        $writer->writeDateTimeValue('created_at', $this->getCreatedAt());
        $writer->writeBooleanValue('current', $this->getCurrent());
        $writer->writeDateTimeValue('expires_at', $this->getExpiresAt());
        $writer->writeStringValue('id', $this->getId());
        $writer->writeStringValue('ip', $this->getIp());
        $writer->writeDateTimeValue('last_used_at', $this->getLastUsedAt());
        $writer->writeStringValue('user_agent', $this->getUserAgent());
    }

    /**
     * Sets the auth_method property value. auth_method is how the sign-in was started: "password", "passkey", "passkey_2fa", "totp", or "provider:<name>".
     * @param string|null $value Value to set for the auth_method property.
    */
    public function setAuthMethod(?string $value): void {
        $this->auth_method = $value;
    }

    /**
     * Sets the country property value. The country property
     * @param string|null $value Value to set for the country property.
    */
    public function setCountry(?string $value): void {
        $this->country = $value;
    }

    /**
     * Sets the created_at property value. A point in time in RFC 3339 format, with up to nanosecond precision. Output uses UTC (`Z`); input may use an offset from UTC.
     * @param DateTime|null $value Value to set for the created_at property.
    */
    public function setCreatedAt(?DateTime $value): void {
        $this->created_at = $value;
    }

    /**
     * Sets the current property value. current marks the sign-in of the access token making the request.
     * @param bool|null $value Value to set for the current property.
    */
    public function setCurrent(?bool $value): void {
        $this->current = $value;
    }

    /**
     * Sets the expires_at property value. A point in time in RFC 3339 format, with up to nanosecond precision. Output uses UTC (`Z`); input may use an offset from UTC.
     * @param DateTime|null $value Value to set for the expires_at property.
    */
    public function setExpiresAt(?DateTime $value): void {
        $this->expires_at = $value;
    }

    /**
     * Sets the id property value. The id property
     * @param string|null $value Value to set for the id property.
    */
    public function setId(?string $value): void {
        $this->id = $value;
    }

    /**
     * Sets the ip property value. The ip property
     * @param string|null $value Value to set for the ip property.
    */
    public function setIp(?string $value): void {
        $this->ip = $value;
    }

    /**
     * Sets the last_used_at property value. A point in time in RFC 3339 format, with up to nanosecond precision. Output uses UTC (`Z`); input may use an offset from UTC.
     * @param DateTime|null $value Value to set for the last_used_at property.
    */
    public function setLastUsedAt(?DateTime $value): void {
        $this->last_used_at = $value;
    }

    /**
     * Sets the user_agent property value. The user_agent property
     * @param string|null $value Value to set for the user_agent property.
    */
    public function setUserAgent(?string $value): void {
        $this->user_agent = $value;
    }

}
