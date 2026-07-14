<?php

namespace Rixl\Sdk\Models\Auth\V1;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class ListPoliciesResponse implements Parsable 
{
    /**
     * @var array<Policy>|null $policies The policies property
    */
    private ?array $policies = null;
    
    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return ListPoliciesResponse
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): ListPoliciesResponse {
        return new ListPoliciesResponse();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'policies' => fn(ParseNode $n) => $o->setPolicies($n->getCollectionOfObjectValues([Policy::class, 'createFromDiscriminatorValue'])),
        ];
    }

    /**
     * Gets the policies property value. The policies property
     * @return array<Policy>|null
    */
    public function getPolicies(): ?array {
        return $this->policies;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeCollectionOfObjectValues('policies', $this->getPolicies());
    }

    /**
     * Sets the policies property value. The policies property
     * @param array<Policy>|null $value Value to set for the policies property.
    */
    public function setPolicies(?array $value): void {
        $this->policies = $value;
    }

}
