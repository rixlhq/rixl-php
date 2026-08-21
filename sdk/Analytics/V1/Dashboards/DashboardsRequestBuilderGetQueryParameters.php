<?php

namespace Rixl\Sdk\Analytics\V1\Dashboards;

/**
 * ListDashboards
*/
class DashboardsRequestBuilderGetQueryParameters 
{
    /**
     * @var int|null $page 
    */
    public ?int $page = null;
    
    /**
     * @QueryParameter("page_size")
     * @var int|null $pageSize 
    */
    public ?int $pageSize = null;
    
    /**
     * Instantiates a new DashboardsRequestBuilderGetQueryParameters and sets the default values.
     * @param int|null $page 
     * @param int|null $page_size 
    */
    public function __construct(?int $page = null, ?int $page_size = null) {
        $this->page = $page;
        $this->pageSize = $page_size;
    }

}
