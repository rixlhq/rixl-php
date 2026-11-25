<?php

namespace Rixl\Sdk\Models\Auth\V1;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class CreateOrganizationRequest implements Parsable 
{
    /**
     * @var Organization|null $organization The organization property
    */
    private ?Organization $organization = null;
    
    /**
     * @var string|null $request_id Optional UUID. Retries replay the original response while the org exists.
    */
    private ?string $request_id = null;
    
    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return CreateOrganizationRequest
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): CreateOrganizationRequest {
        return new CreateOrganizationRequest();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'organization' => fn(ParseNode $n) => $o->setOrganization($n->getObjectValue([Organization::class, 'createFromDiscriminatorValue'])),
            'request_id' => fn(ParseNode $n) => $o->setRequestId($n->getStringValue()),
        ];
    }

    /**
     * Gets the organization property value. The organization property
     * @return Organization|null
    */
    public function getOrganization(): ?Organization {
        return $this->organization;
    }

    /**
     * Gets the request_id property value. Optional UUID. Retries replay the original response while the org exists.
     * @return string|null
    */
    public function getRequestId(): ?string {
        return $this->request_id;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeObjectValue('organization', $this->getOrganization());
        $writer->writeStringValue('request_id', $this->getRequestId());
    }

    /**
     * Sets the organization property value. The organization property
     * @param Organization|null $value Value to set for the organization property.
    */
    public function setOrganization(?Organization $value): void {
        $this->organization = $value;
    }

    /**
     * Sets the request_id property value. Optional UUID. Retries replay the original response while the org exists.
     * @param string|null $value Value to set for the request_id property.
    */
    public function setRequestId(?string $value): void {
        $this->request_id = $value;
    }

}
