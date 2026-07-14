<?php

namespace Rixl\Sdk\Models\Analytics\V1;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class FunnelAnalytics implements Parsable 
{
    /**
     * @var float|null $averageTimeHours The averageTimeHours property
    */
    private ?float $averageTimeHours = null;
    
    /**
     * @var int|null $completedUsers The completedUsers property
    */
    private ?int $completedUsers = null;
    
    /**
     * @var float|null $completionRate The completionRate property
    */
    private ?float $completionRate = null;
    
    /**
     * @var array<FunnelStepResult>|null $steps The steps property
    */
    private ?array $steps = null;
    
    /**
     * @var int|null $totalUsers The totalUsers property
    */
    private ?int $totalUsers = null;
    
    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return FunnelAnalytics
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): FunnelAnalytics {
        return new FunnelAnalytics();
    }

    /**
     * Gets the averageTimeHours property value. The averageTimeHours property
     * @return float|null
    */
    public function getAverageTimeHours(): ?float {
        return $this->averageTimeHours;
    }

    /**
     * Gets the completedUsers property value. The completedUsers property
     * @return int|null
    */
    public function getCompletedUsers(): ?int {
        return $this->completedUsers;
    }

    /**
     * Gets the completionRate property value. The completionRate property
     * @return float|null
    */
    public function getCompletionRate(): ?float {
        return $this->completionRate;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'averageTimeHours' => fn(ParseNode $n) => $o->setAverageTimeHours($n->getFloatValue()),
            'completedUsers' => fn(ParseNode $n) => $o->setCompletedUsers($n->getIntegerValue()),
            'completionRate' => fn(ParseNode $n) => $o->setCompletionRate($n->getFloatValue()),
            'steps' => fn(ParseNode $n) => $o->setSteps($n->getCollectionOfObjectValues([FunnelStepResult::class, 'createFromDiscriminatorValue'])),
            'totalUsers' => fn(ParseNode $n) => $o->setTotalUsers($n->getIntegerValue()),
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
     * Gets the totalUsers property value. The totalUsers property
     * @return int|null
    */
    public function getTotalUsers(): ?int {
        return $this->totalUsers;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeFloatValue('averageTimeHours', $this->getAverageTimeHours());
        $writer->writeIntegerValue('completedUsers', $this->getCompletedUsers());
        $writer->writeFloatValue('completionRate', $this->getCompletionRate());
        $writer->writeCollectionOfObjectValues('steps', $this->getSteps());
        $writer->writeIntegerValue('totalUsers', $this->getTotalUsers());
    }

    /**
     * Sets the averageTimeHours property value. The averageTimeHours property
     * @param float|null $value Value to set for the averageTimeHours property.
    */
    public function setAverageTimeHours(?float $value): void {
        $this->averageTimeHours = $value;
    }

    /**
     * Sets the completedUsers property value. The completedUsers property
     * @param int|null $value Value to set for the completedUsers property.
    */
    public function setCompletedUsers(?int $value): void {
        $this->completedUsers = $value;
    }

    /**
     * Sets the completionRate property value. The completionRate property
     * @param float|null $value Value to set for the completionRate property.
    */
    public function setCompletionRate(?float $value): void {
        $this->completionRate = $value;
    }

    /**
     * Sets the steps property value. The steps property
     * @param array<FunnelStepResult>|null $value Value to set for the steps property.
    */
    public function setSteps(?array $value): void {
        $this->steps = $value;
    }

    /**
     * Sets the totalUsers property value. The totalUsers property
     * @param int|null $value Value to set for the totalUsers property.
    */
    public function setTotalUsers(?int $value): void {
        $this->totalUsers = $value;
    }

}
