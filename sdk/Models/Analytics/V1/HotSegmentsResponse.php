<?php

namespace Rixl\Sdk\Models\Analytics\V1;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class HotSegmentsResponse implements Parsable 
{
    /**
     * @var array<HotSegment>|null $segments The segments property
    */
    private ?array $segments = null;
    
    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return HotSegmentsResponse
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): HotSegmentsResponse {
        return new HotSegmentsResponse();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'segments' => fn(ParseNode $n) => $o->setSegments($n->getCollectionOfObjectValues([HotSegment::class, 'createFromDiscriminatorValue'])),
        ];
    }

    /**
     * Gets the segments property value. The segments property
     * @return array<HotSegment>|null
    */
    public function getSegments(): ?array {
        return $this->segments;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeCollectionOfObjectValues('segments', $this->getSegments());
    }

    /**
     * Sets the segments property value. The segments property
     * @param array<HotSegment>|null $value Value to set for the segments property.
    */
    public function setSegments(?array $value): void {
        $this->segments = $value;
    }

}
