<?php

namespace Rixl\Sdk\Auth\V1\Memberships\Item\Policies\Item\Attachments;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Rixl\Sdk\Models\Auth\V1\PolicyIdentityType;
use Rixl\Sdk\Models\Auth\V1\UserOrgRequest;

class AttachmentsPostRequestBody implements Parsable 
{
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
     * @var UserOrgRequest|null $user The user property
    */
    private ?UserOrgRequest $user = null;
    
    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return AttachmentsPostRequestBody
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): AttachmentsPostRequestBody {
        return new AttachmentsPostRequestBody();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'identity_id' => fn(ParseNode $n) => $o->setIdentityId($n->getStringValue()),
            'identity_type' => fn(ParseNode $n) => $o->setIdentityType($n->getEnumValue(PolicyIdentityType::class)),
            'policy_id' => fn(ParseNode $n) => $o->setPolicyId($n->getStringValue()),
            'user' => fn(ParseNode $n) => $o->setUser($n->getObjectValue([UserOrgRequest::class, 'createFromDiscriminatorValue'])),
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
     * Gets the user property value. The user property
     * @return UserOrgRequest|null
    */
    public function getUser(): ?UserOrgRequest {
        return $this->user;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('identity_id', $this->getIdentityId());
        $writer->writeEnumValue('identity_type', $this->getIdentityType());
        $writer->writeStringValue('policy_id', $this->getPolicyId());
        $writer->writeObjectValue('user', $this->getUser());
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

    /**
     * Sets the user property value. The user property
     * @param UserOrgRequest|null $value Value to set for the user property.
    */
    public function setUser(?UserOrgRequest $value): void {
        $this->user = $value;
    }

}
