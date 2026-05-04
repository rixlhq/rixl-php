<?php

namespace Rixl\Sdk\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Rixl\Sdk\Models\Github_com_rixlhq_api_internal_videos_types\ChapterInput;

/**
 * Chapters array
*/
class UpdateChaptersRequest implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var array<ChapterInput>|null $chapters The chapters property
    */
    private ?array $chapters = null;
    
    /**
     * Instantiates a new UpdateChaptersRequest and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return UpdateChaptersRequest
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): UpdateChaptersRequest {
        return new UpdateChaptersRequest();
    }

    /**
     * Gets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        return $this->additionalData;
    }

    /**
     * Gets the chapters property value. The chapters property
     * @return array<ChapterInput>|null
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
            'chapters' => fn(ParseNode $n) => $o->setChapters($n->getCollectionOfObjectValues([ChapterInput::class, 'createFromDiscriminatorValue'])),
        ];
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeCollectionOfObjectValues('chapters', $this->getChapters());
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
     * Sets the chapters property value. The chapters property
     * @param array<ChapterInput>|null $value Value to set for the chapters property.
    */
    public function setChapters(?array $value): void {
        $this->chapters = $value;
    }

}
