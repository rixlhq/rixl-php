<?php

namespace Rixl\Sdk\Models\Billing\V1;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class BandwidthUsage implements Parsable 
{
    /**
     * @var DateTime|null $created_at The created_at property
    */
    private ?DateTime $created_at = null;
    
    /**
     * @var string|null $data_source The data_source property
    */
    private ?string $data_source = null;
    
    /**
     * @var string|null $image_bandwidth_bytes The image_bandwidth_bytes property
    */
    private ?string $image_bandwidth_bytes = null;
    
    /**
     * @var string|null $image_requests The image_requests property
    */
    private ?string $image_requests = null;
    
    /**
     * @var string|null $org_id The org_id property
    */
    private ?string $org_id = null;
    
    /**
     * @var DateTime|null $snapshot_date The snapshot_date property
    */
    private ?DateTime $snapshot_date = null;
    
    /**
     * @var string|null $snapshot_type The snapshot_type property
    */
    private ?string $snapshot_type = null;
    
    /**
     * @var string|null $total_bandwidth_bytes The total_bandwidth_bytes property
    */
    private ?string $total_bandwidth_bytes = null;
    
    /**
     * @var string|null $total_requests The total_requests property
    */
    private ?string $total_requests = null;
    
    /**
     * @var string|null $unique_visitors The unique_visitors property
    */
    private ?string $unique_visitors = null;
    
    /**
     * @var string|null $video_bandwidth_bytes The video_bandwidth_bytes property
    */
    private ?string $video_bandwidth_bytes = null;
    
