<?php

namespace Rixl\Sdk\Auth\V1\MembershipApplications\Item\State;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Rixl\Sdk\Models\Auth\V1\MembershipApplicationState;

class StatePatchRequestBody implements Parsable 
{
    /**
     * @var string|null $org_id The org_id property
    */
    private ?string $org_id = null;
    
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
            'org_id' => fn(ParseNode $n) => $o->setOrgId($n->getStringValue()),
            'state' => fn(ParseNode $n) => $o->setState($n->getEnumValue(MembershipApplicationState::class)),
        ];
    }

    /**
     * Gets the org_id property value. The org_id property
     * @return string|null
    */
    public function getOrgId(): ?string {
        return $this->org_id;
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
        $writer->writeStringValue('org_id', $this->getOrgId());
        $writer->writeEnumValue('state', $this->getState());
    }

    /**
     * Sets the org_id property value. The org_id property
     * @param string|null $value Value to set for the org_id property.
    */
    public function setOrgId(?string $value): void {
        $this->org_id = $value;
    }

    /**
     * Sets the state property value. The state property
     * @param MembershipApplicationState|null $value Value to set for the state property.
    */
    public function setState(?MembershipApplicationState $value): void {
        $this->state = $value;
    }

}
