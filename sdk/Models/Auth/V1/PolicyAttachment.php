<?php

namespace Rixl\Sdk\Models\Auth\V1;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class PolicyAttachment implements Parsable 
{
    /**
     * @var DateTime|null $created_at The created_at property
    */
    private ?DateTime $created_at = null;
    
    /**
     * @var string|null $id The id property
    */
    private ?string $id = null;
    
    /**
     * @var string|null $identity_id The identity_id property
    */
    private ?string $identity_id = null;
    
    /**
     * @var PolicyIdentityType|null $identity_type The identity_type property
    */
    private ?PolicyIdentityType $identity_type = null;
    
    /**
     * @var string|null $policy_id The policy_id property
    */
    private ?string $policy_id = null;
    
    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return PolicyAttachment
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): PolicyAttachment {
        return new PolicyAttachment();
    }

    /**
     * Gets the created_at property value. The created_at property
     * @return DateTime|null
    */
    public function getCreatedAt(): ?DateTime {
        return $this->created_at;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'created_at' => fn(ParseNode $n) => $o->setCreatedAt($n->getDateTimeValue()),
            'id' => fn(ParseNode $n) => $o->setId($n->getStringValue()),
            'identity_id' => fn(ParseNode $n) => $o->setIdentityId($n->getStringValue()),
            'identity_type' => fn(ParseNode $n) => $o->setIdentityType($n->getEnumValue(PolicyIdentityType::class)),
            'policy_id' => fn(ParseNode $n) => $o->setPolicyId($n->getStringValue()),
        ];
    }

    /**
     * Gets the id property value. The id property
     * @return string|null
    */
    public function getId(): ?string {
        return $this->id;
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
     * @return PolicyIdentityType|null
    */
    public function getIdentityType(): ?PolicyIdentityType {
        return $this->identity_type;
    }

    /**
     * Gets the policy_id property value. The policy_id property
     * @return string|null
    */
    public function getPolicyId(): ?string {
        return $this->policy_id;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeDateTimeValue('created_at', $this->getCreatedAt());
        $writer->writeStringValue('id', $this->getId());
        $writer->writeStringValue('identity_id', $this->getIdentityId());
        $writer->writeEnumValue('identity_type', $this->getIdentityType());
        $writer->writeStringValue('policy_id', $this->getPolicyId());
    }

    /**
     * Sets the created_at property value. The created_at property
     * @param DateTime|null $value Value to set for the created_at property.
    */
    public function setCreatedAt(?DateTime $value): void {
        $this->created_at = $value;
    }

    /**
     * Sets the id property value. The id property
     * @param string|null $value Value to set for the id property.
    */
    public function setId(?string $value): void {
        $this->id = $value;
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
     * @param PolicyIdentityType|null $value Value to set for the identity_type property.
    */
    public function setIdentityType(?PolicyIdentityType $value): void {
        $this->identity_type = $value;
    }

    /**
     * Sets the policy_id property value. The policy_id property
     * @param string|null $value Value to set for the policy_id property.
    */
    public function setPolicyId(?string $value): void {
        $this->policy_id = $value;
    }

}
