<?php

namespace Rixl\Sdk\Models\Auth\V1;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Rixl\Sdk\Models\Auth\V1\UserDeletionPlanEntry\UserDeletionPlanEntry;

class GetUserDeletionPreviewResponse implements Parsable 
{
    /**
     * @var array<UserDeletionPlanEntry>|null $entries The entries property
    */
    private ?array $entries = null;
    
    /**
     * @var string|null $next_page_token The next_page_token property
    */
    private ?string $next_page_token = null;
    
    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return GetUserDeletionPreviewResponse
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): GetUserDeletionPreviewResponse {
        return new GetUserDeletionPreviewResponse();
    }

    /**
     * Gets the entries property value. The entries property
     * @return array<UserDeletionPlanEntry>|null
    */
    public function getEntries(): ?array {
        return $this->entries;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'entries' => fn(ParseNode $n) => $o->setEntries($n->getCollectionOfObjectValues([UserDeletionPlanEntry::class, 'createFromDiscriminatorValue'])),
            'next_page_token' => fn(ParseNode $n) => $o->setNextPageToken($n->getStringValue()),
        ];
    }

    /**
     * Gets the next_page_token property value. The next_page_token property
     * @return string|null
    */
    public function getNextPageToken(): ?string {
        return $this->next_page_token;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeCollectionOfObjectValues('entries', $this->getEntries());
        $writer->writeStringValue('next_page_token', $this->getNextPageToken());
    }

    /**
     * Sets the entries property value. The entries property
     * @param array<UserDeletionPlanEntry>|null $value Value to set for the entries property.
    */
    public function setEntries(?array $value): void {
        $this->entries = $value;
    }

    /**
     * Sets the next_page_token property value. The next_page_token property
     * @param string|null $value Value to set for the next_page_token property.
    */
    public function setNextPageToken(?string $value): void {
        $this->next_page_token = $value;
    }

}
