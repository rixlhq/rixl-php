<?php

namespace Rixl\Sdk\Videos\Item\AudioTracks;

use Microsoft\Kiota\Abstractions\Serialization\ComposedTypeWrapper;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;
use Psr\Http\Message\StreamInterface;

/**
 * Composed type wrapper for classes array, string
*/
class AudioTracksPostRequestBody implements ComposedTypeWrapper, Parsable 
{
    /**
     * @var array<StreamInterface>|null $binary Composed type representation for type array
    */
    private ?array $binary = null;
    
    /**
     * @var string|null $string Composed type representation for type string
    */
    private ?string $string = null;
    
    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return AudioTracksPostRequestBody
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): AudioTracksPostRequestBody {
        $result = new AudioTracksPostRequestBody();
        if ($parseNode->getStringValue() !== null) {
            $finalValue = $parseNode->getStringValue();
            $result->setString($finalValue);
        } else if ($parseNode->getCollectionOfPrimitiveValues('StreamInterface') !== null) {
            /** @var array<StreamInterface> $finalValue */
            $finalValue = $parseNode->getCollectionOfPrimitiveValues('StreamInterface');
            $result->setBinary($finalValue);
        }
        return $result;
    }

    /**
     * Gets the binary property value. Composed type representation for type array
     * @return array<StreamInterface>|null
    */
    public function getBinary(): ?array {
        return $this->binary;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        return [];
    }

    /**
     * Gets the string property value. Composed type representation for type string
     * @return string|null
    */
    public function getString(): ?string {
        return $this->string;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        if ($this->getString() !== null) {
            $writer->writeStringValue(null, $this->getString());
        } else if ($this->getBinary() !== null) {
            $writer->writeCollectionOfPrimitiveValues(null, $this->getBinary());
        }
    }

    /**
     * Sets the binary property value. Composed type representation for type array
     * @param array<StreamInterface>|null $value Value to set for the binary property.
    */
    public function setBinary(?array $value): void {
        $this->binary = $value;
    }

    /**
     * Sets the string property value. Composed type representation for type string
     * @param string|null $value Value to set for the string property.
    */
    public function setString(?string $value): void {
        $this->string = $value;
    }

}
