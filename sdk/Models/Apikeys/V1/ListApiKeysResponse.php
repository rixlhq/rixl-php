<?php

namespace Rixl\Sdk\Models\Apikeys\V1;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class ListApiKeysResponse implements Parsable 
{
    /**
     * @var array<ApiKey>|null $api_keys The api_keys property
    */
    private ?array $api_keys = null;
    
    /**
     * @var int|null $total The total property
    */
    private ?int $total = null;
    
    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return ListApiKeysResponse
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): ListApiKeysResponse {
        return new ListApiKeysResponse();
    }

    /**
     * Gets the api_keys property value. The api_keys property
     * @return array<ApiKey>|null
    */
    public function getApiKeys(): ?array {
        return $this->api_keys;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'api_keys' => fn(ParseNode $n) => $o->setApiKeys($n->getCollectionOfObjectValues([ApiKey::class, 'createFromDiscriminatorValue'])),
            'total' => fn(ParseNode $n) => $o->setTotal($n->getIntegerValue()),
        ];
    }

    /**
     * Gets the total property value. The total property
     * @return int|null
    */
    public function getTotal(): ?int {
        return $this->total;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeCollectionOfObjectValues('api_keys', $this->getApiKeys());
        $writer->writeIntegerValue('total', $this->getTotal());
    }

    /**
     * Sets the api_keys property value. The api_keys property
     * @param array<ApiKey>|null $value Value to set for the api_keys property.
    */
    public function setApiKeys(?array $value): void {
        $this->api_keys = $value;
    }

    /**
     * Sets the total property value. The total property
     * @param int|null $value Value to set for the total property.
    */
    public function setTotal(?int $value): void {
        $this->total = $value;
    }

}
