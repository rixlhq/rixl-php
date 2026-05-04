<?php

namespace Rixl\Sdk\Models\Github_com_rixlhq_api_internal_errors;

use Microsoft\Kiota\Abstractions\ApiException;
use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

/**
 * Standard error response returned by the API
*/
class ErrorResponse extends ApiException implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var string|null $details Optional details about the error
    */
    private ?string $details = null;
    
    /**
     * @var string|null $error Error message describing what went wrong
    */
    private ?string $error = null;
    
    /**
     * @var int|null $escapedCode HTTP status code
    */
    private ?int $escapedCode = null;
    
    /**
     * Instantiates a new ErrorResponse and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return ErrorResponse
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): ErrorResponse {
        return new ErrorResponse();
    }

    /**
     * Gets the code property value. HTTP status code
     * @return int|null
    */
    public function escapedGetCode(): ?int {
        return $this->escapedCode;
    }

    /**
     * Gets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        return $this->additionalData;
    }

    /**
     * Gets the details property value. Optional details about the error
     * @return string|null
    */
    public function getDetails(): ?string {
        return $this->details;
    }

    /**
     * Gets the error property value. Error message describing what went wrong
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
            'details' => fn(ParseNode $n) => $o->setDetails($n->getStringValue()),
            'error' => fn(ParseNode $n) => $o->setError($n->getStringValue()),
            'code' => fn(ParseNode $n) => $o->setCode($n->getIntegerValue()),
        ];
    }

    /**
     * The primary error message.
     * @return string
    */
    public function getPrimaryErrorMessage(): string {
        return parent::getMessage();
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('details', $this->getDetails());
        $writer->writeStringValue('error', $this->getError());
        $writer->writeIntegerValue('code', $this->escapedGetCode());
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
     * Sets the code property value. HTTP status code
     * @param int|null $value Value to set for the code property.
    */
    public function setCode(?int $value): void {
        $this->escapedCode = $value;
    }

    /**
     * Sets the details property value. Optional details about the error
     * @param string|null $value Value to set for the details property.
    */
    public function setDetails(?string $value): void {
        $this->details = $value;
    }

    /**
     * Sets the error property value. Error message describing what went wrong
     * @param string|null $value Value to set for the error property.
    */
    public function setError(?string $value): void {
        $this->error = $value;
    }

}
