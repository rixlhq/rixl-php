<?php

namespace Rixl\Sdk\Models\Analyticsv1;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class DashboardPoint implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var string|null $timestamp The timestamp property
    */
    private ?string $timestamp = null;
    
    /**
     * @var int|null $unique_users The unique_users property
    */
    private ?int $unique_users = null;
    
    /**
     * @var int|null $views The views property
    */
    private ?int $views = null;
    
    /**
     * Instantiates a new DashboardPoint and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return DashboardPoint
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): DashboardPoint {
        return new DashboardPoint();
    }

    /**
     * Gets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        return $this->additionalData;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'timestamp' => fn(ParseNode $n) => $o->setTimestamp($n->getStringValue()),
            'unique_users' => fn(ParseNode $n) => $o->setUniqueUsers($n->getIntegerValue()),
            'views' => fn(ParseNode $n) => $o->setViews($n->getIntegerValue()),
        ];
    }

    /**
     * Gets the timestamp property value. The timestamp property
     * @return string|null
    */
    public function getTimestamp(): ?string {
        return $this->timestamp;
    }

    /**
     * Gets the unique_users property value. The unique_users property
     * @return int|null
    */
    public function getUniqueUsers(): ?int {
        return $this->unique_users;
    }

    /**
     * Gets the views property value. The views property
     * @return int|null
    */
    public function getViews(): ?int {
        return $this->views;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('timestamp', $this->getTimestamp());
        $writer->writeIntegerValue('unique_users', $this->getUniqueUsers());
        $writer->writeIntegerValue('views', $this->getViews());
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
     * Sets the timestamp property value. The timestamp property
     * @param string|null $value Value to set for the timestamp property.
    */
    public function setTimestamp(?string $value): void {
        $this->timestamp = $value;
    }

    /**
     * Sets the unique_users property value. The unique_users property
     * @param int|null $value Value to set for the unique_users property.
    */
    public function setUniqueUsers(?int $value): void {
        $this->unique_users = $value;
    }

    /**
     * Sets the views property value. The views property
     * @param int|null $value Value to set for the views property.
    */
    public function setViews(?int $value): void {
        $this->views = $value;
    }

}
