<?php

namespace Rixl\Sdk\Models\Analyticsv1;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class GetPostStatsResponse implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var string|null $post_id The post_id property
    */
    private ?string $post_id = null;
    
    /**
     * @var int|null $total_views The total_views property
    */
    private ?int $total_views = null;
    
    /**
     * @var int|null $unique_viewers The unique_viewers property
    */
    private ?int $unique_viewers = null;
    
    /**
     * Instantiates a new GetPostStatsResponse and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return GetPostStatsResponse
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): GetPostStatsResponse {
        return new GetPostStatsResponse();
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
            'post_id' => fn(ParseNode $n) => $o->setPostId($n->getStringValue()),
            'total_views' => fn(ParseNode $n) => $o->setTotalViews($n->getIntegerValue()),
            'unique_viewers' => fn(ParseNode $n) => $o->setUniqueViewers($n->getIntegerValue()),
        ];
    }

    /**
     * Gets the post_id property value. The post_id property
     * @return string|null
    */
    public function getPostId(): ?string {
        return $this->post_id;
    }

    /**
     * Gets the total_views property value. The total_views property
     * @return int|null
    */
    public function getTotalViews(): ?int {
        return $this->total_views;
    }

    /**
     * Gets the unique_viewers property value. The unique_viewers property
     * @return int|null
    */
    public function getUniqueViewers(): ?int {
        return $this->unique_viewers;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('post_id', $this->getPostId());
        $writer->writeIntegerValue('total_views', $this->getTotalViews());
        $writer->writeIntegerValue('unique_viewers', $this->getUniqueViewers());
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
     * Sets the post_id property value. The post_id property
     * @param string|null $value Value to set for the post_id property.
    */
    public function setPostId(?string $value): void {
        $this->post_id = $value;
    }

    /**
     * Sets the total_views property value. The total_views property
     * @param int|null $value Value to set for the total_views property.
    */
    public function setTotalViews(?int $value): void {
        $this->total_views = $value;
    }

    /**
     * Sets the unique_viewers property value. The unique_viewers property
     * @param int|null $value Value to set for the unique_viewers property.
    */
    public function setUniqueViewers(?int $value): void {
        $this->unique_viewers = $value;
    }

}
