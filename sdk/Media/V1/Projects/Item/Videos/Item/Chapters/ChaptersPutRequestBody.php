<?php

namespace Rixl\Sdk\Media\V1\Projects\Item\Videos\Item\Chapters;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Rixl\Sdk\Models\Videos\V1\Chapter;

class ChaptersPutRequestBody implements Parsable 
{
    /**
     * @var array<Chapter>|null $chapters The chapters property
    */
    private ?array $chapters = null;
    
    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return ChaptersPutRequestBody
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): ChaptersPutRequestBody {
        return new ChaptersPutRequestBody();
    }

    /**
     * Gets the chapters property value. The chapters property
     * @return array<Chapter>|null
    */
    public function getChapters(): ?array {
        return $this->chapters;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'chapters' => fn(ParseNode $n) => $o->setChapters($n->getCollectionOfObjectValues([Chapter::class, 'createFromDiscriminatorValue'])),
        ];
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeCollectionOfObjectValues('chapters', $this->getChapters());
    }

    /**
     * Sets the chapters property value. The chapters property
     * @param array<Chapter>|null $value Value to set for the chapters property.
    */
    public function setChapters(?array $value): void {
        $this->chapters = $value;
    }

}
