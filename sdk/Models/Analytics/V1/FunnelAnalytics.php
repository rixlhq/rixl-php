<?php

namespace Rixl\Sdk\Models\Analytics\V1;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class FunnelAnalytics implements Parsable 
{
    /**
     * @var float|null $average_time_hours The average_time_hours property
    */
    private ?float $average_time_hours = null;
    
    /**
     * @var int|null $completed_users The completed_users property
    */
    private ?int $completed_users = null;
    
    /**
     * @var float|null $completion_rate The completion_rate property
    */
    private ?float $completion_rate = null;
    
    /**
     * @var array<FunnelStepResult>|null $steps The steps property
    */
    private ?array $steps = null;
    
    /**
     * @var int|null $total_users The total_users property
    */
    private ?int $total_users = null;
    
    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return FunnelAnalytics
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): FunnelAnalytics {
        return new FunnelAnalytics();
    }

    /**
     * Gets the average_time_hours property value. The average_time_hours property
     * @return float|null
    */
    public function getAverageTimeHours(): ?float {
        return $this->average_time_hours;
    }

    /**
     * Gets the completed_users property value. The completed_users property
     * @return int|null
    */
    public function getCompletedUsers(): ?int {
        return $this->completed_users;
    }

    /**
     * Gets the completion_rate property value. The completion_rate property
     * @return float|null
    */
    public function getCompletionRate(): ?float {
        return $this->completion_rate;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'average_time_hours' => fn(ParseNode $n) => $o->setAverageTimeHours($n->getFloatValue()),
            'completed_users' => fn(ParseNode $n) => $o->setCompletedUsers($n->getIntegerValue()),
            'completion_rate' => fn(ParseNode $n) => $o->setCompletionRate($n->getFloatValue()),
            'steps' => fn(ParseNode $n) => $o->setSteps($n->getCollectionOfObjectValues([FunnelStepResult::class, 'createFromDiscriminatorValue'])),
            'total_users' => fn(ParseNode $n) => $o->setTotalUsers($n->getIntegerValue()),
        ];
    }

    /**
     * Gets the steps property value. The steps property
     * @return array<FunnelStepResult>|null
    */
    public function getSteps(): ?array {
        return $this->steps;
    }

    /**
     * Gets the total_users property value. The total_users property
     * @return int|null
    */
    public function getTotalUsers(): ?int {
        return $this->total_users;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeFloatValue('average_time_hours', $this->getAverageTimeHours());
        $writer->writeIntegerValue('completed_users', $this->getCompletedUsers());
        $writer->writeFloatValue('completion_rate', $this->getCompletionRate());
        $writer->writeCollectionOfObjectValues('steps', $this->getSteps());
        $writer->writeIntegerValue('total_users', $this->getTotalUsers());
    }

    /**
     * Sets the average_time_hours property value. The average_time_hours property
     * @param float|null $value Value to set for the average_time_hours property.
    */
    public function setAverageTimeHours(?float $value): void {
        $this->average_time_hours = $value;
    }

    /**
     * Sets the completed_users property value. The completed_users property
     * @param int|null $value Value to set for the completed_users property.
    */
    public function setCompletedUsers(?int $value): void {
        $this->completed_users = $value;
    }

    /**
     * Sets the completion_rate property value. The completion_rate property
     * @param float|null $value Value to set for the completion_rate property.
    */
    public function setCompletionRate(?float $value): void {
        $this->completion_rate = $value;
    }

    /**
     * Sets the steps property value. The steps property
     * @param array<FunnelStepResult>|null $value Value to set for the steps property.
    */
    public function setSteps(?array $value): void {
        $this->steps = $value;
    }

    /**
     * Sets the total_users property value. The total_users property
     * @param int|null $value Value to set for the total_users property.
    */
    public function setTotalUsers(?int $value): void {
        $this->total_users = $value;
    }

}
