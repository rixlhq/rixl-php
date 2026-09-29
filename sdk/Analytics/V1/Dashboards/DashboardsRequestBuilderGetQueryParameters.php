<?php

namespace Rixl\Sdk\Analytics\V1\Dashboards;

/**
 * ListDashboards
*/
class DashboardsRequestBuilderGetQueryParameters 
{
    /**
     * @var int|null $page The page query parameter.
    */
    public ?int $page = null;
    
    /**
     * @QueryParameter("page_size")
     * @var int|null $pageSize The page_size query parameter.
    */
    public ?int $pageSize = null;
    
    /**
     * Instantiates a new DashboardsRequestBuilderGetQueryParameters and sets the default values.
     * @param int|null $page The page query parameter.
     * @param int|null $page_size The page_size query parameter.
    */
    public function __construct(?int $page = null, ?int $page_size = null) {
        $this->page = $page;
        $this->pageSize = $page_size;
    }

}
