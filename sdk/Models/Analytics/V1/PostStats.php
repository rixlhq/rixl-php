<?php

namespace Rixl\Sdk\Models\Analytics\V1;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Rixl\Sdk\Models\Analyticscommon\V1\MediaType;

class PostStats implements Parsable 
{
    /**
     * @var float|null $avg_watch_time_ms The avg_watch_time_ms property
    */
    private ?float $avg_watch_time_ms = null;
    
    /**
     * @var float|null $completion_rate The completion_rate property
    */
    private ?float $completion_rate = null;
    
    /**
     * @var MediaType|null $content_type The content_type property
    */
    private ?MediaType $content_type = null;
    
    /**
     * @var string|null $feed_id The feed_id property
    */
    private ?string $feed_id = null;
    
    /**
     * @var string|null $post_id The post_id property
    */
    private ?string $post_id = null;
    
    /**
     * @var PostStats_views_by_page|null $views_by_page The views_by_page property
    */
    private ?PostStats_views_by_page $views_by_page = null;
    
    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return PostStats
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): PostStats {
        return new PostStats();
    }

    /**
     * Gets the avg_watch_time_ms property value. The avg_watch_time_ms property
     * @return float|null
    */
    public function getAvgWatchTimeMs(): ?float {
        return $this->avg_watch_time_ms;
    }

    /**
     * Gets the completion_rate property value. The completion_rate property
     * @return float|null
    */
    public function getCompletionRate(): ?float {
        return $this->completion_rate;
    }

    /**
     * Gets the content_type property value. The content_type property
     * @return MediaType|null
    */
    public function getContentType(): ?MediaType {
        return $this->content_type;
    }

    /**
     * Gets the feed_id property value. The feed_id property
     * @return string|null
    */
    public function getFeedId(): ?string {
        return $this->feed_id;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'avg_watch_time_ms' => fn(ParseNode $n) => $o->setAvgWatchTimeMs($n->getFloatValue()),
            'completion_rate' => fn(ParseNode $n) => $o->setCompletionRate($n->getFloatValue()),
            'content_type' => fn(ParseNode $n) => $o->setContentType($n->getEnumValue(MediaType::class)),
            'feed_id' => fn(ParseNode $n) => $o->setFeedId($n->getStringValue()),
            'post_id' => fn(ParseNode $n) => $o->setPostId($n->getStringValue()),
            'views_by_page' => fn(ParseNode $n) => $o->setViewsByPage($n->getObjectValue([PostStats_views_by_page::class, 'createFromDiscriminatorValue'])),
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
     * Gets the views_by_page property value. The views_by_page property
     * @return PostStats_views_by_page|null
    */
    public function getViewsByPage(): ?PostStats_views_by_page {
        return $this->views_by_page;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeFloatValue('avg_watch_time_ms', $this->getAvgWatchTimeMs());
        $writer->writeFloatValue('completion_rate', $this->getCompletionRate());
        $writer->writeEnumValue('content_type', $this->getContentType());
        $writer->writeStringValue('feed_id', $this->getFeedId());
        $writer->writeStringValue('post_id', $this->getPostId());
        $writer->writeObjectValue('views_by_page', $this->getViewsByPage());
    }

    /**
     * Sets the avg_watch_time_ms property value. The avg_watch_time_ms property
     * @param float|null $value Value to set for the avg_watch_time_ms property.
    */
    public function setAvgWatchTimeMs(?float $value): void {
        $this->avg_watch_time_ms = $value;
    }

    /**
     * Sets the completion_rate property value. The completion_rate property
     * @param float|null $value Value to set for the completion_rate property.
    */
    public function setCompletionRate(?float $value): void {
        $this->completion_rate = $value;
    }

    /**
     * Sets the content_type property value. The content_type property
     * @param MediaType|null $value Value to set for the content_type property.
    */
    public function setContentType(?MediaType $value): void {
        $this->content_type = $value;
    }

    /**
     * Sets the feed_id property value. The feed_id property
     * @param string|null $value Value to set for the feed_id property.
    */
    public function setFeedId(?string $value): void {
        $this->feed_id = $value;
    }

    /**
     * Sets the post_id property value. The post_id property
     * @param string|null $value Value to set for the post_id property.
    */
    public function setPostId(?string $value): void {
        $this->post_id = $value;
    }

    /**
     * Sets the views_by_page property value. The views_by_page property
     * @param PostStats_views_by_page|null $value Value to set for the views_by_page property.
    */
    public function setViewsByPage(?PostStats_views_by_page $value): void {
        $this->views_by_page = $value;
    }

}
