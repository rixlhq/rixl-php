<?php

namespace Rixl\Sdk\Auth\V1\Organizations\Item\Domain;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class DomainPostRequestBody implements Parsable 
{
    /**
     * @var string|null $domain The domain property
    */
    private ?string $domain = null;
    
    /**
     * @var DomainPostRequestBody_user|null $user The user property
    */
    private ?DomainPostRequestBody_user $user = null;
    
    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return DomainPostRequestBody
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): DomainPostRequestBody {
        return new DomainPostRequestBody();
    }

    /**
     * Gets the domain property value. The domain property
     * @return string|null
    */
    public function getDomain(): ?string {
        return $this->domain;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'domain' => fn(ParseNode $n) => $o->setDomain($n->getStringValue()),
            'user' => fn(ParseNode $n) => $o->setUser($n->getObjectValue([DomainPostRequestBody_user::class, 'createFromDiscriminatorValue'])),
        ];
    }

    /**
     * Gets the user property value. The user property
     * @return DomainPostRequestBody_user|null
    */
    public function getUser(): ?DomainPostRequestBody_user {
        return $this->user;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('domain', $this->getDomain());
        $writer->writeObjectValue('user', $this->getUser());
    }

    /**
     * Sets the domain property value. The domain property
     * @param string|null $value Value to set for the domain property.
    */
    public function setDomain(?string $value): void {
        $this->domain = $value;
    }

    /**
     * Sets the user property value. The user property
     * @param DomainPostRequestBody_user|null $value Value to set for the user property.
    */
    public function setUser(?DomainPostRequestBody_user $value): void {
        $this->user = $value;
    }

}
