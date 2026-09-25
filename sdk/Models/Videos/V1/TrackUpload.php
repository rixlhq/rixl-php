<?php

namespace Rixl\Sdk\Models\Videos\V1;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class TrackUpload implements Parsable 
{
    /**
     * @var DateTime|null $expires_at The expires_at property
    */
    private ?DateTime $expires_at = null;
    
    /**
     * @var array<TrackUploadTarget>|null $targets The targets property
    */
    private ?array $targets = null;
    
    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return TrackUpload
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): TrackUpload {
        return new TrackUpload();
    }

    /**
     * Gets the expires_at property value. The expires_at property
     * @return DateTime|null
    */
    public function getExpiresAt(): ?DateTime {
        return $this->expires_at;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'expires_at' => fn(ParseNode $n) => $o->setExpiresAt($n->getDateTimeValue()),
            'targets' => fn(ParseNode $n) => $o->setTargets($n->getCollectionOfObjectValues([TrackUploadTarget::class, 'createFromDiscriminatorValue'])),
        ];
    }

    /**
     * Gets the targets property value. The targets property
     * @return array<TrackUploadTarget>|null
    */
    public function getTargets(): ?array {
        return $this->targets;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeDateTimeValue('expires_at', $this->getExpiresAt());
        $writer->writeCollectionOfObjectValues('targets', $this->getTargets());
    }

    /**
     * Sets the expires_at property value. The expires_at property
     * @param DateTime|null $value Value to set for the expires_at property.
    */
    public function setExpiresAt(?DateTime $value): void {
        $this->expires_at = $value;
    }

    /**
     * Sets the targets property value. The targets property
     * @param array<TrackUploadTarget>|null $value Value to set for the targets property.
    */
    public function setTargets(?array $value): void {
        $this->targets = $value;
    }

}
