<?php

namespace Rixl\Sdk\Models\Billingv1;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class SetupIntentResponse implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var string|null $client_secret The client_secret property
    */
    private ?string $client_secret = null;
    
    /**
     * @var string|null $setup_intent_id The setup_intent_id property
    */
    private ?string $setup_intent_id = null;
    
    /**
     * Instantiates a new SetupIntentResponse and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return SetupIntentResponse
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): SetupIntentResponse {
        return new SetupIntentResponse();
    }

    /**
     * Gets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        return $this->additionalData;
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
