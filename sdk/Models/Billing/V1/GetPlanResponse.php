<?php

namespace Rixl\Sdk\Models\Billing\V1;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Rixl\Sdk\Models\Google\Protobuf\Struct;

class GetPlanResponse implements Parsable 
{
    /**
     * @var bool|null $active The active property
    */
    private ?bool $active = null;
    
    /**
     * @var string|null $currency The currency property
    */
    private ?string $currency = null;
    
    /**
     * @var string|null $description The description property
    */
    private ?string $description = null;
    
    /**
     * @var Struct|null $features `Struct` represents a structured data value, consisting of fields which map to dynamically typed values. In some languages, `Struct` might be supported by a native representation. For example, in scripting languages like JS a struct is represented as an object. The details of that representation are described together with the proto support for the language. The JSON representation for `Struct` is JSON object.
    */
    private ?Struct $features = null;
    
    /**
     * @var string|null $id The id property
    */
    private ?string $id = null;
    
    /**
     * @var string|null $interval The interval property
    */
    private ?string $interval = null;
    
    /**
     * @var int|null $interval_count The interval_count property
    */
    private ?int $interval_count = null;
    
    /**
     * @var bool|null $is_public The is_public property
    */
    private ?bool $is_public = null;
    
    /**
     * @var string|null $name The name property
    */
    private ?string $name = null;
    
    /**
     * @var PlanType|null $plan_type The plan_type property
    */
    private ?PlanType $plan_type = null;
    
    /**
     * @var string|null $price The price property
    */
    private ?string $price = null;
    
    /**
     * @var int|null $sort_order The sort_order property
    */
    private ?int $sort_order = null;
    
    /**
     * @var string|null $stripe_price_id The stripe_price_id property
    */
    private ?string $stripe_price_id = null;
    
