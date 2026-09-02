<?php

namespace Rixl\Sdk\Auth\V1\Memberships\Item\State;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Rixl\Sdk\Models\Auth\V1\MembershipApplicationState;

class StatePatchRequestBody implements Parsable 
{
    /**
     * @var MembershipApplicationState|null $state The state property
    */
    private ?MembershipApplicationState $state = null;
    
    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return StatePatchRequestBody
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): StatePatchRequestBody {
        return new StatePatchRequestBody();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'state' => fn(ParseNode $n) => $o->setState($n->getEnumValue(MembershipApplicationState::class)),
        ];
    }

    /**
     * Gets the state property value. The state property
     * @return MembershipApplicationState|null
    */
    public function getState(): ?MembershipApplicationState {
        return $this->state;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeEnumValue('state', $this->getState());
    }

    /**
     * Sets the state property value. The state property
     * @param MembershipApplicationState|null $value Value to set for the state property.
    */
    public function setState(?MembershipApplicationState $value): void {
        $this->state = $value;
    }

}
