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
     * @var string|null $identityId The identityId property
    */
    private ?string $identityId = null;
    
    /**
     * @var PolicyIdentityType|null $identityType The identityType property
    */
    private ?PolicyIdentityType $identityType = null;
    
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
            'identityId' => fn(ParseNode $n) => $o->setIdentityId($n->getStringValue()),
            'identityType' => fn(ParseNode $n) => $o->setIdentityType($n->getEnumValue(PolicyIdentityType::class)),
            'user' => fn(ParseNode $n) => $o->setUser($n->getObjectValue([UserOrgRequest::class, 'createFromDiscriminatorValue'])),
        ];
    }

    /**
     * Gets the identityId property value. The identityId property
     * @return string|null
    */
    public function getIdentityId(): ?string {
        return $this->identityId;
    }

    /**
     * Gets the identityType property value. The identityType property
     * @return PolicyIdentityType|null
    */
    public function getIdentityType(): ?PolicyIdentityType {
        return $this->identityType;
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
        $writer->writeStringValue('identityId', $this->getIdentityId());
        $writer->writeEnumValue('identityType', $this->getIdentityType());
        $writer->writeObjectValue('user', $this->getUser());
    }

    /**
     * Sets the identityId property value. The identityId property
     * @param string|null $value Value to set for the identityId property.
    */
    public function setIdentityId(?string $value): void {
        $this->identityId = $value;
    }

    /**
     * Sets the identityType property value. The identityType property
     * @param PolicyIdentityType|null $value Value to set for the identityType property.
    */
    public function setIdentityType(?PolicyIdentityType $value): void {
        $this->identityType = $value;
    }

    /**
     * Sets the user property value. The user property
     * @param UserOrgRequest|null $value Value to set for the user property.
    */
    public function setUser(?UserOrgRequest $value): void {
        $this->user = $value;
    }

}
