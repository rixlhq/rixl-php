<?php

namespace Rixl\Sdk\Models\Webhooks\V1;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class CreateEndpointResponse implements Parsable 
{
    /**
     * @var WebhookEndpoint|null $endpoint The endpoint property
    */
    private ?WebhookEndpoint $endpoint = null;
    
    /**
     * @var string|null $secret Signing secret in whsec_<base64> form. Returned only here.
    */
    private ?string $secret = null;
    
    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return CreateEndpointResponse
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): CreateEndpointResponse {
        return new CreateEndpointResponse();
    }

    /**
     * Gets the endpoint property value. The endpoint property
     * @return WebhookEndpoint|null
    */
    public function getEndpoint(): ?WebhookEndpoint {
        return $this->endpoint;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'endpoint' => fn(ParseNode $n) => $o->setEndpoint($n->getObjectValue([WebhookEndpoint::class, 'createFromDiscriminatorValue'])),
            'secret' => fn(ParseNode $n) => $o->setSecret($n->getStringValue()),
        ];
    }

    /**
     * Gets the secret property value. Signing secret in whsec_<base64> form. Returned only here.
     * @return string|null
    */
    public function getSecret(): ?string {
        return $this->secret;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeObjectValue('endpoint', $this->getEndpoint());
        $writer->writeStringValue('secret', $this->getSecret());
    }

    /**
     * Sets the endpoint property value. The endpoint property
     * @param WebhookEndpoint|null $value Value to set for the endpoint property.
    */
    public function setEndpoint(?WebhookEndpoint $value): void {
        $this->endpoint = $value;
    }

    /**
     * Sets the secret property value. Signing secret in whsec_<base64> form. Returned only here.
     * @param string|null $value Value to set for the secret property.
    */
    public function setSecret(?string $value): void {
        $this->secret = $value;
    }

}
