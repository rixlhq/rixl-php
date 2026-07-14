<?php

namespace Rixl\Sdk\Models\Apikeys\V1;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class CreateApiKeyResponse implements Parsable 
{
    /**
     * @var ApiKey|null $apiKey The apiKey property
    */
    private ?ApiKey $apiKey = null;
    
    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return CreateApiKeyResponse
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): CreateApiKeyResponse {
        return new CreateApiKeyResponse();
    }

    /**
     * Gets the apiKey property value. The apiKey property
     * @return ApiKey|null
    */
    public function getApiKey(): ?ApiKey {
        return $this->apiKey;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'apiKey' => fn(ParseNode $n) => $o->setApiKey($n->getObjectValue([ApiKey::class, 'createFromDiscriminatorValue'])),
        ];
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeObjectValue('apiKey', $this->getApiKey());
    }

    /**
     * Sets the apiKey property value. The apiKey property
     * @param ApiKey|null $value Value to set for the apiKey property.
    */
    public function setApiKey(?ApiKey $value): void {
        $this->apiKey = $value;
    }

}
