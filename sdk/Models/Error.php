<?php

namespace Rixl\Sdk\Models;

use Microsoft\Kiota\Abstractions\ApiException;
use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class Error extends ApiException implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var string|null $error Human-readable message. Not stable; branch on the HTTP status.
    */
    private ?string $error = null;
    
    /**
     * @var Error_metadata|null $metadata Reason-specific details, such as `invitation_id` on `INVITATION_PENDING` or `max_age_seconds` on `STEP_UP_REQUIRED`. Absent when there is none.
    */
    private ?Error_metadata $metadata = null;
    
    /**
     * @var string|null $reason Machine-readable reason for some 4xx errors, such as `ORG_DELETED`, `MEMBERSHIP_SUSPENDED`, `NOT_A_MEMBER` or `STEP_UP_REQUIRED`. Absent when there is none, and always absent on 5xx.
    */
    private ?string $reason = null;
    
    /**
     * Instantiates a new Error and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return Error
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): Error {
        return new Error();
    }

    /**
     * Gets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        return $this->additionalData;
    }

    /**
     * Gets the error property value. Human-readable message. Not stable; branch on the HTTP status.
     * @return string|null
    */
    public function getError(): ?string {
        return $this->error;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'error' => fn(ParseNode $n) => $o->setError($n->getStringValue()),
            'metadata' => fn(ParseNode $n) => $o->setMetadata($n->getObjectValue([Error_metadata::class, 'createFromDiscriminatorValue'])),
            'reason' => fn(ParseNode $n) => $o->setReason($n->getStringValue()),
        ];
    }

    /**
     * Gets the metadata property value. Reason-specific details, such as `invitation_id` on `INVITATION_PENDING` or `max_age_seconds` on `STEP_UP_REQUIRED`. Absent when there is none.
     * @return Error_metadata|null
    */
    public function getMetadata(): ?Error_metadata {
        return $this->metadata;
    }

    /**
     * The primary error message.
     * @return string
    */
    public function getPrimaryErrorMessage(): string {
        return parent::getMessage();
    }

    /**
     * Gets the reason property value. Machine-readable reason for some 4xx errors, such as `ORG_DELETED`, `MEMBERSHIP_SUSPENDED`, `NOT_A_MEMBER` or `STEP_UP_REQUIRED`. Absent when there is none, and always absent on 5xx.
     * @return string|null
    */
    public function getReason(): ?string {
        return $this->reason;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('error', $this->getError());
        $writer->writeObjectValue('metadata', $this->getMetadata());
        $writer->writeStringValue('reason', $this->getReason());
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
     * Sets the error property value. Human-readable message. Not stable; branch on the HTTP status.
     * @param string|null $value Value to set for the error property.
    */
    public function setError(?string $value): void {
        $this->error = $value;
    }

    /**
     * Sets the metadata property value. Reason-specific details, such as `invitation_id` on `INVITATION_PENDING` or `max_age_seconds` on `STEP_UP_REQUIRED`. Absent when there is none.
     * @param Error_metadata|null $value Value to set for the metadata property.
    */
    public function setMetadata(?Error_metadata $value): void {
        $this->metadata = $value;
    }

    /**
     * Sets the reason property value. Machine-readable reason for some 4xx errors, such as `ORG_DELETED`, `MEMBERSHIP_SUSPENDED`, `NOT_A_MEMBER` or `STEP_UP_REQUIRED`. Absent when there is none, and always absent on 5xx.
     * @param string|null $value Value to set for the reason property.
    */
    public function setReason(?string $value): void {
        $this->reason = $value;
    }

}
