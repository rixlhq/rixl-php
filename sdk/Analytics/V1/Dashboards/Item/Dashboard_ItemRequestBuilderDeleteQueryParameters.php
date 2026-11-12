<?php

namespace Rixl\Sdk\Analytics\V1\Dashboards\Item;

/**
 * DeleteDashboard
*/
class Dashboard_ItemRequestBuilderDeleteQueryParameters 
{
    /**
     * @QueryParameter("expected_revision")
     * @var int|null $expectedRevision 
    */
    public ?int $expectedRevision = null;
    
    /**
     * Instantiates a new Dashboard_ItemRequestBuilderDeleteQueryParameters and sets the default values.
     * @param int|null $expected_revision 
    */
    public function __construct(?int $expected_revision = null) {
        $this->expectedRevision = $expected_revision;
    }

}
