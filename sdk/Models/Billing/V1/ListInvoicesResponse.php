<?php

namespace Rixl\Sdk\Models\Billing\V1;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class ListInvoicesResponse implements Parsable 
{
    /**
     * @var array<Invoice>|null $invoices The invoices property
    */
    private ?array $invoices = null;
    
    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return ListInvoicesResponse
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): ListInvoicesResponse {
        return new ListInvoicesResponse();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'invoices' => fn(ParseNode $n) => $o->setInvoices($n->getCollectionOfObjectValues([Invoice::class, 'createFromDiscriminatorValue'])),
        ];
    }

    /**
     * Gets the invoices property value. The invoices property
     * @return array<Invoice>|null
    */
    public function getInvoices(): ?array {
        return $this->invoices;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeCollectionOfObjectValues('invoices', $this->getInvoices());
    }

    /**
     * Sets the invoices property value. The invoices property
     * @param array<Invoice>|null $value Value to set for the invoices property.
    */
    public function setInvoices(?array $value): void {
        $this->invoices = $value;
    }

}
