<?php

namespace Rixl\Sdk\Models\Auth\V1;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class ListSignInsResponse implements Parsable 
{
    /**
     * @var array<SignIn>|null $sign_ins The sign_ins property
    */
    private ?array $sign_ins = null;
    
    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return ListSignInsResponse
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): ListSignInsResponse {
        return new ListSignInsResponse();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'sign_ins' => fn(ParseNode $n) => $o->setSignIns($n->getCollectionOfObjectValues([SignIn::class, 'createFromDiscriminatorValue'])),
        ];
    }

    /**
     * Gets the sign_ins property value. The sign_ins property
     * @return array<SignIn>|null
    */
    public function getSignIns(): ?array {
        return $this->sign_ins;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeCollectionOfObjectValues('sign_ins', $this->getSignIns());
    }

    /**
     * Sets the sign_ins property value. The sign_ins property
     * @param array<SignIn>|null $value Value to set for the sign_ins property.
    */
    public function setSignIns(?array $value): void {
        $this->sign_ins = $value;
    }

}
