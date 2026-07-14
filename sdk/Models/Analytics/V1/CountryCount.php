<?php

namespace Rixl\Sdk\Models\Analytics\V1;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class CountryCount implements Parsable 
{
    /**
     * @var string|null $country The country property
    */
    private ?string $country = null;
    
    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return CountryCount
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): CountryCount {
        return new CountryCount();
    }

    /**
     * Gets the country property value. The country property
     * @return string|null
    */
    public function getCountry(): ?string {
        return $this->country;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'country' => fn(ParseNode $n) => $o->setCountry($n->getStringValue()),
        ];
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('country', $this->getCountry());
    }

    /**
     * Sets the country property value. The country property
     * @param string|null $value Value to set for the country property.
    */
    public function setCountry(?string $value): void {
        $this->country = $value;
    }

}
