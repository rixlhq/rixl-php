<?php

namespace Rixl\Sdk\Models\Auth\V1;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class ListPasskeysResponse implements Parsable 
{
    /**
     * @var array<Passkey>|null $passkeys The passkeys property
    */
    private ?array $passkeys = null;
    
    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return ListPasskeysResponse
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): ListPasskeysResponse {
        return new ListPasskeysResponse();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'passkeys' => fn(ParseNode $n) => $o->setPasskeys($n->getCollectionOfObjectValues([Passkey::class, 'createFromDiscriminatorValue'])),
        ];
    }

    /**
     * Gets the passkeys property value. The passkeys property
     * @return array<Passkey>|null
    */
    public function getPasskeys(): ?array {
        return $this->passkeys;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeCollectionOfObjectValues('passkeys', $this->getPasskeys());
    }

    /**
     * Sets the passkeys property value. The passkeys property
     * @param array<Passkey>|null $value Value to set for the passkeys property.
    */
    public function setPasskeys(?array $value): void {
        $this->passkeys = $value;
    }

}
