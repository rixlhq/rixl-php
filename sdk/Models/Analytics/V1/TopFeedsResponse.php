<?php

namespace Rixl\Sdk\Models\Analytics\V1;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class TopFeedsResponse implements Parsable 
{
    /**
     * @var array<FeedStats>|null $feeds The feeds property
    */
    private ?array $feeds = null;
    
    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return TopFeedsResponse
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): TopFeedsResponse {
        return new TopFeedsResponse();
    }

    /**
     * Gets the feeds property value. The feeds property
     * @return array<FeedStats>|null
    */
    public function getFeeds(): ?array {
        return $this->feeds;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'feeds' => fn(ParseNode $n) => $o->setFeeds($n->getCollectionOfObjectValues([FeedStats::class, 'createFromDiscriminatorValue'])),
        ];
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeCollectionOfObjectValues('feeds', $this->getFeeds());
    }

    /**
     * Sets the feeds property value. The feeds property
     * @param array<FeedStats>|null $value Value to set for the feeds property.
    */
    public function setFeeds(?array $value): void {
        $this->feeds = $value;
    }

}
