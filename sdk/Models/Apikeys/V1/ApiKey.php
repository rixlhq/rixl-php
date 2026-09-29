<?php

namespace Rixl\Sdk\Models\Apikeys\V1;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

class ApiKey implements Parsable 
{
    /**
     * @var DateTime|null $created_at The created_at property
    */
    private ?DateTime $created_at = null;
    
    /**
     * @var DateTime|null $expiring_at The expiring_at property
    */
    private ?DateTime $expiring_at = null;
    
    /**
     * @var string|null $id The id property
    */
    private ?string $id = null;
    
    /**
     * @var DateTime|null $last_used The last_used property
    */
    private ?DateTime $last_used = null;
    
    /**
     * @var string|null $name The name property
    */
    private ?string $name = null;
    
    /**
     * @var string|null $org_id The org_id property
    */
    private ?string $org_id = null;
    
    /**
     * @var array<string>|null $permissions The permissions property
    */
    private ?array $permissions = null;
    
    /**
     * @var array<string>|null $policy_ids The policy_ids property
    */
    private ?array $policy_ids = null;
    
    /**
     * @var string|null $project_id The project_id property
    */
    private ?string $project_id = null;
    
    /**
     * @var string|null $project_name The project_name property
    */
    private ?string $project_name = null;
    
    /**
     * @var string|null $secret The secret property
    */
    private ?string $secret = null;
    
    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return ApiKey
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): ApiKey {
        return new ApiKey();
    }

    /**
     * Gets the created_at property value. The created_at property
     * @return DateTime|null
    */
    public function getCreatedAt(): ?DateTime {
        return $this->created_at;
    }

    /**
     * Gets the expiring_at property value. The expiring_at property
     * @return DateTime|null
    */
    public function getExpiringAt(): ?DateTime {
        return $this->expiring_at;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'created_at' => fn(ParseNode $n) => $o->setCreatedAt($n->getDateTimeValue()),
            'expiring_at' => fn(ParseNode $n) => $o->setExpiringAt($n->getDateTimeValue()),
            'id' => fn(ParseNode $n) => $o->setId($n->getStringValue()),
            'last_used' => fn(ParseNode $n) => $o->setLastUsed($n->getDateTimeValue()),
            'name' => fn(ParseNode $n) => $o->setName($n->getStringValue()),
            'org_id' => fn(ParseNode $n) => $o->setOrgId($n->getStringValue()),
            'permissions' => function (ParseNode $n) {
                $val = $n->getCollectionOfPrimitiveValues();
                if (is_array($val)) {
                    TypeUtils::validateCollectionValues($val, 'string');
                }
                /** @var array<string>|null $val */
                $this->setPermissions($val);
            },
            'policy_ids' => function (ParseNode $n) {
                $val = $n->getCollectionOfPrimitiveValues();
                if (is_array($val)) {
                    TypeUtils::validateCollectionValues($val, 'string');
                }
                /** @var array<string>|null $val */
                $this->setPolicyIds($val);
            },
            'project_id' => fn(ParseNode $n) => $o->setProjectId($n->getStringValue()),
            'project_name' => fn(ParseNode $n) => $o->setProjectName($n->getStringValue()),
            'secret' => fn(ParseNode $n) => $o->setSecret($n->getStringValue()),
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
     * Gets the last_used property value. The last_used property
     * @return DateTime|null
    */
    public function getLastUsed(): ?DateTime {
        return $this->last_used;
    }

    /**
     * Gets the name property value. The name property
     * @return string|null
    */
    public function getName(): ?string {
        return $this->name;
    }

    /**
     * Gets the org_id property value. The org_id property
     * @return string|null
    */
    public function getOrgId(): ?string {
        return $this->org_id;
    }

    /**
     * Gets the permissions property value. The permissions property
     * @return array<string>|null
    */
    public function getPermissions(): ?array {
        return $this->permissions;
    }

    /**
     * Gets the policy_ids property value. The policy_ids property
     * @return array<string>|null
    */
    public function getPolicyIds(): ?array {
        return $this->policy_ids;
    }

    /**
     * Gets the project_id property value. The project_id property
     * @return string|null
    */
    public function getProjectId(): ?string {
        return $this->project_id;
    }

    /**
     * Gets the project_name property value. The project_name property
     * @return string|null
    */
    public function getProjectName(): ?string {
        return $this->project_name;
    }

    /**
     * Gets the secret property value. The secret property
     * @return string|null
    */
    public function getSecret(): ?string {
        return $this->secret;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeDateTimeValue('created_at', $this->getCreatedAt());
        $writer->writeDateTimeValue('expiring_at', $this->getExpiringAt());
        $writer->writeStringValue('id', $this->getId());
        $writer->writeDateTimeValue('last_used', $this->getLastUsed());
        $writer->writeStringValue('name', $this->getName());
        $writer->writeStringValue('org_id', $this->getOrgId());
        $writer->writeCollectionOfPrimitiveValues('permissions', $this->getPermissions());
        $writer->writeCollectionOfPrimitiveValues('policy_ids', $this->getPolicyIds());
        $writer->writeStringValue('project_id', $this->getProjectId());
        $writer->writeStringValue('project_name', $this->getProjectName());
        $writer->writeStringValue('secret', $this->getSecret());
    }

    /**
     * Sets the created_at property value. The created_at property
     * @param DateTime|null $value Value to set for the created_at property.
    */
    public function setCreatedAt(?DateTime $value): void {
        $this->created_at = $value;
    }

    /**
     * Sets the expiring_at property value. The expiring_at property
     * @param DateTime|null $value Value to set for the expiring_at property.
    */
    public function setExpiringAt(?DateTime $value): void {
        $this->expiring_at = $value;
    }

    /**
     * Sets the id property value. The id property
     * @param string|null $value Value to set for the id property.
    */
    public function setId(?string $value): void {
        $this->id = $value;
    }

    /**
     * Sets the last_used property value. The last_used property
     * @param DateTime|null $value Value to set for the last_used property.
    */
    public function setLastUsed(?DateTime $value): void {
        $this->last_used = $value;
    }

    /**
     * Sets the name property value. The name property
     * @param string|null $value Value to set for the name property.
    */
    public function setName(?string $value): void {
        $this->name = $value;
    }

    /**
     * Sets the org_id property value. The org_id property
     * @param string|null $value Value to set for the org_id property.
    */
    public function setOrgId(?string $value): void {
        $this->org_id = $value;
    }

    /**
     * Sets the permissions property value. The permissions property
     * @param array<string>|null $value Value to set for the permissions property.
    */
    public function setPermissions(?array $value): void {
        $this->permissions = $value;
    }

    /**
     * Sets the policy_ids property value. The policy_ids property
     * @param array<string>|null $value Value to set for the policy_ids property.
    */
    public function setPolicyIds(?array $value): void {
        $this->policy_ids = $value;
    }

    /**
     * Sets the project_id property value. The project_id property
     * @param string|null $value Value to set for the project_id property.
    */
    public function setProjectId(?string $value): void {
        $this->project_id = $value;
    }

    /**
     * Sets the project_name property value. The project_name property
     * @param string|null $value Value to set for the project_name property.
    */
    public function setProjectName(?string $value): void {
        $this->project_name = $value;
    }

    /**
     * Sets the secret property value. The secret property
     * @param string|null $value Value to set for the secret property.
    */
    public function setSecret(?string $value): void {
        $this->secret = $value;
    }

}
