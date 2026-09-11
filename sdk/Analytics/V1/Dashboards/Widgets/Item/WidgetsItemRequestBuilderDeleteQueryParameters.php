<?php

namespace Rixl\Sdk\Analytics\V1\Dashboards\Widgets\Item;

/**
 * DeleteWidget
*/
class WidgetsItemRequestBuilderDeleteQueryParameters 
{
    /**
     * @QueryParameter("expected_revision")
     * @var int|null $expectedRevision The expected_revision query parameter.
    */
    public ?int $expectedRevision = null;
    
    /**
     * Instantiates a new WidgetsItemRequestBuilderDeleteQueryParameters and sets the default values.
     * @param int|null $expected_revision The expected_revision query parameter.
    */
    public function __construct(?int $expected_revision = null) {
        $this->expectedRevision = $expected_revision;
    }

}
