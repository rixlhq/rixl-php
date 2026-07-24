<?php

namespace Rixl\Sdk\Models\Apikeys\V1;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class RotateApiKeyResponse implements Parsable 
{
    /**
     * @var ApiKey|null $api_key The api_key property
    */
    private ?ApiKey $api_key = null;
    
    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return RotateApiKeyResponse
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): RotateApiKeyResponse {
        return new RotateApiKeyResponse();
    }

    /**
     * Gets the api_key property value. The api_key property
     * @return ApiKey|null
    */
    public function getApiKey(): ?ApiKey {
        return $this->api_key;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'api_key' => fn(ParseNode $n) => $o->setApiKey($n->getObjectValue([ApiKey::class, 'createFromDiscriminatorValue'])),
        ];
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeObjectValue('api_key', $this->getApiKey());
    }

    /**
     * Sets the api_key property value. The api_key property
     * @param ApiKey|null $value Value to set for the api_key property.
    */
    public function setApiKey(?ApiKey $value): void {
        $this->api_key = $value;
    }

}
