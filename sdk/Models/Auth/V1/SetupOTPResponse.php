<?php

namespace Rixl\Sdk\Models\Auth\V1;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class SetupOTPResponse implements Parsable 
{
    /**
     * @var string|null $qr_code_url The qr_code_url property
    */
    private ?string $qr_code_url = null;
    
    /**
     * @var string|null $secret The secret property
    */
    private ?string $secret = null;
    
    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return SetupOTPResponse
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): SetupOTPResponse {
        return new SetupOTPResponse();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'qr_code_url' => fn(ParseNode $n) => $o->setQrCodeUrl($n->getStringValue()),
            'secret' => fn(ParseNode $n) => $o->setSecret($n->getStringValue()),
        ];
    }

    /**
     * Gets the qr_code_url property value. The qr_code_url property
     * @return string|null
    */
    public function getQrCodeUrl(): ?string {
        return $this->qr_code_url;
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
        $writer->writeStringValue('qr_code_url', $this->getQrCodeUrl());
        $writer->writeStringValue('secret', $this->getSecret());
    }

    /**
     * Sets the qr_code_url property value. The qr_code_url property
     * @param string|null $value Value to set for the qr_code_url property.
    */
    public function setQrCodeUrl(?string $value): void {
        $this->qr_code_url = $value;
    }

    /**
     * Sets the secret property value. The secret property
     * @param string|null $value Value to set for the secret property.
    */
    public function setSecret(?string $value): void {
        $this->secret = $value;
    }

}
