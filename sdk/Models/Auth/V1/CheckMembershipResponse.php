<?php

namespace Rixl\Sdk\Models\Auth\V1;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class CheckMembershipResponse implements Parsable 
{
    /**
     * @var bool|null $is_internal_org The is_internal_org property
    */
    private ?bool $is_internal_org = null;
    
    /**
     * @var bool|null $is_member The is_member property
    */
    private ?bool $is_member = null;
    
    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return CheckMembershipResponse
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): CheckMembershipResponse {
        return new CheckMembershipResponse();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'is_internal_org' => fn(ParseNode $n) => $o->setIsInternalOrg($n->getBooleanValue()),
            'is_member' => fn(ParseNode $n) => $o->setIsMember($n->getBooleanValue()),
        ];
    }

    /**
     * Gets the is_internal_org property value. The is_internal_org property
     * @return bool|null
    */
    public function getIsInternalOrg(): ?bool {
        return $this->is_internal_org;
    }

    /**
     * Gets the is_member property value. The is_member property
     * @return bool|null
    */
    public function getIsMember(): ?bool {
        return $this->is_member;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeBooleanValue('is_internal_org', $this->getIsInternalOrg());
        $writer->writeBooleanValue('is_member', $this->getIsMember());
    }

    /**
     * Sets the is_internal_org property value. The is_internal_org property
     * @param bool|null $value Value to set for the is_internal_org property.
    */
    public function setIsInternalOrg(?bool $value): void {
        $this->is_internal_org = $value;
    }

    /**
     * Sets the is_member property value. The is_member property
     * @param bool|null $value Value to set for the is_member property.
    */
    public function setIsMember(?bool $value): void {
        $this->is_member = $value;
    }

}
