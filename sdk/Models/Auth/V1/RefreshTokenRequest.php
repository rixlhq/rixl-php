<?php

namespace Rixl\Sdk\Models\Auth\V1;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class RefreshTokenRequest implements Parsable 
{
    /**
     * @var string|null $countryCode The countryCode property
    */
    private ?string $countryCode = null;
    
    /**
     * @var string|null $origin The origin property
    */
    private ?string $origin = null;
    
    /**
     * @var string|null $refreshToken The refreshToken property
    */
    private ?string $refreshToken = null;
    
    /**
     * @var string|null $tokenType The tokenType property
    */
    private ?string $tokenType = null;
    
    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return RefreshTokenRequest
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): RefreshTokenRequest {
        return new RefreshTokenRequest();
    }

    /**
     * Gets the countryCode property value. The countryCode property
     * @return string|null
    */
    public function getCountryCode(): ?string {
        return $this->countryCode;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'countryCode' => fn(ParseNode $n) => $o->setCountryCode($n->getStringValue()),
            'origin' => fn(ParseNode $n) => $o->setOrigin($n->getStringValue()),
            'refreshToken' => fn(ParseNode $n) => $o->setRefreshToken($n->getStringValue()),
            'tokenType' => fn(ParseNode $n) => $o->setTokenType($n->getStringValue()),
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
     * Gets the refreshToken property value. The refreshToken property
     * @return string|null
    */
    public function getRefreshToken(): ?string {
        return $this->refreshToken;
    }

    /**
     * Gets the tokenType property value. The tokenType property
     * @return string|null
    */
    public function getTokenType(): ?string {
        return $this->tokenType;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('countryCode', $this->getCountryCode());
        $writer->writeStringValue('origin', $this->getOrigin());
        $writer->writeStringValue('refreshToken', $this->getRefreshToken());
        $writer->writeStringValue('tokenType', $this->getTokenType());
    }

    /**
     * Sets the countryCode property value. The countryCode property
     * @param string|null $value Value to set for the countryCode property.
    */
    public function setCountryCode(?string $value): void {
        $this->countryCode = $value;
    }

    /**
     * Sets the origin property value. The origin property
     * @param string|null $value Value to set for the origin property.
    */
    public function setOrigin(?string $value): void {
        $this->origin = $value;
    }

    /**
     * Sets the refreshToken property value. The refreshToken property
     * @param string|null $value Value to set for the refreshToken property.
    */
    public function setRefreshToken(?string $value): void {
        $this->refreshToken = $value;
    }

    /**
     * Sets the tokenType property value. The tokenType property
     * @param string|null $value Value to set for the tokenType property.
    */
    public function setTokenType(?string $value): void {
        $this->tokenType = $value;
    }

}
