<?php

namespace Rixl\Sdk\Organizations\Item\Projects\V1;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;
use Rixl\Sdk\Models\Common\V1\VideoQuality;

class V1PostRequestBody implements Parsable 
{
    /**
     * @var string|null $name The name property
    */
    private ?string $name = null;
    
    /**
     * @var array<string>|null $regions The regions property
    */
    private ?array $regions = null;
    
    /**
     * @var VideoQuality|null $videoQuality The videoQuality property
    */
    private ?VideoQuality $videoQuality = null;
    
    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return V1PostRequestBody
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): V1PostRequestBody {
        return new V1PostRequestBody();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'name' => fn(ParseNode $n) => $o->setName($n->getStringValue()),
            'regions' => function (ParseNode $n) {
                $val = $n->getCollectionOfPrimitiveValues();
                if (is_array($val)) {
                    TypeUtils::validateCollectionValues($val, 'string');
                }
                /** @var array<string>|null $val */
                $this->setRegions($val);
            },
            'videoQuality' => fn(ParseNode $n) => $o->setVideoQuality($n->getEnumValue(VideoQuality::class)),
        ];
    }

    /**
     * Gets the name property value. The name property
     * @return string|null
    */
    public function getName(): ?string {
        return $this->name;
    }

    /**
     * Gets the regions property value. The regions property
     * @return array<string>|null
    */
    public function getRegions(): ?array {
        return $this->regions;
    }

    /**
     * Gets the videoQuality property value. The videoQuality property
     * @return VideoQuality|null
    */
    public function getVideoQuality(): ?VideoQuality {
        return $this->videoQuality;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('name', $this->getName());
        $writer->writeCollectionOfPrimitiveValues('regions', $this->getRegions());
        $writer->writeEnumValue('videoQuality', $this->getVideoQuality());
    }

    /**
     * Sets the name property value. The name property
     * @param string|null $value Value to set for the name property.
    */
    public function setName(?string $value): void {
        $this->name = $value;
    }

    /**
     * Sets the regions property value. The regions property
     * @param array<string>|null $value Value to set for the regions property.
    */
    public function setRegions(?array $value): void {
        $this->regions = $value;
    }

    /**
     * Sets the videoQuality property value. The videoQuality property
     * @param VideoQuality|null $value Value to set for the videoQuality property.
    */
    public function setVideoQuality(?VideoQuality $value): void {
        $this->videoQuality = $value;
    }

}
