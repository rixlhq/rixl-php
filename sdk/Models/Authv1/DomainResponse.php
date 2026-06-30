<?php

namespace Rixl\Sdk\Models\Authv1;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class DomainResponse implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var bool|null $auto_join The auto_join property
    */
    private ?bool $auto_join = null;
    
    /**
     * @var string|null $domain The domain property
    */
    private ?string $domain = null;
    
    /**
     * @var string|null $expires_at The expires_at property
    */
    private ?string $expires_at = null;
    
    /**
     * @var string|null $id The id property
    */
    private ?string $id = null;
    
    /**
     * @var string|null $message The message property
    */
    private ?string $message = null;
    
    /**
     * @var bool|null $present The present property
    */
    private ?bool $present = null;
    
    /**
     * @var string|null $status The status property
    */
    private ?string $status = null;
    
    /**
     * @var string|null $verification_token The verification_token property
    */
    private ?string $verification_token = null;
    
    /**
     * @var string|null $verified_at The verified_at property
    */
    private ?string $verified_at = null;
    
    /**
     * Instantiates a new DomainResponse and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return DomainResponse
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): DomainResponse {
        return new DomainResponse();
    }

    /**
     * Gets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        return $this->additionalData;
    }

    /**
     * Gets the auto_join property value. The auto_join property
     * @return bool|null
    */
    public function getAutoJoin(): ?bool {
        return $this->auto_join;
    }

    /**
     * Gets the domain property value. The domain property
     * @return string|null
    */
    public function getDomain(): ?string {
        return $this->domain;
    }

    /**
     * Gets the expires_at property value. The expires_at property
     * @return string|null
    */
    public function getExpiresAt(): ?string {
        return $this->expires_at;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'auto_join' => fn(ParseNode $n) => $o->setAutoJoin($n->getBooleanValue()),
            'domain' => fn(ParseNode $n) => $o->setDomain($n->getStringValue()),
            'expires_at' => fn(ParseNode $n) => $o->setExpiresAt($n->getStringValue()),
            'id' => fn(ParseNode $n) => $o->setId($n->getStringValue()),
            'message' => fn(ParseNode $n) => $o->setMessage($n->getStringValue()),
            'present' => fn(ParseNode $n) => $o->setPresent($n->getBooleanValue()),
            'status' => fn(ParseNode $n) => $o->setStatus($n->getStringValue()),
            'verification_token' => fn(ParseNode $n) => $o->setVerificationToken($n->getStringValue()),
            'verified_at' => fn(ParseNode $n) => $o->setVerifiedAt($n->getStringValue()),
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
     * Gets the message property value. The message property
     * @return string|null
    */
    public function getMessage(): ?string {
        return $this->message;
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
     * @return string|null
    */
    public function getStatus(): ?string {
        return $this->status;
    }

    /**
     * Gets the verification_token property value. The verification_token property
     * @return string|null
    */
    public function getVerificationToken(): ?string {
        return $this->verification_token;
    }

    /**
     * Gets the verified_at property value. The verified_at property
     * @return string|null
    */
    public function getVerifiedAt(): ?string {
        return $this->verified_at;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeBooleanValue('auto_join', $this->getAutoJoin());
        $writer->writeStringValue('domain', $this->getDomain());
        $writer->writeStringValue('expires_at', $this->getExpiresAt());
        $writer->writeStringValue('id', $this->getId());
        $writer->writeStringValue('message', $this->getMessage());
        $writer->writeBooleanValue('present', $this->getPresent());
        $writer->writeStringValue('status', $this->getStatus());
        $writer->writeStringValue('verification_token', $this->getVerificationToken());
        $writer->writeStringValue('verified_at', $this->getVerifiedAt());
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
     * Sets the auto_join property value. The auto_join property
     * @param bool|null $value Value to set for the auto_join property.
    */
    public function setAutoJoin(?bool $value): void {
        $this->auto_join = $value;
    }

    /**
     * Sets the domain property value. The domain property
     * @param string|null $value Value to set for the domain property.
    */
    public function setDomain(?string $value): void {
        $this->domain = $value;
    }

    /**
     * Sets the expires_at property value. The expires_at property
     * @param string|null $value Value to set for the expires_at property.
    */
    public function setExpiresAt(?string $value): void {
        $this->expires_at = $value;
    }

    /**
     * Sets the id property value. The id property
     * @param string|null $value Value to set for the id property.
    */
    public function setId(?string $value): void {
        $this->id = $value;
    }

    /**
     * Sets the message property value. The message property
     * @param string|null $value Value to set for the message property.
    */
    public function setMessage(?string $value): void {
        $this->message = $value;
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
     * @param string|null $value Value to set for the status property.
    */
    public function setStatus(?string $value): void {
        $this->status = $value;
    }

    /**
     * Sets the verification_token property value. The verification_token property
     * @param string|null $value Value to set for the verification_token property.
    */
    public function setVerificationToken(?string $value): void {
        $this->verification_token = $value;
    }

    /**
     * Sets the verified_at property value. The verified_at property
     * @param string|null $value Value to set for the verified_at property.
    */
    public function setVerifiedAt(?string $value): void {
        $this->verified_at = $value;
    }

}
