<?php

namespace Rixl\Sdk\Models\Gateway;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

/**
 * Provider token
*/
class ConnectProviderBody implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var ConnectProviderBody_provider|null $provider The provider property
    */
    private ?ConnectProviderBody_provider $provider = null;
    
    /**
     * @var string|null $token The token property
    */
    private ?string $token = null;
    
    /**
     * Instantiates a new ConnectProviderBody and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return ConnectProviderBody
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): ConnectProviderBody {
        return new ConnectProviderBody();
    }

    /**
     * Gets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        return $this->additionalData;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'provider' => fn(ParseNode $n) => $o->setProvider($n->getEnumValue(ConnectProviderBody_provider::class)),
            'token' => fn(ParseNode $n) => $o->setToken($n->getStringValue()),
        ];
    }

    /**
     * Gets the provider property value. The provider property
     * @return ConnectProviderBody_provider|null
    */
    public function getProvider(): ?ConnectProviderBody_provider {
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
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeEnumValue('provider', $this->getProvider());
        $writer->writeStringValue('token', $this->getToken());
        $writer->writeAdditionalData($this->getAdditionalData());
    }

    /**
     * Sets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @param array<string,mixed> $value Value to set for the AdditionalData property.
    */
    public function setAdditionalData(?array $value): void {
        $this->additionalData = $value;
    }

    /**
     * Sets the provider property value. The provider property
     * @param ConnectProviderBody_provider|null $value Value to set for the provider property.
    */
    public function setProvider(?ConnectProviderBody_provider $value): void {
        $this->provider = $value;
    }

    /**
     * Sets the token property value. The token property
     * @param string|null $value Value to set for the token property.
    */
    public function setToken(?string $value): void {
        $this->token = $value;
    }

}
