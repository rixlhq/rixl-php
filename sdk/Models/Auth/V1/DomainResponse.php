<?php

namespace Rixl\Sdk\Models\Auth\V1;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class DomainResponse implements Parsable 
{
    /**
     * @var string|null $domain The domain property
    */
    private ?string $domain = null;
    
    /**
     * @var string|null $id The id property
    */
    private ?string $id = null;
    
    /**
     * @var bool|null $present The present property
    */
    private ?bool $present = null;
    
    /**
     * @var DomainStatus|null $status The status property
    */
    private ?DomainStatus $status = null;
    
    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return DomainResponse
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): DomainResponse {
        return new DomainResponse();
    }

    /**
     * Gets the domain property value. The domain property
     * @return string|null
    */
    public function getDomain(): ?string {
        return $this->domain;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'domain' => fn(ParseNode $n) => $o->setDomain($n->getStringValue()),
            'id' => fn(ParseNode $n) => $o->setId($n->getStringValue()),
            'present' => fn(ParseNode $n) => $o->setPresent($n->getBooleanValue()),
            'status' => fn(ParseNode $n) => $o->setStatus($n->getObjectValue([DomainStatus::class, 'createFromDiscriminatorValue'])),
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
     * Gets the present property value. The present property
     * @return bool|null
    */
    public function getPresent(): ?bool {
        return $this->present;
    }

    /**
     * Gets the status property value. The status property
     * @return DomainStatus|null
    */
    public function getStatus(): ?DomainStatus {
        return $this->status;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('domain', $this->getDomain());
        $writer->writeStringValue('id', $this->getId());
        $writer->writeBooleanValue('present', $this->getPresent());
        $writer->writeObjectValue('status', $this->getStatus());
    }

    /**
     * Sets the domain property value. The domain property
     * @param string|null $value Value to set for the domain property.
    */
    public function setDomain(?string $value): void {
        $this->domain = $value;
    }

    /**
     * Sets the id property value. The id property
     * @param string|null $value Value to set for the id property.
    */
    public function setId(?string $value): void {
        $this->id = $value;
    }

    /**
     * Sets the present property value. The present property
     * @param bool|null $value Value to set for the present property.
    */
    public function setPresent(?bool $value): void {
        $this->present = $value;
    }

    /**
     * Sets the status property value. The status property
     * @param DomainStatus|null $value Value to set for the status property.
    */
    public function setStatus(?DomainStatus $value): void {
        $this->status = $value;
    }

}
