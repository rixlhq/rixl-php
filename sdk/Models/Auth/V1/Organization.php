<?php

namespace Rixl\Sdk\Models\Auth\V1;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class Organization implements Parsable 
{
    /**
     * @var DateTime|null $created_at A point in time in RFC 3339 format, with up to nanosecond precision. Output uses UTC (`Z`); input may use an offset from UTC.
    */
    private ?DateTime $created_at = null;
    
    /**
     * @var DateTime|null $delete_time A point in time in RFC 3339 format, with up to nanosecond precision. Output uses UTC (`Z`); input may use an offset from UTC.
    */
    private ?DateTime $delete_time = null;
    
    /**
     * @var string|null $id The id property
    */
    private ?string $id = null;
    
    /**
     * @var string|null $image_id The image_id property
    */
    private ?string $image_id = null;
    
    /**
     * @var bool|null $internal The internal property
    */
    private ?bool $internal = null;
    
    /**
     * @var string|null $name The name property
    */
    private ?string $name = null;
    
    /**
     * @var bool|null $personal The personal property
    */
    private ?bool $personal = null;
    
    /**
     * @var DateTime|null $purge_time A point in time in RFC 3339 format, with up to nanosecond precision. Output uses UTC (`Z`); input may use an offset from UTC.
    */
    private ?DateTime $purge_time = null;
    
    /**
     * @var string|null $slug The slug property
    */
    private ?string $slug = null;
    
    /**
     * @var OrganizationState|null $state The state property
    */
    private ?OrganizationState $state = null;
    
    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return Organization
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): Organization {
        return new Organization();
    }

    /**
     * Gets the created_at property value. A point in time in RFC 3339 format, with up to nanosecond precision. Output uses UTC (`Z`); input may use an offset from UTC.
     * @return DateTime|null
    */
    public function getCreatedAt(): ?DateTime {
        return $this->created_at;
    }

    /**
     * Gets the delete_time property value. A point in time in RFC 3339 format, with up to nanosecond precision. Output uses UTC (`Z`); input may use an offset from UTC.
     * @return DateTime|null
    */
    public function getDeleteTime(): ?DateTime {
        return $this->delete_time;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'created_at' => fn(ParseNode $n) => $o->setCreatedAt($n->getDateTimeValue()),
            'delete_time' => fn(ParseNode $n) => $o->setDeleteTime($n->getDateTimeValue()),
            'id' => fn(ParseNode $n) => $o->setId($n->getStringValue()),
            'image_id' => fn(ParseNode $n) => $o->setImageId($n->getStringValue()),
            'internal' => fn(ParseNode $n) => $o->setInternal($n->getBooleanValue()),
            'name' => fn(ParseNode $n) => $o->setName($n->getStringValue()),
            'personal' => fn(ParseNode $n) => $o->setPersonal($n->getBooleanValue()),
            'purge_time' => fn(ParseNode $n) => $o->setPurgeTime($n->getDateTimeValue()),
            'slug' => fn(ParseNode $n) => $o->setSlug($n->getStringValue()),
            'state' => fn(ParseNode $n) => $o->setState($n->getEnumValue(OrganizationState::class)),
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
     * Gets the image_id property value. The image_id property
     * @return string|null
    */
    public function getImageId(): ?string {
        return $this->image_id;
    }

    /**
     * Gets the internal property value. The internal property
     * @return bool|null
    */
    public function getInternal(): ?bool {
        return $this->internal;
    }

    /**
     * Gets the name property value. The name property
     * @return string|null
    */
    public function getName(): ?string {
        return $this->name;
    }

    /**
     * Gets the personal property value. The personal property
     * @return bool|null
    */
    public function getPersonal(): ?bool {
        return $this->personal;
    }

    /**
     * Gets the purge_time property value. A point in time in RFC 3339 format, with up to nanosecond precision. Output uses UTC (`Z`); input may use an offset from UTC.
     * @return DateTime|null
    */
    public function getPurgeTime(): ?DateTime {
        return $this->purge_time;
    }

    /**
     * Gets the slug property value. The slug property
     * @return string|null
    */
    public function getSlug(): ?string {
        return $this->slug;
    }

    /**
     * Gets the state property value. The state property
     * @return OrganizationState|null
    */
    public function getState(): ?OrganizationState {
        return $this->state;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeDateTimeValue('created_at', $this->getCreatedAt());
        $writer->writeDateTimeValue('delete_time', $this->getDeleteTime());
        $writer->writeStringValue('id', $this->getId());
        $writer->writeStringValue('image_id', $this->getImageId());
        $writer->writeBooleanValue('internal', $this->getInternal());
        $writer->writeStringValue('name', $this->getName());
        $writer->writeBooleanValue('personal', $this->getPersonal());
        $writer->writeDateTimeValue('purge_time', $this->getPurgeTime());
        $writer->writeStringValue('slug', $this->getSlug());
        $writer->writeEnumValue('state', $this->getState());
    }

    /**
     * Sets the created_at property value. A point in time in RFC 3339 format, with up to nanosecond precision. Output uses UTC (`Z`); input may use an offset from UTC.
     * @param DateTime|null $value Value to set for the created_at property.
    */
    public function setCreatedAt(?DateTime $value): void {
        $this->created_at = $value;
    }

    /**
     * Sets the delete_time property value. A point in time in RFC 3339 format, with up to nanosecond precision. Output uses UTC (`Z`); input may use an offset from UTC.
     * @param DateTime|null $value Value to set for the delete_time property.
    */
    public function setDeleteTime(?DateTime $value): void {
        $this->delete_time = $value;
    }

    /**
     * Sets the id property value. The id property
     * @param string|null $value Value to set for the id property.
    */
    public function setId(?string $value): void {
        $this->id = $value;
    }

    /**
     * Sets the image_id property value. The image_id property
     * @param string|null $value Value to set for the image_id property.
    */
    public function setImageId(?string $value): void {
        $this->image_id = $value;
    }

    /**
     * Sets the internal property value. The internal property
     * @param bool|null $value Value to set for the internal property.
    */
    public function setInternal(?bool $value): void {
        $this->internal = $value;
    }

    /**
     * Sets the name property value. The name property
     * @param string|null $value Value to set for the name property.
    */
    public function setName(?string $value): void {
        $this->name = $value;
    }

    /**
     * Sets the personal property value. The personal property
     * @param bool|null $value Value to set for the personal property.
    */
    public function setPersonal(?bool $value): void {
        $this->personal = $value;
    }

    /**
     * Sets the purge_time property value. A point in time in RFC 3339 format, with up to nanosecond precision. Output uses UTC (`Z`); input may use an offset from UTC.
     * @param DateTime|null $value Value to set for the purge_time property.
    */
    public function setPurgeTime(?DateTime $value): void {
        $this->purge_time = $value;
    }

    /**
     * Sets the slug property value. The slug property
     * @param string|null $value Value to set for the slug property.
    */
    public function setSlug(?string $value): void {
        $this->slug = $value;
    }

    /**
     * Sets the state property value. The state property
     * @param OrganizationState|null $value Value to set for the state property.
    */
    public function setState(?OrganizationState $value): void {
        $this->state = $value;
    }

}
