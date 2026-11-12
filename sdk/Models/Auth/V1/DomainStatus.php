<?php

namespace Rixl\Sdk\Models\Auth\V1;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

/**
 * At most one of `verified`, `pending` may be set.
*/
class DomainStatus implements Parsable 
{
    /**
     * @var bool|null $auto_join The auto_join property
    */
    private ?bool $auto_join = null;
    
    /**
     * @var PendingDomain|null $pending The pending property
    */
    private ?PendingDomain $pending = null;
    
    /**
     * @var VerifiedDomain|null $verified The verified property
    */
    private ?VerifiedDomain $verified = null;
    
    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return DomainStatus
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): DomainStatus {
        return new DomainStatus();
    }

    /**
     * Gets the auto_join property value. The auto_join property
     * @return bool|null
    */
    public function getAutoJoin(): ?bool {
        return $this->auto_join;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'auto_join' => fn(ParseNode $n) => $o->setAutoJoin($n->getBooleanValue()),
            'pending' => fn(ParseNode $n) => $o->setPending($n->getObjectValue([PendingDomain::class, 'createFromDiscriminatorValue'])),
            'verified' => fn(ParseNode $n) => $o->setVerified($n->getObjectValue([VerifiedDomain::class, 'createFromDiscriminatorValue'])),
        ];
    }

    /**
     * Gets the pending property value. The pending property
     * @return PendingDomain|null
    */
    public function getPending(): ?PendingDomain {
        return $this->pending;
    }

    /**
     * Gets the verified property value. The verified property
     * @return VerifiedDomain|null
    */
    public function getVerified(): ?VerifiedDomain {
        return $this->verified;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeBooleanValue('auto_join', $this->getAutoJoin());
        $writer->writeObjectValue('pending', $this->getPending());
        $writer->writeObjectValue('verified', $this->getVerified());
    }

    /**
     * Sets the auto_join property value. The auto_join property
     * @param bool|null $value Value to set for the auto_join property.
    */
    public function setAutoJoin(?bool $value): void {
        $this->auto_join = $value;
    }

    /**
     * Sets the pending property value. The pending property
     * @param PendingDomain|null $value Value to set for the pending property.
    */
    public function setPending(?PendingDomain $value): void {
        $this->pending = $value;
    }

    /**
     * Sets the verified property value. The verified property
     * @param VerifiedDomain|null $value Value to set for the verified property.
    */
    public function setVerified(?VerifiedDomain $value): void {
        $this->verified = $value;
    }

}
