<?php

namespace Rixl\Sdk\Models\Billing\V1;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class SetupIntentResponse implements Parsable 
{
    /**
     * @var string|null $client_secret The client_secret property
    */
    private ?string $client_secret = null;
    
    /**
     * @var string|null $setup_intent_id The setup_intent_id property
    */
    private ?string $setup_intent_id = null;
    
    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return SetupIntentResponse
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): SetupIntentResponse {
        return new SetupIntentResponse();
    }

    /**
     * Gets the client_secret property value. The client_secret property
     * @return string|null
    */
    public function getClientSecret(): ?string {
        return $this->client_secret;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'client_secret' => fn(ParseNode $n) => $o->setClientSecret($n->getStringValue()),
            'setup_intent_id' => fn(ParseNode $n) => $o->setSetupIntentId($n->getStringValue()),
        ];
    }

    /**
     * Gets the setup_intent_id property value. The setup_intent_id property
     * @return string|null
    */
    public function getSetupIntentId(): ?string {
        return $this->setup_intent_id;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('client_secret', $this->getClientSecret());
        $writer->writeStringValue('setup_intent_id', $this->getSetupIntentId());
    }

    /**
     * Sets the client_secret property value. The client_secret property
     * @param string|null $value Value to set for the client_secret property.
    */
    public function setClientSecret(?string $value): void {
        $this->client_secret = $value;
    }

    /**
     * Sets the setup_intent_id property value. The setup_intent_id property
     * @param string|null $value Value to set for the setup_intent_id property.
    */
    public function setSetupIntentId(?string $value): void {
        $this->setup_intent_id = $value;
    }

}
