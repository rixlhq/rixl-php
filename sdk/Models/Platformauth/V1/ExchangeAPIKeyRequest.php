<?php

namespace Rixl\Sdk\Models\Platformauth\V1;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class ExchangeAPIKeyRequest implements Parsable 
{
    /**
     * @var string|null $api_key The api_key property
    */
    private ?string $api_key = null;
    
    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return ExchangeAPIKeyRequest
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): ExchangeAPIKeyRequest {
        return new ExchangeAPIKeyRequest();
    }

    /**
     * Gets the api_key property value. The api_key property
     * @return string|null
    */
    public function getApiKey(): ?string {
        return $this->api_key;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'api_key' => fn(ParseNode $n) => $o->setApiKey($n->getStringValue()),
        ];
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('api_key', $this->getApiKey());
    }

    /**
     * Sets the api_key property value. The api_key property
     * @param string|null $value Value to set for the api_key property.
    */
    public function setApiKey(?string $value): void {
        $this->api_key = $value;
    }

}
