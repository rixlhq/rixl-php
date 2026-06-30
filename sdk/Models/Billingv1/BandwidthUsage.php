<?php

namespace Rixl\Sdk\Models\Billingv1;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class BandwidthUsage implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var string|null $created_at The created_at property
    */
    private ?string $created_at = null;
    
    /**
     * @var string|null $data_source The data_source property
    */
    private ?string $data_source = null;
    
    /**
     * @var int|null $image_bandwidth_bytes The image_bandwidth_bytes property
    */
    private ?int $image_bandwidth_bytes = null;
    
    /**
     * @var int|null $image_requests The image_requests property
    */
    private ?int $image_requests = null;
    
    /**
     * @var string|null $org_id The org_id property
    */
    private ?string $org_id = null;
    
    /**
     * @var string|null $snapshot_date The snapshot_date property
    */
    private ?string $snapshot_date = null;
    
    /**
     * @var string|null $snapshot_type The snapshot_type property
    */
    private ?string $snapshot_type = null;
    
    /**
     * @var int|null $total_bandwidth_bytes The total_bandwidth_bytes property
    */
    private ?int $total_bandwidth_bytes = null;
    
    /**
     * @var int|null $total_requests The total_requests property
    */
    private ?int $total_requests = null;
    
    /**
     * @var int|null $unique_visitors The unique_visitors property
    */
    private ?int $unique_visitors = null;
    
    /**
     * @var int|null $video_bandwidth_bytes The video_bandwidth_bytes property
    */
    private ?int $video_bandwidth_bytes = null;
    
    /**
     * @var int|null $video_requests The video_requests property
    */
    private ?int $video_requests = null;
    
    /**
     * Instantiates a new BandwidthUsage and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return BandwidthUsage
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): BandwidthUsage {
        return new BandwidthUsage();
    }

    /**
     * Gets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        return $this->additionalData;
    }

    /**
     * Gets the created_at property value. The created_at property
     * @return string|null
    */
    public function getCreatedAt(): ?string {
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
            'created_at' => fn(ParseNode $n) => $o->setCreatedAt($n->getStringValue()),
            'data_source' => fn(ParseNode $n) => $o->setDataSource($n->getStringValue()),
            'image_bandwidth_bytes' => fn(ParseNode $n) => $o->setImageBandwidthBytes($n->getIntegerValue()),
            'image_requests' => fn(ParseNode $n) => $o->setImageRequests($n->getIntegerValue()),
            'org_id' => fn(ParseNode $n) => $o->setOrgId($n->getStringValue()),
            'snapshot_date' => fn(ParseNode $n) => $o->setSnapshotDate($n->getStringValue()),
            'snapshot_type' => fn(ParseNode $n) => $o->setSnapshotType($n->getStringValue()),
            'total_bandwidth_bytes' => fn(ParseNode $n) => $o->setTotalBandwidthBytes($n->getIntegerValue()),
            'total_requests' => fn(ParseNode $n) => $o->setTotalRequests($n->getIntegerValue()),
            'unique_visitors' => fn(ParseNode $n) => $o->setUniqueVisitors($n->getIntegerValue()),
            'video_bandwidth_bytes' => fn(ParseNode $n) => $o->setVideoBandwidthBytes($n->getIntegerValue()),
            'video_requests' => fn(ParseNode $n) => $o->setVideoRequests($n->getIntegerValue()),
        ];
    }

    /**
     * Gets the image_bandwidth_bytes property value. The image_bandwidth_bytes property
     * @return int|null
    */
    public function getImageBandwidthBytes(): ?int {
        return $this->image_bandwidth_bytes;
    }

    /**
     * Gets the image_requests property value. The image_requests property
     * @return int|null
    */
    public function getImageRequests(): ?int {
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
     * @return string|null
    */
    public function getSnapshotDate(): ?string {
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
     * @return int|null
    */
    public function getTotalBandwidthBytes(): ?int {
        return $this->total_bandwidth_bytes;
    }

    /**
     * Gets the total_requests property value. The total_requests property
     * @return int|null
    */
    public function getTotalRequests(): ?int {
        return $this->total_requests;
    }

    /**
     * Gets the unique_visitors property value. The unique_visitors property
     * @return int|null
    */
    public function getUniqueVisitors(): ?int {
        return $this->unique_visitors;
    }

    /**
     * Gets the video_bandwidth_bytes property value. The video_bandwidth_bytes property
     * @return int|null
    */
    public function getVideoBandwidthBytes(): ?int {
        return $this->video_bandwidth_bytes;
    }

    /**
     * Gets the video_requests property value. The video_requests property
     * @return int|null
    */
    public function getVideoRequests(): ?int {
        return $this->video_requests;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('created_at', $this->getCreatedAt());
        $writer->writeStringValue('data_source', $this->getDataSource());
        $writer->writeIntegerValue('image_bandwidth_bytes', $this->getImageBandwidthBytes());
        $writer->writeIntegerValue('image_requests', $this->getImageRequests());
        $writer->writeStringValue('org_id', $this->getOrgId());
        $writer->writeStringValue('snapshot_date', $this->getSnapshotDate());
        $writer->writeStringValue('snapshot_type', $this->getSnapshotType());
        $writer->writeIntegerValue('total_bandwidth_bytes', $this->getTotalBandwidthBytes());
        $writer->writeIntegerValue('total_requests', $this->getTotalRequests());
        $writer->writeIntegerValue('unique_visitors', $this->getUniqueVisitors());
        $writer->writeIntegerValue('video_bandwidth_bytes', $this->getVideoBandwidthBytes());
        $writer->writeIntegerValue('video_requests', $this->getVideoRequests());
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
     * Sets the created_at property value. The created_at property
     * @param string|null $value Value to set for the created_at property.
    */
    public function setCreatedAt(?string $value): void {
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
     * @param int|null $value Value to set for the image_bandwidth_bytes property.
    */
    public function setImageBandwidthBytes(?int $value): void {
        $this->image_bandwidth_bytes = $value;
    }

    /**
     * Sets the image_requests property value. The image_requests property
     * @param int|null $value Value to set for the image_requests property.
    */
    public function setImageRequests(?int $value): void {
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
     * @param string|null $value Value to set for the snapshot_date property.
    */
    public function setSnapshotDate(?string $value): void {
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
     * @param int|null $value Value to set for the total_bandwidth_bytes property.
    */
    public function setTotalBandwidthBytes(?int $value): void {
        $this->total_bandwidth_bytes = $value;
    }

    /**
     * Sets the total_requests property value. The total_requests property
     * @param int|null $value Value to set for the total_requests property.
    */
    public function setTotalRequests(?int $value): void {
        $this->total_requests = $value;
    }

    /**
     * Sets the unique_visitors property value. The unique_visitors property
     * @param int|null $value Value to set for the unique_visitors property.
    */
    public function setUniqueVisitors(?int $value): void {
        $this->unique_visitors = $value;
    }

    /**
     * Sets the video_bandwidth_bytes property value. The video_bandwidth_bytes property
     * @param int|null $value Value to set for the video_bandwidth_bytes property.
    */
    public function setVideoBandwidthBytes(?int $value): void {
        $this->video_bandwidth_bytes = $value;
    }

    /**
     * Sets the video_requests property value. The video_requests property
     * @param int|null $value Value to set for the video_requests property.
    */
    public function setVideoRequests(?int $value): void {
        $this->video_requests = $value;
    }

}
