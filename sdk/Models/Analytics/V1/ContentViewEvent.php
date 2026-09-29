<?php

namespace Rixl\Sdk\Models\Analytics\V1;

use DateInterval;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Rixl\Sdk\Models\Analyticscommon\V1\MediaType;
use Rixl\Sdk\Models\Analyticscommon\V1\VideoQuality;

class ContentViewEvent implements Parsable 
{
    /**
     * @var string|null $audio_language The audio_language property
    */
    private ?string $audio_language = null;
    
    /**
     * @var string|null $content_id The content_id property
    */
    private ?string $content_id = null;
    
    /**
     * @var MediaType|null $content_type enum.defined_only = true
    */
    private ?MediaType $content_type = null;
    
    /**
     * @var string|null $country The country property
    */
    private ?string $country = null;
    
    /**
     * @var string|null $device_id The device_id property
    */
    private ?string $device_id = null;
    
    /**
     * @var string|null $feed_id The feed_id property
    */
    private ?string $feed_id = null;
    
    /**
     * @var ContentViewEvent_page|null $page The page property
    */
    private ?ContentViewEvent_page $page = null;
    
    /**
     * @var string|null $post_id The post_id property
    */
    private ?string $post_id = null;
    
    /**
     * @var VideoQuality|null $quality enum.defined_only = true
    */
    private ?VideoQuality $quality = null;
    
    /**
     * @var array<Segment>|null $segments The segments property
    */
    private ?array $segments = null;
    
    /**
     * @var string|null $subtitle_language The subtitle_language property
    */
    private ?string $subtitle_language = null;
    
    /**
     * @var DateInterval|null $video_position_ms The video_position_ms property
    */
    private ?DateInterval $video_position_ms = null;
    
    /**
     * @var DateInterval|null $video_total_duration_ms The video_total_duration_ms property
    */
    private ?DateInterval $video_total_duration_ms = null;
    
    /**
     * @var ContentViewEvent_view_type|null $view_type The view_type property
    */
    private ?ContentViewEvent_view_type $view_type = null;
    
