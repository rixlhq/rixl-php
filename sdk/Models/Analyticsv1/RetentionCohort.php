<?php

namespace Rixl\Sdk\Models\Analyticsv1;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

class RetentionCohort implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var string|null $cohort_date The cohort_date property
    */
    private ?string $cohort_date = null;
    
    /**
     * @var int|null $cohort_size The cohort_size property
    */
    private ?int $cohort_size = null;
    
    /**
     * @var array<float>|null $retention_data The retention_data property
    */
    private ?array $retention_data = null;
    
    /**
     * Instantiates a new RetentionCohort and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return RetentionCohort
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): RetentionCohort {
        return new RetentionCohort();
    }

    /**
     * Gets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        return $this->additionalData;
    }

    /**
     * Gets the cohort_date property value. The cohort_date property
     * @return string|null
    */
    public function getCohortDate(): ?string {
        return $this->cohort_date;
    }

    /**
     * Gets the cohort_size property value. The cohort_size property
     * @return int|null
    */
    public function getCohortSize(): ?int {
        return $this->cohort_size;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'cohort_date' => fn(ParseNode $n) => $o->setCohortDate($n->getStringValue()),
            'cohort_size' => fn(ParseNode $n) => $o->setCohortSize($n->getIntegerValue()),
            'retention_data' => function (ParseNode $n) {
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
     * Gets the retention_data property value. The retention_data property
     * @return array<float>|null
    */
    public function getRetentionData(): ?array {
        return $this->retention_data;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('cohort_date', $this->getCohortDate());
        $writer->writeIntegerValue('cohort_size', $this->getCohortSize());
        $writer->writeCollectionOfPrimitiveValues('retention_data', $this->getRetentionData());
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
     * Sets the cohort_date property value. The cohort_date property
     * @param string|null $value Value to set for the cohort_date property.
    */
    public function setCohortDate(?string $value): void {
        $this->cohort_date = $value;
    }

    /**
     * Sets the cohort_size property value. The cohort_size property
     * @param int|null $value Value to set for the cohort_size property.
    */
    public function setCohortSize(?int $value): void {
        $this->cohort_size = $value;
    }

    /**
     * Sets the retention_data property value. The retention_data property
     * @param array<float>|null $value Value to set for the retention_data property.
    */
    public function setRetentionData(?array $value): void {
        $this->retention_data = $value;
    }

}
