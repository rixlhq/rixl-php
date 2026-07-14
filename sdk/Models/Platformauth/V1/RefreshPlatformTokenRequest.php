<?php

namespace Rixl\Sdk\Models\Platformauth\V1;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class RefreshPlatformTokenRequest implements Parsable 
{
    /**
     * @var string|null $refreshToken The refreshToken property
    */
    private ?string $refreshToken = null;
    
    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return RefreshPlatformTokenRequest
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): RefreshPlatformTokenRequest {
        return new RefreshPlatformTokenRequest();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'refreshToken' => fn(ParseNode $n) => $o->setRefreshToken($n->getStringValue()),
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
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('refreshToken', $this->getRefreshToken());
    }

    /**
     * Sets the refreshToken property value. The refreshToken property
     * @param string|null $value Value to set for the refreshToken property.
    */
    public function setRefreshToken(?string $value): void {
        $this->refreshToken = $value;
    }

}
