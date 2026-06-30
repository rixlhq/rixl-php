<?php

namespace Rixl\Sdk\Models\Analyticsv1;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class DateRange implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var string|null $end The end property
    */
    private ?string $end = null;
    
    /**
     * @var string|null $start The start property
    */
    private ?string $start = null;
    
    /**
     * Instantiates a new DateRange and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return DateRange
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): DateRange {
        return new DateRange();
    }

    /**
     * Gets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        return $this->additionalData;
    }

    /**
     * Gets the end property value. The end property
     * @return string|null
    */
    public function getEnd(): ?string {
        return $this->end;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'end' => fn(ParseNode $n) => $o->setEnd($n->getStringValue()),
            'start' => fn(ParseNode $n) => $o->setStart($n->getStringValue()),
        ];
    }

    /**
     * Gets the start property value. The start property
     * @return string|null
    */
    public function getStart(): ?string {
        return $this->start;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('end', $this->getEnd());
        $writer->writeStringValue('start', $this->getStart());
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
     * Sets the end property value. The end property
     * @param string|null $value Value to set for the end property.
    */
    public function setEnd(?string $value): void {
        $this->end = $value;
    }

    /**
     * Sets the start property value. The start property
     * @param string|null $value Value to set for the start property.
    */
    public function setStart(?string $value): void {
        $this->start = $value;
    }

}
