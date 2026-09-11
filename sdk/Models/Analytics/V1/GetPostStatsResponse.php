<?php

namespace Rixl\Sdk\Models\Analytics\V1;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class GetPostStatsResponse implements Parsable 
{
    /**
     * @var string|null $post_id The post_id property
    */
    private ?string $post_id = null;
    
    /**
     * @var string|null $total_views The total_views property
    */
    private ?string $total_views = null;
    
    /**
     * @var string|null $unique_viewers The unique_viewers property
    */
    private ?string $unique_viewers = null;
    
    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return GetPostStatsResponse
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): GetPostStatsResponse {
        return new GetPostStatsResponse();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'post_id' => fn(ParseNode $n) => $o->setPostId($n->getStringValue()),
            'total_views' => fn(ParseNode $n) => $o->setTotalViews($n->getStringValue()),
            'unique_viewers' => fn(ParseNode $n) => $o->setUniqueViewers($n->getStringValue()),
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
     * @return string|null
    */
    public function getTotalViews(): ?string {
        return $this->total_views;
    }

    /**
     * Gets the unique_viewers property value. The unique_viewers property
     * @return string|null
    */
    public function getUniqueViewers(): ?string {
        return $this->unique_viewers;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('post_id', $this->getPostId());
        $writer->writeStringValue('total_views', $this->getTotalViews());
        $writer->writeStringValue('unique_viewers', $this->getUniqueViewers());
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
     * @param string|null $value Value to set for the total_views property.
    */
    public function setTotalViews(?string $value): void {
        $this->total_views = $value;
    }

    /**
     * Sets the unique_viewers property value. The unique_viewers property
     * @param string|null $value Value to set for the unique_viewers property.
    */
    public function setUniqueViewers(?string $value): void {
        $this->unique_viewers = $value;
    }

}
