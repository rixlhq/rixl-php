<?php

namespace Rixl\Sdk\Models\Analytics\V1;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class FunnelStepResult implements Parsable 
{
    /**
     * @var float|null $conversion_rate The conversion_rate property
    */
    private ?float $conversion_rate = null;
    
    /**
     * @var float|null $dropoff_rate The dropoff_rate property
    */
    private ?float $dropoff_rate = null;
    
    /**
     * @var string|null $step_name The step_name property
    */
    private ?string $step_name = null;
    
    /**
     * @var int|null $user_count The user_count property
    */
    private ?int $user_count = null;
    
    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return FunnelStepResult
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): FunnelStepResult {
        return new FunnelStepResult();
    }

    /**
     * Gets the conversion_rate property value. The conversion_rate property
     * @return float|null
    */
    public function getConversionRate(): ?float {
        return $this->conversion_rate;
    }

    /**
     * Gets the dropoff_rate property value. The dropoff_rate property
     * @return float|null
    */
    public function getDropoffRate(): ?float {
        return $this->dropoff_rate;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'conversion_rate' => fn(ParseNode $n) => $o->setConversionRate($n->getFloatValue()),
            'dropoff_rate' => fn(ParseNode $n) => $o->setDropoffRate($n->getFloatValue()),
            'step_name' => fn(ParseNode $n) => $o->setStepName($n->getStringValue()),
            'user_count' => fn(ParseNode $n) => $o->setUserCount($n->getIntegerValue()),
        ];
    }

    /**
     * Gets the step_name property value. The step_name property
     * @return string|null
    */
    public function getStepName(): ?string {
        return $this->step_name;
    }

    /**
     * Gets the user_count property value. The user_count property
     * @return int|null
    */
    public function getUserCount(): ?int {
        return $this->user_count;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeFloatValue('conversion_rate', $this->getConversionRate());
        $writer->writeFloatValue('dropoff_rate', $this->getDropoffRate());
        $writer->writeStringValue('step_name', $this->getStepName());
        $writer->writeIntegerValue('user_count', $this->getUserCount());
    }

    /**
     * Sets the conversion_rate property value. The conversion_rate property
     * @param float|null $value Value to set for the conversion_rate property.
    */
    public function setConversionRate(?float $value): void {
        $this->conversion_rate = $value;
    }

    /**
     * Sets the dropoff_rate property value. The dropoff_rate property
     * @param float|null $value Value to set for the dropoff_rate property.
    */
    public function setDropoffRate(?float $value): void {
        $this->dropoff_rate = $value;
    }

    /**
     * Sets the step_name property value. The step_name property
     * @param string|null $value Value to set for the step_name property.
    */
    public function setStepName(?string $value): void {
        $this->step_name = $value;
    }

    /**
     * Sets the user_count property value. The user_count property
     * @param int|null $value Value to set for the user_count property.
    */
    public function setUserCount(?int $value): void {
        $this->user_count = $value;
    }

}
