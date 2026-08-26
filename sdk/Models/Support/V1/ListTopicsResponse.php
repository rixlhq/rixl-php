<?php

namespace Rixl\Sdk\Models\Support\V1;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class ListTopicsResponse implements Parsable 
{
    /**
     * @var array<Topic>|null $topics The topics property
    */
    private ?array $topics = null;
    
    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return ListTopicsResponse
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): ListTopicsResponse {
        return new ListTopicsResponse();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'topics' => fn(ParseNode $n) => $o->setTopics($n->getCollectionOfObjectValues([Topic::class, 'createFromDiscriminatorValue'])),
        ];
    }

    /**
     * Gets the topics property value. The topics property
     * @return array<Topic>|null
    */
    public function getTopics(): ?array {
        return $this->topics;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeCollectionOfObjectValues('topics', $this->getTopics());
    }

    /**
     * Sets the topics property value. The topics property
     * @param array<Topic>|null $value Value to set for the topics property.
    */
    public function setTopics(?array $value): void {
        $this->topics = $value;
    }

}
