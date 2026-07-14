<?php

namespace Rixl\Sdk\Models\Billing\V1;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class SetupIntentResponse implements Parsable 
{
    /**
     * @var string|null $clientSecret The clientSecret property
    */
    private ?string $clientSecret = null;
    
    /**
     * @var string|null $setupIntentId The setupIntentId property
    */
    private ?string $setupIntentId = null;
    
    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return SetupIntentResponse
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): SetupIntentResponse {
        return new SetupIntentResponse();
    }

    /**
     * Gets the clientSecret property value. The clientSecret property
     * @return string|null
    */
    public function getClientSecret(): ?string {
        return $this->clientSecret;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'clientSecret' => fn(ParseNode $n) => $o->setClientSecret($n->getStringValue()),
            'setupIntentId' => fn(ParseNode $n) => $o->setSetupIntentId($n->getStringValue()),
        ];
    }

    /**
     * Gets the setupIntentId property value. The setupIntentId property
     * @return string|null
    */
    public function getSetupIntentId(): ?string {
        return $this->setupIntentId;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('clientSecret', $this->getClientSecret());
        $writer->writeStringValue('setupIntentId', $this->getSetupIntentId());
    }

    /**
     * Sets the clientSecret property value. The clientSecret property
     * @param string|null $value Value to set for the clientSecret property.
    */
    public function setClientSecret(?string $value): void {
        $this->clientSecret = $value;
    }

    /**
     * Sets the setupIntentId property value. The setupIntentId property
     * @param string|null $value Value to set for the setupIntentId property.
    */
    public function setSetupIntentId(?string $value): void {
        $this->setupIntentId = $value;
    }

}
