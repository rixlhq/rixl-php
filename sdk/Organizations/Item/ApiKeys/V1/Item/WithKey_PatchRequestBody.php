<?php

namespace Rixl\Sdk\Organizations\Item\ApiKeys\V1\Item;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;
use Rixl\Sdk\Models\Google\Protobuf\Timestamp;

class WithKey_PatchRequestBody implements Parsable 
{
    /**
     * @var Timestamp|null $expiring_at The expiring_at property
    */
    private ?Timestamp $expiring_at = null;
    
    /**
     * @var string|null $name The name property
    */
    private ?string $name = null;
    
    /**
     * @var array<string>|null $policy_ids The policy_ids property
    */
    private ?array $policy_ids = null;
    
    /**
     * @var bool|null $replace_policies The replace_policies property
    */
    private ?bool $replace_policies = null;
    
    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return WithKey_PatchRequestBody
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): WithKey_PatchRequestBody {
        return new WithKey_PatchRequestBody();
    }

    /**
     * Gets the expiring_at property value. The expiring_at property
     * @return Timestamp|null
    */
    public function getExpiringAt(): ?Timestamp {
        return $this->expiring_at;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'expiring_at' => fn(ParseNode $n) => $o->setExpiringAt($n->getObjectValue([Timestamp::class, 'createFromDiscriminatorValue'])),
            'name' => fn(ParseNode $n) => $o->setName($n->getStringValue()),
            'policy_ids' => function (ParseNode $n) {
                $val = $n->getCollectionOfPrimitiveValues();
                if (is_array($val)) {
                    TypeUtils::validateCollectionValues($val, 'string');
                }
                /** @var array<string>|null $val */
                $this->setPolicyIds($val);
            },
            'replace_policies' => fn(ParseNode $n) => $o->setReplacePolicies($n->getBooleanValue()),
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
     * Gets the replace_policies property value. The replace_policies property
     * @return bool|null
    */
    public function getReplacePolicies(): ?bool {
        return $this->replace_policies;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeObjectValue('expiring_at', $this->getExpiringAt());
        $writer->writeStringValue('name', $this->getName());
        $writer->writeCollectionOfPrimitiveValues('policy_ids', $this->getPolicyIds());
        $writer->writeBooleanValue('replace_policies', $this->getReplacePolicies());
    }

    /**
     * Sets the expiring_at property value. The expiring_at property
     * @param Timestamp|null $value Value to set for the expiring_at property.
    */
    public function setExpiringAt(?Timestamp $value): void {
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
     * Sets the replace_policies property value. The replace_policies property
     * @param bool|null $value Value to set for the replace_policies property.
    */
    public function setReplacePolicies(?bool $value): void {
        $this->replace_policies = $value;
    }

}
