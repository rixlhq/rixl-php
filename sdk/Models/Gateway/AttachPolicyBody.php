<?php

namespace Rixl\Sdk\Models\Gateway;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

/**
 * Identity
*/
class AttachPolicyBody implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var string|null $identity_id The identity_id property
    */
    private ?string $identity_id = null;
    
    /**
     * @var string|null $identity_type The identity_type property
    */
    private ?string $identity_type = null;
    
    /**
     * Instantiates a new AttachPolicyBody and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return AttachPolicyBody
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): AttachPolicyBody {
        return new AttachPolicyBody();
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
            'identity_id' => fn(ParseNode $n) => $o->setIdentityId($n->getStringValue()),
            'identity_type' => fn(ParseNode $n) => $o->setIdentityType($n->getStringValue()),
        ];
    }

    /**
     * Gets the identity_id property value. The identity_id property
     * @return string|null
    */
    public function getIdentityId(): ?string {
        return $this->identity_id;
    }

    /**
     * Gets the identity_type property value. The identity_type property
     * @return string|null
    */
    public function getIdentityType(): ?string {
        return $this->identity_type;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('identity_id', $this->getIdentityId());
        $writer->writeStringValue('identity_type', $this->getIdentityType());
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
     * Sets the identity_id property value. The identity_id property
     * @param string|null $value Value to set for the identity_id property.
    */
    public function setIdentityId(?string $value): void {
        $this->identity_id = $value;
    }

    /**
     * Sets the identity_type property value. The identity_type property
     * @param string|null $value Value to set for the identity_type property.
    */
    public function setIdentityType(?string $value): void {
        $this->identity_type = $value;
    }

}
