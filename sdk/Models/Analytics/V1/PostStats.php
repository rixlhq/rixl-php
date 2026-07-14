<?php

namespace Rixl\Sdk\Models\Analytics\V1;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Rixl\Sdk\Models\Common\V1\MediaType;

class PostStats implements Parsable 
{
    /**
     * @var float|null $avgWatchTimeMs The avgWatchTimeMs property
    */
    private ?float $avgWatchTimeMs = null;
    
    /**
     * @var float|null $completionRate The completionRate property
    */
    private ?float $completionRate = null;
    
    /**
     * @var MediaType|null $contentType The contentType property
    */
    private ?MediaType $contentType = null;
    
    /**
     * @var string|null $feedId The feedId property
    */
    private ?string $feedId = null;
    
    /**
     * @var string|null $postId The postId property
    */
    private ?string $postId = null;
    
    /**
     * @var PostStats_viewsByPage|null $viewsByPage The viewsByPage property
    */
    private ?PostStats_viewsByPage $viewsByPage = null;
    
    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return PostStats
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): PostStats {
        return new PostStats();
    }

    /**
     * Gets the avgWatchTimeMs property value. The avgWatchTimeMs property
     * @return float|null
    */
    public function getAvgWatchTimeMs(): ?float {
        return $this->avgWatchTimeMs;
    }

    /**
     * Gets the completionRate property value. The completionRate property
     * @return float|null
    */
    public function getCompletionRate(): ?float {
        return $this->completionRate;
    }

    /**
     * Gets the contentType property value. The contentType property
     * @return MediaType|null
    */
    public function getContentType(): ?MediaType {
        return $this->contentType;
    }

    /**
     * Gets the feedId property value. The feedId property
     * @return string|null
    */
    public function getFeedId(): ?string {
        return $this->feedId;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'avgWatchTimeMs' => fn(ParseNode $n) => $o->setAvgWatchTimeMs($n->getFloatValue()),
            'completionRate' => fn(ParseNode $n) => $o->setCompletionRate($n->getFloatValue()),
            'contentType' => fn(ParseNode $n) => $o->setContentType($n->getEnumValue(MediaType::class)),
            'feedId' => fn(ParseNode $n) => $o->setFeedId($n->getStringValue()),
            'postId' => fn(ParseNode $n) => $o->setPostId($n->getStringValue()),
            'viewsByPage' => fn(ParseNode $n) => $o->setViewsByPage($n->getObjectValue([PostStats_viewsByPage::class, 'createFromDiscriminatorValue'])),
        ];
    }

    /**
     * Gets the postId property value. The postId property
     * @return string|null
    */
    public function getPostId(): ?string {
        return $this->postId;
    }

    /**
     * Gets the viewsByPage property value. The viewsByPage property
     * @return PostStats_viewsByPage|null
    */
    public function getViewsByPage(): ?PostStats_viewsByPage {
        return $this->viewsByPage;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeFloatValue('avgWatchTimeMs', $this->getAvgWatchTimeMs());
        $writer->writeFloatValue('completionRate', $this->getCompletionRate());
        $writer->writeEnumValue('contentType', $this->getContentType());
        $writer->writeStringValue('feedId', $this->getFeedId());
        $writer->writeStringValue('postId', $this->getPostId());
        $writer->writeObjectValue('viewsByPage', $this->getViewsByPage());
    }

    /**
     * Sets the avgWatchTimeMs property value. The avgWatchTimeMs property
     * @param float|null $value Value to set for the avgWatchTimeMs property.
    */
    public function setAvgWatchTimeMs(?float $value): void {
        $this->avgWatchTimeMs = $value;
    }

    /**
     * Sets the completionRate property value. The completionRate property
     * @param float|null $value Value to set for the completionRate property.
    */
    public function setCompletionRate(?float $value): void {
        $this->completionRate = $value;
    }

    /**
     * Sets the contentType property value. The contentType property
     * @param MediaType|null $value Value to set for the contentType property.
    */
    public function setContentType(?MediaType $value): void {
        $this->contentType = $value;
    }

    /**
     * Sets the feedId property value. The feedId property
     * @param string|null $value Value to set for the feedId property.
    */
    public function setFeedId(?string $value): void {
        $this->feedId = $value;
    }

    /**
     * Sets the postId property value. The postId property
     * @param string|null $value Value to set for the postId property.
    */
    public function setPostId(?string $value): void {
        $this->postId = $value;
    }

    /**
     * Sets the viewsByPage property value. The viewsByPage property
     * @param PostStats_viewsByPage|null $value Value to set for the viewsByPage property.
    */
    public function setViewsByPage(?PostStats_viewsByPage $value): void {
        $this->viewsByPage = $value;
    }

}
