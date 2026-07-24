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
     * @var string|null $tax_code The tax_code property
    */
    private ?string $tax_code = null;
    
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
            'tax_code' => fn(ParseNode $n) => $o->setTaxCode($n->getStringValue()),
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
     * Gets the tax_code property value. The tax_code property
     * @return string|null
    */
    public function getTaxCode(): ?string {
        return $this->tax_code;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('reference', $this->getReference());
        $writer->writeStringValue('tax_code', $this->getTaxCode());
    }

    /**
     * Sets the reference property value. The reference property
     * @param string|null $value Value to set for the reference property.
    */
    public function setReference(?string $value): void {
        $this->reference = $value;
    }

    /**
     * Sets the tax_code property value. The tax_code property
     * @param string|null $value Value to set for the tax_code property.
    */
    public function setTaxCode(?string $value): void {
        $this->tax_code = $value;
    }

}
