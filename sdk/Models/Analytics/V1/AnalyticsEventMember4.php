<?php

namespace Rixl\Sdk\Models\Analytics\V1;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class AnalyticsEventMember4 implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var InteractionEvent|null $interaction The interaction property
    */
    private ?InteractionEvent $interaction = null;
    
    /**
     * Instantiates a new AnalyticsEventMember4 and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return AnalyticsEventMember4
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): AnalyticsEventMember4 {
        return new AnalyticsEventMember4();
    }

    /**
     * Gets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        return $this->additionalData;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'interaction' => fn(ParseNode $n) => $o->setInteraction($n->getObjectValue([InteractionEvent::class, 'createFromDiscriminatorValue'])),
        ];
    }

    /**
     * Gets the interaction property value. The interaction property
     * @return InteractionEvent|null
    */
    public function getInteraction(): ?InteractionEvent {
        return $this->interaction;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeObjectValue('interaction', $this->getInteraction());
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
     * Sets the interaction property value. The interaction property
     * @param InteractionEvent|null $value Value to set for the interaction property.
    */
    public function setInteraction(?InteractionEvent $value): void {
        $this->interaction = $value;
    }

}
