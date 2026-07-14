<?php

namespace Rixl\Sdk\Models\Analytics\V1;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class RetentionAnalytics implements Parsable 
{
    /**
     * @var array<RetentionCohort>|null $cohorts The cohorts property
    */
    private ?array $cohorts = null;
    
    /**
     * @var string|null $period The period property
    */
    private ?string $period = null;
    
    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return RetentionAnalytics
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): RetentionAnalytics {
        return new RetentionAnalytics();
    }

    /**
     * Gets the cohorts property value. The cohorts property
     * @return array<RetentionCohort>|null
    */
    public function getCohorts(): ?array {
        return $this->cohorts;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'cohorts' => fn(ParseNode $n) => $o->setCohorts($n->getCollectionOfObjectValues([RetentionCohort::class, 'createFromDiscriminatorValue'])),
            'period' => fn(ParseNode $n) => $o->setPeriod($n->getStringValue()),
        ];
    }

    /**
     * Gets the period property value. The period property
     * @return string|null
    */
    public function getPeriod(): ?string {
        return $this->period;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeCollectionOfObjectValues('cohorts', $this->getCohorts());
        $writer->writeStringValue('period', $this->getPeriod());
    }

    /**
     * Sets the cohorts property value. The cohorts property
     * @param array<RetentionCohort>|null $value Value to set for the cohorts property.
    */
    public function setCohorts(?array $value): void {
        $this->cohorts = $value;
    }

    /**
     * Sets the period property value. The period property
     * @param string|null $value Value to set for the period property.
    */
    public function setPeriod(?string $value): void {
        $this->period = $value;
    }

}
