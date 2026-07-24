<?php

namespace Rixl\Sdk\Models\Auth\V1;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class RefreshTokenRequest implements Parsable 
{
    /**
     * @var string|null $country_code The country_code property
    */
    private ?string $country_code = null;
    
    /**
     * @var string|null $origin The origin property
    */
    private ?string $origin = null;
    
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
     * @return RefreshTokenRequest
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): RefreshTokenRequest {
        return new RefreshTokenRequest();
    }

    /**
     * Gets the country_code property value. The country_code property
     * @return string|null
    */
    public function getCountryCode(): ?string {
        return $this->country_code;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'country_code' => fn(ParseNode $n) => $o->setCountryCode($n->getStringValue()),
            'origin' => fn(ParseNode $n) => $o->setOrigin($n->getStringValue()),
            'refresh_token' => fn(ParseNode $n) => $o->setRefreshToken($n->getStringValue()),
            'token_type' => fn(ParseNode $n) => $o->setTokenType($n->getStringValue()),
        ];
    }

    /**
     * Gets the origin property value. The origin property
     * @return string|null
    */
    public function getOrigin(): ?string {
        return $this->origin;
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
        $writer->writeStringValue('country_code', $this->getCountryCode());
        $writer->writeStringValue('origin', $this->getOrigin());
        $writer->writeStringValue('refresh_token', $this->getRefreshToken());
        $writer->writeStringValue('token_type', $this->getTokenType());
    }

    /**
     * Sets the country_code property value. The country_code property
     * @param string|null $value Value to set for the country_code property.
    */
    public function setCountryCode(?string $value): void {
        $this->country_code = $value;
    }

    /**
     * Sets the origin property value. The origin property
     * @param string|null $value Value to set for the origin property.
    */
    public function setOrigin(?string $value): void {
        $this->origin = $value;
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
