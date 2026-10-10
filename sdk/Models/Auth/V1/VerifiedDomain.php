<?php

namespace Rixl\Sdk\Models\Auth\V1;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class VerifiedDomain implements Parsable 
{
    /**
     * @var DateTime|null $verified_at The verified_at property
    */
    private ?DateTime $verified_at = null;
    
    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return VerifiedDomain
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): VerifiedDomain {
        return new VerifiedDomain();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'verified_at' => fn(ParseNode $n) => $o->setVerifiedAt($n->getDateTimeValue()),
        ];
    }

    /**
     * Gets the verified_at property value. The verified_at property
     * @return DateTime|null
    */
    public function getVerifiedAt(): ?DateTime {
        return $this->verified_at;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeDateTimeValue('verified_at', $this->getVerifiedAt());
    }

    /**
     * Sets the verified_at property value. The verified_at property
     * @param DateTime|null $value Value to set for the verified_at property.
    */
    public function setVerifiedAt(?DateTime $value): void {
        $this->verified_at = $value;
    }

}
