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
     * @var string|null $org_id The org_id property
    */
    private ?string $org_id = null;
    
    /**
     * @var array<string>|null $regions The regions property
    */
    private ?array $regions = null;
    
    /**
     * @var VideoQuality|null $video_quality The video_quality property
    */
    private ?VideoQuality $video_quality = null;
    
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
            'org_id' => fn(ParseNode $n) => $o->setOrgId($n->getStringValue()),
            'regions' => function (ParseNode $n) {
                $val = $n->getCollectionOfPrimitiveValues();
                if (is_array($val)) {
                    TypeUtils::validateCollectionValues($val, 'string');
                }
                /** @var array<string>|null $val */
                $this->setRegions($val);
            },
            'video_quality' => fn(ParseNode $n) => $o->setVideoQuality($n->getEnumValue(VideoQuality::class)),
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
     * Gets the org_id property value. The org_id property
     * @return string|null
    */
    public function getOrgId(): ?string {
        return $this->org_id;
    }

    /**
     * Gets the regions property value. The regions property
     * @return array<string>|null
    */
    public function getRegions(): ?array {
        return $this->regions;
    }

    /**
     * Gets the video_quality property value. The video_quality property
     * @return VideoQuality|null
    */
    public function getVideoQuality(): ?VideoQuality {
        return $this->video_quality;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('name', $this->getName());
        $writer->writeStringValue('org_id', $this->getOrgId());
        $writer->writeCollectionOfPrimitiveValues('regions', $this->getRegions());
        $writer->writeEnumValue('video_quality', $this->getVideoQuality());
    }

    /**
     * Sets the name property value. The name property
     * @param string|null $value Value to set for the name property.
    */
    public function setName(?string $value): void {
        $this->name = $value;
    }

    /**
     * Sets the org_id property value. The org_id property
     * @param string|null $value Value to set for the org_id property.
    */
    public function setOrgId(?string $value): void {
        $this->org_id = $value;
    }

    /**
     * Sets the regions property value. The regions property
     * @param array<string>|null $value Value to set for the regions property.
    */
    public function setRegions(?array $value): void {
        $this->regions = $value;
    }

    /**
     * Sets the video_quality property value. The video_quality property
     * @param VideoQuality|null $value Value to set for the video_quality property.
    */
    public function setVideoQuality(?VideoQuality $value): void {
        $this->video_quality = $value;
    }

}
