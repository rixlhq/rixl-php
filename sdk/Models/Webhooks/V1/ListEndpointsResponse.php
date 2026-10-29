<?php

namespace Rixl\Sdk\Models\Webhooks\V1;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class ListEndpointsResponse implements Parsable 
{
    /**
     * @var array<WebhookEndpoint>|null $endpoints The endpoints property
    */
    private ?array $endpoints = null;
    
    /**
     * @var int|null $limit The limit property
    */
    private ?int $limit = null;
    
    /**
     * @var int|null $offset The offset property
    */
    private ?int $offset = null;
    
    /**
     * @var string|null $total The total property
    */
    private ?string $total = null;
    
    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return ListEndpointsResponse
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): ListEndpointsResponse {
        return new ListEndpointsResponse();
    }

    /**
     * Gets the endpoints property value. The endpoints property
     * @return array<WebhookEndpoint>|null
    */
    public function getEndpoints(): ?array {
        return $this->endpoints;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'endpoints' => fn(ParseNode $n) => $o->setEndpoints($n->getCollectionOfObjectValues([WebhookEndpoint::class, 'createFromDiscriminatorValue'])),
            'limit' => fn(ParseNode $n) => $o->setLimit($n->getIntegerValue()),
            'offset' => fn(ParseNode $n) => $o->setOffset($n->getIntegerValue()),
            'total' => fn(ParseNode $n) => $o->setTotal($n->getStringValue()),
        ];
    }

    /**
     * Gets the limit property value. The limit property
     * @return int|null
    */
    public function getLimit(): ?int {
        return $this->limit;
    }

    /**
     * Gets the offset property value. The offset property
     * @return int|null
    */
    public function getOffset(): ?int {
        return $this->offset;
    }

    /**
     * Gets the total property value. The total property
     * @return string|null
    */
    public function getTotal(): ?string {
        return $this->total;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeCollectionOfObjectValues('endpoints', $this->getEndpoints());
        $writer->writeIntegerValue('limit', $this->getLimit());
        $writer->writeIntegerValue('offset', $this->getOffset());
        $writer->writeStringValue('total', $this->getTotal());
    }

    /**
     * Sets the endpoints property value. The endpoints property
     * @param array<WebhookEndpoint>|null $value Value to set for the endpoints property.
    */
    public function setEndpoints(?array $value): void {
        $this->endpoints = $value;
    }

    /**
     * Sets the limit property value. The limit property
     * @param int|null $value Value to set for the limit property.
    */
    public function setLimit(?int $value): void {
        $this->limit = $value;
    }

    /**
     * Sets the offset property value. The offset property
     * @param int|null $value Value to set for the offset property.
    */
    public function setOffset(?int $value): void {
        $this->offset = $value;
    }

    /**
     * Sets the total property value. The total property
     * @param string|null $value Value to set for the total property.
    */
    public function setTotal(?string $value): void {
        $this->total = $value;
    }

}
