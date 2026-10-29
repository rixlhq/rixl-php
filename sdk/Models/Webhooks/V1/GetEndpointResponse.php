<?php

namespace Rixl\Sdk\Models\Webhooks\V1;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class GetEndpointResponse implements Parsable 
{
    /**
     * @var WebhookEndpoint|null $endpoint The endpoint property
    */
    private ?WebhookEndpoint $endpoint = null;
    
    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return GetEndpointResponse
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): GetEndpointResponse {
        return new GetEndpointResponse();
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
        ];
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeObjectValue('endpoint', $this->getEndpoint());
    }

    /**
     * Sets the endpoint property value. The endpoint property
     * @param WebhookEndpoint|null $value Value to set for the endpoint property.
    */
    public function setEndpoint(?WebhookEndpoint $value): void {
        $this->endpoint = $value;
    }

}
