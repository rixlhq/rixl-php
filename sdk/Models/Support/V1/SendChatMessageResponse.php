<?php

namespace Rixl\Sdk\Models\Support\V1;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class SendChatMessageResponse implements Parsable 
{
    /**
     * @var ChatMessage|null $message The message property
    */
    private ?ChatMessage $message = null;
    
    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return SendChatMessageResponse
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): SendChatMessageResponse {
        return new SendChatMessageResponse();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'message' => fn(ParseNode $n) => $o->setMessage($n->getObjectValue([ChatMessage::class, 'createFromDiscriminatorValue'])),
        ];
    }

    /**
     * Gets the message property value. The message property
     * @return ChatMessage|null
    */
    public function getMessage(): ?ChatMessage {
        return $this->message;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeObjectValue('message', $this->getMessage());
    }

    /**
     * Sets the message property value. The message property
     * @param ChatMessage|null $value Value to set for the message property.
    */
    public function setMessage(?ChatMessage $value): void {
        $this->message = $value;
    }

}
