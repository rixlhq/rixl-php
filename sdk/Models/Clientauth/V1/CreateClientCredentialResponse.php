<?php

namespace Rixl\Sdk\Models\Clientauth\V1;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class CreateClientCredentialResponse implements Parsable 
{
    /**
     * @var string|null $client_secret The client_secret property
    */
    private ?string $client_secret = null;
    
    /**
     * @var ClientCredential|null $credential The credential property
    */
    private ?ClientCredential $credential = null;
    
    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return CreateClientCredentialResponse
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): CreateClientCredentialResponse {
        return new CreateClientCredentialResponse();
    }

    /**
     * Gets the client_secret property value. The client_secret property
     * @return string|null
    */
    public function getClientSecret(): ?string {
        return $this->client_secret;
    }

    /**
     * Gets the credential property value. The credential property
     * @return ClientCredential|null
    */
    public function getCredential(): ?ClientCredential {
        return $this->credential;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'client_secret' => fn(ParseNode $n) => $o->setClientSecret($n->getStringValue()),
            'credential' => fn(ParseNode $n) => $o->setCredential($n->getObjectValue([ClientCredential::class, 'createFromDiscriminatorValue'])),
        ];
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('client_secret', $this->getClientSecret());
        $writer->writeObjectValue('credential', $this->getCredential());
    }

    /**
     * Sets the client_secret property value. The client_secret property
     * @param string|null $value Value to set for the client_secret property.
    */
    public function setClientSecret(?string $value): void {
        $this->client_secret = $value;
    }

    /**
     * Sets the credential property value. The credential property
     * @param ClientCredential|null $value Value to set for the credential property.
    */
    public function setCredential(?ClientCredential $value): void {
        $this->credential = $value;
    }

}
