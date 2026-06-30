<?php

namespace Rixl\Sdk\Models\Billingv1;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class PaymentMethodDetails implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var string|null $brand The brand property
    */
    private ?string $brand = null;
    
    /**
     * @var int|null $exp_month The exp_month property
    */
    private ?int $exp_month = null;
    
    /**
     * @var int|null $exp_year The exp_year property
    */
    private ?int $exp_year = null;
    
    /**
     * @var string|null $id The id property
    */
    private ?string $id = null;
    
    /**
     * @var bool|null $is_default The is_default property
    */
    private ?bool $is_default = null;
    
    /**
     * @var string|null $last4 The last4 property
    */
    private ?string $last4 = null;
    
    /**
     * @var string|null $type The type property
    */
    private ?string $type = null;
    
    /**
     * Instantiates a new PaymentMethodDetails and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return PaymentMethodDetails
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): PaymentMethodDetails {
        return new PaymentMethodDetails();
    }

    /**
     * Gets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        return $this->additionalData;
    }

    /**
     * Gets the brand property value. The brand property
     * @return string|null
    */
    public function getBrand(): ?string {
        return $this->brand;
    }

    /**
     * Gets the exp_month property value. The exp_month property
     * @return int|null
    */
    public function getExpMonth(): ?int {
        return $this->exp_month;
    }

    /**
     * Gets the exp_year property value. The exp_year property
     * @return int|null
    */
    public function getExpYear(): ?int {
        return $this->exp_year;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'brand' => fn(ParseNode $n) => $o->setBrand($n->getStringValue()),
            'exp_month' => fn(ParseNode $n) => $o->setExpMonth($n->getIntegerValue()),
            'exp_year' => fn(ParseNode $n) => $o->setExpYear($n->getIntegerValue()),
            'id' => fn(ParseNode $n) => $o->setId($n->getStringValue()),
            'is_default' => fn(ParseNode $n) => $o->setIsDefault($n->getBooleanValue()),
            'last4' => fn(ParseNode $n) => $o->setLast4($n->getStringValue()),
            'type' => fn(ParseNode $n) => $o->setType($n->getStringValue()),
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
     * Gets the is_default property value. The is_default property
     * @return bool|null
    */
    public function getIsDefault(): ?bool {
        return $this->is_default;
    }

    /**
     * Gets the last4 property value. The last4 property
     * @return string|null
    */
    public function getLast4(): ?string {
        return $this->last4;
    }

    /**
     * Gets the type property value. The type property
     * @return string|null
    */
    public function getType(): ?string {
        return $this->type;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('brand', $this->getBrand());
        $writer->writeIntegerValue('exp_month', $this->getExpMonth());
        $writer->writeIntegerValue('exp_year', $this->getExpYear());
        $writer->writeStringValue('id', $this->getId());
        $writer->writeBooleanValue('is_default', $this->getIsDefault());
        $writer->writeStringValue('last4', $this->getLast4());
        $writer->writeStringValue('type', $this->getType());
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
     * Sets the brand property value. The brand property
     * @param string|null $value Value to set for the brand property.
    */
    public function setBrand(?string $value): void {
        $this->brand = $value;
    }

    /**
     * Sets the exp_month property value. The exp_month property
     * @param int|null $value Value to set for the exp_month property.
    */
    public function setExpMonth(?int $value): void {
        $this->exp_month = $value;
    }

    /**
     * Sets the exp_year property value. The exp_year property
     * @param int|null $value Value to set for the exp_year property.
    */
    public function setExpYear(?int $value): void {
        $this->exp_year = $value;
    }

    /**
     * Sets the id property value. The id property
     * @param string|null $value Value to set for the id property.
    */
    public function setId(?string $value): void {
        $this->id = $value;
    }

    /**
     * Sets the is_default property value. The is_default property
     * @param bool|null $value Value to set for the is_default property.
    */
    public function setIsDefault(?bool $value): void {
        $this->is_default = $value;
    }

    /**
     * Sets the last4 property value. The last4 property
     * @param string|null $value Value to set for the last4 property.
    */
    public function setLast4(?string $value): void {
        $this->last4 = $value;
    }

    /**
     * Sets the type property value. The type property
     * @param string|null $value Value to set for the type property.
    */
    public function setType(?string $value): void {
        $this->type = $value;
    }

}
