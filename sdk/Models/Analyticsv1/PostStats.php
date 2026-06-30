<?php

namespace Rixl\Sdk\Models\Analyticsv1;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class PostStats implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var float|null $avg_watch_time_ms The avg_watch_time_ms property
    */
    private ?float $avg_watch_time_ms = null;
    
    /**
     * @var float|null $completion_rate The completion_rate property
    */
    private ?float $completion_rate = null;
    
    /**
     * @var int|null $completions The completions property
    */
    private ?int $completions = null;
    
    /**
     * @var string|null $content_type The content_type property
    */
    private ?string $content_type = null;
    
    /**
     * @var string|null $feed_id The feed_id property
    */
    private ?string $feed_id = null;
    
    /**
     * @var string|null $post_id The post_id property
    */
    private ?string $post_id = null;
    
    /**
     * @var int|null $starts The starts property
    */
    private ?int $starts = null;
    
    /**
     * @var int|null $total_views The total_views property
    */
    private ?int $total_views = null;
    
    /**
     * @var int|null $total_watch_time_ms The total_watch_time_ms property
    */
    private ?int $total_watch_time_ms = null;
    
    /**
     * @var int|null $unique_viewers The unique_viewers property
    */
    private ?int $unique_viewers = null;
    
    /**
     * @var PostStats_views_by_page|null $views_by_page The views_by_page property
    */
    private ?PostStats_views_by_page $views_by_page = null;
    
    /**
     * Instantiates a new PostStats and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return PostStats
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): PostStats {
        return new PostStats();
    }

    /**
     * Gets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        return $this->additionalData;
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
     * Gets the completions property value. The completions property
     * @return int|null
    */
    public function getCompletions(): ?int {
        return $this->completions;
    }

    /**
     * Gets the content_type property value. The content_type property
     * @return string|null
    */
    public function getContentType(): ?string {
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
            'completions' => fn(ParseNode $n) => $o->setCompletions($n->getIntegerValue()),
            'content_type' => fn(ParseNode $n) => $o->setContentType($n->getStringValue()),
            'feed_id' => fn(ParseNode $n) => $o->setFeedId($n->getStringValue()),
            'post_id' => fn(ParseNode $n) => $o->setPostId($n->getStringValue()),
            'starts' => fn(ParseNode $n) => $o->setStarts($n->getIntegerValue()),
            'total_views' => fn(ParseNode $n) => $o->setTotalViews($n->getIntegerValue()),
            'total_watch_time_ms' => fn(ParseNode $n) => $o->setTotalWatchTimeMs($n->getIntegerValue()),
            'unique_viewers' => fn(ParseNode $n) => $o->setUniqueViewers($n->getIntegerValue()),
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
     * Gets the starts property value. The starts property
     * @return int|null
    */
    public function getStarts(): ?int {
        return $this->starts;
    }

    /**
     * Gets the total_views property value. The total_views property
     * @return int|null
    */
    public function getTotalViews(): ?int {
        return $this->total_views;
    }

    /**
     * Gets the total_watch_time_ms property value. The total_watch_time_ms property
     * @return int|null
    */
    public function getTotalWatchTimeMs(): ?int {
        return $this->total_watch_time_ms;
    }

    /**
     * Gets the unique_viewers property value. The unique_viewers property
     * @return int|null
    */
    public function getUniqueViewers(): ?int {
        return $this->unique_viewers;
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
        $writer->writeIntegerValue('completions', $this->getCompletions());
        $writer->writeFloatValue('completion_rate', $this->getCompletionRate());
        $writer->writeStringValue('content_type', $this->getContentType());
        $writer->writeStringValue('feed_id', $this->getFeedId());
        $writer->writeStringValue('post_id', $this->getPostId());
        $writer->writeIntegerValue('starts', $this->getStarts());
        $writer->writeIntegerValue('total_views', $this->getTotalViews());
        $writer->writeIntegerValue('total_watch_time_ms', $this->getTotalWatchTimeMs());
        $writer->writeIntegerValue('unique_viewers', $this->getUniqueViewers());
        $writer->writeObjectValue('views_by_page', $this->getViewsByPage());
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
     * Sets the completions property value. The completions property
     * @param int|null $value Value to set for the completions property.
    */
    public function setCompletions(?int $value): void {
        $this->completions = $value;
    }

    /**
     * Sets the content_type property value. The content_type property
     * @param string|null $value Value to set for the content_type property.
    */
    public function setContentType(?string $value): void {
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
     * Sets the starts property value. The starts property
     * @param int|null $value Value to set for the starts property.
    */
    public function setStarts(?int $value): void {
        $this->starts = $value;
    }

    /**
     * Sets the total_views property value. The total_views property
     * @param int|null $value Value to set for the total_views property.
    */
    public function setTotalViews(?int $value): void {
        $this->total_views = $value;
    }

    /**
     * Sets the total_watch_time_ms property value. The total_watch_time_ms property
     * @param int|null $value Value to set for the total_watch_time_ms property.
    */
    public function setTotalWatchTimeMs(?int $value): void {
        $this->total_watch_time_ms = $value;
    }

    /**
     * Sets the unique_viewers property value. The unique_viewers property
     * @param int|null $value Value to set for the unique_viewers property.
    */
    public function setUniqueViewers(?int $value): void {
        $this->unique_viewers = $value;
    }

    /**
     * Sets the views_by_page property value. The views_by_page property
     * @param PostStats_views_by_page|null $value Value to set for the views_by_page property.
    */
    public function setViewsByPage(?PostStats_views_by_page $value): void {
        $this->views_by_page = $value;
    }

}
