<?php

namespace Rixl\Sdk\Models\Auth\V1;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class UpdateNameRequest implements Parsable 
{
    /**
     * @var string|null $fullName The fullName property
    */
    private ?string $fullName = null;
    
    /**
     * @var string|null $userId The userId property
    */
    private ?string $userId = null;
    
    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return UpdateNameRequest
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): UpdateNameRequest {
        return new UpdateNameRequest();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'fullName' => fn(ParseNode $n) => $o->setFullName($n->getStringValue()),
            'userId' => fn(ParseNode $n) => $o->setUserId($n->getStringValue()),
        ];
    }

    /**
     * Gets the fullName property value. The fullName property
     * @return string|null
    */
    public function getFullName(): ?string {
        return $this->fullName;
    }

    /**
     * Gets the userId property value. The userId property
     * @return string|null
    */
    public function getUserId(): ?string {
        return $this->userId;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('fullName', $this->getFullName());
        $writer->writeStringValue('userId', $this->getUserId());
    }

    /**
     * Sets the fullName property value. The fullName property
     * @param string|null $value Value to set for the fullName property.
    */
    public function setFullName(?string $value): void {
        $this->fullName = $value;
    }

    /**
     * Sets the userId property value. The userId property
     * @param string|null $value Value to set for the userId property.
    */
    public function setUserId(?string $value): void {
        $this->userId = $value;
    }

}