    /**
     * @var string|null $stripe_product_id The stripe_product_id property
    */
    private ?string $stripe_product_id = null;
    
    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return GetPlanResponse
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): GetPlanResponse {
        return new GetPlanResponse();
    }

    /**
     * Gets the active property value. The active property
     * @return bool|null
    */
    public function getActive(): ?bool {
        return $this->active;
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
     * Gets the features property value. `Struct` represents a structured data value, consisting of fields which map to dynamically typed values. In some languages, `Struct` might be supported by a native representation. For example, in scripting languages like JS a struct is represented as an object. The details of that representation are described together with the proto support for the language. The JSON representation for `Struct` is JSON object.
     * @return Struct|null
    */
    public function getFeatures(): ?Struct {
        return $this->features;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'active' => fn(ParseNode $n) => $o->setActive($n->getBooleanValue()),
            'currency' => fn(ParseNode $n) => $o->setCurrency($n->getStringValue()),
            'description' => fn(ParseNode $n) => $o->setDescription($n->getStringValue()),
            'features' => fn(ParseNode $n) => $o->setFeatures($n->getObjectValue([Struct::class, 'createFromDiscriminatorValue'])),
            'id' => fn(ParseNode $n) => $o->setId($n->getStringValue()),
            'interval' => fn(ParseNode $n) => $o->setInterval($n->getStringValue()),
            'interval_count' => fn(ParseNode $n) => $o->setIntervalCount($n->getIntegerValue()),
            'is_public' => fn(ParseNode $n) => $o->setIsPublic($n->getBooleanValue()),
            'name' => fn(ParseNode $n) => $o->setName($n->getStringValue()),
            'plan_type' => fn(ParseNode $n) => $o->setPlanType($n->getEnumValue(PlanType::class)),
            'price' => fn(ParseNode $n) => $o->setPrice($n->getStringValue()),
            'sort_order' => fn(ParseNode $n) => $o->setSortOrder($n->getIntegerValue()),
            'stripe_price_id' => fn(ParseNode $n) => $o->setStripePriceId($n->getStringValue()),
            'stripe_product_id' => fn(ParseNode $n) => $o->setStripeProductId($n->getStringValue()),
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
     * Gets the interval_count property value. The interval_count property
     * @return int|null
    */
    public function getIntervalCount(): ?int {
        return $this->interval_count;
    }

    /**
     * Gets the is_public property value. The is_public property
     * @return bool|null
    */
    public function getIsPublic(): ?bool {
        return $this->is_public;
    }

    /**
     * Gets the name property value. The name property
     * @return string|null
    */
    public function getName(): ?string {
        return $this->name;
    }

    /**
     * Gets the plan_type property value. The plan_type property
     * @return PlanType|null
    */
    public function getPlanType(): ?PlanType {
        return $this->plan_type;
    }

    /**
     * Gets the price property value. The price property
     * @return string|null
    */
    public function getPrice(): ?string {
        return $this->price;
    }

    /**
     * Gets the sort_order property value. The sort_order property
     * @return int|null
    */
    public function getSortOrder(): ?int {
        return $this->sort_order;
    }

    /**
     * Gets the stripe_price_id property value. The stripe_price_id property
     * @return string|null
    */
    public function getStripePriceId(): ?string {
        return $this->stripe_price_id;
    }

    /**
     * Gets the stripe_product_id property value. The stripe_product_id property
     * @return string|null
    */
    public function getStripeProductId(): ?string {
        return $this->stripe_product_id;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeBooleanValue('active', $this->getActive());
        $writer->writeStringValue('currency', $this->getCurrency());
        $writer->writeStringValue('description', $this->getDescription());
        $writer->writeObjectValue('features', $this->getFeatures());
        $writer->writeStringValue('id', $this->getId());
        $writer->writeStringValue('interval', $this->getInterval());
        $writer->writeIntegerValue('interval_count', $this->getIntervalCount());
        $writer->writeBooleanValue('is_public', $this->getIsPublic());
        $writer->writeStringValue('name', $this->getName());
        $writer->writeEnumValue('plan_type', $this->getPlanType());
        $writer->writeStringValue('price', $this->getPrice());
        $writer->writeIntegerValue('sort_order', $this->getSortOrder());
        $writer->writeStringValue('stripe_price_id', $this->getStripePriceId());
        $writer->writeStringValue('stripe_product_id', $this->getStripeProductId());
    }

    /**
     * Sets the active property value. The active property
     * @param bool|null $value Value to set for the active property.
    */
    public function setActive(?bool $value): void {
        $this->active = $value;
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
     * Sets the features property value. `Struct` represents a structured data value, consisting of fields which map to dynamically typed values. In some languages, `Struct` might be supported by a native representation. For example, in scripting languages like JS a struct is represented as an object. The details of that representation are described together with the proto support for the language. The JSON representation for `Struct` is JSON object.
     * @param Struct|null $value Value to set for the features property.
    */
    public function setFeatures(?Struct $value): void {
        $this->features = $value;
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
     * Sets the interval_count property value. The interval_count property
     * @param int|null $value Value to set for the interval_count property.
    */
    public function setIntervalCount(?int $value): void {
        $this->interval_count = $value;
    }

    /**
     * Sets the is_public property value. The is_public property
     * @param bool|null $value Value to set for the is_public property.
    */
    public function setIsPublic(?bool $value): void {
        $this->is_public = $value;
    }

    /**
     * Sets the name property value. The name property
     * @param string|null $value Value to set for the name property.
    */
    public function setName(?string $value): void {
        $this->name = $value;
    }

    /**
     * Sets the plan_type property value. The plan_type property
     * @param PlanType|null $value Value to set for the plan_type property.
    */
    public function setPlanType(?PlanType $value): void {
        $this->plan_type = $value;
    }

    /**
     * Sets the price property value. The price property
     * @param string|null $value Value to set for the price property.
    */
    public function setPrice(?string $value): void {
        $this->price = $value;
    }

    /**
     * Sets the sort_order property value. The sort_order property
     * @param int|null $value Value to set for the sort_order property.
    */
    public function setSortOrder(?int $value): void {
        $this->sort_order = $value;
    }

    /**
     * Sets the stripe_price_id property value. The stripe_price_id property
     * @param string|null $value Value to set for the stripe_price_id property.
    */
    public function setStripePriceId(?string $value): void {
        $this->stripe_price_id = $value;
    }

    /**
     * Sets the stripe_product_id property value. The stripe_product_id property
     * @param string|null $value Value to set for the stripe_product_id property.
    */
    public function setStripeProductId(?string $value): void {
        $this->stripe_product_id = $value;
    }

}
