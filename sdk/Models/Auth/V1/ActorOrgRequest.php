<?php

namespace Rixl\Sdk\Models\Auth\V1;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class ActorOrgRequest implements Parsable 
{
    /**
     * @var string|null $actor_id The actor_id property
    */
    private ?string $actor_id = null;
    
    /**
     * @var string|null $org_id The org_id property
    */
    private ?string $org_id = null;
    
    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return ActorOrgRequest
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): ActorOrgRequest {
        return new ActorOrgRequest();
    }

    /**
     * Gets the actor_id property value. The actor_id property
     * @return string|null
    */
    public function getActorId(): ?string {
        return $this->actor_id;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'actor_id' => fn(ParseNode $n) => $o->setActorId($n->getStringValue()),
            'org_id' => fn(ParseNode $n) => $o->setOrgId($n->getStringValue()),
        ];
    }

    /**
     * Gets the org_id property value. The org_id property
     * @return string|null
    */
    public function getOrgId(): ?string {
        return $this->org_id;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('actor_id', $this->getActorId());
        $writer->writeStringValue('org_id', $this->getOrgId());
    }

    /**
     * Sets the actor_id property value. The actor_id property
     * @param string|null $value Value to set for the actor_id property.
    */
    public function setActorId(?string $value): void {
        $this->actor_id = $value;
    }

    /**
     * Sets the org_id property value. The org_id property
     * @param string|null $value Value to set for the org_id property.
    */
    public function setOrgId(?string $value): void {
        $this->org_id = $value;
    }

}
