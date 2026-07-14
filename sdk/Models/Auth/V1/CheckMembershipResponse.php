<?php

namespace Rixl\Sdk\Models\Auth\V1;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class CheckMembershipResponse implements Parsable 
{
    /**
     * @var bool|null $isMember The isMember property
    */
    private ?bool $isMember = null;
    
    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return CheckMembershipResponse
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): CheckMembershipResponse {
        return new CheckMembershipResponse();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'isMember' => fn(ParseNode $n) => $o->setIsMember($n->getBooleanValue()),
        ];
    }

    /**
     * Gets the isMember property value. The isMember property
     * @return bool|null
    */
    public function getIsMember(): ?bool {
        return $this->isMember;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeBooleanValue('isMember', $this->getIsMember());
    }

    /**
     * Sets the isMember property value. The isMember property
     * @param bool|null $value Value to set for the isMember property.
    */
    public function setIsMember(?bool $value): void {
        $this->isMember = $value;
    }

}
