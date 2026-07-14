<?php

namespace Rixl\Sdk\Media\V1\Projects\Item\Images\Upload;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Rixl\Sdk\Models\Common\V1\ImageFormat;

class UploadPostRequestBody implements Parsable 
{
    /**
     * @var ImageFormat|null $format The format property
    */
    private ?ImageFormat $format = null;
    
    /**
     * @var string|null $name The name property
    */
    private ?string $name = null;
    
    /**
     * @var string|null $orgId The orgId property
    */
    private ?string $orgId = null;
    
    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return UploadPostRequestBody
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): UploadPostRequestBody {
        return new UploadPostRequestBody();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'format' => fn(ParseNode $n) => $o->setFormat($n->getEnumValue(ImageFormat::class)),
            'name' => fn(ParseNode $n) => $o->setName($n->getStringValue()),
            'orgId' => fn(ParseNode $n) => $o->setOrgId($n->getStringValue()),
        ];
    }

    /**
     * Gets the format property value. The format property
     * @return ImageFormat|null
    */
    public function getFormat(): ?ImageFormat {
        return $this->format;
    }

    /**
     * Gets the name property value. The name property
     * @return string|null
    */
    public function getName(): ?string {
        return $this->name;
    }

    /**
     * Gets the orgId property value. The orgId property
     * @return string|null
    */
    public function getOrgId(): ?string {
        return $this->orgId;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeEnumValue('format', $this->getFormat());
        $writer->writeStringValue('name', $this->getName());
        $writer->writeStringValue('orgId', $this->getOrgId());
    }

    /**
     * Sets the format property value. The format property
     * @param ImageFormat|null $value Value to set for the format property.
    */
    public function setFormat(?ImageFormat $value): void {
        $this->format = $value;
    }

    /**
     * Sets the name property value. The name property
     * @param string|null $value Value to set for the name property.
    */
    public function setName(?string $value): void {
        $this->name = $value;
    }

    /**
     * Sets the orgId property value. The orgId property
     * @param string|null $value Value to set for the orgId property.
    */
    public function setOrgId(?string $value): void {
        $this->orgId = $value;
    }

}
