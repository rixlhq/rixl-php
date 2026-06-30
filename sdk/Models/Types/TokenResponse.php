<?php

namespace Rixl\Sdk\Models\Types;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class TokenResponse implements AdditionalDataHolder, Parsable 
{
    /**
     * @var string|null $access_token The access_token property
    */
    private ?string $access_token = null;
    
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var string|null $expires_at The expires_at property
    */
    private ?string $expires_at = null;
    
    /**
     * @var int|null $expires_in The expires_in property
    */
    private ?int $expires_in = null;
    
    /**
     * @var string|null $refresh_token The refresh_token property
    */
    private ?string $refresh_token = null;
    
    /**
     * @var string|null $token_type The token_type property
    */
    private ?string $token_type = null;
    
    /**
     * Instantiates a new TokenResponse and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

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
     * Gets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        return $this->additionalData;
    }

    /**
     * Gets the expires_at property value. The expires_at property
     * @return string|null
    */
    public function getExpiresAt(): ?string {
        return $this->expires_at;
    }

    /**
     * Gets the expires_in property value. The expires_in property
     * @return int|null
    */
    public function getExpiresIn(): ?int {
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
            'expires_at' => fn(ParseNode $n) => $o->setExpiresAt($n->getStringValue()),
            'expires_in' => fn(ParseNode $n) => $o->setExpiresIn($n->getIntegerValue()),
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
        $writer->writeStringValue('expires_at', $this->getExpiresAt());
        $writer->writeIntegerValue('expires_in', $this->getExpiresIn());
        $writer->writeStringValue('refresh_token', $this->getRefreshToken());
        $writer->writeStringValue('token_type', $this->getTokenType());
        $writer->writeAdditionalData($this->getAdditionalData());
    }

    /**
     * Sets the access_token property value. The access_token property
     * @param string|null $value Value to set for the access_token property.
    */
    public function setAccessToken(?string $value): void {
        $this->access_token = $value;
    }

    /**
     * Sets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @param array<string,mixed> $value Value to set for the AdditionalData property.
    */
    public function setAdditionalData(?array $value): void {
        $this->additionalData = $value;
    }

    /**
     * Sets the expires_at property value. The expires_at property
     * @param string|null $value Value to set for the expires_at property.
    */
    public function setExpiresAt(?string $value): void {
        $this->expires_at = $value;
    }

    /**
     * Sets the expires_in property value. The expires_in property
     * @param int|null $value Value to set for the expires_in property.
    */
    public function setExpiresIn(?int $value): void {
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
