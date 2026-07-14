<?php

namespace Rixl\Sdk\Models\Auth\V1;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class TokenResponse implements Parsable 
{
    /**
     * @var string|null $accessToken The accessToken property
    */
    private ?string $accessToken = null;
    
    /**
     * @var string|null $refreshToken The refreshToken property
    */
    private ?string $refreshToken = null;
    
    /**
     * @var string|null $requiresAction The requiresAction property
    */
    private ?string $requiresAction = null;
    
    /**
     * @var string|null $tokenType The tokenType property
    */
    private ?string $tokenType = null;
    
    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return TokenResponse
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): TokenResponse {
        return new TokenResponse();
    }

    /**
     * Gets the accessToken property value. The accessToken property
     * @return string|null
    */
    public function getAccessToken(): ?string {
        return $this->accessToken;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'accessToken' => fn(ParseNode $n) => $o->setAccessToken($n->getStringValue()),
            'refreshToken' => fn(ParseNode $n) => $o->setRefreshToken($n->getStringValue()),
            'requiresAction' => fn(ParseNode $n) => $o->setRequiresAction($n->getStringValue()),
            'tokenType' => fn(ParseNode $n) => $o->setTokenType($n->getStringValue()),
        ];
    }

    /**
     * Gets the refreshToken property value. The refreshToken property
     * @return string|null
    */
    public function getRefreshToken(): ?string {
        return $this->refreshToken;
    }

    /**
     * Gets the requiresAction property value. The requiresAction property
     * @return string|null
    */
    public function getRequiresAction(): ?string {
        return $this->requiresAction;
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
        $writer->writeStringValue('accessToken', $this->getAccessToken());
        $writer->writeStringValue('refreshToken', $this->getRefreshToken());
        $writer->writeStringValue('requiresAction', $this->getRequiresAction());
        $writer->writeStringValue('tokenType', $this->getTokenType());
    }

    /**
     * Sets the accessToken property value. The accessToken property
     * @param string|null $value Value to set for the accessToken property.
    */
    public function setAccessToken(?string $value): void {
        $this->accessToken = $value;
    }

    /**
     * Sets the refreshToken property value. The refreshToken property
     * @param string|null $value Value to set for the refreshToken property.
    */
    public function setRefreshToken(?string $value): void {
        $this->refreshToken = $value;
    }

    /**
     * Sets the requiresAction property value. The requiresAction property
     * @param string|null $value Value to set for the requiresAction property.
    */
    public function setRequiresAction(?string $value): void {
        $this->requiresAction = $value;
    }

    /**
     * Sets the tokenType property value. The tokenType property
     * @param string|null $value Value to set for the tokenType property.
    */
    public function setTokenType(?string $value): void {
        $this->tokenType = $value;
    }

}
