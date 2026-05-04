<?php

namespace Rixl\Sdk\Videos\Item\AudioTracks\Item;

use Microsoft\Kiota\Abstractions\Serialization\ComposedTypeWrapper;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Psr\Http\Message\StreamInterface;

/**
 * Composed type wrapper for classes StreamInterface, string
*/
class Lang_codePutRequestBody implements ComposedTypeWrapper, Parsable 
{
    /**
     * @var StreamInterface|null $binary Composed type representation for type StreamInterface
    */
    private ?StreamInterface $binary = null;
    
    /**
     * @var string|null $string Composed type representation for type string
    */
    private ?string $string = null;
    
    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return Lang_codePutRequestBody
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): Lang_codePutRequestBody {
        $result = new Lang_codePutRequestBody();
        if ($parseNode->getBinaryContent() !== null) {
            $finalValue = $parseNode->getBinaryContent();
            $result->setBinary($finalValue);
        } else if ($parseNode->getStringValue() !== null) {
            $finalValue = $parseNode->getStringValue();
            $result->setString($finalValue);
        }
        return $result;
    }

    /**
     * Gets the binary property value. Composed type representation for type StreamInterface
     * @return StreamInterface|null
    */
    public function getBinary(): ?StreamInterface {
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
        if ($this->getBinary() !== null) {
            $writer->writeBinaryContent(null, $this->getBinary());
        } else if ($this->getString() !== null) {
            $writer->writeStringValue(null, $this->getString());
        }
    }

    /**
     * Sets the binary property value. Composed type representation for type StreamInterface
     * @param StreamInterface|null $value Value to set for the binary property.
    */
    public function setBinary(?StreamInterface $value): void {
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
