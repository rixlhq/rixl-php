<?php

namespace Rixl\Sdk\Models\Billing\V1;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class Plan implements Parsable 
{
    /**
     * @var string|null $currency The currency property
    */
    private ?string $currency = null;
    
    /**
     * @var string|null $description The description property
    */
    private ?string $description = null;
    
    /**
     * @var string|null $id The id property
    */
    private ?string $id = null;
    
    /**
     * @var string|null $interval The interval property
    */
    private ?string $interval = null;
    
    /**
     * @var int|null $intervalCount The intervalCount property
    */
    private ?int $intervalCount = null;
    
    /**
     * @var string|null $name The name property
    */
    private ?string $name = null;
    
    /**
     * @var PlanType|null $planType The planType property
    */
    private ?PlanType $planType = null;
    
    /**
     * @var string|null $price The price property
    */
    private ?string $price = null;
    
    /**
     * @var int|null $sortOrder The sortOrder property
    */
    private ?int $sortOrder = null;
    
    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return Plan
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): Plan {
        return new Plan();
    }

    /**
     * Gets the currency property value. The currency property
     * @return string|null
    */
    public function getCurrency(): ?string {
        return $this->currency;
    }

    /**
     * Gets the description property value. The description property
     * @return string|null
    */
    public function getDescription(): ?string {
        return $this->description;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'currency' => fn(ParseNode $n) => $o->setCurrency($n->getStringValue()),
            'description' => fn(ParseNode $n) => $o->setDescription($n->getStringValue()),
            'id' => fn(ParseNode $n) => $o->setId($n->getStringValue()),
            'interval' => fn(ParseNode $n) => $o->setInterval($n->getStringValue()),
            'intervalCount' => fn(ParseNode $n) => $o->setIntervalCount($n->getIntegerValue()),
            'name' => fn(ParseNode $n) => $o->setName($n->getStringValue()),
            'planType' => fn(ParseNode $n) => $o->setPlanType($n->getEnumValue(PlanType::class)),
            'price' => fn(ParseNode $n) => $o->setPrice($n->getStringValue()),
            'sortOrder' => fn(ParseNode $n) => $o->setSortOrder($n->getIntegerValue()),
        ];
    }

    /**
     * Gets the id property value. The id property
     * @return string|null
    */
    public function getId(): ?string {
        return $this->id;
    }

    /**
     * Gets the interval property value. The interval property
     * @return string|null
    */
    public function getInterval(): ?string {
        return $this->interval;
    }

    /**
     * Gets the intervalCount property value. The intervalCount property
     * @return int|null
    */
    public function getIntervalCount(): ?int {
        return $this->intervalCount;
    }

    /**
     * Gets the name property value. The name property
     * @return string|null
    */
    public function getName(): ?string {
        return $this->name;
    }

    /**
     * Gets the planType property value. The planType property
     * @return PlanType|null
    */
    public function getPlanType(): ?PlanType {
        return $this->planType;
    }

    /**
     * Gets the price property value. The price property
     * @return string|null
    */
    public function getPrice(): ?string {
        return $this->price;
    }

    /**
     * Gets the sortOrder property value. The sortOrder property
     * @return int|null
    */
    public function getSortOrder(): ?int {
        return $this->sortOrder;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('currency', $this->getCurrency());
        $writer->writeStringValue('description', $this->getDescription());
        $writer->writeStringValue('id', $this->getId());
        $writer->writeStringValue('interval', $this->getInterval());
        $writer->writeIntegerValue('intervalCount', $this->getIntervalCount());
        $writer->writeStringValue('name', $this->getName());
        $writer->writeEnumValue('planType', $this->getPlanType());
        $writer->writeStringValue('price', $this->getPrice());
        $writer->writeIntegerValue('sortOrder', $this->getSortOrder());
    }

    /**
     * Sets the currency property value. The currency property
     * @param string|null $value Value to set for the currency property.
    */
    public function setCurrency(?string $value): void {
        $this->currency = $value;
    }

    /**
     * Sets the description property value. The description property
     * @param string|null $value Value to set for the description property.
    */
    public function setDescription(?string $value): void {
        $this->description = $value;
    }

    /**
     * Sets the id property value. The id property
     * @param string|null $value Value to set for the id property.
    */
    public function setId(?string $value): void {
        $this->id = $value;
    }

    /**
     * Sets the interval property value. The interval property
     * @param string|null $value Value to set for the interval property.
    */
    public function setInterval(?string $value): void {
        $this->interval = $value;
    }

    /**
     * Sets the intervalCount property value. The intervalCount property
     * @param int|null $value Value to set for the intervalCount property.
    */
    public function setIntervalCount(?int $value): void {
        $this->intervalCount = $value;
    }

    /**
     * Sets the name property value. The name property
     * @param string|null $value Value to set for the name property.
    */
    public function setName(?string $value): void {
        $this->name = $value;
    }

    /**
     * Sets the planType property value. The planType property
     * @param PlanType|null $value Value to set for the planType property.
    */
    public function setPlanType(?PlanType $value): void {
        $this->planType = $value;
    }

    /**
     * Sets the price property value. The price property
     * @param string|null $value Value to set for the price property.
    */
    public function setPrice(?string $value): void {
        $this->price = $value;
    }

    /**
     * Sets the sortOrder property value. The sortOrder property
     * @param int|null $value Value to set for the sortOrder property.
    */
    public function setSortOrder(?int $value): void {
        $this->sortOrder = $value;
    }

}
