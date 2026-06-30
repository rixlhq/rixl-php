<?php

namespace Rixl\Sdk\Models\Gateway;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class TaxLineItemBody implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var int|null $amount The amount property
    */
    private ?int $amount = null;
    
    /**
     * @var string|null $reference The reference property
    */
    private ?string $reference = null;
    
    /**
     * @var string|null $tax_code The tax_code property
    */
    private ?string $tax_code = null;
    
    /**
     * Instantiates a new TaxLineItemBody and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return TaxLineItemBody
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): TaxLineItemBody {
        return new TaxLineItemBody();
    }

    /**
     * Gets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        return $this->additionalData;
    }

    /**
     * Gets the amount property value. The amount property
     * @return int|null
    */
    public function getAmount(): ?int {
        return $this->amount;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'amount' => fn(ParseNode $n) => $o->setAmount($n->getIntegerValue()),
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
        $writer->writeIntegerValue('amount', $this->getAmount());
        $writer->writeStringValue('reference', $this->getReference());
        $writer->writeStringValue('tax_code', $this->getTaxCode());
        $writer->writeAdditionalData($this->getAdditionalData());
    }

    /**
     * Sets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @param array<string,mixed> $value Value to set for the AdditionalData property.
    */
    public function setAdditionalData(?array $value): void {
        $this->additionalData = $value;
    }

    /**
     * Sets the amount property value. The amount property
     * @param int|null $value Value to set for the amount property.
    */
    public function setAmount(?int $value): void {
        $this->amount = $value;
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
