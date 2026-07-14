<?php

namespace Rixl\Sdk\Models\Videos\V1;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class ListLanguagesResponse implements Parsable 
{
    /**
     * @var array<Language>|null $languages The languages property
    */
    private ?array $languages = null;
    
    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return ListLanguagesResponse
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): ListLanguagesResponse {
        return new ListLanguagesResponse();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'languages' => fn(ParseNode $n) => $o->setLanguages($n->getCollectionOfObjectValues([Language::class, 'createFromDiscriminatorValue'])),
        ];
    }

    /**
     * Gets the languages property value. The languages property
     * @return array<Language>|null
    */
    public function getLanguages(): ?array {
        return $this->languages;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeCollectionOfObjectValues('languages', $this->getLanguages());
    }

    /**
     * Sets the languages property value. The languages property
     * @param array<Language>|null $value Value to set for the languages property.
    */
    public function setLanguages(?array $value): void {
        $this->languages = $value;
    }

}
