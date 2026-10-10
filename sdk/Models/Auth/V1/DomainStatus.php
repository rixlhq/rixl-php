<?php

namespace Rixl\Sdk\Models\Auth\V1;

use Microsoft\Kiota\Abstractions\Serialization\ComposedTypeWrapper;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\ParseNodeHelper;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

/**
 * Composed type wrapper for classes DomainStatusMember1, DomainStatusMember2
*/
class DomainStatus implements ComposedTypeWrapper, Parsable 
{
    /**
     * @var DomainStatusMember1|null $domainStatusMember1 Composed type representation for type DomainStatusMember1
    */
    private ?DomainStatusMember1 $domainStatusMember1 = null;
    
    /**
     * @var DomainStatusMember2|null $domainStatusMember2 Composed type representation for type DomainStatusMember2
    */
    private ?DomainStatusMember2 $domainStatusMember2 = null;
    
    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return DomainStatus
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): DomainStatus {
        $result = new DomainStatus();
        $result->setDomainStatusMember1(new DomainStatusMember1());
        $result->setDomainStatusMember2(new DomainStatusMember2());
        return $result;
    }

    /**
     * Gets the DomainStatusMember1 property value. Composed type representation for type DomainStatusMember1
     * @return DomainStatusMember1|null
    */
    public function getDomainStatusMember1(): ?DomainStatusMember1 {
        return $this->domainStatusMember1;
    }

    /**
     * Gets the DomainStatusMember2 property value. Composed type representation for type DomainStatusMember2
     * @return DomainStatusMember2|null
    */
    public function getDomainStatusMember2(): ?DomainStatusMember2 {
        return $this->domainStatusMember2;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        if ($this->getDomainStatusMember1() !== null || $this->getDomainStatusMember2() !== null) {
            return ParseNodeHelper::mergeDeserializersForIntersectionWrapper($this->getDomainStatusMember1(), $this->getDomainStatusMember2());
        }
        return [];
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeObjectValue(null, $this->getDomainStatusMember1(), $this->getDomainStatusMember2());
    }

    /**
     * Sets the DomainStatusMember1 property value. Composed type representation for type DomainStatusMember1
     * @param DomainStatusMember1|null $value Value to set for the DomainStatusMember1 property.
    */
    public function setDomainStatusMember1(?DomainStatusMember1 $value): void {
        $this->domainStatusMember1 = $value;
    }

    /**
     * Sets the DomainStatusMember2 property value. Composed type representation for type DomainStatusMember2
     * @param DomainStatusMember2|null $value Value to set for the DomainStatusMember2 property.
    */
    public function setDomainStatusMember2(?DomainStatusMember2 $value): void {
        $this->domainStatusMember2 = $value;
    }

}
