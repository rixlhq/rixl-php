<?php

namespace Rixl\Sdk\Models\Analytics\V1;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class ListDashboardsResponse implements Parsable 
{
    /**
     * @var array<Dashboard>|null $dashboards The dashboards property
    */
    private ?array $dashboards = null;
    
    /**
     * @var int|null $page The page property
    */
    private ?int $page = null;
    
    /**
     * @var int|null $page_size The page_size property
    */
    private ?int $page_size = null;
    
    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return ListDashboardsResponse
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): ListDashboardsResponse {
        return new ListDashboardsResponse();
    }

    /**
     * Gets the dashboards property value. The dashboards property
     * @return array<Dashboard>|null
    */
    public function getDashboards(): ?array {
        return $this->dashboards;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'dashboards' => fn(ParseNode $n) => $o->setDashboards($n->getCollectionOfObjectValues([Dashboard::class, 'createFromDiscriminatorValue'])),
            'page' => fn(ParseNode $n) => $o->setPage($n->getIntegerValue()),
            'page_size' => fn(ParseNode $n) => $o->setPageSize($n->getIntegerValue()),
        ];
    }

    /**
     * Gets the page property value. The page property
     * @return int|null
    */
    public function getPage(): ?int {
        return $this->page;
    }

    /**
     * Gets the page_size property value. The page_size property
     * @return int|null
    */
    public function getPageSize(): ?int {
        return $this->page_size;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeCollectionOfObjectValues('dashboards', $this->getDashboards());
        $writer->writeIntegerValue('page', $this->getPage());
        $writer->writeIntegerValue('page_size', $this->getPageSize());
    }

    /**
     * Sets the dashboards property value. The dashboards property
     * @param array<Dashboard>|null $value Value to set for the dashboards property.
    */
    public function setDashboards(?array $value): void {
        $this->dashboards = $value;
    }

    /**
     * Sets the page property value. The page property
     * @param int|null $value Value to set for the page property.
    */
    public function setPage(?int $value): void {
        $this->page = $value;
    }

    /**
     * Sets the page_size property value. The page_size property
     * @param int|null $value Value to set for the page_size property.
    */
    public function setPageSize(?int $value): void {
        $this->page_size = $value;
    }

}
