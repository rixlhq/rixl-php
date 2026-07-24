<?php

namespace Rixl\Sdk\Models\Auth\V1;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class ConnectProviderRequest implements Parsable 
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
     * @var ExternalAccountProvider|null $provider The provider property
    */
    private ?ExternalAccountProvider $provider = null;
    
    /**
     * @var string|null $token The token property
    */
    private ?string $token = null;
    
    /**
     * @var UserRequest|null $user The user property
    */
    private ?UserRequest $user = null;
    
    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return ConnectProviderRequest
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): ConnectProviderRequest {
        return new ConnectProviderRequest();
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
            'provider' => fn(ParseNode $n) => $o->setProvider($n->getEnumValue(ExternalAccountProvider::class)),
            'token' => fn(ParseNode $n) => $o->setToken($n->getStringValue()),
            'user' => fn(ParseNode $n) => $o->setUser($n->getObjectValue([UserRequest::class, 'createFromDiscriminatorValue'])),
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
     * Gets the provider property value. The provider property
     * @return ExternalAccountProvider|null
    */
    public function getProvider(): ?ExternalAccountProvider {
        return $this->provider;
    }

    /**
     * Gets the token property value. The token property
     * @return string|null
    */
    public function getToken(): ?string {
        return $this->token;
    }

    /**
     * Gets the user property value. The user property
     * @return UserRequest|null
    */
    public function getUser(): ?UserRequest {
        return $this->user;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('country_code', $this->getCountryCode());
        $writer->writeStringValue('origin', $this->getOrigin());
        $writer->writeEnumValue('provider', $this->getProvider());
        $writer->writeStringValue('token', $this->getToken());
        $writer->writeObjectValue('user', $this->getUser());
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
     * Sets the provider property value. The provider property
     * @param ExternalAccountProvider|null $value Value to set for the provider property.
    */
    public function setProvider(?ExternalAccountProvider $value): void {
        $this->provider = $value;
    }

    /**
     * Sets the token property value. The token property
     * @param string|null $value Value to set for the token property.
    */
    public function setToken(?string $value): void {
        $this->token = $value;
    }

    /**
     * Sets the user property value. The user property
     * @param UserRequest|null $value Value to set for the user property.
    */
    public function setUser(?UserRequest $value): void {
        $this->user = $value;
    }

}
