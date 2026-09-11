<?php

namespace Rixl\Sdk\Models\Auth\V1;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class DomainStatusMember2 implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var VerifiedDomain|null $verified The verified property
    */
    private ?VerifiedDomain $verified = null;
    
    /**
     * Instantiates a new DomainStatusMember2 and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return DomainStatusMember2
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): DomainStatusMember2 {
        return new DomainStatusMember2();
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
            'verified' => fn(ParseNode $n) => $o->setVerified($n->getObjectValue([VerifiedDomain::class, 'createFromDiscriminatorValue'])),
        ];
    }

    /**
     * Gets the verified property value. The verified property
     * @return VerifiedDomain|null
    */
    public function getVerified(): ?VerifiedDomain {
        return $this->verified;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeObjectValue('verified', $this->getVerified());
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
     * Sets the verified property value. The verified property
     * @param VerifiedDomain|null $value Value to set for the verified property.
    */
    public function setVerified(?VerifiedDomain $value): void {
        $this->verified = $value;
    }

}
