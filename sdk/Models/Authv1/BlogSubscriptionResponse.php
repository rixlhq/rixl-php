<?php

namespace Rixl\Sdk\Models\Authv1;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class BlogSubscriptionResponse implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var bool|null $subscribed The subscribed property
    */
    private ?bool $subscribed = null;
    
    /**
     * @var string|null $subscribed_at The subscribed_at property
    */
    private ?string $subscribed_at = null;
    
    /**
     * Instantiates a new BlogSubscriptionResponse and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return BlogSubscriptionResponse
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): BlogSubscriptionResponse {
        return new BlogSubscriptionResponse();
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
            'subscribed' => fn(ParseNode $n) => $o->setSubscribed($n->getBooleanValue()),
            'subscribed_at' => fn(ParseNode $n) => $o->setSubscribedAt($n->getStringValue()),
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
     * @return string|null
    */
    public function getSubscribedAt(): ?string {
        return $this->subscribed_at;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeBooleanValue('subscribed', $this->getSubscribed());
        $writer->writeStringValue('subscribed_at', $this->getSubscribedAt());
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
     * Sets the subscribed property value. The subscribed property
     * @param bool|null $value Value to set for the subscribed property.
    */
    public function setSubscribed(?bool $value): void {
        $this->subscribed = $value;
    }

    /**
     * Sets the subscribed_at property value. The subscribed_at property
     * @param string|null $value Value to set for the subscribed_at property.
    */
    public function setSubscribedAt(?string $value): void {
        $this->subscribed_at = $value;
    }

}
