<?php

namespace Rixl\Sdk\Organizations\Item\Projects\V1\Item\CustomDomain;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class CustomDomainPutRequestBody implements Parsable 
{
    /**
     * @var string|null $custom_domain The custom_domain property
    */
    private ?string $custom_domain = null;
    
    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return CustomDomainPutRequestBody
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): CustomDomainPutRequestBody {
        return new CustomDomainPutRequestBody();
    }

    /**
     * Gets the custom_domain property value. The custom_domain property
     * @return string|null
    */
    public function getCustomDomain(): ?string {
        return $this->custom_domain;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'custom_domain' => fn(ParseNode $n) => $o->setCustomDomain($n->getStringValue()),
        ];
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('custom_domain', $this->getCustomDomain());
    }

    /**
     * Sets the custom_domain property value. The custom_domain property
     * @param string|null $value Value to set for the custom_domain property.
    */
    public function setCustomDomain(?string $value): void {
        $this->custom_domain = $value;
    }

}
