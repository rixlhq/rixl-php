<?php

namespace Rixl\Sdk\Models\Billingv1;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class StorageUsage implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var int|null $image_file_count The image_file_count property
    */
    private ?int $image_file_count = null;
    
    /**
     * @var int|null $image_storage_bytes The image_storage_bytes property
    */
    private ?int $image_storage_bytes = null;
    
    /**
     * @var string|null $last_updated The last_updated property
    */
    private ?string $last_updated = null;
    
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
     * @var string|null $snapshot_date The snapshot_date property
    */
    private ?string $snapshot_date = null;
    
    /**
     * @var int|null $total_file_count The total_file_count property
    */
    private ?int $total_file_count = null;
    
    /**
     * @var int|null $total_storage_bytes The total_storage_bytes property
    */
    private ?int $total_storage_bytes = null;
    
    /**
     * @var string|null $total_video_minutes The total_video_minutes property
    */
    private ?string $total_video_minutes = null;
    
    /**
     * @var int|null $video_file_count The video_file_count property
    */
    private ?int $video_file_count = null;
    
    /**
     * @var int|null $video_storage_bytes The video_storage_bytes property
    */
    private ?int $video_storage_bytes = null;
    
    /**
     * Instantiates a new StorageUsage and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return StorageUsage
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): StorageUsage {
        return new StorageUsage();
    }

    /**
     * Gets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        return $this->additionalData;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'image_file_count' => fn(ParseNode $n) => $o->setImageFileCount($n->getIntegerValue()),
            'image_storage_bytes' => fn(ParseNode $n) => $o->setImageStorageBytes($n->getIntegerValue()),
            'last_updated' => fn(ParseNode $n) => $o->setLastUpdated($n->getStringValue()),
            'max_image_count' => fn(ParseNode $n) => $o->setMaxImageCount($n->getIntegerValue()),
            'max_project_count' => fn(ParseNode $n) => $o->setMaxProjectCount($n->getIntegerValue()),
            'max_video_count' => fn(ParseNode $n) => $o->setMaxVideoCount($n->getIntegerValue()),
            'org_id' => fn(ParseNode $n) => $o->setOrgId($n->getStringValue()),
            'project_count' => fn(ParseNode $n) => $o->setProjectCount($n->getIntegerValue()),
            'snapshot_date' => fn(ParseNode $n) => $o->setSnapshotDate($n->getStringValue()),
            'total_file_count' => fn(ParseNode $n) => $o->setTotalFileCount($n->getIntegerValue()),
            'total_storage_bytes' => fn(ParseNode $n) => $o->setTotalStorageBytes($n->getIntegerValue()),
            'total_video_minutes' => fn(ParseNode $n) => $o->setTotalVideoMinutes($n->getStringValue()),
            'video_file_count' => fn(ParseNode $n) => $o->setVideoFileCount($n->getIntegerValue()),
            'video_storage_bytes' => fn(ParseNode $n) => $o->setVideoStorageBytes($n->getIntegerValue()),
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
     * @return int|null
    */
    public function getImageStorageBytes(): ?int {
        return $this->image_storage_bytes;
    }

    /**
     * Gets the last_updated property value. The last_updated property
     * @return string|null
    */
    public function getLastUpdated(): ?string {
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
     * @return string|null
    */
    public function getSnapshotDate(): ?string {
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
     * @return int|null
    */
    public function getTotalStorageBytes(): ?int {
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
     * @return int|null
    */
    public function getVideoStorageBytes(): ?int {
        return $this->video_storage_bytes;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeIntegerValue('image_file_count', $this->getImageFileCount());
        $writer->writeIntegerValue('image_storage_bytes', $this->getImageStorageBytes());
        $writer->writeStringValue('last_updated', $this->getLastUpdated());
        $writer->writeIntegerValue('max_image_count', $this->getMaxImageCount());
        $writer->writeIntegerValue('max_project_count', $this->getMaxProjectCount());
        $writer->writeIntegerValue('max_video_count', $this->getMaxVideoCount());
        $writer->writeStringValue('org_id', $this->getOrgId());
        $writer->writeIntegerValue('project_count', $this->getProjectCount());
        $writer->writeStringValue('snapshot_date', $this->getSnapshotDate());
        $writer->writeIntegerValue('total_file_count', $this->getTotalFileCount());
        $writer->writeIntegerValue('total_storage_bytes', $this->getTotalStorageBytes());
        $writer->writeStringValue('total_video_minutes', $this->getTotalVideoMinutes());
        $writer->writeIntegerValue('video_file_count', $this->getVideoFileCount());
        $writer->writeIntegerValue('video_storage_bytes', $this->getVideoStorageBytes());
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
     * Sets the image_file_count property value. The image_file_count property
     * @param int|null $value Value to set for the image_file_count property.
    */
    public function setImageFileCount(?int $value): void {
        $this->image_file_count = $value;
    }

    /**
     * Sets the image_storage_bytes property value. The image_storage_bytes property
     * @param int|null $value Value to set for the image_storage_bytes property.
    */
    public function setImageStorageBytes(?int $value): void {
        $this->image_storage_bytes = $value;
    }

    /**
     * Sets the last_updated property value. The last_updated property
     * @param string|null $value Value to set for the last_updated property.
    */
    public function setLastUpdated(?string $value): void {
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
     * @param string|null $value Value to set for the snapshot_date property.
    */
    public function setSnapshotDate(?string $value): void {
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
     * @param int|null $value Value to set for the total_storage_bytes property.
    */
    public function setTotalStorageBytes(?int $value): void {
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
     * @param int|null $value Value to set for the video_storage_bytes property.
    */
    public function setVideoStorageBytes(?int $value): void {
        $this->video_storage_bytes = $value;
    }

}
