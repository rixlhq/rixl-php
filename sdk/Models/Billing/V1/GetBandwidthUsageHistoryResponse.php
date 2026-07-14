<?php

namespace Rixl\Sdk\Models\Billing\V1;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class GetBandwidthUsageHistoryResponse implements Parsable 
{
    /**
     * @var int|null $total The total property
    */
    private ?int $total = null;
    
    /**
     * @var array<BandwidthUsage>|null $usages The usages property
    */
    private ?array $usages = null;
    
    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return GetBandwidthUsageHistoryResponse
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): GetBandwidthUsageHistoryResponse {
        return new GetBandwidthUsageHistoryResponse();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'total' => fn(ParseNode $n) => $o->setTotal($n->getIntegerValue()),
            'usages' => fn(ParseNode $n) => $o->setUsages($n->getCollectionOfObjectValues([BandwidthUsage::class, 'createFromDiscriminatorValue'])),
        ];
    }

    /**
     * Gets the total property value. The total property
     * @return int|null
    */
    public function getTotal(): ?int {
        return $this->total;
    }

    /**
     * Gets the usages property value. The usages property
     * @return array<BandwidthUsage>|null
    */
    public function getUsages(): ?array {
        return $this->usages;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeIntegerValue('total', $this->getTotal());
        $writer->writeCollectionOfObjectValues('usages', $this->getUsages());
    }

    /**
     * Sets the total property value. The total property
     * @param int|null $value Value to set for the total property.
    */
    public function setTotal(?int $value): void {
        $this->total = $value;
    }

    /**
     * Sets the usages property value. The usages property
     * @param array<BandwidthUsage>|null $value Value to set for the usages property.
    */
    public function setUsages(?array $value): void {
        $this->usages = $value;
    }

}
