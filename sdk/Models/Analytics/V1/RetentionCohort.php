<?php

namespace Rixl\Sdk\Models\Analytics\V1;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

class RetentionCohort implements Parsable 
{
    /**
     * @var string|null $cohortDate The cohortDate property
    */
    private ?string $cohortDate = null;
    
    /**
     * @var int|null $cohortSize The cohortSize property
    */
    private ?int $cohortSize = null;
    
    /**
     * @var array<float>|null $retentionData The retentionData property
    */
    private ?array $retentionData = null;
    
    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return RetentionCohort
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): RetentionCohort {
        return new RetentionCohort();
    }

    /**
     * Gets the cohortDate property value. The cohortDate property
     * @return string|null
    */
    public function getCohortDate(): ?string {
        return $this->cohortDate;
    }

    /**
     * Gets the cohortSize property value. The cohortSize property
     * @return int|null
    */
    public function getCohortSize(): ?int {
        return $this->cohortSize;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'cohortDate' => fn(ParseNode $n) => $o->setCohortDate($n->getStringValue()),
            'cohortSize' => fn(ParseNode $n) => $o->setCohortSize($n->getIntegerValue()),
            'retentionData' => function (ParseNode $n) {
                $val = $n->getCollectionOfPrimitiveValues();
                if (is_array($val)) {
                    TypeUtils::validateCollectionValues($val, 'float');
                }
                /** @var array<float>|null $val */
                $this->setRetentionData($val);
            },
        ];
    }

    /**
     * Gets the retentionData property value. The retentionData property
     * @return array<float>|null
    */
    public function getRetentionData(): ?array {
        return $this->retentionData;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('cohortDate', $this->getCohortDate());
        $writer->writeIntegerValue('cohortSize', $this->getCohortSize());
        $writer->writeCollectionOfPrimitiveValues('retentionData', $this->getRetentionData());
    }

    /**
     * Sets the cohortDate property value. The cohortDate property
     * @param string|null $value Value to set for the cohortDate property.
    */
    public function setCohortDate(?string $value): void {
        $this->cohortDate = $value;
    }

    /**
     * Sets the cohortSize property value. The cohortSize property
     * @param int|null $value Value to set for the cohortSize property.
    */
    public function setCohortSize(?int $value): void {
        $this->cohortSize = $value;
    }

    /**
     * Sets the retentionData property value. The retentionData property
     * @param array<float>|null $value Value to set for the retentionData property.
    */
    public function setRetentionData(?array $value): void {
        $this->retentionData = $value;
    }

}
