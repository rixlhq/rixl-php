<?php

namespace Rixl\Sdk\Models\Platformauth\V1;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class ExchangeAPIKeyRequest implements Parsable 
{
    /**
     * @var string|null $apiKey The apiKey property
    */
    private ?string $apiKey = null;
    
    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return ExchangeAPIKeyRequest
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): ExchangeAPIKeyRequest {
        return new ExchangeAPIKeyRequest();
    }

    /**
     * Gets the apiKey property value. The apiKey property
     * @return string|null
    */
    public function getApiKey(): ?string {
        return $this->apiKey;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'apiKey' => fn(ParseNode $n) => $o->setApiKey($n->getStringValue()),
        ];
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('apiKey', $this->getApiKey());
    }

    /**
     * Sets the apiKey property value. The apiKey property
     * @param string|null $value Value to set for the apiKey property.
    */
    public function setApiKey(?string $value): void {
        $this->apiKey = $value;
    }

}