    /**
     * @var DateInterval|null $watch_duration_ms The watch_duration_ms property
    */
    private ?DateInterval $watch_duration_ms = null;
    
    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return ContentViewEvent
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): ContentViewEvent {
        return new ContentViewEvent();
    }

    /**
     * Gets the audio_language property value. The audio_language property
     * @return string|null
    */
    public function getAudioLanguage(): ?string {
        return $this->audio_language;
    }

    /**
     * Gets the content_id property value. The content_id property
     * @return string|null
    */
    public function getContentId(): ?string {
        return $this->content_id;
    }

    /**
     * Gets the content_type property value. enum.defined_only = true
     * @return MediaType|null
    */
    public function getContentType(): ?MediaType {
        return $this->content_type;
    }

    /**
     * Gets the country property value. The country property
     * @return string|null
    */
    public function getCountry(): ?string {
        return $this->country;
    }

    /**
     * Gets the device_id property value. The device_id property
     * @return string|null
    */
    public function getDeviceId(): ?string {
        return $this->device_id;
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
            'audio_language' => fn(ParseNode $n) => $o->setAudioLanguage($n->getStringValue()),
            'content_id' => fn(ParseNode $n) => $o->setContentId($n->getStringValue()),
            'content_type' => fn(ParseNode $n) => $o->setContentType($n->getEnumValue(MediaType::class)),
            'country' => fn(ParseNode $n) => $o->setCountry($n->getStringValue()),
            'device_id' => fn(ParseNode $n) => $o->setDeviceId($n->getStringValue()),
            'feed_id' => fn(ParseNode $n) => $o->setFeedId($n->getStringValue()),
            'page' => fn(ParseNode $n) => $o->setPage($n->getEnumValue(ContentViewEvent_page::class)),
            'post_id' => fn(ParseNode $n) => $o->setPostId($n->getStringValue()),
            'quality' => fn(ParseNode $n) => $o->setQuality($n->getEnumValue(VideoQuality::class)),
            'segments' => fn(ParseNode $n) => $o->setSegments($n->getCollectionOfObjectValues([Segment::class, 'createFromDiscriminatorValue'])),
            'subtitle_language' => fn(ParseNode $n) => $o->setSubtitleLanguage($n->getStringValue()),
            'video_position_ms' => fn(ParseNode $n) => $o->setVideoPositionMs($n->getDateIntervalValue()),
            'video_total_duration_ms' => fn(ParseNode $n) => $o->setVideoTotalDurationMs($n->getDateIntervalValue()),
            'view_type' => fn(ParseNode $n) => $o->setViewType($n->getEnumValue(ContentViewEvent_view_type::class)),
            'watch_duration_ms' => fn(ParseNode $n) => $o->setWatchDurationMs($n->getDateIntervalValue()),
        ];
    }

    /**
     * Gets the page property value. The page property
     * @return ContentViewEvent_page|null
    */
    public function getPage(): ?ContentViewEvent_page {
        return $this->page;
    }

    /**
     * Gets the post_id property value. The post_id property
     * @return string|null
    */
    public function getPostId(): ?string {
        return $this->post_id;
    }

    /**
     * Gets the quality property value. enum.defined_only = true
     * @return VideoQuality|null
    */
    public function getQuality(): ?VideoQuality {
        return $this->quality;
    }

    /**
     * Gets the segments property value. The segments property
     * @return array<Segment>|null
    */
    public function getSegments(): ?array {
        return $this->segments;
    }

    /**
     * Gets the subtitle_language property value. The subtitle_language property
     * @return string|null
    */
    public function getSubtitleLanguage(): ?string {
        return $this->subtitle_language;
    }

    /**
     * Gets the video_position_ms property value. The video_position_ms property
     * @return DateInterval|null
    */
    public function getVideoPositionMs(): ?DateInterval {
        return $this->video_position_ms;
    }

    /**
     * Gets the video_total_duration_ms property value. The video_total_duration_ms property
     * @return DateInterval|null
    */
    public function getVideoTotalDurationMs(): ?DateInterval {
        return $this->video_total_duration_ms;
    }

    /**
     * Gets the view_type property value. The view_type property
     * @return ContentViewEvent_view_type|null
    */
    public function getViewType(): ?ContentViewEvent_view_type {
        return $this->view_type;
    }

    /**
     * Gets the watch_duration_ms property value. The watch_duration_ms property
     * @return DateInterval|null
    */
    public function getWatchDurationMs(): ?DateInterval {
        return $this->watch_duration_ms;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('audio_language', $this->getAudioLanguage());
        $writer->writeStringValue('content_id', $this->getContentId());
        $writer->writeEnumValue('content_type', $this->getContentType());
        $writer->writeStringValue('country', $this->getCountry());
        $writer->writeStringValue('device_id', $this->getDeviceId());
        $writer->writeStringValue('feed_id', $this->getFeedId());
        $writer->writeEnumValue('page', $this->getPage());
        $writer->writeStringValue('post_id', $this->getPostId());
        $writer->writeEnumValue('quality', $this->getQuality());
        $writer->writeCollectionOfObjectValues('segments', $this->getSegments());
        $writer->writeStringValue('subtitle_language', $this->getSubtitleLanguage());
        $writer->writeDateIntervalValue('video_position_ms', $this->getVideoPositionMs());
        $writer->writeDateIntervalValue('video_total_duration_ms', $this->getVideoTotalDurationMs());
        $writer->writeEnumValue('view_type', $this->getViewType());
        $writer->writeDateIntervalValue('watch_duration_ms', $this->getWatchDurationMs());
    }

    /**
     * Sets the audio_language property value. The audio_language property
     * @param string|null $value Value to set for the audio_language property.
    */
    public function setAudioLanguage(?string $value): void {
        $this->audio_language = $value;
    }

    /**
     * Sets the content_id property value. The content_id property
     * @param string|null $value Value to set for the content_id property.
    */
    public function setContentId(?string $value): void {
        $this->content_id = $value;
    }

    /**
     * Sets the content_type property value. enum.defined_only = true
     * @param MediaType|null $value Value to set for the content_type property.
    */
    public function setContentType(?MediaType $value): void {
        $this->content_type = $value;
    }

    /**
     * Sets the country property value. The country property
     * @param string|null $value Value to set for the country property.
    */
    public function setCountry(?string $value): void {
        $this->country = $value;
    }

    /**
     * Sets the device_id property value. The device_id property
     * @param string|null $value Value to set for the device_id property.
    */
    public function setDeviceId(?string $value): void {
        $this->device_id = $value;
    }

    /**
     * Sets the feed_id property value. The feed_id property
     * @param string|null $value Value to set for the feed_id property.
    */
    public function setFeedId(?string $value): void {
        $this->feed_id = $value;
    }

    /**
     * Sets the page property value. The page property
     * @param ContentViewEvent_page|null $value Value to set for the page property.
    */
    public function setPage(?ContentViewEvent_page $value): void {
        $this->page = $value;
    }

    /**
     * Sets the post_id property value. The post_id property
     * @param string|null $value Value to set for the post_id property.
    */
    public function setPostId(?string $value): void {
        $this->post_id = $value;
    }

    /**
     * Sets the quality property value. enum.defined_only = true
     * @param VideoQuality|null $value Value to set for the quality property.
    */
    public function setQuality(?VideoQuality $value): void {
        $this->quality = $value;
    }

    /**
     * Sets the segments property value. The segments property
     * @param array<Segment>|null $value Value to set for the segments property.
    */
    public function setSegments(?array $value): void {
        $this->segments = $value;
    }

    /**
     * Sets the subtitle_language property value. The subtitle_language property
     * @param string|null $value Value to set for the subtitle_language property.
    */
    public function setSubtitleLanguage(?string $value): void {
        $this->subtitle_language = $value;
    }

    /**
     * Sets the video_position_ms property value. The video_position_ms property
     * @param DateInterval|null $value Value to set for the video_position_ms property.
    */
    public function setVideoPositionMs(?DateInterval $value): void {
        $this->video_position_ms = $value;
    }

    /**
     * Sets the video_total_duration_ms property value. The video_total_duration_ms property
     * @param DateInterval|null $value Value to set for the video_total_duration_ms property.
    */
    public function setVideoTotalDurationMs(?DateInterval $value): void {
        $this->video_total_duration_ms = $value;
    }

    /**
     * Sets the view_type property value. The view_type property
     * @param ContentViewEvent_view_type|null $value Value to set for the view_type property.
    */
    public function setViewType(?ContentViewEvent_view_type $value): void {
        $this->view_type = $value;
    }

    /**
     * Sets the watch_duration_ms property value. The watch_duration_ms property
     * @param DateInterval|null $value Value to set for the watch_duration_ms property.
    */
    public function setWatchDurationMs(?DateInterval $value): void {
        $this->watch_duration_ms = $value;
    }

}
