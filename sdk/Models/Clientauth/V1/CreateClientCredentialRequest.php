<?php

namespace Rixl\Sdk\Models\Clientauth\V1;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class CreateClientCredentialRequest implements Parsable 
{
    /**
     * @var CreateClientCredentialRequest_alg|null $alg The alg property
    */
    private ?CreateClientCredentialRequest_alg $alg = null;
    
    /**
     * @var string|null $name The name property
    */
    private ?string $name = null;
    
    /**
     * @var string|null $org_id The org_id property
    */
    private ?string $org_id = null;
    
    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return CreateClientCredentialRequest
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): CreateClientCredentialRequest {
        return new CreateClientCredentialRequest();
    }

    /**
     * Gets the alg property value. The alg property
     * @return CreateClientCredentialRequest_alg|null
    */
    public function getAlg(): ?CreateClientCredentialRequest_alg {
        return $this->alg;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'alg' => fn(ParseNode $n) => $o->setAlg($n->getEnumValue(CreateClientCredentialRequest_alg::class)),
            'name' => fn(ParseNode $n) => $o->setName($n->getStringValue()),
            'org_id' => fn(ParseNode $n) => $o->setOrgId($n->getStringValue()),
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
     * Gets the org_id property value. The org_id property
     * @return string|null
    */
    public function getOrgId(): ?string {
        return $this->org_id;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeEnumValue('alg', $this->getAlg());
        $writer->writeStringValue('name', $this->getName());
        $writer->writeStringValue('org_id', $this->getOrgId());
    }

    /**
     * Sets the alg property value. The alg property
     * @param CreateClientCredentialRequest_alg|null $value Value to set for the alg property.
    */
    public function setAlg(?CreateClientCredentialRequest_alg $value): void {
        $this->alg = $value;
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

}
