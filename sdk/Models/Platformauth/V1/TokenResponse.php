<?php

namespace Rixl\Sdk\Models\Platformauth\V1;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class TokenResponse implements Parsable 
{
    /**
     * @var string|null $access_token The access_token property
    */
    private ?string $access_token = null;
    
    /**
     * @var DateTime|null $expires_at The expires_at property
    */
    private ?DateTime $expires_at = null;
    
    /**
     * @var string|null $expires_in The expires_in property
    */
    private ?string $expires_in = null;
    
    /**
     * @var string|null $refresh_token The refresh_token property
    */
    private ?string $refresh_token = null;
    
    /**
     * @var string|null $token_type The token_type property
    */
    private ?string $token_type = null;
    
    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return TokenResponse
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): TokenResponse {
        return new TokenResponse();
    }

    /**
     * Gets the access_token property value. The access_token property
     * @return string|null
    */
    public function getAccessToken(): ?string {
        return $this->access_token;
    }

    /**
     * Gets the expires_at property value. The expires_at property
     * @return DateTime|null
    */
    public function getExpiresAt(): ?DateTime {
        return $this->expires_at;
    }

    /**
     * Gets the expires_in property value. The expires_in property
     * @return string|null
    */
    public function getExpiresIn(): ?string {
        return $this->expires_in;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'access_token' => fn(ParseNode $n) => $o->setAccessToken($n->getStringValue()),
            'expires_at' => fn(ParseNode $n) => $o->setExpiresAt($n->getDateTimeValue()),
            'expires_in' => fn(ParseNode $n) => $o->setExpiresIn($n->getStringValue()),
            'refresh_token' => fn(ParseNode $n) => $o->setRefreshToken($n->getStringValue()),
            'token_type' => fn(ParseNode $n) => $o->setTokenType($n->getStringValue()),
        ];
    }

    /**
     * Gets the refresh_token property value. The refresh_token property
     * @return string|null
    */
    public function getRefreshToken(): ?string {
        return $this->refresh_token;
    }

    /**
     * Gets the token_type property value. The token_type property
     * @return string|null
    */
    public function getTokenType(): ?string {
        return $this->token_type;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('access_token', $this->getAccessToken());
        $writer->writeDateTimeValue('expires_at', $this->getExpiresAt());
        $writer->writeStringValue('expires_in', $this->getExpiresIn());
        $writer->writeStringValue('refresh_token', $this->getRefreshToken());
        $writer->writeStringValue('token_type', $this->getTokenType());
    }

    /**
     * Sets the access_token property value. The access_token property
     * @param string|null $value Value to set for the access_token property.
    */
    public function setAccessToken(?string $value): void {
        $this->access_token = $value;
    }

    /**
     * Sets the expires_at property value. The expires_at property
     * @param DateTime|null $value Value to set for the expires_at property.
    */
    public function setExpiresAt(?DateTime $value): void {
        $this->expires_at = $value;
    }

    /**
     * Sets the expires_in property value. The expires_in property
     * @param string|null $value Value to set for the expires_in property.
    */
    public function setExpiresIn(?string $value): void {
        $this->expires_in = $value;
    }

    /**
     * Sets the refresh_token property value. The refresh_token property
     * @param string|null $value Value to set for the refresh_token property.
    */
    public function setRefreshToken(?string $value): void {
        $this->refresh_token = $value;
    }

    /**
     * Sets the token_type property value. The token_type property
     * @param string|null $value Value to set for the token_type property.
    */
    public function setTokenType(?string $value): void {
        $this->token_type = $value;
    }

}
