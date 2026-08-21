<?php

namespace Rixl\Sdk\Models\Analytics\V1;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class DeleteWidgetResponse implements Parsable 
{
    /**
     * @var int|null $dashboard_revision The dashboard_revision property
    */
    private ?int $dashboard_revision = null;
    
    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return DeleteWidgetResponse
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): DeleteWidgetResponse {
        return new DeleteWidgetResponse();
    }

    /**
     * Gets the dashboard_revision property value. The dashboard_revision property
     * @return int|null
    */
    public function getDashboardRevision(): ?int {
        return $this->dashboard_revision;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'dashboard_revision' => fn(ParseNode $n) => $o->setDashboardRevision($n->getIntegerValue()),
        ];
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeIntegerValue('dashboard_revision', $this->getDashboardRevision());
    }

    /**
     * Sets the dashboard_revision property value. The dashboard_revision property
     * @param int|null $value Value to set for the dashboard_revision property.
    */
    public function setDashboardRevision(?int $value): void {
        $this->dashboard_revision = $value;
    }

}
