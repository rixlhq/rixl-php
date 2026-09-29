<?php

namespace Rixl\Sdk\Models\Analytics\V1;

use Microsoft\Kiota\Abstractions\Serialization\ComposedTypeWrapper;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\ParseNodeHelper;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

/**
 * Composed type wrapper for classes AnalyticsEventMember1, AnalyticsEventMember2, AnalyticsEventMember3, AnalyticsEventMember4, AnalyticsEventMember5
*/
class AnalyticsEvent implements ComposedTypeWrapper, Parsable 
{
    /**
     * @var AnalyticsEventMember1|null $analyticsEventMember1 Composed type representation for type AnalyticsEventMember1
    */
    private ?AnalyticsEventMember1 $analyticsEventMember1 = null;
    
    /**
     * @var AnalyticsEventMember2|null $analyticsEventMember2 Composed type representation for type AnalyticsEventMember2
    */
    private ?AnalyticsEventMember2 $analyticsEventMember2 = null;
    
    /**
     * @var AnalyticsEventMember3|null $analyticsEventMember3 Composed type representation for type AnalyticsEventMember3
    */
    private ?AnalyticsEventMember3 $analyticsEventMember3 = null;
    
    /**
     * @var AnalyticsEventMember4|null $analyticsEventMember4 Composed type representation for type AnalyticsEventMember4
    */
    private ?AnalyticsEventMember4 $analyticsEventMember4 = null;
    
    /**
     * @var AnalyticsEventMember5|null $analyticsEventMember5 Composed type representation for type AnalyticsEventMember5
    */
    private ?AnalyticsEventMember5 $analyticsEventMember5 = null;
    
    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return AnalyticsEvent
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): AnalyticsEvent {
        $result = new AnalyticsEvent();
        $result->setAnalyticsEventMember1(new AnalyticsEventMember1());
        $result->setAnalyticsEventMember2(new AnalyticsEventMember2());
        $result->setAnalyticsEventMember3(new AnalyticsEventMember3());
        $result->setAnalyticsEventMember4(new AnalyticsEventMember4());
        $result->setAnalyticsEventMember5(new AnalyticsEventMember5());
        return $result;
    }

    /**
     * Gets the AnalyticsEventMember1 property value. Composed type representation for type AnalyticsEventMember1
     * @return AnalyticsEventMember1|null
    */
    public function getAnalyticsEventMember1(): ?AnalyticsEventMember1 {
        return $this->analyticsEventMember1;
    }

    /**
     * Gets the AnalyticsEventMember2 property value. Composed type representation for type AnalyticsEventMember2
     * @return AnalyticsEventMember2|null
    */
    public function getAnalyticsEventMember2(): ?AnalyticsEventMember2 {
        return $this->analyticsEventMember2;
    }

    /**
     * Gets the AnalyticsEventMember3 property value. Composed type representation for type AnalyticsEventMember3
     * @return AnalyticsEventMember3|null
    */
    public function getAnalyticsEventMember3(): ?AnalyticsEventMember3 {
        return $this->analyticsEventMember3;
    }

    /**
     * Gets the AnalyticsEventMember4 property value. Composed type representation for type AnalyticsEventMember4
     * @return AnalyticsEventMember4|null
    */
    public function getAnalyticsEventMember4(): ?AnalyticsEventMember4 {
        return $this->analyticsEventMember4;
    }

    /**
     * Gets the AnalyticsEventMember5 property value. Composed type representation for type AnalyticsEventMember5
     * @return AnalyticsEventMember5|null
    */
    public function getAnalyticsEventMember5(): ?AnalyticsEventMember5 {
        return $this->analyticsEventMember5;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        if ($this->getAnalyticsEventMember1() !== null || $this->getAnalyticsEventMember2() !== null || $this->getAnalyticsEventMember3() !== null || $this->getAnalyticsEventMember4() !== null || $this->getAnalyticsEventMember5() !== null) {
            return ParseNodeHelper::mergeDeserializersForIntersectionWrapper($this->getAnalyticsEventMember1(), $this->getAnalyticsEventMember2(), $this->getAnalyticsEventMember3(), $this->getAnalyticsEventMember4(), $this->getAnalyticsEventMember5());
        }
        return [];
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeObjectValue(null, $this->getAnalyticsEventMember1(), $this->getAnalyticsEventMember2(), $this->getAnalyticsEventMember3(), $this->getAnalyticsEventMember4(), $this->getAnalyticsEventMember5());
    }

    /**
     * Sets the AnalyticsEventMember1 property value. Composed type representation for type AnalyticsEventMember1
     * @param AnalyticsEventMember1|null $value Value to set for the AnalyticsEventMember1 property.
    */
    public function setAnalyticsEventMember1(?AnalyticsEventMember1 $value): void {
        $this->analyticsEventMember1 = $value;
    }

    /**
     * Sets the AnalyticsEventMember2 property value. Composed type representation for type AnalyticsEventMember2
     * @param AnalyticsEventMember2|null $value Value to set for the AnalyticsEventMember2 property.
    */
    public function setAnalyticsEventMember2(?AnalyticsEventMember2 $value): void {
        $this->analyticsEventMember2 = $value;
    }

    /**
     * Sets the AnalyticsEventMember3 property value. Composed type representation for type AnalyticsEventMember3
     * @param AnalyticsEventMember3|null $value Value to set for the AnalyticsEventMember3 property.
    */
    public function setAnalyticsEventMember3(?AnalyticsEventMember3 $value): void {
        $this->analyticsEventMember3 = $value;
    }

    /**
     * Sets the AnalyticsEventMember4 property value. Composed type representation for type AnalyticsEventMember4
     * @param AnalyticsEventMember4|null $value Value to set for the AnalyticsEventMember4 property.
    */
    public function setAnalyticsEventMember4(?AnalyticsEventMember4 $value): void {
        $this->analyticsEventMember4 = $value;
    }

    /**
     * Sets the AnalyticsEventMember5 property value. Composed type representation for type AnalyticsEventMember5
     * @param AnalyticsEventMember5|null $value Value to set for the AnalyticsEventMember5 property.
    */
    public function setAnalyticsEventMember5(?AnalyticsEventMember5 $value): void {
        $this->analyticsEventMember5 = $value;
    }

}
