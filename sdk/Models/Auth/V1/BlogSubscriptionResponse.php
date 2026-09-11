<?php

namespace Rixl\Sdk\Models\Auth\V1;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class BlogSubscriptionResponse implements Parsable 
{
    /**
     * @var bool|null $subscribed The subscribed property
    */
    private ?bool $subscribed = null;
    
    /**
     * @var DateTime|null $subscribed_at The subscribed_at property
    */
    private ?DateTime $subscribed_at = null;
    
    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return BlogSubscriptionResponse
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): BlogSubscriptionResponse {
        return new BlogSubscriptionResponse();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'subscribed' => fn(ParseNode $n) => $o->setSubscribed($n->getBooleanValue()),
            'subscribed_at' => fn(ParseNode $n) => $o->setSubscribedAt($n->getDateTimeValue()),
        ];
    }

    /**
     * Gets the subscribed property value. The subscribed property
     * @return bool|null
    */
    public function getSubscribed(): ?bool {
        return $this->subscribed;
    }

    /**
     * Gets the subscribed_at property value. The subscribed_at property
     * @return DateTime|null
    */
    public function getSubscribedAt(): ?DateTime {
        return $this->subscribed_at;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeBooleanValue('subscribed', $this->getSubscribed());
        $writer->writeDateTimeValue('subscribed_at', $this->getSubscribedAt());
    }

    /**
     * Sets the subscribed property value. The subscribed property
     * @param bool|null $value Value to set for the subscribed property.
    */
    public function setSubscribed(?bool $value): void {
        $this->subscribed = $value;
    }

    /**
     * Sets the subscribed_at property value. The subscribed_at property
     * @param DateTime|null $value Value to set for the subscribed_at property.
    */
    public function setSubscribedAt(?DateTime $value): void {
        $this->subscribed_at = $value;
    }

}
