<?php

namespace Rixl\Sdk\Models\Auth\V1;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class LogoutRequest implements Parsable 
{
    /**
     * @var string|null $refresh_token The refresh_token property
    */
    private ?string $refresh_token = null;
    
    /**
     * @var string|null $token The token property
    */
    private ?string $token = null;
    
    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return LogoutRequest
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): LogoutRequest {
        return new LogoutRequest();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'refresh_token' => fn(ParseNode $n) => $o->setRefreshToken($n->getStringValue()),
            'token' => fn(ParseNode $n) => $o->setToken($n->getStringValue()),
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
     * Gets the token property value. The token property
     * @return string|null
    */
    public function getToken(): ?string {
        return $this->token;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('refresh_token', $this->getRefreshToken());
        $writer->writeStringValue('token', $this->getToken());
    }

    /**
     * Sets the refresh_token property value. The refresh_token property
     * @param string|null $value Value to set for the refresh_token property.
    */
    public function setRefreshToken(?string $value): void {
        $this->refresh_token = $value;
    }

    /**
     * Sets the token property value. The token property
     * @param string|null $value Value to set for the token property.
    */
    public function setToken(?string $value): void {
        $this->token = $value;
    }

}
