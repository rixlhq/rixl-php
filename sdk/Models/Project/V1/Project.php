<?php

namespace Rixl\Sdk\Models\Project\V1;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;
use Rixl\Sdk\Models\Common\V1\VideoQuality;

class Project implements Parsable 
{
    /**
     * @var DateTime|null $created_at The created_at property
    */
    private ?DateTime $created_at = null;
    
    /**
     * @var string|null $custom_domain The custom_domain property
    */
    private ?string $custom_domain = null;
    
    /**
     * @var string|null $id The id property
    */
    private ?string $id = null;
    
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
     * @var DateTime|null $updated_at The updated_at property
    */
    private ?DateTime $updated_at = null;
    
    /**
     * @var VideoQuality|null $video_quality The video_quality property
    */
    private ?VideoQuality $video_quality = null;
    
    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return Project
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): Project {
        return new Project();
    }

    /**
     * Gets the created_at property value. The created_at property
     * @return DateTime|null
    */
    public function getCreatedAt(): ?DateTime {
        return $this->created_at;
    }

    /**
     * Gets the custom_domain property value. The custom_domain property
     * @return string|null
    */
    public function getCustomDomain(): ?string {
        return $this->custom_domain;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'created_at' => fn(ParseNode $n) => $o->setCreatedAt($n->getDateTimeValue()),
            'custom_domain' => fn(ParseNode $n) => $o->setCustomDomain($n->getStringValue()),
            'id' => fn(ParseNode $n) => $o->setId($n->getStringValue()),
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
            'updated_at' => fn(ParseNode $n) => $o->setUpdatedAt($n->getDateTimeValue()),
            'video_quality' => fn(ParseNode $n) => $o->setVideoQuality($n->getEnumValue(VideoQuality::class)),
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
     * Gets the updated_at property value. The updated_at property
     * @return DateTime|null
    */
    public function getUpdatedAt(): ?DateTime {
        return $this->updated_at;
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
        $writer->writeDateTimeValue('created_at', $this->getCreatedAt());
        $writer->writeStringValue('custom_domain', $this->getCustomDomain());
        $writer->writeStringValue('id', $this->getId());
        $writer->writeStringValue('name', $this->getName());
        $writer->writeStringValue('org_id', $this->getOrgId());
        $writer->writeCollectionOfPrimitiveValues('regions', $this->getRegions());
        $writer->writeDateTimeValue('updated_at', $this->getUpdatedAt());
        $writer->writeEnumValue('video_quality', $this->getVideoQuality());
    }

    /**
     * Sets the created_at property value. The created_at property
     * @param DateTime|null $value Value to set for the created_at property.
    */
    public function setCreatedAt(?DateTime $value): void {
        $this->created_at = $value;
    }

    /**
     * Sets the custom_domain property value. The custom_domain property
     * @param string|null $value Value to set for the custom_domain property.
    */
    public function setCustomDomain(?string $value): void {
        $this->custom_domain = $value;
    }

    /**
     * Sets the id property value. The id property
     * @param string|null $value Value to set for the id property.
    */
    public function setId(?string $value): void {
        $this->id = $value;
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
     * Sets the updated_at property value. The updated_at property
     * @param DateTime|null $value Value to set for the updated_at property.
    */
    public function setUpdatedAt(?DateTime $value): void {
        $this->updated_at = $value;
    }

    /**
     * Sets the video_quality property value. The video_quality property
     * @param VideoQuality|null $value Value to set for the video_quality property.
    */
    public function setVideoQuality(?VideoQuality $value): void {
        $this->video_quality = $value;
    }

}
