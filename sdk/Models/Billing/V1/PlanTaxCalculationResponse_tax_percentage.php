<?php

namespace Rixl\Sdk\Models\Billing\V1;

use Microsoft\Kiota\Abstractions\Serialization\ComposedTypeWrapper;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

/**
 * Composed type wrapper for classes float, string
*/
class PlanTaxCalculationResponse_tax_percentage implements ComposedTypeWrapper, Parsable 
{
    /**
     * @var float|null $double Composed type representation for type float
    */
    private ?float $double = null;
    
    /**
     * @var string|null $string Composed type representation for type string
    */
    private ?string $string = null;
    
    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return PlanTaxCalculationResponse_tax_percentage
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): PlanTaxCalculationResponse_tax_percentage {
        $result = new PlanTaxCalculationResponse_tax_percentage();
        if ($parseNode->getFloatValue() !== null) {
            $finalValue = $parseNode->getFloatValue();
            $result->setDouble($finalValue);
        } else if ($parseNode->getStringValue() !== null) {
            $finalValue = $parseNode->getStringValue();
            $result->setString($finalValue);
        }
        return $result;
    }

    /**
     * Gets the double property value. Composed type representation for type float
     * @return float|null
    */
    public function getDouble(): ?float {
        return $this->double;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        return [];
    }

    /**
     * Gets the string property value. Composed type representation for type string
     * @return string|null
    */
    public function getString(): ?string {
        return $this->string;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        if ($this->getDouble() !== null) {
            $writer->writeFloatValue(null, $this->getDouble());
        } else if ($this->getString() !== null) {
            $writer->writeStringValue(null, $this->getString());
        }
    }

    /**
     * Sets the double property value. Composed type representation for type float
     * @param float|null $value Value to set for the double property.
    */
    public function setDouble(?float $value): void {
        $this->double = $value;
    }

    /**
     * Sets the string property value. Composed type representation for type string
     * @param string|null $value Value to set for the string property.
    */
    public function setString(?string $value): void {
        $this->string = $value;
    }

}
