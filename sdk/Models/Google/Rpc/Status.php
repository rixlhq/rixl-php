<?php

namespace Rixl\Sdk\Models\Google\Rpc;

use Microsoft\Kiota\Abstractions\ApiException;
use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Rixl\Sdk\Models\Google\Protobuf\Any;

/**
 * The Status type defines a logical error model suitable for gRPC and REST APIs.
*/
class Status extends ApiException implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var array<Any>|null $details A list of messages that carry the error details.
    */
    private ?array $details = null;
    
    /**
     * @var int|null $escapedCode The status code, which should be an enum value of google.rpc.Code.
    */
    private ?int $escapedCode = null;
    
    /**
     * @var string|null $escapedMessage A developer-facing error message.
    */
    private ?string $escapedMessage = null;
    
    /**
     * Instantiates a new Status and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return Status
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): Status {
        return new Status();
    }

    /**
     * Gets the code property value. The status code, which should be an enum value of google.rpc.Code.
     * @return int|null
    */
    public function escapedGetCode(): ?int {
        return $this->escapedCode;
    }

    /**
     * Gets the message property value. A developer-facing error message.
     * @return string|null
    */
    public function escapedGetMessage(): ?string {
        return $this->escapedMessage;
    }

    /**
     * Gets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        return $this->additionalData;
    }

    /**
     * Gets the details property value. A list of messages that carry the error details.
     * @return array<Any>|null
    */
    public function getDetails(): ?array {
        return $this->details;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'details' => fn(ParseNode $n) => $o->setDetails($n->getCollectionOfObjectValues([Any::class, 'createFromDiscriminatorValue'])),
            'code' => fn(ParseNode $n) => $o->setCode($n->getIntegerValue()),
            'message' => fn(ParseNode $n) => $o->setMessage($n->getStringValue()),
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
        $writer->writeCollectionOfObjectValues('details', $this->getDetails());
        $writer->writeIntegerValue('code', $this->escapedGetCode());
        $writer->writeStringValue('message', $this->escapedGetMessage());
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
     * Sets the code property value. The status code, which should be an enum value of google.rpc.Code.
     * @param int|null $value Value to set for the code property.
    */
    public function setCode(?int $value): void {
        $this->escapedCode = $value;
    }

    /**
     * Sets the details property value. A list of messages that carry the error details.
     * @param array<Any>|null $value Value to set for the details property.
    */
    public function setDetails(?array $value): void {
        $this->details = $value;
    }

    /**
     * Sets the message property value. A developer-facing error message.
     * @param string|null $value Value to set for the message property.
    */
    public function setMessage(?string $value): void {
        $this->escapedMessage = $value;
    }

}
