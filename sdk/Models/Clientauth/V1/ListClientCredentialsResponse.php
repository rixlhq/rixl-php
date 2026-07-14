<?php

namespace Rixl\Sdk\Models\Clientauth\V1;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class ListClientCredentialsResponse implements Parsable 
{
    /**
     * @var array<ClientCredential>|null $credentials The credentials property
    */
    private ?array $credentials = null;
    
    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return ListClientCredentialsResponse
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): ListClientCredentialsResponse {
        return new ListClientCredentialsResponse();
    }

    /**
     * Gets the credentials property value. The credentials property
     * @return array<ClientCredential>|null
    */
    public function getCredentials(): ?array {
        return $this->credentials;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'credentials' => fn(ParseNode $n) => $o->setCredentials($n->getCollectionOfObjectValues([ClientCredential::class, 'createFromDiscriminatorValue'])),
        ];
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeCollectionOfObjectValues('credentials', $this->getCredentials());
    }

    /**
     * Sets the credentials property value. The credentials property
     * @param array<ClientCredential>|null $value Value to set for the credentials property.
    */
    public function setCredentials(?array $value): void {
        $this->credentials = $value;
    }

}
