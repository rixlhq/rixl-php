<?php

namespace Rixl\Sdk\Models\Analytics\V1;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class FunnelStepResult implements Parsable 
{
    /**
     * @var float|null $conversionRate The conversionRate property
    */
    private ?float $conversionRate = null;
    
    /**
     * @var float|null $dropoffRate The dropoffRate property
    */
    private ?float $dropoffRate = null;
    
    /**
     * @var string|null $stepName The stepName property
    */
    private ?string $stepName = null;
    
    /**
     * @var int|null $userCount The userCount property
    */
    private ?int $userCount = null;
    
    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return FunnelStepResult
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): FunnelStepResult {
        return new FunnelStepResult();
    }

    /**
     * Gets the conversionRate property value. The conversionRate property
     * @return float|null
    */
    public function getConversionRate(): ?float {
        return $this->conversionRate;
    }

    /**
     * Gets the dropoffRate property value. The dropoffRate property
     * @return float|null
    */
    public function getDropoffRate(): ?float {
        return $this->dropoffRate;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'conversionRate' => fn(ParseNode $n) => $o->setConversionRate($n->getFloatValue()),
            'dropoffRate' => fn(ParseNode $n) => $o->setDropoffRate($n->getFloatValue()),
            'stepName' => fn(ParseNode $n) => $o->setStepName($n->getStringValue()),
            'userCount' => fn(ParseNode $n) => $o->setUserCount($n->getIntegerValue()),
        ];
    }

    /**
     * Gets the stepName property value. The stepName property
     * @return string|null
    */
    public function getStepName(): ?string {
        return $this->stepName;
    }

    /**
     * Gets the userCount property value. The userCount property
     * @return int|null
    */
    public function getUserCount(): ?int {
        return $this->userCount;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeFloatValue('conversionRate', $this->getConversionRate());
        $writer->writeFloatValue('dropoffRate', $this->getDropoffRate());
        $writer->writeStringValue('stepName', $this->getStepName());
        $writer->writeIntegerValue('userCount', $this->getUserCount());
    }

    /**
     * Sets the conversionRate property value. The conversionRate property
     * @param float|null $value Value to set for the conversionRate property.
    */
    public function setConversionRate(?float $value): void {
        $this->conversionRate = $value;
    }

    /**
     * Sets the dropoffRate property value. The dropoffRate property
     * @param float|null $value Value to set for the dropoffRate property.
    */
    public function setDropoffRate(?float $value): void {
        $this->dropoffRate = $value;
    }

    /**
     * Sets the stepName property value. The stepName property
     * @param string|null $value Value to set for the stepName property.
    */
    public function setStepName(?string $value): void {
        $this->stepName = $value;
    }

    /**
     * Sets the userCount property value. The userCount property
     * @param int|null $value Value to set for the userCount property.
    */
    public function setUserCount(?int $value): void {
        $this->userCount = $value;
    }

}
