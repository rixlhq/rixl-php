<?php

namespace Rixl\Sdk\Models\Analytics\V1;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class DashboardPoint implements Parsable 
{
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
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return DashboardPoint
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): DashboardPoint {
        return new DashboardPoint();
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
