<?php

namespace Rixl\Sdk\Models\Webhooks\V1;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class ListEndpointAttemptsResponse implements Parsable 
{
    /**
     * @var array<WebhookAttempt>|null $attempts The attempts property
    */
    private ?array $attempts = null;
    
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
     * @return ListEndpointAttemptsResponse
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): ListEndpointAttemptsResponse {
        return new ListEndpointAttemptsResponse();
    }

    /**
     * Gets the attempts property value. The attempts property
     * @return array<WebhookAttempt>|null
    */
    public function getAttempts(): ?array {
        return $this->attempts;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'attempts' => fn(ParseNode $n) => $o->setAttempts($n->getCollectionOfObjectValues([WebhookAttempt::class, 'createFromDiscriminatorValue'])),
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
        $writer->writeCollectionOfObjectValues('attempts', $this->getAttempts());
        $writer->writeIntegerValue('limit', $this->getLimit());
        $writer->writeIntegerValue('offset', $this->getOffset());
        $writer->writeStringValue('total', $this->getTotal());
    }

    /**
     * Sets the attempts property value. The attempts property
     * @param array<WebhookAttempt>|null $value Value to set for the attempts property.
    */
    public function setAttempts(?array $value): void {
        $this->attempts = $value;
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
