<?php

namespace Rixl\Sdk\Models\Auth\V1;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class InvitationInviter implements Parsable 
{
    /**
     * @var string|null $display_name The display_name property
    */
    private ?string $display_name = null;
    
    /**
     * @var string|null $id Empty in the invitee's own list.
    */
    private ?string $id = null;
    
    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return InvitationInviter
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): InvitationInviter {
        return new InvitationInviter();
    }

    /**
     * Gets the display_name property value. The display_name property
     * @return string|null
    */
    public function getDisplayName(): ?string {
        return $this->display_name;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'display_name' => fn(ParseNode $n) => $o->setDisplayName($n->getStringValue()),
            'id' => fn(ParseNode $n) => $o->setId($n->getStringValue()),
        ];
    }

    /**
     * Gets the id property value. Empty in the invitee's own list.
     * @return string|null
    */
    public function getId(): ?string {
        return $this->id;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('display_name', $this->getDisplayName());
        $writer->writeStringValue('id', $this->getId());
    }

    /**
     * Sets the display_name property value. The display_name property
     * @param string|null $value Value to set for the display_name property.
    */
    public function setDisplayName(?string $value): void {
        $this->display_name = $value;
    }

    /**
     * Sets the id property value. Empty in the invitee's own list.
     * @param string|null $value Value to set for the id property.
    */
    public function setId(?string $value): void {
        $this->id = $value;
    }

}
