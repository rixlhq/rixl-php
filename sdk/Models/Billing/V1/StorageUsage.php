<?php

namespace Rixl\Sdk\Models\Billing\V1;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class StorageUsage implements Parsable 
{
    /**
     * @var int|null $image_file_count The image_file_count property
    */
    private ?int $image_file_count = null;
    
    /**
     * @var string|null $image_storage_bytes The image_storage_bytes property
    */
    private ?string $image_storage_bytes = null;
    
    /**
     * @var DateTime|null $last_updated The last_updated property
    */
    private ?DateTime $last_updated = null;
    
    /**
     * @var int|null $max_image_count The max_image_count property
    */
    private ?int $max_image_count = null;
    
    /**
     * @var int|null $max_project_count The max_project_count property
    */
    private ?int $max_project_count = null;
    
    /**
     * @var int|null $max_video_count The max_video_count property
    */
    private ?int $max_video_count = null;
    
    /**
     * @var string|null $org_id The org_id property
    */
    private ?string $org_id = null;
    
    /**
     * @var int|null $project_count The project_count property
    */
    private ?int $project_count = null;
    
    /**
     * @var DateTime|null $snapshot_date The snapshot_date property
    */
    private ?DateTime $snapshot_date = null;
    
    /**
     * @var int|null $total_file_count The total_file_count property
    */
    private ?int $total_file_count = null;
    
    /**
     * @var string|null $total_storage_bytes The total_storage_bytes property
    */
    private ?string $total_storage_bytes = null;
    
    /**
     * @var string|null $total_video_minutes The total_video_minutes property
    */
    private ?string $total_video_minutes = null;
    
    /**
     * @var int|null $video_file_count The video_file_count property
    */
    private ?int $video_file_count = null;
    
