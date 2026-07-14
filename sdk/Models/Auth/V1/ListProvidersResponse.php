<?php

namespace Rixl\Sdk\Models\Auth\V1;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class ListProvidersResponse implements Parsable 
{
    /**
     * @var array<ConnectedProvider>|null $providers The providers property
    */
    private ?array $providers = null;
    
    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return ListProvidersResponse
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): ListProvidersResponse {
        return new ListProvidersResponse();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'providers' => fn(ParseNode $n) => $o->setProviders($n->getCollectionOfObjectValues([ConnectedProvider::class, 'createFromDiscriminatorValue'])),
        ];
    }

    /**
     * Gets the providers property value. The providers property
     * @return array<ConnectedProvider>|null
    */
    public function getProviders(): ?array {
        return $this->providers;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeCollectionOfObjectValues('providers', $this->getProviders());
    }

    /**
     * Sets the providers property value. The providers property
     * @param array<ConnectedProvider>|null $value Value to set for the providers property.
    */
    public function setProviders(?array $value): void {
        $this->providers = $value;
    }

}
