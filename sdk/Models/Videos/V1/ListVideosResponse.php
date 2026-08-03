<?php

namespace Rixl\Sdk\Models\Videos\V1;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class ListVideosResponse implements Parsable 
{
    /**
     * @var int|null $limit Maximum number of items returned.
    */
    private ?int $limit = null;
    
    /**
     * @var int|null $offset Number of items skipped before this page.
    */
    private ?int $offset = null;
    
    /**
     * @var string|null $sort_direction The sort_direction property
    */
    private ?string $sort_direction = null;
    
    /**
     * @var string|null $sort_field The sort_field property
    */
    private ?string $sort_field = null;
    
    /**
     * @var array<Video>|null $videos The videos property
    */
    private ?array $videos = null;
    
    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return ListVideosResponse
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): ListVideosResponse {
        return new ListVideosResponse();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'limit' => fn(ParseNode $n) => $o->setLimit($n->getIntegerValue()),
            'offset' => fn(ParseNode $n) => $o->setOffset($n->getIntegerValue()),
            'sort_direction' => fn(ParseNode $n) => $o->setSortDirection($n->getStringValue()),
            'sort_field' => fn(ParseNode $n) => $o->setSortField($n->getStringValue()),
            'videos' => fn(ParseNode $n) => $o->setVideos($n->getCollectionOfObjectValues([Video::class, 'createFromDiscriminatorValue'])),
        ];
    }

    /**
     * Gets the limit property value. Maximum number of items returned.
     * @return int|null
    */
    public function getLimit(): ?int {
        return $this->limit;
    }

    /**
     * Gets the offset property value. Number of items skipped before this page.
     * @return int|null
    */
    public function getOffset(): ?int {
        return $this->offset;
    }

    /**
     * Gets the sort_direction property value. The sort_direction property
     * @return string|null
    */
    public function getSortDirection(): ?string {
        return $this->sort_direction;
    }

    /**
     * Gets the sort_field property value. The sort_field property
     * @return string|null
    */
    public function getSortField(): ?string {
        return $this->sort_field;
    }

    /**
     * Gets the videos property value. The videos property
     * @return array<Video>|null
    */
    public function getVideos(): ?array {
        return $this->videos;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeIntegerValue('limit', $this->getLimit());
        $writer->writeIntegerValue('offset', $this->getOffset());
        $writer->writeStringValue('sort_direction', $this->getSortDirection());
        $writer->writeStringValue('sort_field', $this->getSortField());
        $writer->writeCollectionOfObjectValues('videos', $this->getVideos());
    }

    /**
     * Sets the limit property value. Maximum number of items returned.
     * @param int|null $value Value to set for the limit property.
    */
    public function setLimit(?int $value): void {
        $this->limit = $value;
    }

    /**
     * Sets the offset property value. Number of items skipped before this page.
     * @param int|null $value Value to set for the offset property.
    */
    public function setOffset(?int $value): void {
        $this->offset = $value;
    }

    /**
     * Sets the sort_direction property value. The sort_direction property
     * @param string|null $value Value to set for the sort_direction property.
    */
    public function setSortDirection(?string $value): void {
        $this->sort_direction = $value;
    }

    /**
     * Sets the sort_field property value. The sort_field property
     * @param string|null $value Value to set for the sort_field property.
    */
    public function setSortField(?string $value): void {
        $this->sort_field = $value;
    }

    /**
     * Sets the videos property value. The videos property
     * @param array<Video>|null $value Value to set for the videos property.
    */
    public function setVideos(?array $value): void {
        $this->videos = $value;
    }

}
