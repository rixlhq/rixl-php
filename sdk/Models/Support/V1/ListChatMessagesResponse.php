<?php

namespace Rixl\Sdk\Models\Support\V1;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class ListChatMessagesResponse implements Parsable 
{
    /**
     * @var array<ChatMessage>|null $messages The messages property
    */
    private ?array $messages = null;
    
    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return ListChatMessagesResponse
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): ListChatMessagesResponse {
        return new ListChatMessagesResponse();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'messages' => fn(ParseNode $n) => $o->setMessages($n->getCollectionOfObjectValues([ChatMessage::class, 'createFromDiscriminatorValue'])),
        ];
    }

    /**
     * Gets the messages property value. The messages property
     * @return array<ChatMessage>|null
    */
    public function getMessages(): ?array {
        return $this->messages;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeCollectionOfObjectValues('messages', $this->getMessages());
    }

    /**
     * Sets the messages property value. The messages property
     * @param array<ChatMessage>|null $value Value to set for the messages property.
    */
    public function setMessages(?array $value): void {
        $this->messages = $value;
    }

}
