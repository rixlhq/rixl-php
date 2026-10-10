<?php

namespace Rixl\Sdk\Models\Analytics\V1;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class AnalyticsEventMember5 implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var SessionStartEvent|null $session_start The session_start property
    */
    private ?SessionStartEvent $session_start = null;
    
    /**
     * Instantiates a new AnalyticsEventMember5 and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return AnalyticsEventMember5
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): AnalyticsEventMember5 {
        return new AnalyticsEventMember5();
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
            'session_start' => fn(ParseNode $n) => $o->setSessionStart($n->getObjectValue([SessionStartEvent::class, 'createFromDiscriminatorValue'])),
        ];
    }

    /**
     * Gets the session_start property value. The session_start property
     * @return SessionStartEvent|null
    */
    public function getSessionStart(): ?SessionStartEvent {
        return $this->session_start;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeObjectValue('session_start', $this->getSessionStart());
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
     * Sets the session_start property value. The session_start property
     * @param SessionStartEvent|null $value Value to set for the session_start property.
    */
    public function setSessionStart(?SessionStartEvent $value): void {
        $this->session_start = $value;
    }

}
