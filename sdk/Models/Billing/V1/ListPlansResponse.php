<?php

namespace Rixl\Sdk\Models\Billing\V1;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class ListPlansResponse implements Parsable 
{
    /**
     * @var array<Plan>|null $plans The plans property
    */
    private ?array $plans = null;
    
    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return ListPlansResponse
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): ListPlansResponse {
        return new ListPlansResponse();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'plans' => fn(ParseNode $n) => $o->setPlans($n->getCollectionOfObjectValues([Plan::class, 'createFromDiscriminatorValue'])),
        ];
    }

    /**
     * Gets the plans property value. The plans property
     * @return array<Plan>|null
    */
    public function getPlans(): ?array {
        return $this->plans;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeCollectionOfObjectValues('plans', $this->getPlans());
    }

    /**
     * Sets the plans property value. The plans property
     * @param array<Plan>|null $value Value to set for the plans property.
    */
    public function setPlans(?array $value): void {
        $this->plans = $value;
    }

}
