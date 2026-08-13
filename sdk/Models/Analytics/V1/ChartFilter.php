<?php

namespace Rixl\Sdk\Models\Analytics\V1;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

class ChartFilter implements Parsable 
{
    /**
     * @var string|null $field The field property
    */
    private ?string $field = null;
    
    /**
     * @var ChartFilter_operator|null $operator The operator property
    */
    private ?ChartFilter_operator $operator = null;
    
    /**
     * @var array<string>|null $values The values property
    */
    private ?array $values = null;
    
    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return ChartFilter
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): ChartFilter {
        return new ChartFilter();
    }

    /**
     * Gets the field property value. The field property
     * @return string|null
    */
    public function getField(): ?string {
        return $this->field;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'field' => fn(ParseNode $n) => $o->setField($n->getStringValue()),
            'operator' => fn(ParseNode $n) => $o->setOperator($n->getEnumValue(ChartFilter_operator::class)),
            'values' => function (ParseNode $n) {
                $val = $n->getCollectionOfPrimitiveValues();
                if (is_array($val)) {
                    TypeUtils::validateCollectionValues($val, 'string');
                }
                /** @var array<string>|null $val */
                $this->setValues($val);
            },
        ];
    }

    /**
     * Gets the operator property value. The operator property
     * @return ChartFilter_operator|null
    */
    public function getOperator(): ?ChartFilter_operator {
        return $this->operator;
    }

    /**
     * Gets the values property value. The values property
     * @return array<string>|null
    */
    public function getValues(): ?array {
        return $this->values;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('field', $this->getField());
        $writer->writeEnumValue('operator', $this->getOperator());
        $writer->writeCollectionOfPrimitiveValues('values', $this->getValues());
    }

    /**
     * Sets the field property value. The field property
     * @param string|null $value Value to set for the field property.
    */
    public function setField(?string $value): void {
        $this->field = $value;
    }

    /**
     * Sets the operator property value. The operator property
     * @param ChartFilter_operator|null $value Value to set for the operator property.
    */
    public function setOperator(?ChartFilter_operator $value): void {
        $this->operator = $value;
    }

    /**
     * Sets the values property value. The values property
     * @param array<string>|null $value Value to set for the values property.
    */
    public function setValues(?array $value): void {
        $this->values = $value;
    }

}
