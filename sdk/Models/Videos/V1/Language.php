<?php

namespace Rixl\Sdk\Models\Videos\V1;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class Language implements Parsable 
{
    /**
     * @var string|null $code The code property
    */
    private ?string $code = null;
    
    /**
     * @var string|null $name The name property
    */
    private ?string $name = null;
    
    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return Language
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): Language {
        return new Language();
    }

    /**
     * Gets the code property value. The code property
     * @return string|null
    */
    public function getCode(): ?string {
        return $this->code;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'code' => fn(ParseNode $n) => $o->setCode($n->getStringValue()),
            'name' => fn(ParseNode $n) => $o->setName($n->getStringValue()),
        ];
    }

    /**
     * Gets the name property value. The name property
     * @return string|null
    */
    public function getName(): ?string {
        return $this->name;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('code', $this->getCode());
        $writer->writeStringValue('name', $this->getName());
    }

    /**
     * Sets the code property value. The code property
     * @param string|null $value Value to set for the code property.
    */
    public function setCode(?string $value): void {
        $this->code = $value;
    }

    /**
     * Sets the name property value. The name property
     * @param string|null $value Value to set for the name property.
    */
    public function setName(?string $value): void {
        $this->name = $value;
    }

}
