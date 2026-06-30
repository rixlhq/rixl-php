<?php

namespace Rixl\Sdk\Models\Authv1;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class Membership implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var string|null $id The id property
    */
    private ?string $id = null;
    
    /**
     * @var string|null $joined_at The joined_at property
    */
    private ?string $joined_at = null;
    
    /**
     * @var string|null $org_id The org_id property
    */
    private ?string $org_id = null;
    
    /**
     * @var string|null $organization_first_name The organization_first_name property
    */
    private ?string $organization_first_name = null;
    
    /**
     * @var string|null $organization_last_name The organization_last_name property
    */
    private ?string $organization_last_name = null;
    
    /**
     * @var string|null $organization_username The organization_username property
    */
    private ?string $organization_username = null;
    
    /**
     * @var string|null $role The role property
    */
    private ?string $role = null;
    
    /**
     * @var string|null $state The state property
    */
    private ?string $state = null;
    
    /**
     * @var string|null $user_id The user_id property
    */
    private ?string $user_id = null;
    
    /**
     * Instantiates a new Membership and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return Membership
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): Membership {
        return new Membership();
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
            'id' => fn(ParseNode $n) => $o->setId($n->getStringValue()),
            'joined_at' => fn(ParseNode $n) => $o->setJoinedAt($n->getStringValue()),
            'org_id' => fn(ParseNode $n) => $o->setOrgId($n->getStringValue()),
            'organization_first_name' => fn(ParseNode $n) => $o->setOrganizationFirstName($n->getStringValue()),
            'organization_last_name' => fn(ParseNode $n) => $o->setOrganizationLastName($n->getStringValue()),
            'organization_username' => fn(ParseNode $n) => $o->setOrganizationUsername($n->getStringValue()),
            'role' => fn(ParseNode $n) => $o->setRole($n->getStringValue()),
            'state' => fn(ParseNode $n) => $o->setState($n->getStringValue()),
            'user_id' => fn(ParseNode $n) => $o->setUserId($n->getStringValue()),
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
     * Gets the joined_at property value. The joined_at property
     * @return string|null
    */
    public function getJoinedAt(): ?string {
        return $this->joined_at;
    }

    /**
     * Gets the organization_first_name property value. The organization_first_name property
     * @return string|null
    */
    public function getOrganizationFirstName(): ?string {
        return $this->organization_first_name;
    }

    /**
     * Gets the organization_last_name property value. The organization_last_name property
     * @return string|null
    */
    public function getOrganizationLastName(): ?string {
        return $this->organization_last_name;
    }

    /**
     * Gets the organization_username property value. The organization_username property
     * @return string|null
    */
    public function getOrganizationUsername(): ?string {
        return $this->organization_username;
    }

    /**
     * Gets the org_id property value. The org_id property
     * @return string|null
    */
    public function getOrgId(): ?string {
        return $this->org_id;
    }

    /**
     * Gets the role property value. The role property
     * @return string|null
    */
    public function getRole(): ?string {
        return $this->role;
    }

    /**
     * Gets the state property value. The state property
     * @return string|null
    */
    public function getState(): ?string {
        return $this->state;
    }

    /**
     * Gets the user_id property value. The user_id property
     * @return string|null
    */
    public function getUserId(): ?string {
        return $this->user_id;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('id', $this->getId());
        $writer->writeStringValue('joined_at', $this->getJoinedAt());
        $writer->writeStringValue('organization_first_name', $this->getOrganizationFirstName());
        $writer->writeStringValue('organization_last_name', $this->getOrganizationLastName());
        $writer->writeStringValue('organization_username', $this->getOrganizationUsername());
        $writer->writeStringValue('org_id', $this->getOrgId());
        $writer->writeStringValue('role', $this->getRole());
        $writer->writeStringValue('state', $this->getState());
        $writer->writeStringValue('user_id', $this->getUserId());
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
     * Sets the id property value. The id property
     * @param string|null $value Value to set for the id property.
    */
    public function setId(?string $value): void {
        $this->id = $value;
    }

    /**
     * Sets the joined_at property value. The joined_at property
     * @param string|null $value Value to set for the joined_at property.
    */
    public function setJoinedAt(?string $value): void {
        $this->joined_at = $value;
    }

    /**
     * Sets the organization_first_name property value. The organization_first_name property
     * @param string|null $value Value to set for the organization_first_name property.
    */
    public function setOrganizationFirstName(?string $value): void {
        $this->organization_first_name = $value;
    }

    /**
     * Sets the organization_last_name property value. The organization_last_name property
     * @param string|null $value Value to set for the organization_last_name property.
    */
    public function setOrganizationLastName(?string $value): void {
        $this->organization_last_name = $value;
    }

    /**
     * Sets the organization_username property value. The organization_username property
     * @param string|null $value Value to set for the organization_username property.
    */
    public function setOrganizationUsername(?string $value): void {
        $this->organization_username = $value;
    }

    /**
     * Sets the org_id property value. The org_id property
     * @param string|null $value Value to set for the org_id property.
    */
    public function setOrgId(?string $value): void {
        $this->org_id = $value;
    }

    /**
     * Sets the role property value. The role property
     * @param string|null $value Value to set for the role property.
    */
    public function setRole(?string $value): void {
        $this->role = $value;
    }

    /**
     * Sets the state property value. The state property
     * @param string|null $value Value to set for the state property.
    */
    public function setState(?string $value): void {
        $this->state = $value;
    }

    /**
     * Sets the user_id property value. The user_id property
     * @param string|null $value Value to set for the user_id property.
    */
    public function setUserId(?string $value): void {
        $this->user_id = $value;
    }

}