    /**
     * @var string|null $video_storage_bytes The video_storage_bytes property
    */
    private ?string $video_storage_bytes = null;
    
    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return StorageUsage
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): StorageUsage {
        return new StorageUsage();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'image_file_count' => fn(ParseNode $n) => $o->setImageFileCount($n->getIntegerValue()),
            'image_storage_bytes' => fn(ParseNode $n) => $o->setImageStorageBytes($n->getStringValue()),
            'last_updated' => fn(ParseNode $n) => $o->setLastUpdated($n->getDateTimeValue()),
            'max_image_count' => fn(ParseNode $n) => $o->setMaxImageCount($n->getIntegerValue()),
            'max_project_count' => fn(ParseNode $n) => $o->setMaxProjectCount($n->getIntegerValue()),
            'max_video_count' => fn(ParseNode $n) => $o->setMaxVideoCount($n->getIntegerValue()),
            'org_id' => fn(ParseNode $n) => $o->setOrgId($n->getStringValue()),
            'project_count' => fn(ParseNode $n) => $o->setProjectCount($n->getIntegerValue()),
            'snapshot_date' => fn(ParseNode $n) => $o->setSnapshotDate($n->getDateTimeValue()),
            'total_file_count' => fn(ParseNode $n) => $o->setTotalFileCount($n->getIntegerValue()),
            'total_storage_bytes' => fn(ParseNode $n) => $o->setTotalStorageBytes($n->getStringValue()),
            'total_video_minutes' => fn(ParseNode $n) => $o->setTotalVideoMinutes($n->getStringValue()),
            'video_file_count' => fn(ParseNode $n) => $o->setVideoFileCount($n->getIntegerValue()),
            'video_storage_bytes' => fn(ParseNode $n) => $o->setVideoStorageBytes($n->getStringValue()),
        ];
    }

    /**
     * Gets the image_file_count property value. The image_file_count property
     * @return int|null
    */
    public function getImageFileCount(): ?int {
        return $this->image_file_count;
    }

    /**
     * Gets the image_storage_bytes property value. The image_storage_bytes property
     * @return string|null
    */
    public function getImageStorageBytes(): ?string {
        return $this->image_storage_bytes;
    }

    /**
     * Gets the last_updated property value. The last_updated property
     * @return DateTime|null
    */
    public function getLastUpdated(): ?DateTime {
        return $this->last_updated;
    }

    /**
     * Gets the max_image_count property value. The max_image_count property
     * @return int|null
    */
    public function getMaxImageCount(): ?int {
        return $this->max_image_count;
    }

    /**
     * Gets the max_project_count property value. The max_project_count property
     * @return int|null
    */
    public function getMaxProjectCount(): ?int {
        return $this->max_project_count;
    }

    /**
     * Gets the max_video_count property value. The max_video_count property
     * @return int|null
    */
    public function getMaxVideoCount(): ?int {
        return $this->max_video_count;
    }

    /**
     * Gets the org_id property value. The org_id property
     * @return string|null
    */
    public function getOrgId(): ?string {
        return $this->org_id;
    }

    /**
     * Gets the project_count property value. The project_count property
     * @return int|null
    */
    public function getProjectCount(): ?int {
        return $this->project_count;
    }

    /**
     * Gets the snapshot_date property value. The snapshot_date property
     * @return DateTime|null
    */
    public function getSnapshotDate(): ?DateTime {
        return $this->snapshot_date;
    }

    /**
     * Gets the total_file_count property value. The total_file_count property
     * @return int|null
    */
    public function getTotalFileCount(): ?int {
        return $this->total_file_count;
    }

    /**
     * Gets the total_storage_bytes property value. The total_storage_bytes property
     * @return string|null
    */
    public function getTotalStorageBytes(): ?string {
        return $this->total_storage_bytes;
    }

    /**
     * Gets the total_video_minutes property value. The total_video_minutes property
     * @return string|null
    */
    public function getTotalVideoMinutes(): ?string {
        return $this->total_video_minutes;
    }

    /**
     * Gets the video_file_count property value. The video_file_count property
     * @return int|null
    */
    public function getVideoFileCount(): ?int {
        return $this->video_file_count;
    }

    /**
     * Gets the video_storage_bytes property value. The video_storage_bytes property
     * @return string|null
    */
    public function getVideoStorageBytes(): ?string {
        return $this->video_storage_bytes;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeIntegerValue('image_file_count', $this->getImageFileCount());
        $writer->writeStringValue('image_storage_bytes', $this->getImageStorageBytes());
        $writer->writeDateTimeValue('last_updated', $this->getLastUpdated());
        $writer->writeIntegerValue('max_image_count', $this->getMaxImageCount());
        $writer->writeIntegerValue('max_project_count', $this->getMaxProjectCount());
        $writer->writeIntegerValue('max_video_count', $this->getMaxVideoCount());
        $writer->writeStringValue('org_id', $this->getOrgId());
        $writer->writeIntegerValue('project_count', $this->getProjectCount());
        $writer->writeDateTimeValue('snapshot_date', $this->getSnapshotDate());
        $writer->writeIntegerValue('total_file_count', $this->getTotalFileCount());
        $writer->writeStringValue('total_storage_bytes', $this->getTotalStorageBytes());
        $writer->writeStringValue('total_video_minutes', $this->getTotalVideoMinutes());
        $writer->writeIntegerValue('video_file_count', $this->getVideoFileCount());
        $writer->writeStringValue('video_storage_bytes', $this->getVideoStorageBytes());
    }

    /**
     * Sets the image_file_count property value. The image_file_count property
     * @param int|null $value Value to set for the image_file_count property.
    */
    public function setImageFileCount(?int $value): void {
        $this->image_file_count = $value;
    }

    /**
     * Sets the image_storage_bytes property value. The image_storage_bytes property
     * @param string|null $value Value to set for the image_storage_bytes property.
    */
    public function setImageStorageBytes(?string $value): void {
        $this->image_storage_bytes = $value;
    }

    /**
     * Sets the last_updated property value. The last_updated property
     * @param DateTime|null $value Value to set for the last_updated property.
    */
    public function setLastUpdated(?DateTime $value): void {
        $this->last_updated = $value;
    }

    /**
     * Sets the max_image_count property value. The max_image_count property
     * @param int|null $value Value to set for the max_image_count property.
    */
    public function setMaxImageCount(?int $value): void {
        $this->max_image_count = $value;
    }

    /**
     * Sets the max_project_count property value. The max_project_count property
     * @param int|null $value Value to set for the max_project_count property.
    */
    public function setMaxProjectCount(?int $value): void {
        $this->max_project_count = $value;
    }

    /**
     * Sets the max_video_count property value. The max_video_count property
     * @param int|null $value Value to set for the max_video_count property.
    */
    public function setMaxVideoCount(?int $value): void {
        $this->max_video_count = $value;
    }

    /**
     * Sets the org_id property value. The org_id property
     * @param string|null $value Value to set for the org_id property.
    */
    public function setOrgId(?string $value): void {
        $this->org_id = $value;
    }

    /**
     * Sets the project_count property value. The project_count property
     * @param int|null $value Value to set for the project_count property.
    */
    public function setProjectCount(?int $value): void {
        $this->project_count = $value;
    }

    /**
     * Sets the snapshot_date property value. The snapshot_date property
     * @param DateTime|null $value Value to set for the snapshot_date property.
    */
    public function setSnapshotDate(?DateTime $value): void {
        $this->snapshot_date = $value;
    }

    /**
     * Sets the total_file_count property value. The total_file_count property
     * @param int|null $value Value to set for the total_file_count property.
    */
    public function setTotalFileCount(?int $value): void {
        $this->total_file_count = $value;
    }

    /**
     * Sets the total_storage_bytes property value. The total_storage_bytes property
     * @param string|null $value Value to set for the total_storage_bytes property.
    */
    public function setTotalStorageBytes(?string $value): void {
        $this->total_storage_bytes = $value;
    }

    /**
     * Sets the total_video_minutes property value. The total_video_minutes property
     * @param string|null $value Value to set for the total_video_minutes property.
    */
    public function setTotalVideoMinutes(?string $value): void {
        $this->total_video_minutes = $value;
    }

    /**
     * Sets the video_file_count property value. The video_file_count property
     * @param int|null $value Value to set for the video_file_count property.
    */
    public function setVideoFileCount(?int $value): void {
        $this->video_file_count = $value;
    }

    /**
     * Sets the video_storage_bytes property value. The video_storage_bytes property
     * @param string|null $value Value to set for the video_storage_bytes property.
    */
    public function setVideoStorageBytes(?string $value): void {
        $this->video_storage_bytes = $value;
    }

}
