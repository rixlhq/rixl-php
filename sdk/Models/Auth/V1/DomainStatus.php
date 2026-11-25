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
     * @var PendingDomain|null $pending The pending property
    */
    private ?PendingDomain $pending = null;
    
    /**
     * @var bool|null $suggest_join The suggest_join property
    */
    private ?bool $suggest_join = null;
    
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
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'pending' => fn(ParseNode $n) => $o->setPending($n->getObjectValue([PendingDomain::class, 'createFromDiscriminatorValue'])),
            'suggest_join' => fn(ParseNode $n) => $o->setSuggestJoin($n->getBooleanValue()),
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
     * Gets the suggest_join property value. The suggest_join property
     * @return bool|null
    */
    public function getSuggestJoin(): ?bool {
        return $this->suggest_join;
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
        $writer->writeObjectValue('pending', $this->getPending());
        $writer->writeBooleanValue('suggest_join', $this->getSuggestJoin());
        $writer->writeObjectValue('verified', $this->getVerified());
    }

    /**
     * Sets the pending property value. The pending property
     * @param PendingDomain|null $value Value to set for the pending property.
    */
    public function setPending(?PendingDomain $value): void {
        $this->pending = $value;
    }

    /**
     * Sets the suggest_join property value. The suggest_join property
     * @param bool|null $value Value to set for the suggest_join property.
    */
    public function setSuggestJoin(?bool $value): void {
        $this->suggest_join = $value;
    }

    /**
     * Sets the verified property value. The verified property
     * @param VerifiedDomain|null $value Value to set for the verified property.
    */
    public function setVerified(?VerifiedDomain $value): void {
        $this->verified = $value;
    }

}
