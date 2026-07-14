<?php

namespace Rixl\Sdk\Models\Analytics\V1;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class DashboardStatsResponse implements Parsable 
{
    /**
     * @var array<DashboardPoint>|null $points The points property
    */
    private ?array $points = null;
    
    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return DashboardStatsResponse
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): DashboardStatsResponse {
        return new DashboardStatsResponse();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'points' => fn(ParseNode $n) => $o->setPoints($n->getCollectionOfObjectValues([DashboardPoint::class, 'createFromDiscriminatorValue'])),
        ];
    }

    /**
     * Gets the points property value. The points property
     * @return array<DashboardPoint>|null
    */
    public function getPoints(): ?array {
        return $this->points;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeCollectionOfObjectValues('points', $this->getPoints());
    }

    /**
     * Sets the points property value. The points property
     * @param array<DashboardPoint>|null $value Value to set for the points property.
    */
    public function setPoints(?array $value): void {
        $this->points = $value;
    }

}