    /**
     * @var string|null $video_requests The video_requests property
    */
    private ?string $video_requests = null;
    
    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return BandwidthUsage
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): BandwidthUsage {
        return new BandwidthUsage();
    }

    /**
     * Gets the created_at property value. The created_at property
     * @return DateTime|null
    */
    public function getCreatedAt(): ?DateTime {
        return $this->created_at;
    }

    /**
     * Gets the data_source property value. The data_source property
     * @return string|null
    */
    public function getDataSource(): ?string {
        return $this->data_source;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'created_at' => fn(ParseNode $n) => $o->setCreatedAt($n->getDateTimeValue()),
            'data_source' => fn(ParseNode $n) => $o->setDataSource($n->getStringValue()),
            'image_bandwidth_bytes' => fn(ParseNode $n) => $o->setImageBandwidthBytes($n->getStringValue()),
            'image_requests' => fn(ParseNode $n) => $o->setImageRequests($n->getStringValue()),
            'org_id' => fn(ParseNode $n) => $o->setOrgId($n->getStringValue()),
            'snapshot_date' => fn(ParseNode $n) => $o->setSnapshotDate($n->getDateTimeValue()),
            'snapshot_type' => fn(ParseNode $n) => $o->setSnapshotType($n->getStringValue()),
            'total_bandwidth_bytes' => fn(ParseNode $n) => $o->setTotalBandwidthBytes($n->getStringValue()),
            'total_requests' => fn(ParseNode $n) => $o->setTotalRequests($n->getStringValue()),
            'unique_visitors' => fn(ParseNode $n) => $o->setUniqueVisitors($n->getStringValue()),
            'video_bandwidth_bytes' => fn(ParseNode $n) => $o->setVideoBandwidthBytes($n->getStringValue()),
            'video_requests' => fn(ParseNode $n) => $o->setVideoRequests($n->getStringValue()),
        ];
    }

    /**
     * Gets the image_bandwidth_bytes property value. The image_bandwidth_bytes property
     * @return string|null
    */
    public function getImageBandwidthBytes(): ?string {
        return $this->image_bandwidth_bytes;
    }

    /**
     * Gets the image_requests property value. The image_requests property
     * @return string|null
    */
    public function getImageRequests(): ?string {
        return $this->image_requests;
    }

    /**
     * Gets the org_id property value. The org_id property
     * @return string|null
    */
    public function getOrgId(): ?string {
        return $this->org_id;
    }

    /**
     * Gets the snapshot_date property value. The snapshot_date property
     * @return DateTime|null
    */
    public function getSnapshotDate(): ?DateTime {
        return $this->snapshot_date;
    }

    /**
     * Gets the snapshot_type property value. The snapshot_type property
     * @return string|null
    */
    public function getSnapshotType(): ?string {
        return $this->snapshot_type;
    }

    /**
     * Gets the total_bandwidth_bytes property value. The total_bandwidth_bytes property
     * @return string|null
    */
    public function getTotalBandwidthBytes(): ?string {
        return $this->total_bandwidth_bytes;
    }

    /**
     * Gets the total_requests property value. The total_requests property
     * @return string|null
    */
    public function getTotalRequests(): ?string {
        return $this->total_requests;
    }

    /**
     * Gets the unique_visitors property value. The unique_visitors property
     * @return string|null
    */
    public function getUniqueVisitors(): ?string {
        return $this->unique_visitors;
    }

    /**
     * Gets the video_bandwidth_bytes property value. The video_bandwidth_bytes property
     * @return string|null
    */
    public function getVideoBandwidthBytes(): ?string {
        return $this->video_bandwidth_bytes;
    }

    /**
     * Gets the video_requests property value. The video_requests property
     * @return string|null
    */
    public function getVideoRequests(): ?string {
        return $this->video_requests;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeDateTimeValue('created_at', $this->getCreatedAt());
        $writer->writeStringValue('data_source', $this->getDataSource());
        $writer->writeStringValue('image_bandwidth_bytes', $this->getImageBandwidthBytes());
        $writer->writeStringValue('image_requests', $this->getImageRequests());
        $writer->writeStringValue('org_id', $this->getOrgId());
        $writer->writeDateTimeValue('snapshot_date', $this->getSnapshotDate());
        $writer->writeStringValue('snapshot_type', $this->getSnapshotType());
        $writer->writeStringValue('total_bandwidth_bytes', $this->getTotalBandwidthBytes());
        $writer->writeStringValue('total_requests', $this->getTotalRequests());
        $writer->writeStringValue('unique_visitors', $this->getUniqueVisitors());
        $writer->writeStringValue('video_bandwidth_bytes', $this->getVideoBandwidthBytes());
        $writer->writeStringValue('video_requests', $this->getVideoRequests());
    }

    /**
     * Sets the created_at property value. The created_at property
     * @param DateTime|null $value Value to set for the created_at property.
    */
    public function setCreatedAt(?DateTime $value): void {
        $this->created_at = $value;
    }

    /**
     * Sets the data_source property value. The data_source property
     * @param string|null $value Value to set for the data_source property.
    */
    public function setDataSource(?string $value): void {
        $this->data_source = $value;
    }

    /**
     * Sets the image_bandwidth_bytes property value. The image_bandwidth_bytes property
     * @param string|null $value Value to set for the image_bandwidth_bytes property.
    */
    public function setImageBandwidthBytes(?string $value): void {
        $this->image_bandwidth_bytes = $value;
    }

    /**
     * Sets the image_requests property value. The image_requests property
     * @param string|null $value Value to set for the image_requests property.
    */
    public function setImageRequests(?string $value): void {
        $this->image_requests = $value;
    }

    /**
     * Sets the org_id property value. The org_id property
     * @param string|null $value Value to set for the org_id property.
    */
    public function setOrgId(?string $value): void {
        $this->org_id = $value;
    }

    /**
     * Sets the snapshot_date property value. The snapshot_date property
     * @param DateTime|null $value Value to set for the snapshot_date property.
    */
    public function setSnapshotDate(?DateTime $value): void {
        $this->snapshot_date = $value;
    }

    /**
     * Sets the snapshot_type property value. The snapshot_type property
     * @param string|null $value Value to set for the snapshot_type property.
    */
    public function setSnapshotType(?string $value): void {
        $this->snapshot_type = $value;
    }

    /**
     * Sets the total_bandwidth_bytes property value. The total_bandwidth_bytes property
     * @param string|null $value Value to set for the total_bandwidth_bytes property.
    */
    public function setTotalBandwidthBytes(?string $value): void {
        $this->total_bandwidth_bytes = $value;
    }

    /**
     * Sets the total_requests property value. The total_requests property
     * @param string|null $value Value to set for the total_requests property.
    */
    public function setTotalRequests(?string $value): void {
        $this->total_requests = $value;
    }

    /**
     * Sets the unique_visitors property value. The unique_visitors property
     * @param string|null $value Value to set for the unique_visitors property.
    */
    public function setUniqueVisitors(?string $value): void {
        $this->unique_visitors = $value;
    }

    /**
     * Sets the video_bandwidth_bytes property value. The video_bandwidth_bytes property
     * @param string|null $value Value to set for the video_bandwidth_bytes property.
    */
    public function setVideoBandwidthBytes(?string $value): void {
        $this->video_bandwidth_bytes = $value;
    }

    /**
     * Sets the video_requests property value. The video_requests property
     * @param string|null $value Value to set for the video_requests property.
    */
    public function setVideoRequests(?string $value): void {
        $this->video_requests = $value;
    }

}
