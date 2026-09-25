<?php

namespace Rixl\Sdk\Organizations\Item\ApiKeys\V1;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

class V1PostRequestBody implements Parsable 
{
    /**
     * @var DateTime|null $expiring_at The expiring_at property
    */
    private ?DateTime $expiring_at = null;
    
    /**
     * @var string|null $name The name property
    */
    private ?string $name = null;
    
    /**
     * @var array<string>|null $policy_ids The policy_ids property
    */
    private ?array $policy_ids = null;
    
    /**
     * @var string|null $project_id The project_id property
    */
    private ?string $project_id = null;
    
    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return V1PostRequestBody
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): V1PostRequestBody {
        return new V1PostRequestBody();
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
            'expiring_at' => fn(ParseNode $n) => $o->setExpiringAt($n->getDateTimeValue()),
            'name' => fn(ParseNode $n) => $o->setName($n->getStringValue()),
            'policy_ids' => function (ParseNode $n) {
                $val = $n->getCollectionOfPrimitiveValues();
                if (is_array($val)) {
                    TypeUtils::validateCollectionValues($val, 'string');
                }
                /** @var array<string>|null $val */
                $this->setPolicyIds($val);
            },
            'project_id' => fn(ParseNode $n) => $o->setProjectId($n->getStringValue()),
        ];
    }

    /**
     * Gets the name property value. The name property
     * @return string|null
    */
    public function getName(): ?string {
        return $this->name;
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
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeDateTimeValue('expiring_at', $this->getExpiringAt());
        $writer->writeStringValue('name', $this->getName());
        $writer->writeCollectionOfPrimitiveValues('policy_ids', $this->getPolicyIds());
        $writer->writeStringValue('project_id', $this->getProjectId());
    }

    /**
     * Sets the expiring_at property value. The expiring_at property
     * @param DateTime|null $value Value to set for the expiring_at property.
    */
    public function setExpiringAt(?DateTime $value): void {
        $this->expiring_at = $value;
    }

    /**
     * Sets the name property value. The name property
     * @param string|null $value Value to set for the name property.
    */
    public function setName(?string $value): void {
        $this->name = $value;
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

}
