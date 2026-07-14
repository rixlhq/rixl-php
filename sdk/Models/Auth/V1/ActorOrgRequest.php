<?php

namespace Rixl\Sdk\Models\Auth\V1;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class ActorOrgRequest implements Parsable 
{
    /**
     * @var string|null $actorId The actorId property
    */
    private ?string $actorId = null;
    
    /**
     * @var string|null $orgId The orgId property
    */
    private ?string $orgId = null;
    
    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return ActorOrgRequest
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): ActorOrgRequest {
        return new ActorOrgRequest();
    }

    /**
     * Gets the actorId property value. The actorId property
     * @return string|null
    */
    public function getActorId(): ?string {
        return $this->actorId;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'actorId' => fn(ParseNode $n) => $o->setActorId($n->getStringValue()),
            'orgId' => fn(ParseNode $n) => $o->setOrgId($n->getStringValue()),
        ];
    }

    /**
     * Gets the orgId property value. The orgId property
     * @return string|null
    */
    public function getOrgId(): ?string {
        return $this->orgId;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('actorId', $this->getActorId());
        $writer->writeStringValue('orgId', $this->getOrgId());
    }

    /**
     * Sets the actorId property value. The actorId property
     * @param string|null $value Value to set for the actorId property.
    */
    public function setActorId(?string $value): void {
        $this->actorId = $value;
    }

    /**
     * Sets the orgId property value. The orgId property
     * @param string|null $value Value to set for the orgId property.
    */
    public function setOrgId(?string $value): void {
        $this->orgId = $value;
    }

}
