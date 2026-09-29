<?php

namespace Rixl\Sdk\Models\Feeds\V1;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class ListFeedsResponse implements Parsable 
{
    /**
     * @var array<Feed>|null $feeds The feeds property
    */
    private ?array $feeds = null;
    
    /**
     * @var string|null $total The total property
    */
    private ?string $total = null;
    
    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return ListFeedsResponse
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): ListFeedsResponse {
        return new ListFeedsResponse();
    }

    /**
     * Gets the feeds property value. The feeds property
     * @return array<Feed>|null
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
            'feeds' => fn(ParseNode $n) => $o->setFeeds($n->getCollectionOfObjectValues([Feed::class, 'createFromDiscriminatorValue'])),
            'total' => fn(ParseNode $n) => $o->setTotal($n->getStringValue()),
        ];
    }

    /**
     * Gets the total property value. The total property
     * @return string|null
    */
    public function getTotal(): ?string {
        return $this->total;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeCollectionOfObjectValues('feeds', $this->getFeeds());
        $writer->writeStringValue('total', $this->getTotal());
    }

    /**
     * Sets the feeds property value. The feeds property
     * @param array<Feed>|null $value Value to set for the feeds property.
    */
    public function setFeeds(?array $value): void {
        $this->feeds = $value;
    }

    /**
     * Sets the total property value. The total property
     * @param string|null $value Value to set for the total property.
    */
    public function setTotal(?string $value): void {
        $this->total = $value;
    }

}
