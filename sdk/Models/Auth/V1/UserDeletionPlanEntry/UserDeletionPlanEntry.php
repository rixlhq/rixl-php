<?php

namespace Rixl\Sdk\Models\Auth\V1\UserDeletionPlanEntry;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class UserDeletionPlanEntry implements Parsable 
{
    /**
     * @var string|null $affected_user_id Set when another member will lose access to the personal org.
    */
    private ?string $affected_user_id = null;
    
    /**
     * @var string|null $affected_username The affected_username property
    */
    private ?string $affected_username = null;
    
    /**
     * @var Kind|null $kind The kind property
    */
    private ?Kind $kind = null;
    
    /**
     * @var string|null $org_id The org_id property
    */
    private ?string $org_id = null;
    
    /**
     * @var string|null $org_name The org_name property
    */
    private ?string $org_name = null;
    
    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return UserDeletionPlanEntry
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): UserDeletionPlanEntry {
        return new UserDeletionPlanEntry();
    }

    /**
     * Gets the affected_user_id property value. Set when another member will lose access to the personal org.
     * @return string|null
    */
    public function getAffectedUserId(): ?string {
        return $this->affected_user_id;
    }

    /**
     * Gets the affected_username property value. The affected_username property
     * @return string|null
    */
    public function getAffectedUsername(): ?string {
        return $this->affected_username;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'affected_user_id' => fn(ParseNode $n) => $o->setAffectedUserId($n->getStringValue()),
            'affected_username' => fn(ParseNode $n) => $o->setAffectedUsername($n->getStringValue()),
            'kind' => fn(ParseNode $n) => $o->setKind($n->getEnumValue(Kind::class)),
            'org_id' => fn(ParseNode $n) => $o->setOrgId($n->getStringValue()),
            'org_name' => fn(ParseNode $n) => $o->setOrgName($n->getStringValue()),
        ];
    }

    /**
     * Gets the kind property value. The kind property
     * @return Kind|null
    */
    public function getKind(): ?Kind {
        return $this->kind;
    }

    /**
     * Gets the org_id property value. The org_id property
     * @return string|null
    */
    public function getOrgId(): ?string {
        return $this->org_id;
    }

    /**
     * Gets the org_name property value. The org_name property
     * @return string|null
    */
    public function getOrgName(): ?string {
        return $this->org_name;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('affected_username', $this->getAffectedUsername());
        $writer->writeStringValue('affected_user_id', $this->getAffectedUserId());
        $writer->writeEnumValue('kind', $this->getKind());
        $writer->writeStringValue('org_id', $this->getOrgId());
        $writer->writeStringValue('org_name', $this->getOrgName());
    }

    /**
     * Sets the affected_user_id property value. Set when another member will lose access to the personal org.
     * @param string|null $value Value to set for the affected_user_id property.
    */
    public function setAffectedUserId(?string $value): void {
        $this->affected_user_id = $value;
    }

    /**
     * Sets the affected_username property value. The affected_username property
     * @param string|null $value Value to set for the affected_username property.
    */
    public function setAffectedUsername(?string $value): void {
        $this->affected_username = $value;
    }

    /**
     * Sets the kind property value. The kind property
     * @param Kind|null $value Value to set for the kind property.
    */
    public function setKind(?Kind $value): void {
        $this->kind = $value;
    }

    /**
     * Sets the org_id property value. The org_id property
     * @param string|null $value Value to set for the org_id property.
    */
    public function setOrgId(?string $value): void {
        $this->org_id = $value;
    }

    /**
     * Sets the org_name property value. The org_name property
     * @param string|null $value Value to set for the org_name property.
    */
    public function setOrgName(?string $value): void {
        $this->org_name = $value;
    }

}
