<?php

namespace Rixl\Sdk\Models\Billing\V1;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class TaxLineItem implements Parsable 
{
    /**
     * @var string|null $reference The reference property
    */
    private ?string $reference = null;
    
    /**
     * @var string|null $taxCode The taxCode property
    */
    private ?string $taxCode = null;
    
    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return TaxLineItem
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): TaxLineItem {
        return new TaxLineItem();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'reference' => fn(ParseNode $n) => $o->setReference($n->getStringValue()),
            'taxCode' => fn(ParseNode $n) => $o->setTaxCode($n->getStringValue()),
        ];
    }

    /**
     * Gets the reference property value. The reference property
     * @return string|null
    */
    public function getReference(): ?string {
        return $this->reference;
    }

    /**
     * Gets the taxCode property value. The taxCode property
     * @return string|null
    */
    public function getTaxCode(): ?string {
        return $this->taxCode;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('reference', $this->getReference());
        $writer->writeStringValue('taxCode', $this->getTaxCode());
    }

    /**
     * Sets the reference property value. The reference property
     * @param string|null $value Value to set for the reference property.
    */
    public function setReference(?string $value): void {
        $this->reference = $value;
    }

    /**
     * Sets the taxCode property value. The taxCode property
     * @param string|null $value Value to set for the taxCode property.
    */
    public function setTaxCode(?string $value): void {
        $this->taxCode = $value;
    }

}
