<?php

namespace Rixl\Sdk\Auth\V1\Organizations\Item\Invitations;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Rixl\Sdk\Models\Auth\V1\MembershipRole;

class InvitationsPostRequestBody implements Parsable 
{
    /**
     * @var string|null $email Trimmed and lowercased before validation as a bare email address. The normalized address must be nonempty and at most 254 UTF-8 bytes, with a local part of at most 64 bytes and a domain containing a dot that is neither leading nor trailing.
    */
    private ?string $email = null;
    
    /**
     * @var string|null $request_id Optional UUID that makes retries of the same create safe.
    */
    private ?string $request_id = null;
    
    /**
     * @var MembershipRole|null $role The role property
    */
    private ?MembershipRole $role = null;
    
    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return InvitationsPostRequestBody
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): InvitationsPostRequestBody {
        return new InvitationsPostRequestBody();
    }

    /**
     * Gets the email property value. Trimmed and lowercased before validation as a bare email address. The normalized address must be nonempty and at most 254 UTF-8 bytes, with a local part of at most 64 bytes and a domain containing a dot that is neither leading nor trailing.
     * @return string|null
    */
    public function getEmail(): ?string {
        return $this->email;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'email' => fn(ParseNode $n) => $o->setEmail($n->getStringValue()),
            'request_id' => fn(ParseNode $n) => $o->setRequestId($n->getStringValue()),
            'role' => fn(ParseNode $n) => $o->setRole($n->getEnumValue(MembershipRole::class)),
        ];
    }

    /**
     * Gets the request_id property value. Optional UUID that makes retries of the same create safe.
     * @return string|null
    */
    public function getRequestId(): ?string {
        return $this->request_id;
    }

    /**
     * Gets the role property value. The role property
     * @return MembershipRole|null
    */
    public function getRole(): ?MembershipRole {
        return $this->role;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('email', $this->getEmail());
        $writer->writeStringValue('request_id', $this->getRequestId());
        $writer->writeEnumValue('role', $this->getRole());
    }

    /**
     * Sets the email property value. Trimmed and lowercased before validation as a bare email address. The normalized address must be nonempty and at most 254 UTF-8 bytes, with a local part of at most 64 bytes and a domain containing a dot that is neither leading nor trailing.
     * @param string|null $value Value to set for the email property.
    */
    public function setEmail(?string $value): void {
        $this->email = $value;
    }

    /**
     * Sets the request_id property value. Optional UUID that makes retries of the same create safe.
     * @param string|null $value Value to set for the request_id property.
    */
    public function setRequestId(?string $value): void {
        $this->request_id = $value;
    }

    /**
     * Sets the role property value. The role property
     * @param MembershipRole|null $value Value to set for the role property.
    */
    public function setRole(?MembershipRole $value): void {
        $this->role = $value;
    }

}
