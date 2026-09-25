<?php

namespace Rixl\Sdk\Billing\V1\Invoices\Item\Status;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Rixl\Sdk\Models\Billing\V1\InvoiceStatus;

class StatusPatchRequestBody implements Parsable 
{
    /**
     * @var string|null $invoice_id The invoice_id property
    */
    private ?string $invoice_id = null;
    
    /**
     * @var InvoiceStatus|null $status The status property
    */
    private ?InvoiceStatus $status = null;
    
    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return StatusPatchRequestBody
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): StatusPatchRequestBody {
        return new StatusPatchRequestBody();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'invoice_id' => fn(ParseNode $n) => $o->setInvoiceId($n->getStringValue()),
            'status' => fn(ParseNode $n) => $o->setStatus($n->getEnumValue(InvoiceStatus::class)),
        ];
    }

    /**
     * Gets the invoice_id property value. The invoice_id property
     * @return string|null
    */
    public function getInvoiceId(): ?string {
        return $this->invoice_id;
    }

    /**
     * Gets the status property value. The status property
     * @return InvoiceStatus|null
    */
    public function getStatus(): ?InvoiceStatus {
        return $this->status;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('invoice_id', $this->getInvoiceId());
        $writer->writeEnumValue('status', $this->getStatus());
    }

    /**
     * Sets the invoice_id property value. The invoice_id property
     * @param string|null $value Value to set for the invoice_id property.
    */
    public function setInvoiceId(?string $value): void {
        $this->invoice_id = $value;
    }

    /**
     * Sets the status property value. The status property
     * @param InvoiceStatus|null $value Value to set for the status property.
    */
    public function setStatus(?InvoiceStatus $value): void {
        $this->status = $value;
    }

}
