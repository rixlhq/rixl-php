<?php

namespace Rixl\Sdk\Models\Apikeys\V1;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class ListApiKeysResponse implements Parsable 
{
    /**
     * @var array<ApiKey>|null $apiKeys The apiKeys property
    */
    private ?array $apiKeys = null;
    
    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return ListApiKeysResponse
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): ListApiKeysResponse {
        return new ListApiKeysResponse();
    }

    /**
     * Gets the apiKeys property value. The apiKeys property
     * @return array<ApiKey>|null
    */
    public function getApiKeys(): ?array {
        return $this->apiKeys;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'apiKeys' => fn(ParseNode $n) => $o->setApiKeys($n->getCollectionOfObjectValues([ApiKey::class, 'createFromDiscriminatorValue'])),
        ];
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeCollectionOfObjectValues('apiKeys', $this->getApiKeys());
    }

    /**
     * Sets the apiKeys property value. The apiKeys property
     * @param array<ApiKey>|null $value Value to set for the apiKeys property.
    */
    public function setApiKeys(?array $value): void {
        $this->apiKeys = $value;
    }

}
